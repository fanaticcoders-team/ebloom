<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banners;
use App\Category;
use App\Products;
use App\Occasion;
use App\Type;
use App\City;
use App\Florist;
use App\Event;
use Auth;
use Exception;
use Validator;
use DB;
use Session;
use App\admin;
use Mail;
use App\Mail\NewOrderMail;
use App\Mail\StatusUpdateMail;
use App\Mail\NewShopMail;
use App\Mail\ContactMail;
use App\Mail\SubscribeMail;
use RealRashid\SweetAlert\Facades\Alert;
use App;
use DateTime;

use App\Mail\InProcessOrder;
use App\Mail\OrderShipped;
use App\Notifications\updateStatus;

use App\User;

use App\DeliveryAddress;
use App\Orders;
use App\OrdersProduct;
use App\ShippingCharges;

class IndexController extends Controller
{
    public function getCities(Request $request){
        $data = $request->all();
        $name = $data['name'];
        $fieldName = $data['field_name'];
        $name = strtolower(trim($name));
        if (empty($fieldName)) {
            # code...
            $fieldName = 'name';
        }

        $cities = DB::table('cities')->select('city_name.*')->where('LOWER(city_name)','LIKE',"$name%")->limit(25)->get();
        return $cities;
    }

    public function eBloom(){

       

        Session::forget('cart');

        $products = Products::paginate(4);
        // $florists = Florist::where(['shop_of_id'=>'0'])->get();
        $florists = Florist::where(['shop_of_id'=>'0'])->get();

        $getLatest_florists = Florist::where(['shop_of_id'=>'0'])->orderBy('created_at', 'DESC')->get();
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
        $allFlorists = Florist::get();
        $types = Type::get();
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
        // $cities = City::get();
        $events = Event::get();
        $occasions = Occasion::get();

        $cities = ['Αθήνα','Θεσσαλονίκη','Πάτρα','Καλαμάτα','Ελευσίνα','Σπάρτη','Εύβοια','Κόρινθος','Κομοτηνή','Ιωάννινα','Λάρισα','Βόλος'];
        // $sessionOrders = orders::get();
        $sessionOrders = Orders::where(['showOrder'=>1])->get();

        Session::put('orders',$sessionOrders);
        // dd($products);
        return view('homepage')->with(compact('products','latest_florists','florists','types','cities','events','featured_florists','allFlorists','occasions'));
    }


    public function testeBloom(){

       

        Session::forget('cart');

        $products = Products::paginate(4);
        // $florists = Florist::where(['shop_of_id'=>'0'])->get();
        $florists = Florist::where(['shop_of_id'=>'0'])->get();

        $getLatest_florists = Florist::where(['shop_of_id'=>'0'])->orderBy('created_at', 'DESC')->get();
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
        $allFlorists = Florist::get();
        $types = Type::get();
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
        // $cities = City::get();
        $events = Event::get();
        $occasions = Occasion::get();

        $cities = ['Αθήνα','Θεσσαλονίκη','Πάτρα','Καλαμάτα','Ελευσίνα','Σπάρτη','Εύβοια','Κόρινθος','Κομοτηνή','Ιωάννινα','Λάρισα','Βόλος'];
        // $sessionOrders = orders::get();
        $sessionOrders = Orders::where(['showOrder'=>1])->get();

        Session::put('orders',$sessionOrders);
        // dd($products);
        return view('test-homepage')->with(compact('products','latest_florists','florists','types','cities','events','featured_florists','allFlorists','occasions'));
    }

    public function get_lat_long($address){

        $address = str_replace(" ", "+", $address);

        $json = $this->file_get_content_curl("https://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4");
        $json = json_decode($json);
        // dd($json);
        $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
        $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
        return $lat.','.$long;
    }

    public function eBloom2(){
        // dd(rand(3,100000));
        // dd(Session::get('address')['cityInGR']);
        // return redirect('https://stackoverflow.com/');
        $products = Products::paginate(4);
        // $florists = Florist::where(['shop_of_id'=>'0'])->get();
        $florists = Florist::where(['shop_of_id'=>'0'])->paginate(4);

        $types = Type::get();
        $cities = City::get();
        $events = Event::get();
        // dd($products);
        return view('eBloom')->with(compact('products','florists','types','cities','events'));
    }

    public function matchStore(){

        if (Session::has('address')) {
            # code...

            $products = Products::get();
            // $florists = Florist::where(['shop_of_id'=>'0','city' => Session::get('region')])->orWhere(['shop_of_id'=>'0','city_greece' => Session::get('region')])->get();
            // dd(Session::get('address'));

            $florists = Florist::where(['shop_of_id'=>0])->get();
            // dd($florists);

            $allFlorists = Florist::get();
            // $allFlorists = Florist::where('shop_of_id', 0)->get();
            $types = Type::get();
            $cities = City::get();
            $notMatch = 1;
            $ratings = [];
            $ratingsCounts = [];

            foreach ($allFlorists as $key => $florist) {
                # code...
                $rating = DB::table('florist_rating')->where(['florist_id'=>$florist->id])->whereNotNull('rating')->get();
                $ratingCount = $rating->count();
                $floristRating = $rating->count() > 0 ? round($rating->sum('rating')/$rating->count(),2) : '0.0';
                Florist::where('id',$florist->id)->update(['rating'=>$floristRating,'ratingCount'=>$ratingCount]);


            }
                        // dd($ratings);
            // dd($allFlorists);
            $timetable = DB::table('timetable')->get();

            return view('search_store')->with(compact('products','florists','types','cities','notMatch','ratings','ratingsCounts','allFlorists','timetable'));

        }else{
            return redirect(app()->getLocale().'/welcome');
        }
    }
    // end of matchStore function

