<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Image;
use Session;
use App\admin;
use App\Florist;
use App\User;
use App\Orders;
use App\City;
use App\Products;
use DB;
use App\Occasion;
use Exception;
use Validator;
use Mail;
use App\Mail\NewOrderMail;
use App\Mail\StatusUpdateMail;
use App\Mail\NewShopMail;
use App\Mail\ContactMail;
use App\Mail\SubscribeMail;
use App;
use DateTime;

use App\Mail\InProcessOrder;
use App\Mail\OrderShipped;
use App\Notifications\updateStatus;
use RealRashid\SweetAlert\Facades\Alert;
use App\DeliveryAddress;
use App\OrdersProduct;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    //

    public function apiViewFlorists(){
        
        $allFlorists = Florist::where(['shop_of_id'=>0])->get();//0 is for admin 
  
        return response()->json($allFlorists, 200); 
        
    }

    public function ViewFlorist($id){
        
        $florist = Florist::find($id); 
  
        return response()->json($florist, 200); 
        
    }

    public function apiViewCategories(){
        
        $allCategories = Occasion::all(); 
  
        return response()->json($allCategories, 200); 
        
    }

    public function ViewCategory($id){
        
        $category = Occasion::find($id); 
  
        return response()->json($category, 200); 
        
    }

    // --------------products section

    public function ViewAllProducts(){
        
        $products = Products::all(); 
  
        return response()->json($products, 200); 
        
    }

    public function ViewProduct($id){
        
        $product = Products::find($id); 
  
        return response()->json($product, 200); 
        
    }
    
    public function FloristProducts($id){
        
        $products = Products::where(['florist_id'=>$id])->get();//0 is for admin 

        return response()->json($products, 200); 
        
    }

    public function homepage(){
        // $latest_florists = Florist::where(['shop_of_id'=>'0'])->orderBy('id', 'DESC')->take(10)->get();

        $getLatest_florists = Florist::where(['shop_of_id'=>'0'])->orderBy('id', 'DESC')->get();
        $latest_florists = [];
        
        // get latest florist
        foreach ($getLatest_florists as $key => $florist) {
            $floristProducts = Products::where('florist_id',$florist->id)->get();
            if (count($latest_florists) == 10 ) {
                break;
            }
            if (count($floristProducts) >= 5 ) {
                # code...
                // if ($key == 10 ) {
                //     # code...
                //     break;
                // }
                array_push($latest_florists,$florist);
            }

        }

        // $featured_florists = Florist::where(['featured_status'=>'1'])->get();

        $getFeatured_florists = Florist::where(['featured_status'=>'1'])->get();
        $featured_florists = [];
        // get featured florist
        foreach ($getFeatured_florists as $key => $florist) {
            $floristProducts = Products::where('florist_id',$florist->id)->get();
            if (count($floristProducts) >= 5 ) {
                # code...
                // if ($key == 10 ) {
                //     # code...
                //     break;
                // }
                array_push($featured_florists,$florist);
            }

        }
        return response()->json([
            'latestFlorists' => $latest_florists,
            'featuredFlorists' => $featured_florists,

        ], 200); 
        
    }

    public function store($id){
        $products = Products::where(['florist_id'=>$id])->get();
        $florist = Florist::find($id);
        $occasions = Occasion::get();
        $rating = DB::table('florist_rating')->where(['florist_id'=>$id])->get();
        $ratingCount = $rating->count();
        $floristRating = $rating->count() > 0 ? round($rating->sum('rating')/$rating->count(),2) : '0.0';
        $discounts = DB::table('product_discount')->get();    
        $working_hours = DB::table('working_hours')->where(['florist_id'=>$id])->orderBy('fromHour', 'asc')->get();
        
        return response()->json([
            'store' => $florist,
            'products' => $products,
            'occasions' => $occasions,
            'rating' => $rating,
            'ratingCount' => $ratingCount,
            'discounts' => $discounts,
            'working_hours' => $working_hours,

        ], 200); 
        
    }

    public function matchStore_old(){
        $allFlorists = Florist::get();
        $timetable = DB::table('timetable')->get();
        $ratings = [];
        $ratingsCounts = [];
        $currentDayName = 'Δευτέρα';
        $matchFlorists = [];
        foreach ($allFlorists as $key => $florist) {
            # code...

            $addressFrom = $florist->address;
            $addressTo = 'Ilioupoli, Greece';


            $origin = str_replace(' ', '+', $addressFrom);
            $destination = str_replace(' ', '+', $addressTo);
        

            $api = $this->file_get_content_curl("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4");
            $data = json_decode($api);
            

            // dd($data);
            if ($data != null) {
                # code...
                if ($data->status == "OK") {
                    # code...
                    // dd($data);
                    if ($data->rows[0]->elements[0]->status == 'OK') {
                        # code...
                        // dd($data);
                        $distance = ($data->rows[0]->elements[0]->distance->value / 1000);
                        // dd($distance);

                        if ($distance <= $florist->delivery_limit ) {
                            if ($florist->status == 1) {
                                if ($florist->admin == 2) {
                                    $timeCount = 0;
                                    foreach ($timetable as $key => $time) {
                                        # code...
                                        if ($timeCount == 1) {
                                            break;
                                        }
                                        if ($time->status == '1' && $time->day == $currentDayName && $time->florist_id == $florist->id ) {
                                            $timeCount = $timeCount + 1;
                                            
                                            array_push($matchFlorists,$florist);
                                            
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $rating = DB::table('florist_rating')->where(['florist_id'=>$florist->id])->get();
            $ratingCount = $rating->count();
            $floristRating = $rating->count() > 0 ? round($rating->sum('rating')/$rating->count(),2) : '0.0';
            Florist::where('id',$florist->id)->update(['rating'=>$floristRating,'ratingCount'=>$ratingCount]);
            
        }//end of foreach 
        // dd($matchFlorists);
        return response()->json($matchFlorists, 200);



    }// end of matchStore function

    public function matchStore3(Request $request){
        $data = $request->all();

        $allFlorists = Florist::get();
        $timetable = DB::table('timetable')->get();

        $ratings = [];
        $ratingsCounts = [];
        // $currentDayName = 'Δευτέρα';
        $matchFlorists = [];
        // $date = $data['date'];
        // $date = '19/09/2021';
        $userAddress = $data['address'];
        $userSelectedDay = $data['day'];

        // $userSelectedDay = date('l', strtotime($date));
        // // $userSelectedDay = 'Monday';
        // echo $userSelectedDay;
        

        $currentDayName = '';
        if ($userSelectedDay=='Friday') {
            $currentDayName = 'Παρασκευή';
        }else if ($userSelectedDay=='Monday') {
            $currentDayName = 'Δευτέρα';
        }else if ($userSelectedDay=='Tuesday') {
            $currentDayName = 'Τρίτη';
        }else if ($userSelectedDay=='Wednesday') {
            $currentDayName = 'Τετάρτη';
        }else if ($userSelectedDay=='Thursday') {
            $currentDayName = 'Πέμπτη';
        }else if ($userSelectedDay==='Saturday') {
            $currentDayName = 'Σάββατο';
        }else if ($userSelectedDay=='Sunday') {
            $currentDayName = 'Κυριακή';
        }
        // dd(date ('l'));
        $userDate = $data['date'];
        $today = date('d/m/Y');
        // date_default_timezone_set('America/Los_Angeles');
        $currentHours = $data['hours'];
        $addTwoHours = $currentHours+2;


        foreach ($allFlorists as $key => $florist) {
            # code...

            $addressFrom = $florist->address;
            $addressTo = $userAddress;
            // $addressTo = 'Ilioupoli, Greece';


            $origin = str_replace(' ', '+', $addressFrom);
            $destination = str_replace(' ', '+', $addressTo);
        

            // dd($origin);
            $api = $this->file_get_content_curl("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4");
            $data = json_decode($api);
            


            // dd($data);
            if ($data != null) {
                # code...
                if ($data->status == "OK") {
                    # code...
                    if ($data->rows[0]->elements[0]->status == 'OK') {
                        # code...
                        $distance = ($data->rows[0]->elements[0]->distance->value / 1000);

                        if ($distance <= $florist->delivery_limit ) {
                            if ($florist->status == 1) {
                                if ($florist->admin == 2) {
                                    $timeCount = 0;
                                    foreach ($timetable as $key => $time) {
                                        # code...
                                        if ($timeCount == 1) {
                                            break;
                                        }
                                        if ($time->status == '1' && $time->day == $currentDayName && $time->florist_id == $florist->id ) {

                                            if ($userDate == $today) {
                                                if ( $time->fromHour >= $addTwoHours) {
                                                    if ($timeCount === 1) {
                                                        break;
                                                    }
                                                    // dd('here');

                                                    $timeCount = $timeCount + 1;
                                                    array_push($matchFlorists,$florist);

                                                }
                                            }else{

                                                
                                                $timeCount = $timeCount + 1;
                                                
                                                array_push($matchFlorists,$florist);
                                                                                            
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            // end of match florist
            $rating = DB::table('florist_rating')->where(['florist_id'=>$florist->id])->get();
            $ratingCount = $rating->count();
            $floristRating = $rating->count() > 0 ? round($rating->sum('rating')/$rating->count(),2) : '0.0';
            Florist::where('id',$florist->id)->update(['rating'=>$floristRating,'ratingCount'=>$ratingCount]);
            
        }//end of foreach 
        return response()->json($matchFlorists, 200);



    }// end of matchStore function


    public function matchStore(Request $request){

        
            $data = $request->all();

            $allFlorists = Florist::get();
            $timetable = DB::table('timetable')->get();
            
            $date = strtotime('2021/09/19');
            $timestamp = strtotime('2009-10-22');
            // dd($date);
            // $userAddress = $data['address'];
            // $datetime = DateTime::createFromFormat('d/m/Y', strtotime('19/09/2021'));
            // dd($datetime->format('l'));
            // $userSelectedDay = date('l', $date);
            // dd($userSelectedDay);
            $ratings = [];
            $ratingsCounts = [];
            // $currentDayName = 'Δευτέρα';
            $matchFlorists = [];

            // $userSelectedDay = 'Monday';
            $userSelectedDay = $data['day'];

            $currentDayName = '';
            if ($userSelectedDay=='Friday') {
                $currentDayName = 'Παρασκευή';
            }else if ($userSelectedDay=='Monday') {
                $currentDayName = 'Δευτέρα';
            }else if ($userSelectedDay=='Tuesday') {
                $currentDayName = 'Τρίτη';
            }else if ($userSelectedDay=='Wednesday') {
                $currentDayName = 'Τετάρτη';
            }else if ($userSelectedDay=='Thursday') {
                $currentDayName = 'Πέμπτη';
            }else if ($userSelectedDay==='Saturday') {
                $currentDayName = 'Σάββατο';
            }else if ($userSelectedDay=='Sunday') {
                $currentDayName = 'Κυριακή';
            }
            // dd(date ('l'));
            // $userDate = '18-09-2021';
            $userDate = $data['date'];
            $today = date('d/m/Y');
            date_default_timezone_set('America/Los_Angeles');
            // date_default_timezone_set('MST');
            // dd(date_default_timezone_get());
            $currentHours = $data['hours'];
            $addTwoHours = $currentHours+2;
            // dd($currentHours);
            $latlong    =  $this->get_lat_long($data['address']); 
            // create a function with the name "get_lat_long" given as below
            $map = explode(',' ,$latlong);
            $userLat = $map[0];
            $userLong = $map[1];  


            foreach ($allFlorists as $key => $florist) {
                # code...

                $addressFrom = $florist->address;
                // $addressTo = 'Ilioupoli, Greece';
                $addressTo = $data['address'];



                $origin = str_replace(' ', '+', $addressFrom);
                $destination = str_replace(' ', '+', $addressTo);
            
                // $api = $this->file_get_content_curl("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4");
                // $data = json_decode($api);

                
                $lat1 = $florist->lat;
                $lon1 = $florist->lng;
                $lat2 = $userLat;
                $lon2 = $userLong;
                $unit = 'K';



                //Calculate distance from latitude and longitude
                $theta = $lon1 - $lon2;
                $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                $dist = acos($dist);
                $dist = rad2deg($dist);
                $miles = $dist * 60 * 1.1515;

                // $distance = ($miles * 1.609344).' km';
                $distance = ($miles * 1.609344);

                // dd($distance);
                // echo $florist->name.' : '. $distance.'<br>';
                

                // dd($data);
                // if ($data != null) {
                //     # code...
                //     if ($data->status == "OK") {
                //         # code...
                //         // dd($data);
                //         if ($data->rows[0]->elements[0]->status == 'OK') {
                //             # code...
                            // dd($data);
                            // $distance = ($data->rows[0]->elements[0]->distance->value / 1000);
                            // dd($distance);
                            // echo "distance :".$distance.'<br>';
                            // echo "delivery limit :".$florist->delivery_limit.'<br>';
                            // echo $florist->name.': delivery_limit :'. $florist->delivery_limit.'<br>';

                            if ($distance <= $florist->delivery_limit ) {
                                // echo "delivery limit pass ".'<br>';

                                if ($florist->status == 1) {
                                    // echo "status pass ".'<br>';

                                    if ($florist->admin == 2) {
                                        // echo "admin status pass ".'<br>';

                                        $timeCount = 0;
                                        foreach ($timetable as $key => $time) {
                                            # code...
                                            if ($timeCount == 1) {
                                                break;
                                            }
                                            if ($time->status == '1' && $time->day == $currentDayName && $time->florist_id == $florist->id ) {
                                                // echo "push in list ".'<br>';

                                                if ($userDate == $today) {
                                                    if ( $time->fromHour >= $addTwoHours) {
                                                        if ($timeCount === 1) {
                                                            break;
                                                        }
                                                        // dd('here');

                                                        $timeCount = $timeCount + 1;
                                                        $florist->distance = number_format($distance, 2, '.', '') ;
                                                        $floristProducts = Products::where('florist_id',$florist->id)->get();
                                                        if (count($floristProducts) >= 5 ) {
                                                            # code...
                                                            array_push($matchFlorists,$florist);
                                                        }

                                                    }
                                                }else{
                                                    // dd('not today');
                                                    
                                                    $timeCount = $timeCount + 1;
                                                    $florist->distance = number_format($distance, 2, '.', '');
                                                    // $florist->distance = (int)$distance;
                                                    $floristProducts = Products::where('florist_id',$florist->id)->get();
                                                    if (count($floristProducts) >= 5 ) {
                                                        # code...
                                                        array_push($matchFlorists,$florist);
                                                    }
                                                    // array_push($matchFlorists,$florist);
                                                                                                
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                //         }//status ok
                //     }//status ok
                // } //check data

                $rating = DB::table('florist_rating')->where(['florist_id'=>$florist->id])->get();
                $ratingCount = $rating->count();
                $floristRating = $rating->count() > 0 ? round($rating->sum('rating')/$rating->count(),2) : '0.0';
                Florist::where('id',$florist->id)->update(['rating'=>$floristRating,'ratingCount'=>$ratingCount]);
                
            }//end of foreach 
            // dd($matchFlorists);
            usort($matchFlorists, function($a, $b)
            {
                return strcmp($a->distance, $b->distance);
            });
            // dd($matchFlorists);
            // return view('beforePageLoadSearch')->with(compact('matchFlorists'));
            // return response()->json($matchFlorists, 200);
            return response()->json($matchFlorists, 200);


        
    }// end of matchStore function

    // function to get  the address
    public function get_lat_long($address){

        $address = str_replace(" ", "+", $address);
        $json = $this->file_get_content_curl("https://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4");
        $json = json_decode($json);

        $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
        $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
        return $lat.','.$long;
    }

    
    public function timeTable(Request $request){
        $data = $request->all();

        $timetable = DB::table('timetable')->where(['florist_id'=>$data['floristId']])->orderBy('fromHour', 'asc')->get();
        

        // $userSelectedDay = date('l', strtotime($date));
        // // $userSelectedDay = 'Monday';
        // echo $userSelectedDay;

        $userSelectedDay = $data['day'];
        
        $currentDayName = '';
        if ($userSelectedDay=='Friday') {
            $currentDayName = 'Παρασκευή';
        }else if ($userSelectedDay=='Monday') {
            $currentDayName = 'Δευτέρα';
        }else if ($userSelectedDay=='Tuesday') {
            $currentDayName = 'Τρίτη';
        }else if ($userSelectedDay=='Wednesday') {
            $currentDayName = 'Τετάρτη';
        }else if ($userSelectedDay=='Thursday') {
            $currentDayName = 'Πέμπτη';
        }else if ($userSelectedDay==='Saturday') {
            $currentDayName = 'Σάββατο';
        }else if ($userSelectedDay=='Sunday') {
            $currentDayName = 'Κυριακή';
        }
        // dd(date ('l'));
        $userDate = $data['date'];
        $today = date('d/m/Y');
        // date_default_timezone_set('America/Los_Angeles');
        $currentHours = $data['hours'];
        $addTwoHours = $currentHours+2;
        $matchTime = [];

        foreach ($timetable as $key => $time) {
            # code...
            if ($today == $userDate ) {
                # code...
                if ( $time->fromHour >= $addTwoHours ) {
                    # code...
                    if ($time->status== '1' && $time->day == $currentDayName) {
                        array_push($matchTime,$time);
                    }
                }
            }else{
                if ($time->status== '1' && $time->day == $currentDayName) {
                        array_push($matchTime,$time);
                    }
            }
        }

        return response()->json($matchTime, 200);


    }


    function file_get_content_curl($url) 
    {
        // Throw Error if the curl function does'nt exist.
        if (!function_exists('curl_init'))
        { 
            die('CURL is not installed!');
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    // place order

    public function placeOrder(Request $request){
        
        $data = $request->all();
        // if ($request->isMethod('post')) {
            
            // $shippingDetails = DeliveryAddress::where('user_email',$user_email)->first();
         
        // ------------------ start payment section-----

        // The POST URL and parameters

        $request =  'https://demo.vivapayments.com/api/orders';	// demo environment URL
        //$request =  'https://www.vivapayments.com/api/orders';	// production environment URL

        // Your merchant ID and API Key can be found in the 'Security' settings on your profile.
        $merchant_id = 'd02176cc-cd20-4843-9ae4-0b9d37779247';
        $api_key = '&zhAfc';

        //Set the Payment Amount
        $amount = $data['totalAmount'] * 100;	// Amount in cents
        if ($data['redeemAmount'] > 0 ) {
            
            $amount = ($data['totalAmount'] - $data['redeemAmount']) * 100;	// Amount in cents

        }else{

            $amount = $data['totalAmount'] * 100;	// Amount in cents

        }
        
            // dd($amount);
        //Set some optional parameters (Full list available here: https://developer.vivawallet.com/api-reference-guide/payment-api/#tag/Payments/paths/~1orders/post)
        $allow_recurring = 'true'; // If set to true, this flag will prompt the customer to accept recurring payments in the future.
        $request_lang = 'en-US'; //This will display the payment page in English (default language is Greek)
        $source = '9563'; // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.

        $postargs = 'Amount='.urlencode($amount).'&AllowRecurring='.$allow_recurring.'&RequestLang='.$request_lang.'&SourceCode='.$source;

        // Get the curl session object
        $session = curl_init($request);

        // Set the POST options.
        curl_setopt($session, CURLOPT_POST, true);
        curl_setopt($session, CURLOPT_POSTFIELDS, $postargs);
        curl_setopt($session, CURLOPT_HEADER, true);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($session, CURLOPT_USERPWD, $merchant_id.':'.$api_key);
        // curl_setopt($session, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');

        // Do the POST and then close the session
        $response = curl_exec($session);
        
        // Separate Header from Body
        $header_len = curl_getinfo($session, CURLINFO_HEADER_SIZE);
        $res_header = substr($response, 0, $header_len);
        $res_body =  substr($response, $header_len);

        curl_close($session);

        // Parse the JSON response
        try {
            if(is_object(json_decode($res_body))){
                $result_obj=json_decode($res_body);
            }else{
                preg_match('#^HTTP/1.(?:0|1) [\d]{3} (.*)$#m', $res_header, $match);
                        throw new Exception("API Call failed! The error was: ".trim($match[1]));
            }
        } catch( Exception $e ) {
            echo $e->getMessage();
        }

        if ($result_obj->ErrorCode==0){	//success when ErrorCode = 0
            $orderId = $result_obj->OrderCode;
            // echo 'Your Order Code is: <b>'. $orderId.'</b>';
            // echo '<br/><br/>';
            // echo 'To simulate a successful payment, use the 16-digit test credit card 5511070000000020, with a valid expiration date and 111 as CVV2.';
            // echo '</br/><a href="https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId.'" >Make Payment</a>';
            // $url = "https://demo.vivapayments.com/web/newtransaction.aspx?ref=".$orderId;
            return response()->json($orderId, 200);

            // return redirect('https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId);
            
            // return view('checkout')->with(compact('floristDetails','orderId'));
        }
        else{
            return response()->json(['error'=>$result_obj->ErrorText], 400);

            // echo 'The following error occured: ' . $result_obj->ErrorText;
        }

        // ----end payment section----------


            
            
        // }
        // dd('no run');
    }

    // ed place order

    // start checkout

    public function checkout(Request $request){
        
        $requestData = $request->all();
        
        $checkoutDetailsString = $requestData['checkoutDetails'];
        $data = json_decode($checkoutDetailsString, true);
        $cartString = $requestData['cart'];
        $cart = json_decode($cartString, true);
        // return response()->json($cart, 200);
        // return response()->json(['cart'=>$cart[0],'checkoutDetails' => $data], 200);

        // dd(Session::get('checkoutAddress'));
        // dd(Session::get('cart'));
        // if (Session::has('cart')) {

                $user_id = $data['userId'];
                $user_email = $data['senderEmail'];
            
            // // $data=$request->all();
            if ($data['couponCode'] == null || $data['couponCode'] == '' ) {
                $couponCode = "Not Used";
            }
            else{
                $couponCode = $data['couponCode'];

            }
            if ($data['couponAmount'] == null || $data['couponAmount'] == '' ) {
                $couponAmount = 0;
            }
            else{
                $couponAmount = $data['couponAmount'];
            }

            // dd(Session::get('address'));
        //-------------save order--
        $order = new Orders;
        $order->user_id = $user_id ?? '';

        $city = $data['city'];
        // $city = DB::connection()->getPdo()->quote(utf8_encode($city));
        // if (Session::has('checkoutAddress')) {
            
        $order->florist_id = $data['floristId'];
        $order->florist_name = $data['floristName'];
        $order->user_email = $user_email;
        $order->name = $data['recipName'];
        $order->address = $data['address'];
        
        $order->city = $city;
        $order->floor = $data['floor'];
        
        $order->pincode = $data['zipCode'] ?? '';
        $order->mobile = $data['recipMobile'];
        $order->doorbell = $data['doorbell'];
        $order->address_msg = $data['msg'];
        
        $order->sender = $data['sender'];
        $order->senderName = $data['senderName'];
        $order->optional_phone = $data['senderPhone']; //optional_phone === sender phone 
        $order->senderEmail = $data['senderEmail'];
        $order->company = '';
        
        $order->receiptOptions= $data['reciptOption'];
        $order->bussinessName= $data['bName'];
        $order->vat= $data['bVat'];
        $order->bussinessType= $data['bType'];
        $order->bussinessTex= $data['bOY'];
        $order->bussinessAddress= $data['bAddress'];
        $order->bussinessArea= $data['bArea'];
        $order->bussinessTk= $data['bTk'] ;
        $order->bussinessPhone= '';
        
        $order->country= $data['inviceMail'] ?? '';
        
        $order->coupon_code = $couponCode;
        $order->coupon_amount = $couponAmount;
        $order->order_status = "New";
        $order->payment_method = 'online';
        $order->grand_total = $data['totalAmount'] ?? '' ;
        $order->delivery_date = $data['deliveryDate'] ?? '' ;
        $order->delivery_time = $data['timeId'] ?? 'any' ;
        $timetable = DB::table('timetable')->where(['id'=> $data['timeId']])->first();
        if ($timetable == null) {
            $order->fromHour = 0; // shipping charges means kilometer limit
        }else{
            $order->fromHour = $timetable->fromHour;
        }
        $order->shipping_charges = $data['shippingFee'] ?? '0' ;
        
        $order->save();

        // dd('order save');
        // }

        $order_id = DB::getPdo()->lastinsertID();

        $orderNo = 'EB'.str_pad($order_id,5,'0',STR_PAD_LEFT) ?? '';
        Orders::where('id',$order_id)->update(['orderNo'=>$orderNo]);
        
        // send email
        
        // end send email

        $cartProducts = DB::table('cart')->where('user_email',$user_email)->get();
        // dd(Session::get('cart'));
        // if (Session::has('cart')) {
            # code...


            
            foreach ($cart as $product) {
                $cartPro = new OrdersProduct();
                $cartPro->order_id = $order_id??0;
                $cartPro->user_id = $user_id?? 0;
                $cartPro->product_id = $product['product']['id']??0;
                $cartPro->product_name =  $product['product']['name'] ??'';
                $cartPro->product_name_eng = $product['product']['name_eng']??'';
    
                $cartPro->store = $data['floristName']??'';
                $cartPro->product_price = $product['product']['price']??'';
                $cartPro->product_qty = $product['quantity']??'';
                $cartPro->gift = $product['gift']??'';
                $cartPro->gift_msg = $product['giftMsg']??'';
                $cartPro->comment = $product['comment']??'';
                $cartPro->save();
            }
        // }


        $florist = Florist::where('id',$data['floristId'])->first();

        // start give points

        
        // if (Auth::check()) {
        //     $totalAmount = Session::get('checkoutAddress')['total_amount'];
        //     $totalPoints = Auth::user()->points + $totalAmount ;
        //     User::where('id',Auth::user()->id)->update(['points'=>$totalPoints]);
        // }


        // end give points 

        // start balance transfer
        
            if ($florist->shipping_fee != null ) {
                # code...
                $totalAmount = $data['totalAmount'];
                
                $floristAmount = (86.98 / 100) * $totalAmount;
                $eBloomAmount = (13.02 / 100) * $totalAmount;


                $transferBalance = $floristAmount;
                $walletId = "223477412549";
                $targetWalletId = $florist->shipping_fee; //shipping_fee use as florist viva account id
                $url = "https://demo.vivapayments.com/api/wallets/".$walletId."/balancetransfer/".$targetWalletId;
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
                $headers = array(
                "Content-Type: application/json",
                "Authorization: Basic ZDAyMTc2Y2MtY2QyMC00ODQzLTlhZTQtMGI5ZDM3Nzc5MjQ3OiZ6aEFmYw==",
                );
                // Basic ZDAyMTc2Y2MtY2QyMC00ODQzLTlhZTQtMGI5ZDM3Nzc5MjQ3OiZ6aEFmYw==
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                // dd($curl);
                // dd($headers);
        
                $amount = $transferBalance * 100;
        
                $data = <<<DATA
                {
                "amount":$amount,
                "description": "Optional text to show on account statement",
                "saleTransactionId": "Optional text referencing the related sales transaction"
                }
                DATA;
        
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        
                //for debug only!
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                $resp = curl_exec($curl);
                // dd($resp);
                curl_close($curl);
                // var_dump($resp);
            }

        // end balance transfer

        

        $order = Orders::where('id',$order_id)->first();
        $florist = Florist::where('id',$order->florist_id)->first();
        $admin = admin::first();
        $products = Products::get();
        Mail::to($order->senderEmail??'user@gmail.com')->send(new InProcessOrder($florist,$order,$products));        
        
        Mail::to($admin->email??'user@gmail.com')->send(new NewOrderMail($florist,$order,$products));        
        Mail::to($florist->email??'user@gmail.com')->send(new NewOrderMail($florist,$order,$products));        
        //---------------end save order-----------
        
        
        // }else{
        //     return redirect('/welcome');
        // }


        return response()->json(['success'=>'Transection Done'], 200);

    }// end success method

    function testArray(Request $request){
        $data = $request->all();
        $checkoutDetailsString = $data['checkoutDetails'];
        $checkoutDetails = json_decode($checkoutDetailsString, true);
        $cartString = $data['cart'];
        $cart = json_decode($cartString, true);
        // dd($products);
        echo $checkoutDetails['userId'];
        return response()->json(['cart'=>$cart[0],'checkoutDetails' => $checkoutDetails], 200);

        foreach ($products as $key => $product) {
            # code...
            echo $product['name'].'<br>';
        }
    }

    // ed checkout

    // chage password
    public function changePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $old_pwd = User::where('id',$data['user_id'])->first();
            $current_pwd = $data['current_pass'];
            if(Hash::check($current_pwd,$old_pwd->password)){
                $new_pwd = bcrypt($data['new_password']);
                User::where('id',$data['user_id'])->update(['new_password'=>$new_pwd]);
                return response()->json(['success'=>'Password changed successfully'.$new_pwd], 200);
                // return redirect()->back()->with('flash_message_success','Password has been Updated Successfully!');
                return response()->json(['success'=>'Password changed successfully'], 200);
            
            }else{
                // return redirect()->back()->with('flash_message_error','Your current password in valid!');
                return response()->json(['error'=>'Your current password in-valid!'], 400);

            }
        }
        return redirect()->back();
    }
    public function changeProfile(Request $request){
    

        if ($request->isMethod('post')) {
            
            $data=$request->all();
            // dd($data);
            $user_id = $data['user_id'];
            $user = User::find($user_id);
            $user->email = $user->email;
            $user->name = $data['name'];
            // $user->address = $data['address'];
            // $user->city = $data['city'];
            // $user->state = $data['state'];
            // $user->pincode = $data['pincode'];
            $user->mobile = $data['mobile'];
            $user->save();
            // return redirect()->back()->with('flash_message_success','Profile has been Updated Successfully!');
            return response()->json(['success'=>'Profile has been Updated Successfully!'], 200);

            
        }

    }
    public function userDetails($email){
        
        $userDetails = User::where('email',$email)->first();
        
        return response()->json(['success' => $userDetails],200);


    }
    public function userOrders($id){
        $user_id = $id;
        $orders = Orders::with('orders')->where('user_id',$user_id)->orderBy('id','DESC')->get();
        $florists = [];

        foreach ($orders as  $order) {
            # code...
            $florist = Florist::where('id',$order->florist_id)->first();
            array_push($florists,$florist);
            
        }

        // dd($orders);
        // return view('order')->with(compact('orders'));
        // return response()->json($orders, 200);
        return response()->json([
            'orders' => $orders,
            'florists' => $florists,
        ], 200); 
        
    }

    public function userOrderDetails($order_id){
        
        $orderDetails = Orders::with('orders')->where('id',$order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id',$user_id)->first();
        $products = Products::get();
        $orderProducts = [];
        foreach ($orderDetails->orders as  $product) {
            # code...
            array_push($orderProducts,$product);
            
        }
        // return view('orderDetails')->with(compact('orderDetails','userDetails','products'));
        return response()->json([
            'order' => $orderDetails,
            'orderProducts' => $orderProducts,
            'products' => $products,
        ], 200); 

    }
    public function wishList($id){
        $wish_list = DB::table('wish_list')->where(['user_id'=>$id])->get();
        $florists = Florist::get();
        
        return response()->json([
            'wishList' => $wish_list,
            'florists' => $florists,
        ], 200); 
    }


}//ed cotroller