    public function store($en,$slug){
        // return redirect('/');
        // dd(Session::get('cart'));
        // dd(app()->getLocale());
        // DB::table('florist_rating')->delete();



        $date = date('d/m/Y');
        // dd($date);
        // $sessionOrders = orders::get();
        $sessionOrders = Orders::where(['showOrder'=>1])->get();

        Session::put('orders',$sessionOrders);
        // dd($slug);
        $checkFlorist = Florist::where(['slug'=>$slug])->first();



        if ($checkFlorist != null) {
            # code...


            $chainStores = Florist::where(['shop_of_id'=>$checkFlorist->id])->get();
            $showProducts = Products::where(['florist_id'=>$checkFlorist->id])->paginate(2);
            $products = Products::where(['florist_id'=>$checkFlorist->id])->get();
                // dd($floristDetails);
            $occasions = Occasion::get();
            $rating = DB::table('florist_rating')->where(['florist_id'=>$checkFlorist->id])->whereNotNull('rating')->get();
            $ratingCount = $rating->count();
            // dd($ratingCount);
            
            $floristRating = $rating->count() > 0 ? round($rating->sum('rating')/$rating->count(),2) : '0.0';
            $discounts = DB::table('product_discount')->get();
            $working_hours = DB::table('working_hours')->where(['florist_id'=>$checkFlorist->id])->orderBy('fromHour', 'asc')->get();

            $wish_list=array();
            if (Auth::check()) {
                $wish_list = DB::table('wish_list')->where(['user_id'=>Auth::user()->id])->get();
            }


            if (Session::has('address')) {

                // $allFlorists = Florist::get();
                $timetable = DB::table('timetable')->get();


                $ratings = [];
                $ratingsCounts = [];
                // $currentDayName = 'Δευτέρα';
                $matchFlorists = [];

                // $userSelectedDay = 'Monday';
                $userSelectedDay = Session::get('address')['dayName'];

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

                $userDate = Session::get('address')['date'];
                $today = date('d-m-Y');
                $currentHours = date('H');
                $addTwoHours = $currentHours;
                // dd($currentHours);

                $matchWithAddressFlorist = 0;

                // foreach ($allFlorists as $key => $florist) {
                    $florist = Florist::where(['slug'=>$slug])->first();
                    // $florist = $floristDetails;
                    $addressFrom = $florist->address;
                    // $addressTo = 'Ilioupoli, Greece';
                    $addressTo = Session::get('address')['completeAddress'];

                    $origin = str_replace(' ', '+', $addressFrom);
                    $destination = str_replace(' ', '+', $addressTo);

                    // $api = $this->file_get_content_curl("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4");
                    // $data = json_decode($api);
                    $lat1 = $florist->lat;
                    $lon1 = $florist->lng;
                    $lat2 = Session::get('address')['lat'];
                    $lon2 = Session::get('address')['lng'];
                    $unit = 'K';



                    //Calculate distance from latitude and longitude
                    $theta = $lon1 - $lon2;
                    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                    $dist = acos($dist);
                    $dist = rad2deg($dist);
                    $miles = $dist * 60 * 1.1515;

                    // $distance = ($miles * 1.609344).' km';
                    $distance = ($miles * 1.609344);

                    // if ($data != null) {
                    //     # code...
                    //     if ($data->status == "OK") {
                    //         # code...
                    //         // dd($data);
                    //         if ($data->rows[0]->elements[0]->status == 'OK') {
                                # code...
                                // dd($data);
                                // $distance = ($data->rows[0]->elements[0]->distance->value / 1000);
                                // dd((float)$florist->delivery_limit);
                                Session::put('distance',$distance);

                                if ((int)$distance <= (int)$florist->delivery_limit ) {
                                    if ($florist->status == 1) {
                                        if ($florist->admin == 2) {
                                            $timeCount = 0;
                                            foreach ($timetable as $key => $time) {
                                                # code...
                                                if ($timeCount == 1) {
                                                    break;
                                                }
                                                if ($time->status == '1' && $time->day == $currentDayName && $time->florist_id == $florist->id ) {
                                                    // echo "push in list :".'<br>';
                                                    // dd('before today');

                                                    if ($userDate == $today) {
                                                        // dd('today');
                                                        // echo $time->fromHour.'<br>';

                                                        // dd($addTwoHours);
                                                        if ( $time->fromHour >= $addTwoHours ) {
                                                            // dd('today');

                                                            if ($timeCount === 1) {
                                                                break;
                                                            }
                                                            // dd('here');

                                                            $timeCount = $timeCount + 1;
                                                            // array_push($matchFlorists,$florist);
                                                            $floristDetails = $florist;
                                                            $matchWithAddressFlorist = 1;
                                                        }
                                                    }else{

                                                        // dd('match with address');
                                                        $timeCount = $timeCount + 1;
                                                        $floristDetails = $florist;
                                                        $matchWithAddressFlorist = 1;

                                                        // array_push($matchFlorists,$florist);

                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                    //         }
                    //     }
                    // }

                // }//end of foreach
                    // dd($matchWithAddressFlorist);
                if ($matchWithAddressFlorist == 1 ) {
                    # code...
                    // dd('match');
                    if(Session::has('cart')){
                        // dd(Session::get('cart')[0]['store']);
                        if (isset(Session::get('cart')[0]['store'])) {
                            # code...
                            $cartFlorist = Session::get('cart')[0]['store'];
                            if($floristDetails->name != $cartFlorist ){
                                 Session::forget('cart');
                            }
                        }
                    }
                    // echo $ratingCount;
                    // dd($floristDetails);
                    // dd($rating);

                    return view('testStore')->with(compact('rating','floristDetails','showProducts','discounts','date','occasions','products','chainStores','working_hours','wish_list','floristRating','ratingCount'));;

                }else{
                    // dd('ot match');
                    Session::forget('address');
                    // return redirect(app()->getLocale().'/match_store2')->with('flash_message_error',$checkFlorist->name);
                    return redirect(app()->getLocale().'/store/'.$checkFlorist->slug);

                }


            }else{
                $floristDetails = Florist::where(['slug'=>$slug])->first();

                if(Session::has('cart')){
                    if (isset(Session::get('cart')[0]['store'])) {
                        # code...
                        $cartFlorist = Session::get('cart')[0]['store'];
                        if($floristDetails->name != $cartFlorist ){
                             Session::forget('cart');
                        }
                    }
                }
                // dd('here');


                // dd(app()->getLocale());
                return view('testStore')->with(compact('rating','floristDetails','showProducts','discounts','date','occasions','products','chainStores','working_hours','wish_list','floristRating','ratingCount'));;

            }
        }else{
            // return redirect()->back();
            return view('404');
        }

    }
    public function index(){
        // DB::table('banners');
        $banners = DB::table('banners')->where('status','1')->orderby('sort_order','asc')->get();
        $occasions = Occasion::get();
        $allProducts = Occasion::get();

        $types = Type::get();
        $products = Products::paginate(6);
        if (Auth::check()) {
            $user_email = Auth::user()->email;
            $session_id = Session::get('session_id');
            $userCart= DB::table('cart')->where(function ($query) use ($user_email,$session_id) {
                $query->where('user_email', '=', $user_email)
                      ->orWhere('session_id', '=', $session_id);
            })->get();
            // $userCart = DB::table('cart')->where('user_email',$user_email)->get();
        }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
        }
        // dd($session_id);
        foreach($userCart as $key=>$product){
            $productDetails = Products::where(['id'=>$product->product_id])->first();
            $userCart[$key]->image = $productDetails->image;
        }
        // dd($products);
        $wish_list=array();
        if (Auth::check()) {
            $wish_list = DB::table('wish_list')->where(['user_id'=>Auth::user()->id])->get();
        }
        return view('wayshop.index')->with(compact('banners','allProducts','occasions','types','products','userCart','wish_list'));
    }
    public function categories($en,$slug){
        $occasions = Occasion::get();
        $types = Type::get();
        $cat_name = Occasion::where(['slug'=>$slug])->first();
        // dd($cat_name);
        if (Auth::check()) {
            $user_email = Auth::user()->email;
            $session_id = Session::get('session_id');
            $userCart= DB::table('cart')->where(function ($query) use ($user_email,$session_id) {
                $query->where('user_email', '=', $user_email)
                      ->orWhere('session_id', '=', $session_id);
            })->get();
            // $userCart = DB::table('cart')->where('user_email',$user_email)->get();
        }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
        }
        // dd($session_id);
        foreach($userCart as $key=>$product){
            $productDetails = Products::where(['id'=>$product->product_id])->first();
            $userCart[$key]->image = $productDetails->image;
        }
        if ($cat_name!=null) {
            $products = Products::where(['occasion_id'=>$cat_name->id])->get();
            return view('wayshop.category')->with(compact('occasions','products','types','cat_name','userCart'));
        }else{
            return redirect()->back();
        }
    }
    public function types($en,$slug){
        $occasions = Occasion::get();
        $types = Type::get();
        $cat_name = Type::where(['slug'=>$slug])->first();
        if (Auth::check()) {
            $user_email = Auth::user()->email;
            $session_id = Session::get('session_id');
            $userCart= DB::table('cart')->where(function ($query) use ($user_email,$session_id) {
                $query->where('user_email', '=', $user_email)
                      ->orWhere('session_id', '=', $session_id);
            })->get();
            // $userCart = DB::table('cart')->where('user_email',$user_email)->get();
        }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
        }
        // dd($session_id);
        foreach($userCart as $key=>$product){
            $productDetails = Products::where(['id'=>$product->product_id])->first();
            $userCart[$key]->image = $productDetails->image;
        }
        if ($cat_name!=null) {
            # code...
            $products = Products::where(['type_id'=>$cat_name->id])->get();
            return view('wayshop.category')->with(compact('occasions','types','products','cat_name','userCart'));
        }else{
            return redirect()->back();
        }
    }

    public function results(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data['query']);
            $products=Products::where('name','like','%'.$data['query'].'%')->get();
            // dd(count($products));
            $banners = Banners::where('status','1')->orderby('sort_order','asc')->get();
            $categories = Category::with('categories')->where(['parent_id'=>0])->get();

            if (Auth::check()) {
                $user_email = Auth::user()->email;
                $session_id = Session::get('session_id');
                $userCart= DB::table('cart')->where(function ($query) use ($user_email,$session_id) {
                    $query->where('user_email', '=', $user_email)
                        ->orWhere('session_id', '=', $session_id);
                })->get();
                // $userCart = DB::table('cart')->where('user_email',$user_email)->get();
            }else{
                $session_id = Session::get('session_id');
                $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
            }
            // dd($session_id);
            foreach($userCart as $key=>$product){
                $productDetails = Products::where(['id'=>$product->product_id])->first();
                $userCart[$key]->image = $productDetails->image;
            }

            return view('wayshop.result')->with(compact('banners','categories','products','userCart'));

        }
    }


    public function addToCart(Request $request){
        // Session::flush();
        // dd($request->all());
        if ($request->yesInput=='yes') {

            $gift = 'yes';
            $msg = $request->msg;
        }else{
            $gift = 'no';
            $msg = '';
        }

        // echo('msg: '. $msg);
        // dd($gift);

        if (Session::has('cart')) {
            # code...
            $checkExists = 0;
            $old_items = Session::get('cart',[]);
                // echo "<pre>";print_r($items);die;
            foreach ($old_items as $key => $item) {
                if ($item['name_gr'] == $request->product_name_gr) {

                    $checkExists = 1;

                    $item['gift']=$gift;
                    $item['msg']=$msg;
                    $item['comment']=$request->comment;
                    $item['quantity']=$request->product_quantity;

                }
                $new_items[$key] = $item;
            }

            if ($checkExists == 1 ) {
                # code...
                Session::put('cart', $new_items);
            }else{
                $product = [
                    'product_id'=>$request->product_id,
                    'store'=>$request->store_name,
                    'name_eng'=>$request->product_name_eng,
                    'name_gr'=>$request->product_name_gr,

                    'description_eng'=>$request->product_description_eng,
                    'description_gr'=>$request->product_description_gr,

                    'price'=>$request->product_price,
                    'quantity'=>$request->product_quantity,
                    'image'=>$request->product_image,
                    'gift'=>$gift,
                    'msg'=>$msg,
                    'comment'=>$request->comment,

                ];
                Session::push('cart',$product);
            }


        }else{ // end check session

            $product = [
                'product_id'=>$request->product_id,
                'store'=>$request->store_name,
                'name_eng'=>$request->product_name_eng,
                'name_gr'=>$request->product_name_gr,

                'description_eng'=>$request->product_description_eng,
                'description_gr'=>$request->product_description_gr,

                'price'=>$request->product_price,
                'quantity'=>$request->product_quantity,
                'image'=>$request->product_image,
                'gift'=>$gift,
                'msg'=>$msg,
                'comment'=>$request->comment,

            ];
            Session::push('cart',$product);
        }
        $cart = Session::get('cart');
        // dd($cart);
        // return response();
        // return response()->json($cart);

        return redirect()->back();

    }
    public function changeCardDetails(Request $request,$en,$name){
        // dd('check');
        if($request->ismethod('post')){
            $data = $request->all();
            // dd($data);
            if ($data['msg']=='') {
                // dd('here');
                $gift = 'yes';
                $msg = $data['msg'];
            }else{
                $gift = 'no';
                $msg = '';
                // dd('ot match');
            }
            $old_items = Session::get('cart',[]);
            // echo "<pre>";print_r($items);die;
            foreach ($old_items as $key => $item) {
                if ($item['name_gr'] == $name) {
                    $item['gift']=$gift;
                    $item['msg']=$data['msg'];
                    $item['comment']=$data['comment'];

                }
                $new_items[$key] = $item;
            }

            Session::put('cart', $new_items);

            return back();

        }//end of post method
        // dd('check');
        // $name = 'black flower';
        $cardDetails = '';
        if (Session::has('cart')) {
            # code...
            foreach (Session::get('cart') as $key => $cart) {
                # code...
                // dd($cart['name_gr']);
                if ($cart['name_gr'] == $name ) {
                    # code...
                    $cardDetails = $cart;
                break;
                }
            }
        }else{
            return redirect('/');
        }
        // dd($cardDetails);
        return view('cardDetails')->with(compact('cardDetails'));

    }
    public function removeFromCart($en,$name){
        $products = session()->pull('cart', []); // Second argument is a default value
        // dd($name);
        // dd(array_search('greek name', $products));
        foreach ($products as $index => $product) {
            # code...
            // dd($product);
            if(($key = array_search($name, $product)) !== false) {
                // dd($products[$index]);
                unset($products[$index]);
            }
        }
        session()->put('cart', $products);
        // dd(count(Session::get('cart')));
        // return redirect()->back();
        $cart = Session::get('cart');

        // return response();
        return response()->json($cart);
    }
    //add to cart
    public function increaseQuantity(Request $request){
        $old_items = Session::get('cart',[]);
        // dd($items);
        $new_items = Session::get('cart',[]);
        // echo "<pre>";print_r($items);die;
        foreach ($old_items as $key => $item) {
            if ($item['name_gr'] == $request->name) {
                $item['quantity']++;
                // echo "<pre>";print_r($item);die;
            }
            // echo "<pre>";print_r($new_items[$key]);die;
            $new_items[$key] = $item;
        }
        // echo "<pre>";print_r($new_items);die;

        Session::put('cart', $new_items);
        // $items = Session::get('cart');
        $itemPrice = 0;
        $quantity = 0;
        // echo "<pre>";print_r(Session::get('cart'));die;

        foreach (Session::get('cart') as  $itm) {
            // echo "<pre>";print_r($itm);die;
            if ($itm['name_gr'] == $request->name) {
                // echo "<pre>";print_r($itm);die;
                $itemPrice = $itm['price'] * $itm['quantity'];
                // dd($item['quantity']);
                $quantity = $itm['quantity'];
            }
            // $cartPrice = $cartPrice + ($itm['price']*$itm['quantity']);
        }
        // echo "<pre>";print_r($itm);die;
        // echo "<pre>";print_r(Session::get('cart'));die;
        $cartPrice = 0;

        foreach (Session::get('cart') as  $it) {

            $cartPrice = $cartPrice + ($it['price']*$it['quantity']);
            // echo "<pre>";print_r($it);die;
        }
        // echo "<pre>";print_r(Session::get('cart'));die;

        // dd($items);
        $itemDetails = [
            'quantity'=> $quantity,
            'itemPrice'=> $itemPrice,
            'cartPrice' => $cartPrice,
            'msg'=>'Ok'
        ];
        return response()->json($itemDetails);
        // return redirect()->back();
    }
    public function decreaseQuantity(Request $request){
        $old_items = Session::get('cart',[]);
        // dd($items);
        $new_items = Session::get('cart',[]);
        // dd($items);
        $cartPrice = 0;
        foreach ($old_items as $key => $item) {
            if ($item['name_gr'] == $request->name) {
                $item['quantity']--;
            }
            $new_items[$key] = $item;
        }
        Session::put('cart', $new_items);
        $itemPrice = 0;
        $quantity = 0;
        foreach (Session::get('cart') as  $itm) {
            // echo "<pre>";print_r($itm);die;
            if ($itm['name_gr'] == $request->name) {
                // echo "<pre>";print_r($itm);die;
                $itemPrice = $itm['price'] * $itm['quantity'];
                // dd($item['quantity']);
                $quantity = $itm['quantity'];
            }
        }
        foreach (Session::get('cart') as  $item) {
            $cartPrice = $cartPrice + ($item['price']*$item['quantity']);
        }
        // dd($items);
        $itemDetails = [
            'quantity'=> $quantity,
            'itemPrice'=> $itemPrice,
            'cartPrice' => $cartPrice,
            'msg'=>'Ok'
        ];
        return response()->json($itemDetails);
    }

    // ----------------------------checkout---------
    public function checkout($en,$slug){
        // dd(Session::get('cart'));

        // return redirect('https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId);
        // Session::forget('checkout_address');
        // dd(Session::get('distance'));
        $floristDetails = Florist::where(['slug'=>$slug])->first();

        $total_amount = 0;
        if (Session::has('cart')) {
            foreach (Session::get('cart') as  $item) {
                if ($item['store']==$floristDetails->name){
                    $total_amount = $total_amount + ($item['price']*$item['quantity']);
                }
            }
        }
        // dd(Session::get('distance'));
        $shippingCharges = ShippingCharges::where(['florist_id'=>$floristDetails->id])->get();
        foreach ($shippingCharges as $key => $charges) {
            # code...
            // echo("distance: ".Session::get('distance').", from: ".$charges->kilometersFrom.", to: ".$charges->kilometersTo);
            // dd(Session::get('distance'));
            if (Session::get('distance') < $charges->kilometersTo && Session::get('distance') > $charges->kilometersFrom ) {
                // dd('enter');
                // dd("charges ".$charges->price);
                Session::put('shipping_fee',$charges->price ?? "0");
            }
        }
        // dd(Session::get('shipping_fee'));

        // dd(Session::get('shipping_fee'));
        $final_amount = Session::get('shipping_fee')+$total_amount;
        $orderId = "12342212";
        // $timetable = DB::table('timetable')->where(['florist_id'=>$floristDetails->id])->get();
        $timetable = DB::table('timetable')->where(['florist_id'=>$floristDetails->id])->orderBy('fromHour', 'asc')->get();

        // dd($timetable);
        if (Session::has('cart')) {
            # code...
            return view('checkout')->with(compact('floristDetails','orderId','timetable','shippingCharges'));
        }else{
            return redirect('/');

        }


        // dd($final_amount);

        // ------------------ start payment section-----

        // The POST URL and parameters

        // $request =  'https://demo.vivapayments.com/api/orders';	// demo environment URL
        // //$request =  'https://www.vivapayments.com/api/orders';	// production environment URL

        // // Your merchant ID and API Key can be found in the 'Security' settings on your profile.
        // $merchant_id = 'd02176cc-cd20-4843-9ae4-0b9d37779247';
        // $api_key = '&zhAfc';

        // //Set the Payment Amount
        // $amount = $final_amount * 100;	// Amount in cents

        // //Set some optional parameters (Full list available here: https://developer.vivawallet.com/api-reference-guide/payment-api/#tag/Payments/paths/~1orders/post)
        // $allow_recurring = 'true'; // If set to true, this flag will prompt the customer to accept recurring payments in the future.
        // $request_lang = 'en-US'; //This will display the payment page in English (default language is Greek)
        // $source = '9563'; // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.

        // $postargs = 'Amount='.urlencode($amount).'&AllowRecurring='.$allow_recurring.'&RequestLang='.$request_lang.'&SourceCode='.$source;

        // // Get the curl session object
        // $session = curl_init($request);


        // // Set the POST options.
        // curl_setopt($session, CURLOPT_POST, true);
        // curl_setopt($session, CURLOPT_POSTFIELDS, $postargs);
        // curl_setopt($session, CURLOPT_HEADER, true);
        // curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($session, CURLOPT_USERPWD, $merchant_id.':'.$api_key);
        // // curl_setopt($session, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');

        // // Do the POST and then close the session
        // $response = curl_exec($session);

        // // Separate Header from Body
        // $header_len = curl_getinfo($session, CURLINFO_HEADER_SIZE);
        // $res_header = substr($response, 0, $header_len);
        // $res_body =  substr($response, $header_len);

        // curl_close($session);

        // // Parse the JSON response
        // try {
        //     if(is_object(json_decode($res_body))){
        //         $result_obj=json_decode($res_body);
        //     }else{
        //         preg_match('#^HTTP/1.(?:0|1) [\d]{3} (.*)$#m', $res_header, $match);
        //                 throw new Exception("API Call failed! The error was: ".trim($match[1]));
        //     }
        // } catch( Exception $e ) {
        //     echo $e->getMessage();
        // }

        // if ($result_obj->ErrorCode==0){	//success when ErrorCode = 0
        //     $orderId = $result_obj->OrderCode;
        //     // echo 'Your Order Code is: <b>'. $orderId.'</b>';
        //     // echo '<br/><br/>';
        //     // echo 'To simulate a successful payment, use the 16-digit test credit card 5511070000000020, with a valid expiration date and 111 as CVV2.';
        //     // echo '</br/><a href="https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId.'" >Make Payment</a>';
        //     return view('checkout')->with(compact('floristDetails','orderId'));
        // }
        // else{
        //     echo 'The following error occured: ' . $result_obj->ErrorText;
        // }

        // ----end payment section----------

    }

    //------------------save distance-----------
    public function saveDistance(Request $request){
        // Session::put('distance',$request->distance);
        return response()->json('success');
    }

    //add address
    public function addAddress(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'city' => 'required',
            'region' => 'required',
            'date'=> 'required'
            ]);
        if ($validator->passes()) {
            $address = [
                'city'=> $request->city,
                'cityInGR'=> $request->cityInGR,
                'region'=> $request->region,
                'zip_code'=> $request->zipCode,
                'lat'=> $request->lat,
                'lng'=> $request->lng,
                'date'=> $request->date,
                'dayName'=> $request->dayName,
                'completeAddress'=>$request->completeAddress
            ];
            Session::put('address',$address);
            Session::put('city',$request->city);
            Session::put('region',$request->region);

            // return redirect('/match_store');
            // dd(app()->getLocale());
            return redirect()->route('matchStore2',['language'=>App::getLocale()]);
            // return response()->json('success');

        }
        return response()->json([
            'error' => $validator->errors()->all()
        ]);

    }
    public function changeDate(Request $request){

        $oldAddress = Session::get('address');
        $newAddress = [
            'city'=> $oldAddress['city'],
                'region'=> $oldAddress['region'],
                'zip_code'=> $oldAddress['zip_code'],
                'lat'=> $oldAddress['lat'],
                'lng'=> $oldAddress['lng'],
                'date'=> $request->date,
                'completeAddress'=>$oldAddress['completeAddress']
        ];
        Session::put('address',$newAddress);
        return response()->json('success');
    }


    public function updateAddress(Request $request){

        $oldAddress = Session::get('address');
        $newAddress = [
            'city'=> $oldAddress['city'],
                'region'=> $oldAddress['region'],
                'zip_code'=> $oldAddress['zip_code'],
                'lat'=> $oldAddress['lat'],
                'lng'=> $oldAddress['lng'],
                'date'=> $oldAddress['date'],
                'completeAddress'=>$request->address
        ];
        Session::put('address',$newAddress);
        Session::put('distance',$request->distance);
        return response()->json('success');
    }

    public function checkoutAddress(Request $request){
        $address = [
            'user_address'=> $request->user_address,
            're_address'=> $request->re_address,
            'contactless'=> $request->contactless,
            'name'=> $request->name,
            'cellphone'=> $request->cellphone,
            'doorbell'=> $request->doorbell,
            'floor'=> $request->floor,
            'phone'=> $request->phone,
            'address_msg'=> $request->address_msg,
            'total_amount'=> $request->total_amount,
            'florist_id'=> $request->florist_id,
            'florist_name'=>$request->florist_name,
            'sender'=>$request->sender,
            'senderName'=>$request->senderName,
            'senderEmail'=>$request->senderEmail,
            'company'=>$request->company,
            'receiptOptions'=>$request->receiptOptions,
            'bussinessName'=>$request->bussinessName,
            'vat'=>$request->vat,
            'bussinessType'=>$request->bussinessType,
            'bussinessAddress'=>$request->bussinessAddress,
            'bussinessTex'=>$request->bussinessTex,
            'bussinessArea'=>$request->bussinessArea,
            'bussinessTk'=>$request->bussinessTk,
            'bussinessPhone'=>$request->bussinessPhone,
            'inviceMail'=>$request->inviceMail,
            'delivery_date'=>$request->delivery_date,
            'timeId'=>$request->timeId,
        ];
        Session::put('checkoutAddress',$address);
        Session::put('language',app()->getLocale());
        
        // return redirect('/place-order');
        return response()->json('success');
    }

    // public function getDistance(){
    //     // Google API key
    //     $apiKey = 'AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4';
    //     $addressFrom = 'Sargodha';
    //     $addressTo   = 'Islamabad';
    //     $unit = 'k';
    //     // Saronikou 2 ,Saronikou 52
    //     $arrContextOptions= [
    //         'ssl' => [
    //             'cafile' => '/path/to/bundle/cacert.pem',
    //             'verify_peer'=> true,
    //             'verify_peer_name'=> true,
    //         ],
    //     ];

    //     // Change address format
    //     $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
    //     $formattedAddrTo     = str_replace(' ', '+', $addressTo);

    //     // Geocoding API request with start address
    //     $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&key='.$apiKey,false,$arrContextOptions);
    //     $outputFrom = json_decode($geocodeFrom);
    //     if(!empty($outputFrom->error_message)){
    //         return $outputFrom->error_message;
    //     }



    //     // Geocoding API request with end address
    //     $geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false&key='.$apiKey,false,
    //     stream_context_create($arrContextOptions));
    //     $outputTo = json_decode($geocodeTo);
    //     if(!empty($outputTo->error_message)){
    //         return $outputTo->error_message;
    //     }

    //     // Get latitude and longitude from the geodata
    //     $latitudeFrom    = $outputFrom->results[0]->geometry->location->lat;
    //     $longitudeFrom    = $outputFrom->results[0]->geometry->location->lng;
    //     $latitudeTo        = $outputTo->results[0]->geometry->location->lat;
    //     $longitudeTo    = $outputTo->results[0]->geometry->location->lng;

    //     // Calculate distance between latitude and longitude
    //     $theta    = $longitudeFrom - $longitudeTo;
    //     $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
    //     $dist    = acos($dist);
    //     $dist    = rad2deg($dist);
    //     $miles    = $dist * 60 * 1.1515;

    //     // Convert unit and return distance
    //     $unit = strtoupper($unit);
    //     if($unit == "K"){
    //         return round($miles * 1.609344, 2).' km';
    //     }elseif($unit == "M"){
    //         return round($miles * 1609.344, 2).' meters';
    //     }else{
    //         return round($miles, 2).' miles';
    //     }
    // }

    //------------------viva wallet------

    public function vivaWallet(){
        //    dd('check');
        // The POST URL and parameters
        $request =  'https://demo.vivapayments.com/api/orders';	// demo environment URL
        //$request =  'https://www.vivapayments.com/api/orders';	// production environment URL

        // Your merchant ID and API Key can be found in the 'Security' settings on your profile.
        $merchant_id = 'd02176cc-cd20-4843-9ae4-0b9d37779247';
        $api_key = '&zhAfc';

        //Set the Payment Amount
        $amount = 8*100;	// Amount in cents

        //Set some optional parameters (Full list available here: https://developer.vivawallet.com/api-reference-guide/payment-api/#tag/Payments/paths/~1orders/post)
        $allow_recurring = 'true'; // If set to true, this flag will prompt the customer to accept recurring payments in the future.
        $request_lang = 'en-US'; //This will display the payment page in English (default language is Greek)
        $source = '9563'; // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.

        $postargs = 'Amount='.urlencode($amount).'&AllowRecurring='.$allow_recurring.'&RequestLang='.$request_lang.'&SourceCode='.$source;

        // Get the curl session object
        $session = curl_init($request);

        // dd($session);
        // Set the POST options.
        curl_setopt($session, CURLOPT_POST, true);
        curl_setopt($session, CURLOPT_POSTFIELDS, $postargs);
        curl_setopt($session, CURLOPT_HEADER, true);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($session, CURLOPT_USERPWD, $merchant_id.':'.$api_key);
        // curl_setopt($session, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');

        // Do the POST and then close the session
        $response = curl_exec($session);
        // curl_getinfo($session);
        // if (curl_exec($session) === FALSE) {
        //     die("Curl Failed: " . curl_error($session));
        //  } else {
        //     return curl_exec($session);
        //  }
        // dd($response);
        // Separate Header from Body
        $header_len = curl_getinfo($session, CURLINFO_HEADER_SIZE);
        $res_header = substr($response, 0, $header_len);
        $res_body =  substr($response, $header_len);
        // dd($res_body);
        curl_close($session);
        // dd(json_decode($res_body));
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
            echo 'Your Order Code is: <b>'. $orderId.'</b>';
            echo '<br/><br/>';
            echo 'To simulate a successful payment, use the 16-digit test credit card 5511070000000020, with a valid expiration date and 111 as CVV2.';
            echo '</br/><a href="https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId.'" >Make Payment</a>';
        }
        else{
            echo 'The following error occured: ' . $result_obj->ErrorText;
        }

    }
    public function success(Request $request){
    
        // dd($request->all());
        if ($request->has('t')) {
            # code...
            if (Session::has('lastOrderId') ) {

                Orders::where('id',Session::get('lastOrderId'))->update(['showOrder'=>1]);

                $order = Orders::where('id',Session::get('lastOrderId'))->first();
                $florist = Florist::where('id',$order->florist_id)->first();
                $admin = admin::first();
                $products = Products::get();
                Mail::to($order->senderEmail??'user@gmail.com')->send(new InProcessOrder($florist,$order,$products));
    
                Mail::to($admin->email)->send(new NewOrderMail($florist,$order,$products));
                Mail::to($florist->email)->send(new NewOrderMail($florist,$order,$products));
            
                if (Auth::check()) {
                    $redeemPoints = Auth::user()->points;
                    if (Session::has('remainingPoints')) {
                        # code...
                        User::where('id',Auth::user()->id)->update(['points'=>Session::get('remainingPoints')]);
                        $redeemPoints = Session::get('remainingPoints');
                    }
    
    
                    $totalAmount = Session::get('checkoutAddress')['total_amount'] ?? '';
                    $totalPoints = $redeemPoints + $totalAmount ;
                    User::where('id',Auth::user()->id)->update(['points'=>$totalPoints]);
                }
            
            }
            // }else{
    
            //     $curl = curl_init();
            //     $fundAmount = Session::get('checkoutAddress')['total_amount']*100;
            //     curl_setopt_array($curl, array(
            //     // CURLOPT_URL => 'https://demo.vivapayments.com/api/transactions/'.$request->t.'/?amount='.Session::get('checkoutAddress')['total_amount'].'&sourceCode=9563',
            //     // CURLOPT_URL => 'https://demo.vivapayments.com/api/transactions/'.$request->t.'/?amount='.$fundAmount.'&sourceCode=9563',
            //     CURLOPT_URL => 'https://www.vivapayments.com/api/transactions/'.$request->t.'/?amount='.$fundAmount.'&sourceCode=6637',
    
            //     CURLOPT_RETURNTRANSFER => true,
            //     CURLOPT_MAXREDIRS => 10,
            //     CURLOPT_TIMEOUT => 30,
            //     CURLOPT_FOLLOWLOCATION => true,
            //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //     CURLOPT_CUSTOMREQUEST => 'DELETE',
            //     CURLOPT_HTTPHEADER => array(
            //         "Content-Type: application/json",
            //         "Authorization: Basic NDkzZjZlMWUtYTlkYS00ODA2LTk3M2YtZmQ0Njg2MTllMGRlOlFqZkQ3VDZGMHh4bXl1SE8wMlgyZjZkU0hMVThvUw==",
            //         ),
            //     ));
            //     // echo $curl;
            //     // dd($curl);
    
            //     $response = curl_exec($curl);
    
            //     curl_close($curl);
            //     // dd($response);
            //     return redirect('/payment-failed');
            // }

        }else{

        }

        
        Session::forget('cart');
        Session::forget('redeemAmount');
        Session::forget('finalAmount');
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        Session::forget('lastOrderId');
        Session::forget('remainingPoints');
        Session::forget('redeemAmount');
        Session::forget('redeemPoints');

        return view('thankyou');

    }

    public function success2(Request $request){
        // dd(Session::get('checkoutAddress'));
        // dd(Session::get('cart'));
        // dd('sessio');
        // dd($request->t);
        // dd(Session::get('checkoutAddress')['total_amount']);

        if (Session::has('cart')) {
            // dd(Session::get('cart'));

            if (Auth::check()) {
                $user_id = Auth::user()->id;
                $user_email = Auth::user()->email;
            }else{
                $user_id = rand(3,100000);
                $user_email = '';
            }
            // $data=$request->all();
            if (empty(Session::get('CouponCode'))) {
                $couponCode = "Not Used";
            }
            else{
                $couponCode = Session::get('CouponCode');

            }
            if (empty(Session::get('CouponAmount'))) {
                $couponAmount = 0;
            }
            else{
                $couponAmount = Session::get('CouponAmount');
            }
            if (empty(Session::get('redeemAmount'))) {
                $redeemAmount = 0;
            }
            else{
                $redeemAmount = Session::get('redeemAmount');
            }

            // dd(Session::get('address'));
            //-------------save order--
            $order = new Orders;
            $order->user_id = $user_id ?? '';

            $city = Session::get('address')['city'];
            // $city = DB::connection()->getPdo()->quote(utf8_encode($city));
            if (Session::has('checkoutAddress')) {

            $order->florist_id = Session::get('checkoutAddress')['florist_id'] ?? '' ;
            $order->florist_name = Session::get('checkoutAddress')['florist_name'] ?? '';
            $order->user_email = $user_email ?? '';
            $order->name = Session::get('checkoutAddress')['name'] ?? '';
            $order->address = Session::get('address')['completeAddress'] ?? '';
            $order->re_address = Session::get('checkoutAddress')['re_address'] ?? '';

            $order->city = $city ?? '';
            $order->floor = Session::get('checkoutAddress')['floor'] ?? '';

            $order->pincode = Session::get('address')['zip_code'] ??'';
            $order->mobile = Session::get('checkoutAddress')['cellphone']?? '';
            $order->optional_phone = Session::get('checkoutAddress')['phone']?? ''; //optional_phone === sender phone
            $order->doorbell = Session::get('checkoutAddress')['doorbell'] ?? '' ;
            $order->address_msg = Session::get('checkoutAddress')['address_msg'] ?? '' ;

            $order->sender = Session::get('checkoutAddress')['sender'] ?? '' ;
            $order->senderName = Session::get('checkoutAddress')['senderName'] ?? '' ;
            $order->senderEmail = Session::get('checkoutAddress')['senderEmail'] ?? '' ;
            $order->company = Session::get('checkoutAddress')['company'] ?? '' ;

            $order->receiptOptions= Session::get('checkoutAddress')['receiptOptions'] ?? '' ;
            $order->bussinessName= Session::get('checkoutAddress')['bussinessName'] ?? '' ;
            $order->vat= Session::get('checkoutAddress')['vat'] ?? '' ;
            $order->bussinessType= Session::get('checkoutAddress')['bussinessType'] ?? '' ;
            $order->bussinessAddress= Session::get('checkoutAddress')['bussinessAddress'] ?? '' ;
            $order->bussinessTex= Session::get('checkoutAddress')['bussinessTex'] ?? '' ;
            $order->bussinessArea= Session::get('checkoutAddress')['bussinessArea'] ?? '' ;
            $order->bussinessTk= Session::get('checkoutAddress')['bussinessTk'] ?? '' ;
            $order->bussinessPhone= Session::get('checkoutAddress')['bussinessPhone'] ?? '' ;

            $order->country= Session::get('checkoutAddress')['inviceMail'] ?? '';

            $order->coupon_code = $couponCode;
            $order->coupon_amount = $couponAmount;
            $order->redeem_amount = $redeemAmount;

            $order->order_status = "New";
            $order->payment_method = 'online';
            $order->grand_total = Session::get('checkoutAddress')['total_amount'] ?? '' ;
            $order->delivery_date = Session::get('checkoutAddress')['delivery_date'] ?? '' ;
            $order->delivery_time = Session::get('checkoutAddress')['timeId'] ?? 'any' ;
            $timetable = DB::table('timetable')->where(['id'=>Session::get('checkoutAddress')['timeId']])->first();
            if ($timetable == null) {
                $order->fromHour = 0; // shipping charges means kilometer limit
            }else{
                $order->fromHour = $timetable->fromHour;
            }
            $order->shipping_charges = Session::get('shipping_fee') ?? '0' ;

            $order->save();

            // dd('order save');
            }

            $order_id = DB::getPdo()->lastinsertID();

            $orderNo = 'EB'.str_pad($order_id,5,'0',STR_PAD_LEFT) ?? '';
            Orders::where('id',$order_id)->update(['orderNo'=>$orderNo]);

            // send email

            // end send email

            $cartProducts = DB::table('cart')->where('user_email',$user_email)->get();
            // dd(Session::get('cart'));
            // if (Session::has('cart')) {
                # code...
                foreach (Session::get('cart') as $product) {
                    $cartPro = new OrdersProduct();
                    $cartPro->order_id = $order_id??0;
                    $cartPro->user_id = $user_id?? 0;
                    $cartPro->product_id = $product['product_id']??0;
                    $cartPro->product_name = $product['name_gr']??'';
                    $cartPro->product_name_eng = $product['name_eng']??'';

                    $cartPro->store = $product['store']??'';
                    $cartPro->product_price = $product['price']??'';
                    $cartPro->product_qty = $product['quantity']??'';
                    $cartPro->gift = $product['gift']??'';
                    $cartPro->gift_msg = $product['msg']??'';
                    $cartPro->comment = $product['comment']??'';
                    $cartPro->save();
                }
            // }

            Session::put('order_id',$order_id);
            Session::put('grand_total',Session::get('checkoutAddress')['total_amount'] ?? '' );
            // Session::forget('cart');

            $florist = Florist::where('id',Session::get('checkoutAddress')['florist_id'] ?? '')->first();

            // start give points


            if (Auth::check()) {
                $redeemPoints = Auth::user()->points;
                if (Session::has('remainingPoints')) {
                    # code...
                    User::where('id',Auth::user()->id)->update(['points'=>Session::get('remainingPoints')]);
                    $redeemPoints = Session::get('remainingPoints');
                }


                $totalAmount = Session::get('checkoutAddress')['total_amount'] ?? '';
                $totalPoints = $redeemPoints + $totalAmount ;
                User::where('id',Auth::user()->id)->update(['points'=>$totalPoints]);
            }

            // end give points

            // start balance transfer

                // if ($florist->shipping_fee != null ) {
                //     # code...
                //     $totalAmount = Session::get('checkoutAddress')['total_amount'] ?? '';

                //     $floristAmount = (86.98 / 100) * $totalAmount;
                //     $eBloomAmount = (13.02 / 100) * $totalAmount;

                //     $transferBalance = $floristAmount;
                //     // $walletId = "223477412549";
                //     $walletId = "235197783841";

                //     $targetWalletId = $florist->shipping_fee; //shipping_fee use as florist viva account id
                //     // $url = "https://demo.vivapayments.com/api/wallets/".$walletId."/balancetransfer/".$targetWalletId;
                //     $url = "https://www.vivapayments.com/api/wallets/".$walletId."/balancetransfer/".$targetWalletId;

                //     $curl = curl_init($url);
                //     curl_setopt($curl, CURLOPT_URL, $url);
                //     curl_setopt($curl, CURLOPT_POST, true);
                //     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                //     $headers = array(
                //     "Content-Type: application/json",
                //     "Authorization: Basic NDkzZjZlMWUtYTlkYS00ODA2LTk3M2YtZmQ0Njg2MTllMGRlOlFqZkQ3VDZGMHh4bXl1SE8wMlgyZjZkU0hMVThvUw==",
                //     );
                //     // Basic ZDAyMTc2Y2MtY2QyMC00ODQzLTlhZTQtMGI5ZDM3Nzc5MjQ3OiZ6aEFmYw==
                //     curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                //     // dd($curl);
                //     // dd($headers);

                //     $amount = $transferBalance * 100;

                //     $data = <<<DATA
                //     {
                //     "amount":$amount,
                //     "description": "Optional text to show on account statement",
                //     "saleTransactionId": "Optional text referencing the related sales transaction"
                //     }
                //     DATA;

                //     curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

                //     //for debug only!
                //     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                //     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                //     $resp = curl_exec($curl);
                //     // dd($resp);
                //     curl_close($curl);
                //     // var_dump($resp);
                // }

            // end balance transfer

            $order = Orders::where('id',$order_id)->first();
            $florist = Florist::where('id',$order->florist_id)->first();
            $admin = admin::first();
            $products = Products::get();
            Mail::to($order->senderEmail??'user@gmail.com')->send(new InProcessOrder($florist,$order,$products));

            Mail::to($admin->email)->send(new NewOrderMail($florist,$order,$products));
            Mail::to($florist->email)->send(new NewOrderMail($florist,$order,$products));
            //---------------end save order-----------


        }else{

            $curl = curl_init();
            $fundAmount = Session::get('checkoutAddress')['total_amount']*100;
            curl_setopt_array($curl, array(
            // CURLOPT_URL => 'https://demo.vivapayments.com/api/transactions/'.$request->t.'/?amount='.Session::get('checkoutAddress')['total_amount'].'&sourceCode=9563',
            // CURLOPT_URL => 'https://demo.vivapayments.com/api/transactions/'.$request->t.'/?amount='.$fundAmount.'&sourceCode=9563',
            CURLOPT_URL => 'https://www.vivapayments.com/api/transactions/'.$request->t.'/?amount='.$fundAmount.'&sourceCode=6637',

            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Basic NDkzZjZlMWUtYTlkYS00ODA2LTk3M2YtZmQ0Njg2MTllMGRlOlFqZkQ3VDZGMHh4bXl1SE8wMlgyZjZkU0hMVThvUw==",
                ),
            ));
            // echo $curl;
            // dd($curl);

            $response = curl_exec($curl);

            curl_close($curl);
            // dd($response);
            return redirect('/payment-failed');
        }



        Session::forget('cart');
        Session::forget('redeemAmount');
        Session::forget('finalAmount');
        Session::forget('CouponAmount');
        Session::forget('CouponCode');



        return view('thankyou');
    }// end success method

    public function rating($en,Request $request, $florist){
        if($request->ismethod('post')){
            # code...
            $data = $request->all();
            // dd($data);
            $validator = Validator::make($request->all(), [
                    
                'rating' => 'required',
                
            ]);

            if ($validator->passes()) {
                # code...
                DB::table('florist_rating')->insert(['florist_id'=>$florist,'rating'=>$data['rating'],'text'=>$data['text']]);
    
                $florist = Florist::where(['id'=>$florist])->first();
                $rating = DB::table('florist_rating')->where(['florist_id'=>$florist])->whereNotNull('rating')->get();
                // dd($rating);
                return redirect(app()->getLocale().'/store/'.$florist->slug);
            }else{
                // dd('o pass');
                return back()->with('flash_message_error','Select Star Rating');

            }

        }
        // dd($florist);
        $florist = Florist::find($florist);
        // dd($florist);
        return view('rating')->with(compact('florist'));
    }

    public function sendNotification(Request $request){
        $data = $request->all();
        // $city = new City();
        // $city->city_name = 'saeed';
        // // $admin->password = 'saeed';
        // $city->save();
        $admin =  admin::first();
        $order = Orders::with('orders')->where(['id'=>$data['florist_id'],'showOrder'=>1])->first();
        $florist = Florist::where(['id'=>$data['florist_id']])->first();

        $admin->notify(new updateStatus($florist));
        Mail::to($admin->email)->send(new StatusUpdateMail($florist));

        return response()->json('success');

    }

    public function markAsRead(Request $request){
        $data = $request->all();
        $admin =  admin::where(['username'=>'admin'])->first();
        // db::table('notifications')->where('id', $data['id'])->delete();
        $admin->unreadNotifications->where('id', $data['id'])->markAsRead();
        return response()->json('success');

    }

    public static function generateSerialNumber(int $id){
        $start = 0; // 0 = A, 702 or 703 = AAA, adjust accordingly
        $letters_value = $start + (ceil($id / 999) - 1);
        $numbers = ($id % 999 === 0) ? 999 : $id % 999;

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $base = strlen($characters);
        $letters = '';

        // while there are still positive integers to divide
        while ($letters_value) {
            $current = $letters_value % $base;
            $letters = $characters[$current] . $letters;
            $letters_value = floor($letters_value / $base);
        }

        return $letters.'-'.sprintf('%03d', $numbers);
    }

    public function Contact(Request $request){
        if($request->ismethod('post')){
        $data = $request->all();

        // dd($data);
        // echo "
        // <pre>";print_r($data);die;
            $firstname = $data['firstname'] ?? '';
            $lastname = $data['lastname'] ?? '';
            $cellphone = $data['cellphone'] ?? '';
            $email = $data['email'] ?? '';
            $message = $data['message'] ?? '' ;
            Mail::to('info@ebloom.gr')->send(new ContactMail($firstname,$lastname,$cellphone,$email,$message));

            //   return redirect('/welcome');
              return response()->json('success');

          }

          return view('contact');
    }
    public function subscribe(Request $request){
        // dd('here');
        if($request->ismethod('post')){
            $data = $request->all();

            // dd($data);
            // echo "
            // <pre>";print_r($data);die;
            // info@ebloom.gr
            $email = $data['email'] ?? '';
            // Mail::to('info@ebloom.gr')->send(new SubscribeMail($email));
            // Alert::success('Subscription', 'Successfully Subscribe');
            $this->saveInSendinblue($email);
            // return redirect('/welcome');
            return redirect()->back();

        }
    }
    public function saveInSendinblue($email){
        
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.sendinblue.com/v3/contacts",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"attributes\":{\"FIRSTNAME\":\"".''."\"},\"updateEnabled\":false,\"email\":\"".$email."\"}",
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Content-Type: application/json",
            "api-key: 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"
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
            dd($err);
        } else {
            // echo $response;
            $contactId = (int) filter_var($response, FILTER_SANITIZE_NUMBER_INT);
            //  dd($contactId);
            $contact = $this->copyRecordInOtherListOfSendInblue(3,$contactId);

        }

    }
    public function copyRecordInOtherListOfSendInblue($listId,$contactId){
        
        // dd($data);
        
        // $email = $data['email'];
        // $email = "testrecord@gmail.com";

        // echo $email;
        // dd($listId);
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.sendinblue.com/v3/contacts/lists/".$listId."/contacts/add",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"ids\": [".$contactId."]}",
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Content-Type: application/json",
            "api-key: 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"
        ],
        ]);


        $response = curl_exec($curl);
        // dd($response);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
            dd($err);
        } else {
            // echo $response;
            // dd($response);
            $contactId = (int) filter_var($response, FILTER_SANITIZE_NUMBER_INT);
            //  dd($contactId);
             return $contactId;
            
        }


    }

    public function shop(Request $request){
          if($request->ismethod('post')){
              $data = $request->all();
            //   return redirect('/welcome');

            //   dd($data);
            // $shopData = [
            //     'shopName' => $data['shopName'],
            //     'shopPhone' => $data['shopPhone'],
            //     'shopAddress' => $data['shopAddress'],
            //     'email' => $data['email'],
            //     'shopOperator' => $data['shopOperator'],
            //     'operatorPhone' => $data['operatorPhone'],
            //     'message' => $data['message'],
            // ];
            $shopName = $data['shopName'] ?? '';
            $shopPhone = $data['shopPhone'] ?? '';
            $shopAddress = $data['shopAddress'] ?? '';
            $email = $data['email'] ?? '';
            $shopOperator = $data['shopOperetor'] ?? '';
            $operatorPhone = $data['operatorPhone'] ?? '';
            $message = $data['message'] ?? '' ;
            Mail::to('info@ebloom.gr')->send(new NewShopMail($shopName,$shopPhone,$email,$shopAddress,$shopOperator,$operatorPhone,$message));
              // echo "<pre>";print_r($data);die;
            //   $user = new User;
            //   $user->name = $data['firstname'];
            //   $user->city = $data['lastname']; //city as last name for temporary
            //   $user->email = $data['email'];
            //   $user->mobile = $data['cellphone'];
            //   $user->address = $data['message'];

            //   $user->state = 'contact';
            //   $user->save();
            //   return redirect('/welcome');

            $success = [];
            $success['data'] = $data;
            $success['msg'] = 'Ok';
              return response()->json($success);

          }

          return view('shop');
    }

    public function emailTemplate(){

        // dd(Florist::find(5));
        DB::table('orders_products')->where(['id'=>325])->delete();

	         $order = Orders::find(324);
        //dd($order);
	
        dd($order->orders);

        //dd(Florist::where('name','Νταλαπερας')->first());
        $users = User::get();
        foreach ($users as $key => $user) {
            # code...
            echo $user->email."<br>";
        }
        User::where('email','TAKISMARKOS9@YAHOO.COM')->update(["points"=>"500"]);

	dd(User::where('email','TAKISMARKOS9@YAHOO.COM')->first());

        // dd(Florist::where('name','First Day')->first());
        // DB::table('florist_rating')->where(['florist_id'=>42])->update(['rating'=> '5' ]);
        // DB::table('florist_rating')->where(['id'=>19])->delete();
        // DB::table('florist_rating')->where(['id'=>24])->delete();
        // DB::table('florist_rating')->where(['id'=>25])->delete();
        // DB::table('florist_rating')->where(['id'=>29])->delete();
        
        // dd(DB::table('florist_rating')->get());
        // $rating = DB::table('florist_rating')->where(['florist_id'=>42])->get();
        // dd($rating);

        // Orders::delete();
        // dd(Auth::user());

        // Products::where('image','black-logo.jpeg')->update(['image'=> '' ]);

        // dd(Auth::user());
        // dd(Florist::where('name','test florist')->first());
        // DB::select('ALTER TABLE vendors ADD COLUMN vendor_group INT NOT NULL');
        // DB::select('ALTER TABLE florists ADD bank_name VARCHAR(255) NULL AFTER email');
        // DB::select('ALTER TABLE orders ADD re_address TEXT NULL AFTER address');
        // DB::select('ALTER TABLE orders ADD contactless VARCHAR(255) NULL AFTER address');

        // DB::select(' ALTER TABLE florists CHARACTER SET utf8 COLLATE utf8_bin');
        // DB::select('ALTER TABLE products MODIFY description_eng TEXT CHARACTER SET utf8 COLLATE utf8_bin');
        // DB::select('ALTER TABLE orders MODIFY contactless VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin');
        // DB::select('ALTER TABLE products CHANGE price int DEFAULT NULL');

        //add colum with default value
        // DB::select('ALTER TABLE orders ADD COLUMN showOrder INT DEFAULT 1 AFTER bussinessPhone');

        // dd('added');
        // Session::forget('checkoutAddress');
        // $couponAmount = [];
        // dd($couponAmount['address']);
        // Session::get('checkoutAddress')[''];
        // dd(Session::get('checkoutAddress')['florist_id'] ?? 'test' );

        // dd( $couponAmount['checkoutAddress'] ?? '' );

        // $order = Orders::find(13);
        // dd($order);
        // User::where('email','raisaeedanwar1187@gmail.com')->delete();

        $order = Orders::first();
        // dd($order);
        // $florist = Florist::where('id',$order->florist_id)->first();
        $florist = Florist::where('id',5)->first();
        
        // dd($florist);
        $products = Products::get();
        // dd('check');
        $email = 'raisaeedanwar1187@gmail.com';
        $email2 = 'takismarkos9@yahoo.com';
        $email3 = 'haseeb.rauf2@gmail.com';

        // Mail::to($email3)->send(new NewOrderMail($florist,$order,$products));
        $userCount = '';
        $timetable = DB::table('timetable')->where(['id'=>$order->delivery_time])->first();
        
        // $userCount = DB::table('florist_rating')->where(['user_email'=>$email])->count();
        // dd($userCount);
        // return view('emails.orders.inProcess')->with(compact('userCount','order','products','florist'));
        return view('emails.orders.shipped')->with(compact('userCount','order','products','florist','timetable'));
        
        // return view('emails.orders.shipped')->with(compact('userCount','order','products','florist'));

    }

    public function Blogs(){
        // if (app()->getLocale() == 'en') {
        //     # code...
        //     dd('eg');
        // }else{
        //     dd('gr');
        // }

        $blogs = DB::table('blogs')->orderBy('created_at','DESC')->get();

        $latestBlogs = DB::table('blogs')->orderBy('created_at','DESC')->paginate(3);
        // dd($latestBlogs);


        // dd(ShippingCharges::where(['id'=>$id])->get()->count());
        return view('blog')->with(compact('blogs','latestBlogs'));

    }

    public function blogDetails($en,$slug){
        $blog = DB::table('blogs')->where(['slug'=>$slug])->first();
        $blogDetails = DB::table('blog_details')->where(['blog_id'=>$blog->id])->get();
        // dd($blogDetails);
        // dd(ShippingCharges::where(['id'=>$id])->get()->count());
        if ($blog == null ) {
            # code...
            return view('404');
        }else{
            return view('blogDetails')->with(compact('blog','blogDetails'));

        }


    }


    public function Transfer(){

        $walletId = "223477412549";
        $targetWalletId = "647419518615";

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
        $totalAmount = 20;

        $transferBalance = $totalAmount - 5;

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
        var_dump($resp);

    }



    public function Transfer2(){
        // dd(Session::get('checkoutAddress'));
        // if ($request->isMethod('post')) {

            // $shippingDetails = DeliveryAddress::where('user_email',$user_email)->first();

        // ------------------ start payment section-----

        // The POST URL and parameters
        $walletId = "91883585";
        $targetWalletId = "38995427";
        // $request =  'https://demo.vivapayments.com/api/orders';	// demo environment URL
        $request =  'https://demo.vivapayments.com/api/wallets/'.$walletId.'/balancetransfer/'.$targetWalletId;	// demo environment URL

        // Your merchant ID and API Key can be found in the 'Security' settings on your profile.
        $merchant_id = 'd02176cc-cd20-4843-9ae4-0b9d37779247';
        $api_key = '&zhAfc';

        //Set the Payment Amount
        $amount = 100 * 100;	// Amount in cents

        //Set some optional parameters (Full list available here: https://developer.vivawallet.com/api-reference-guide/payment-api/#tag/Payments/paths/~1orders/post)
        $allow_recurring = 'true'; // If set to true, this flag will prompt the customer to accept recurring payments in the future.
        $request_lang = 'en-US'; //This will display the payment page in English (default language is Greek)
        $source = '9563'; // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.

        $postargs = 'Amount='.urlencode($amount).'&AllowRecurring='.$allow_recurring.$allow_recurring.'&RequestLang='.$request_lang.'&SourceCode='.$source.'&Description= text to show on account statement';

        // Get the curl session object
        $session = curl_init($request);
        // dd($session);
        // Set the POST options.
        curl_setopt($session, CURLOPT_POST, true);
        curl_setopt($session, CURLOPT_POSTFIELDS, $postargs);
        curl_setopt($session, CURLOPT_HEADER, true);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($session, CURLOPT_USERPWD, $merchant_id.':'.$api_key);
        // curl_setopt($session, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');

        // Do the POST and then close the session
        $response = curl_exec($session);
        dd($response);
        // Separate Header from Body
        $header_len = curl_getinfo($session, CURLINFO_HEADER_SIZE);
        $res_header = substr($response, 0, $header_len);
        $res_body =  substr($response, $header_len);

        // dd($res_header);
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
            // echo $e->getMessage();
            dd($e->getMessage());

        }

        if ($result_obj->ErrorCode==0){	//success when ErrorCode = 0

            dd($result_obj);

            $orderId = $result_obj->OrderCode;
            // echo 'Your Order Code is: <b>'. $orderId.'</b>';
            // echo '<br/><br/>';
            // echo 'To simulate a successful payment, use the 16-digit test credit card 5511070000000020, with a valid expiration date and 111 as CVV2.';
            // echo '</br/><a href="https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId.'" >Make Payment</a>';
            // return redirect('https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId);

            // return view('checkout')->with(compact('floristDetails','orderId'));
        }
        else{
            echo 'The following error occured: ' . $result_obj->ErrorText;
        }

        // ----end payment section----------




        // }
        // dd('no run');
    }

    function calculateDistance(){
        $lat1 = '32.082466';
        $lon1 = '72.669128';
        $lat2 = '33.738045';
        $lon2 = '73.084488';
        $unit = 'K';


        //Calculate distance from latitude and longitude
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;

        $distance = ($miles * 1.609344).' km';
        dd($distance);
        // first method
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
            return 0;
        }
        else {
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            if ($unit == "K") {
                echo 'K';
                return ($miles * 1.609344);
            } else if ($unit == "N") {
                return ($miles * 0.8684);
            } else {
                echo 'M';


                return $miles;
            }
        }
    }


    function getDistance(){
        // Google API key
        $apiKey = 'AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4';
        $addressFrom = "Sargodha";
        $addressTo = "Islamabad";
        $unit = 'K';

        $origin = $addressFrom; $destination = $addressTo;
        $api = $this->file_get_content_curl("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4");
        $data = json_decode($api);
        dd(($data->rows[0]->elements[0]->distance->value / 1000).' Km');
        dd($data);


        // Change address format
        $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
        $formattedAddrTo     = str_replace(' ', '+', $addressTo);

        // Geocoding API request with start address
        $geocodeFrom = $this->file_get_content_curl('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&key='.$apiKey);
        $outputFrom = json_decode($geocodeFrom);
        if(!empty($outputFrom->error_message)){
            return $outputFrom->error_message;
        }

        // Geocoding API request with end address
        $geocodeTo = $this->file_get_content_curl('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false&key='.$apiKey);
        $outputTo = json_decode($geocodeTo);
        if(!empty($outputTo->error_message)){
            return $outputTo->error_message;
        }

        // Get latitude and longitude from the geodata
        $latitudeFrom    = $outputFrom->results[0]->geometry->location->lat;
        $longitudeFrom    = $outputFrom->results[0]->geometry->location->lng;
        $latitudeTo        = $outputTo->results[0]->geometry->location->lat;
        $longitudeTo    = $outputTo->results[0]->geometry->location->lng;

        // Calculate distance between latitude and longitude
        $theta    = $longitudeFrom - $longitudeTo;
        $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
        $dist    = acos($dist);
        $dist    = rad2deg($dist);
        $miles    = $dist * 60 * 1.1515;

        // Convert unit and return distance
        $unit = strtoupper($unit);
        if($unit == "K"){
            return round($miles * 1.609344, 2).' km';
        }elseif($unit == "M"){
            return round($miles * 1609.344, 2).' meters';
        }else{
            return round($miles, 2).' miles';
        }
    }

    public function matchStore2(){

        if (Session::has('address')) {
            # code...


            

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
            $userSelectedDay = Session::get('address')['dayName'];

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
            $userDate = Session::get('address')['date'];
            $today = date('d-m-Y');
            // date_default_timezone_set('America/Los_Angeles');
            // date_default_timezone_set('MST');
            // dd(date_default_timezone_get());
            $currentHours = date('H');
            $addTwoHours = $currentHours;
            // dd($currentHours);


            foreach ($allFlorists as $key => $florist) {
                # code...

                $addressFrom = $florist->address;
                // $addressTo = 'Ilioupoli, Greece';
                $addressTo = Session::get('address')['completeAddress'];



                $origin = str_replace(' ', '+', $addressFrom);
                $destination = str_replace(' ', '+', $addressTo);

                // $api = $this->file_get_content_curl("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4");
                // $data = json_decode($api);

                $lat1 = $florist->lat;
                $lon1 = $florist->lng;
                $lat2 = Session::get('address')['lat'];
                $lon2 = Session::get('address')['lng'];
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

                            // foreach ($timetable as $key => $time) {
                            //     echo 'from hours: '.$time->fromHour.'<br>';

                            // }

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
                                            // echo 'from hours: '.$time->fromHour.'<br>';


                                            // dd("timetable ".'<br>');

                                            if ($time->florist_id == $florist->id) {
                                                # code...
                                                // echo 'time co'.'<br>';
                                                // echo 'florist id: '.$florist->id.'<br>';
                                                // echo 'time florist id: '.$time->florist_id.'<br>';

                                                // echo 'day: current day: '.$currentDayName.'<br>';
                                                // echo 'day: time day: '.$time->day.'<br>';
                                                // echo 'status: '.$time->status.'<br>';
                                                // echo '----------------------------'.'<br>';


                                                if ($time->status == '1' && $time->day == $currentDayName ) {
                                                    // echo "pass all coditio ".'<br>';
                                                    // dd('status');
    
                                                    if ($userDate == $today) {
                                                        // echo "pass today ".'<br>';
                                                        
                                                        // echo 'from hours: '.$time->fromHour.'<br>';
                                                        // echo 'addTwo hours: '.$addTwoHours.'<br>';

                                                        if ( $time->fromHour >= $addTwoHours) {
                                                            // if ($timeCount === 1) {
                                                            //     break;
                                                            // }
                                                            // dd('here');
                                                            // echo "pass two hours ".'<br>';

    
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
                            }
                            // echo '<br>----------------------<br>';
                //         }//status ok
                //     }//status ok
                // } //check data

                $rating = DB::table('florist_rating')->where(['florist_id'=>$florist->id])->whereNotNull('rating')->get();
                $ratingCount = $rating->count();
                // dd($ratingCount);
                $floristRating = $rating->count() > 0 ? round($rating->sum('rating')/$rating->count(),2) : '0.0';
                Florist::where('id',$florist->id)->update(['rating'=>$floristRating,'ratingCount'=>$ratingCount]);

            }//end of foreach

            // dd($matchFlorists);
            usort($matchFlorists, function($a, $b)
            {
                return ($a->distance > $b->distance);
                // return strcmp($a->minimam_order, $b->minimam_order);
            });
            // dd($matchFlorists);
            return view('beforePageLoadSearch')->with(compact('matchFlorists'));
            // return response()->json($matchFlorists, 200);


        }else{//end of check session
            return redirect('/welcome');
        }
    }// end of matchStore function




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

    //this is api matchStore Method
    public function matchStore23(Request $request){


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
            $userSelectedDay = 'Monday';

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
            $userDate = '28/10/2021';
            $today = date('d/m/Y');
            date_default_timezone_set('America/Los_Angeles');
            // date_default_timezone_set('MST');
            // dd(date_default_timezone_get());
            $currentHours = '10';
            $addTwoHours = $currentHours+2;
            // dd($currentHours);
            $latlong    =  $this->get_lat_long('Ilioupoli, Greece');
            // create a function with the name "get_lat_long" given as below
            $map = explode(',' ,$latlong);
            $userLat = $map[0];
            $userLong = $map[1];


            foreach ($allFlorists as $key => $florist) {
                # code...

                $addressFrom = $florist->address;
                // $addressTo = 'Ilioupoli, Greece';
                $addressTo = 'Ilioupoli, Greece';



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

                $rating = DB::table('florist_rating')->where(['florist_id'=>$florist->id])->whereNotNull('rating')->get();
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



}   //end controller

