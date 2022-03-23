<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\NewOrder;
use App\Notifications\updateStatus;
use Image;
use App\Products;
use App\Category;
use App\ProductsAttributes;
use App\ProductsImages;
use App\Coupons;
use App\Occasion;
use App\Type;
use App\Florist;
use App\Mail\OrderShipped;
use App\Mail\InProcessOrder;
use DB;
use Session;
use Auth;
use App\User;
use App\DeliveryAddress;
use App\Orders;
use App\OrdersProduct;
use Mail;
use App\admin;
use Carbon\Carbon;

class ProductsController extends Controller
{
    public function addProduct(Request $request){

        if($request->ismethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $product = new Products;
            if (Session::has('floristSession')) {
                # code...
                $florist = Florist::where(['email'=>Session::get('floristSession')])->first();

            }else{
                $florist = Florist::where(['email'=>Session::get('adminSession')])->first();
            }

    		// dd($florist->id);
            $product->occasion_id = $data['occasion_id'];
            // $product->type_id = $data['type_id'];
            $product->name = $data['product_name'];
            $product->code = $data['product_code'];
            // $product->company = $data['product_company'];
            $product->slug = str_slug($data['product_name']);
            $product->florist_id = $florist->id;
            // dd($product->florist_id);
            if(!empty($data['product_description'])){
                $product->description = $data['product_description'];

            }else{
                $product->description = '';
            }
            $product->price = $data['product_price'];

            //Upload image
            if($request->hasfile('image')){
                echo $img_tmp = Input::file('image');
                if($img_tmp->isValid()){

                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/products/'.$filename;

                //image resize
                Image::make($img_tmp)->resize(500,500)->save($img_path);

                $product->image = $filename;
            }
            }
            $product->save();
            return redirect('/admin/view-products')->with('flash_message_success','Product has been added successfully!!');

        } 
        //Categories Dropdown menu Code
        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($categories as $cat){
            $categories_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
            $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            foreach($sub_categories as $sub_cat){
                $categories_dropdown .="<option value='".$sub_cat->id."'>&nbsp;--&nbsp".$sub_cat->name."</option>";

            }
        }
        //Occasion Dropdown menu Code
        $occasions = Occasion::get();
        $occasions_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($occasions as $cat){
            $occasions_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
           
        }
        //Flower type Dropdown menu Code
        $types = Type::get();
        $types_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($types as $cat){
            $types_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
           
        }

        if (Session::has('floristSession') ) {//2 means shop owner
            $floristId = Session::get('floristId');
        }else{
            $floristId = Session::get('adminId');
        }
        $orders = orders::where(['florist_id'=>$floristId])->get();
        Session::put('orders',$orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }

        return view('admin.products.add_product')->with(compact('categories_dropdown','occasions_dropdown','types_dropdown'));
    }
    public function viewProducts(){
        $products = null;
        if (Session::get('adminSession')=='admin') {
            // $products = Products::get();
            if (Session::has('floristSession')) {
                $florist = Florist::where(['email'=>Session::get('floristSession')])->first();
           }else{
               $florist = Florist::where(['email'=>Session::get('adminSession')])->first();
           }
            $products = Products::where(['florist_id'=>$florist->id])->get();

        }else{
            if (Session::has('floristSession')) {
                 $florist = Florist::where(['email'=>Session::get('floristSession')])->first();
            }else{
                $florist = Florist::where(['email'=>Session::get('adminSession')])->first();
            }
            // $florist = Florist::where(['email'=>Session::get('adminSession')])->first();
            // dd($florist->id);
            $products = Products::where(['florist_id'=>$florist->id])->get();
            // dd($products);
            // $products = Products::get();
        }
        $types = Type::get();

        if (Session::has('floristSession') ) {//2 means shop owner
            $floristId = Session::get('floristId');
        }else{
            $floristId = Session::get('adminId');
        }
        $orders = orders::where(['florist_id'=>$floristId])->get();
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }

        return view('admin.products.view_products')->with(compact('products','types'));
    }
    public function editProduct(Request $request,$id=null){
        if($request->isMethod('post')){
             $data = $request->all();
             //Upload image
            if($request->hasfile('image')){
                echo $img_tmp = Input::file('image');
                if($img_tmp->isValid()){

                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/products/'.$filename;

                //image resize
                Image::make($img_tmp)->resize(500,500)->save($img_path);

            }
            }else{
                $filename = $data['current_image'];
            }
            if(empty($data['product_description'])){
                $data['product_description'] = '';
            }
            Products::where(['id'=>$id])->update(['name'=>$data['product_name'],
            'occasion_id'=>$data['occasion_id'],'code'=>$data['product_code'],
            'description'=>$data['product_description'],'price'=>$data['product_price'],'slug'=>str_slug($data['product_name']),
            'image'=>$filename]);
            return redirect('/admin/view-products')->with('flash_message_success','Product has been updated!!');
        }
        $productDetails = Products::where(['id'=>$id])->first();

        //Occasion dropdown code 
        $occasions = Occasion::get();
        $occasions_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($occasions as $cat){
            if($cat->id==$productDetails->occasion_id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $occasions_dropdown .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
            //code for showing subcategories in main category
            // $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            // foreach($sub_categories as $sub_cat){
            //     if($sub_cat->id==$productDetails->category_id){
            //         $selected = "selected";
            //     }else{
            //         $selected = "";
            //     }
            // $categories_dropdown .= "<option value = '".$sub_cat->id."' ".$selected.">&nbsp;--&nbsp;".$sub_cat->name."</option>";
            // }
        }
        //Flower type dropdown code 
        $types = Type::get();
        $types_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($types as $cat){
            if($cat->id==$productDetails->type_id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $types_dropdown .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
            
        }

        if (Session::has('floristSession') ) {//2 means shop owner
            $floristId = Session::get('floristId');
        }else{
            $floristId = Session::get('adminId');
        }
        $orders = orders::where(['florist_id'=>$floristId])->get();
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }

        return view('admin.products.edit_product')->with(compact('productDetails','occasions_dropdown','types_dropdown'));
    }
    public function deleteProduct($id=null){
        Products::where(['id'=>$id])->delete();
        Alert::success('Deleted Successfully', 'Success Message');
        return redirect()->back()->with('flash_message_error','Product Deleted');
    }
    public function deleteOrder($id=null){
        Orders::where(['id'=>$id])->delete();
        Alert::success('Deleted Successfully', 'Success Message');
        return redirect()->back()->with('flash_message_error','Order Deleted');
    }

    
    public function updateStatus(Request $request,$id=null){
        $data = $request->all(); 
        Products::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
    public function products($slug=null){

        $product = Products::where(['slug'=>$slug])->first();
        if ($product!=null) {
           
            $featuredProducts = Products::where(['featured_products'=>1])->get();
            $productDetails = Products::with('attributes')->where('id',$product->id)->first();
            $ProductsAltImages = ProductsImages::where('product_id',$product->id)->get();
            // echo $productDetails;die;

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


            return view('wayshop.product_details')->with(compact('productDetails','ProductsAltImages','featuredProducts','userCart'));
        }else{
            return redirect()->back();
        }
    }
    public function addAttributes(Request $request,$id=null){
        $productDetails = Products::with('attributes')->where(['id'=>$id])->first();
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            foreach($data['sku'] as $key =>$val){
                if(!empty($val)){
                    //Prevent duplicate SKU Record
                    $attrCountSKU = ProductsAttributes::where('sku',$val)->count();
                    if($attrCountSKU>0){
                        return redirect('/admin/add-attributes/'.$id)->with('flash_message_error','SKU is already exist please select another sku');
                    }
                    //Prevent duplicate Size Record
                    $attrCountSizes = ProductsAttributes::where(['product_id'=>$id,'size'=>$data['size']
                    [$key]])->count();
                    if($attrCountSizes>0){
                    return redirect('/admin/add-attributes/'.$id)->with('flash_message_error',''.$data['size'][$key].'Size is already exist please select another size');
                    }
                    $attribute = new ProductsAttributes;
                    $attribute->product_id = $id;
                    $attribute->sku = $val;
                    $attribute->size = $data['size'][$key];
                    $attribute->price = $data['price'][$key];
                    $attribute->stock = $data['stock'][$key];
                    $attribute->save();
                }

            }
            return redirect('/admin/add-attributes/'.$id)->with('flash_message_success','Products attributes added successfully!');

        }
        return view('admin.products.add_attributes')->with(compact('productDetails'));
    }
    public function addDiscount(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo"<pre>"; print_r($data);die;
            DB::table('product_discount')->insert(['product_id'=>$data['product_id'],'amount'=>$data['amount'],
            'amount_type'=>$data['amount_type'],'expiry_date'=>$data['expiry_date'],'status'=>1]); 
            // return redirect('/admin/view-discounts')->with('flash_message_success','Coupon has been added Successfully');
          }
        $product = Products::where('id',$id)->first();
        $discounts = DB::table('product_discount')->where(['product_id'=>$id])->get();
        if (Session::has('floristSession') ) {//2 means shop owner
            $floristId = Session::get('floristId');
        }else{
            $floristId = Session::get('adminId');
        }
        $orders = orders::where(['florist_id'=>$floristId])->get();
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }
        return view('admin.products.add_discount')->with(compact('product','discounts')); 
    }
    public function updateDiscountStatus(Request $request,$id=null){
        $data = $request->all();
        DB::table('product_discount')->where('id',$data['id'])->update(['status'=>$data['status']]);  
    }
    public function deleteDiscount($id=null){
        DB::table('product_discount')->where('id',$id)->delete();
        Alert::success('Deleted', 'Success Message');
        return redirect()->back();
        } 
    public function deleteAttribute($id=null){
        ProductsAttributes::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error','Product Attribute is deleted!');

    }
    public function editAttributes(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            foreach($data['attr'] as $key=>$attr){
                ProductsAttributes::where(['id'=>$data['attr'][$key]])->update(['sku'=>$data['sku'][$key],
                'size'=>$data['size'][$key],'price'=>$data['price'][$key],'stock'=>$data['stock'][$key]]);
            }
            return redirect()->back()->with('flash_message_success','Products Attributes Updated!!!');
        }
    }
    public function addImages(Request $request,$id=null){
        $productDetails = Products::where(['id'=>$id])->first();
        $productType = Type::where(['id'=>$productDetails->type_id])->first();
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasfile('image')){
                $files = $request->file('image');
                foreach($files as $file){
                    $image = new ProductsImages;
                    $extension = $file->getClientOriginalExtension();
                    $filename = rand(111,9999).'.'.$extension;
                    $image_path = 'uploads/products/'.$filename;
                    Image::make($file)->save($image_path);
                    $image->image = $filename;
                    $image->product_id = $data['product_id'];
                    $image->save();
                }
            }
            return redirect('/admin/add-images/'.$id)->with('flash_message_success','Image has been updated');
        }
        if (Session::has('floristSession') ) {//2 means shop owner
            $floristId = Session::get('floristId');
        }else{
            $floristId = Session::get('adminId');
        }
        $orders = orders::where(['florist_id'=>$floristId])->get();
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }
        $productImages = ProductsImages::where(['product_id'=>$id])->get();
        return view('admin.products.add_images')->with(compact('productDetails','productType','productImages'));
    }
    public function deleteAltImage($id=null){
        $productImage = ProductsImages::where(['id'=>$id])->first();

        $image_path = 'uploads/products/';
        if(file_exists($image_path.$productImage->image)){
            unlink($image_path.$productImage->image);
        }
        ProductsImages::where(['id'=>$id])->delete();
        Alert::success('Deleted','Success Message');
        return redirect()->back();
    }
    public function updateFeatured(Request $request,$id=null){
        $data = $request->all();
        Products::where('id',$data['id'])->update(['featured_products'=>$data['status']]);

    }
    public function getprice(Request $request){
         $data = $request->all();
        //  echo "<pre>";print_r($data);die;
        $proArr = explode("-",$data['idSize']);
        $proAttr = ProductsAttributes::where(['product_id'=>$proArr[0],'size'=>$proArr[1]])->first();
        echo $proAttr->price;
    }
    public function addtoCart(Request $request){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        $data = $request->all();
        // dd($data);
        // echo "<pre>";print_r($data);die;
        // dd(Session::get('session_id'));
        if(empty(Auth::user()->email)){
            $data['user_email'] = '';
        }
        else{
            $data['user_email'] = Auth::user()->email;
        }
        $session_id = Session::get('session_id');
        if(empty($session_id)){
        $session_id = str_random(40);
        Session::put('session_id',$session_id);
        }
        
        // $sizeArr = explode('-',$data['size']);
        $countProducts = DB::table('cart')->where(['product_id'=>$data['product_id'],'product_color'=>'color','price'=>$data['price'],
        'size'=>'1','session_id'=>$session_id])->count();
        if($countProducts>0){
            return redirect()->back()->with('flash_message_error','Product already exists in cart');
        }else{
            DB::table('cart')->insert(['product_id'=>$data['product_id'],'product_name'=>$data['product_name'],
            'product_code'=>$data['product_code'],'company'=>$data['company'],'price'=>$data['price'],
            'size'=>'1','quantity'=>$data['quantity'],'user_email'=>$data['user_email'],
            'session_id'=>$session_id]); 
        }
        if (Auth::check()) {
            Auth::user()->notify(new NewOrder());
        }
        
        return redirect('/cart')->with('flash_message_success','Product has been added in cart');
    }
    public function cart(Request $request){

        if (Auth::check()) {
            $user_email = Auth::user()->email;
            $session_id = Session::get('session_id');
            
            $userCart= DB::table('cart')->where(function ($query) use ($user_email,$session_id) {
                $query->where('user_email', '=', $user_email)
                      ->orWhere('session_id', '=', $session_id);
            })->get();
            // dd($userCart);
            // $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
        }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
        }
        // dd($session_id);
        foreach($userCart as $key=>$products){
            $productDetails = Products::where(['id'=>$products->product_id])->first();
            $userCart[$key]->image = $productDetails->image;
        }
        // echo "<pre>";print_r($userCart);die;
        return view('wayshop.products.cart')->with(compact('userCart'));
    }
    public function deleteCartProduct($id=null){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        DB::table('cart')->where('id',$id)->delete();
        return redirect('/cart')->with('flash_message_error','Product has been deleted!');
    }
    public function updateCartQuantity($id=null,$quantity=null){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        DB::table('cart')->where('id',$id)->increment('quantity',$quantity);
        return redirect('/cart')->with('flash_message_success','Product Quantity has been updated Successfully');
    }
    public function applyCoupon(Request $request){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $couponCount = Coupons::where('coupon_code',$data['coupon_code'])->count();
            if($couponCount == 0){
                return response()->json('invalid');
                // return redirect()->back()->with('flash_message_error','Coupon code does not exists');
            }else{
                // echo "Success";die;
                $couponDetails = Coupons::where('coupon_code',$data['coupon_code'])->first();
                //Coupon code status
                if($couponDetails->status==0){
                    return response()->json('not-active');
                    // return redirect()->back()->with('flash_message_error','Coupon code is not active');
                }
                //Check coupon expiry date
                $expiry_date = $couponDetails->expiry_date;
                $current_date = date('Y-m-d');
                if($expiry_date < $current_date){
                    return response()->json('expired');
                    // return redirect()->back()->with('flash_message_error','Coupon Code is Expired');
                }
                //Coupon is ready for discount
                
                $total_amount = 0;
                if (Session::has('cart')) {
                    foreach (Session::get('cart') as  $item) {
                        if ($item['store']==$data['store']){
                            $total_amount = $total_amount + ($item['price']*$item['quantity']);
                        }
                    }
                }
                //Check if coupon amount is fixed or percentage
                if($couponDetails->amount_type=="Fixed"){
                    $couponAmount = $couponDetails->amount;
                    $couponType = "€";
                }else{
                    $couponAmount = $total_amount * ($couponDetails->amount/100);
                    $couponType = "%";
                }
                //Add Coupon code in session
                Session::put('CouponAmount',$couponAmount);
                Session::put('CouponCode',$data['coupon_code']);
                $success = [];
                $success['couponAmount'] = $couponAmount;
                $success['couponType'] = $couponType;
                $success['finalAmount'] = $total_amount - $couponAmount;
                $success['msg'] = 'Ok';
                return response()->json($success);
                // return redirect()->back()->with('flash_message_success','Coupon Code is Successffully Applied.You are Availing Discount');
            }
        }
    }

    public function cancelCoupon(){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        return redirect()->back();
    }

    public function checkout(Request $request){
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;

        $userDetails = User::find($user_id);
        $shippingCount = DeliveryAddress::where('user_id',$user_id)->count();
        
        #update cart table
        // $session_id = Session::get('session_id');
        // DB::table('cart')->where('session_id',$session_id)->update(['user_email'=>$user_email]);

        if ($request->isMethod('post')) {
            # code...
            $data = $request->all();
            // dd($data);
            // if ($shippingCount > 0) {
            //     DeliveryAddress::where('user_id',$user_id)->update(['name']);
            // } else {
                $shipping = new DeliveryAddress();
                $shipping->user_id = $user_id;
                $shipping->user_email = $user_email;
                $shipping->name = $data['name'];
                $shipping->address = $data['address'];
                $shipping->city = $data['city'];
                $shipping->state = $data['state'];
                $shipping->country = $data['country'];
                $shipping->pincode = $data['pincode'];
                $shipping->mobile = $data['mobile'];
                $shipping->save();
            // }
            // echo 'redirect ',die;
            return redirect('/order_review');
            
        }

        return view('wayshop.products.checkout')->with(compact('userDetails'));
    }

    public function orderReview(){

        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;

        $userDetails = User::find($user_id);
        $shippingDetails = DeliveryAddress::where('user_id',$user_id)->first();
        $userCart = DB::table('cart')->where('user_email',$user_email)->get();

        foreach ($userCart as $key => $product) {
            $productDetails = Products::where('id',$product->product_id)->first();
            $userCart[$key]->image = $productDetails->image;
        }

        return view('wayshop.products.order_review')->with(compact('shippingDetails','userCart'));
    }
    public function placeOrder(Request $request){
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
        $amount = Session::get('checkoutAddress')['total_amount'] * 100;	// Amount in cents

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
            return redirect('https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId);
            
            // return view('checkout')->with(compact('floristDetails','orderId'));
        }
        else{
            echo 'The following error occured: ' . $result_obj->ErrorText;
        }

        // ----end payment section----------


            
            
        // }
        // dd('no run');
    }

    public function thanks(){
        $user_email = Auth::user()->email;
        DB::table('cart')->where('user_email',$user_email)->delete();
        // Session::forget('session_id');
        return view('wayshop.orders.thanks');
    }

    public function userOrders(){
        $user_id = Auth::user()->id;
        $orders = Orders::with('orders')->where('user_id',$user_id)->orderBy('id','DESC')->get();
        // dd($orders);
        return view('order')->with(compact('orders'));
    }

    public function userOrderDetails($order_id){
        $orderDetails = Orders::with('orders')->where('id',$order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id',$user_id)->first();
        $products = Products::get();

        
        // if (Session::get('adminId') == $orderDetails->florist_id) {
        //     if ($orderDetails->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                
        //     }
        // }
        return view('orderDetails')->with(compact('orderDetails','userDetails','products'));
    }

    //admin view orders

    public function viewOrders(){
        // dd(Session::get('adminId'));
        
        if (Session::get('adminStatus')=="1") {
            # code...
            // $orders = Orders::with('orders')->orderBy('id','DESC')->get();
            $orders = Orders::where('florist_id', '<>', '')->get();
        }else{
            if (Session::has('floristSession') ) {//2 means shop owner
                $floristId = Session::get('floristId');
            }else{
                $floristId = Session::get('adminId');
            }
            $orders = orders::where(['florist_id'=>$floristId])->get();
            // foreach ($orders as $key => $order) {
            //             # code...
            //     if ($order->order_status=="New") {
            //         Alert::info('You have recived new order', 'Change Order Status');
                                
            //     }
            // }
            $orders = Orders::where(['florist_id'=>Session::get('adminId')])->get();
        }
        
        return view('admin.orders.view_orders')->with(compact('orders'));
    }
    
    public function viewCanceledOrders(){
        // dd(Session::get('adminId'));
          // $orders = Orders::with('orders')->orderBy('id','DESC')->get();
        $orders = Orders::where(['order_status'=> 'Not Accepted'])->get();
        
        
        return view('admin.orders.cancel_orders')->with(compact('orders'));
    }
    public function floristViewOrders(){

        // $orders = Orders::with('orders')->orderBy('id','DESC')->get();
        if (Session::has('floristSession')) {
            # code...
            $orders = Orders::where(['florist_id'=>Session::get('floristId')])->get();
        }else{
            $orders = Orders::where(['florist_id'=>Session::get('adminId')])->get();
        }
        if (Session::has('floristSession') ) {//2 means shop owner
            $floristId = Session::get('floristId');
        }else{
            $floristId = Session::get('adminId');
        }
        $orders = orders::where(['florist_id'=>$floristId])->get();
        Session::put('orders',$orders); 
        $timetable = DB::table('timetable')->where(['florist_id'=>$floristId])->get();
        Session::put('timeTable',$timetable);
        // dd($orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }
        // dd(count($orders));
        // $florists = Florist::get();
        return view('admin.orders.florist_orders')->with(compact('orders'));
    }

    public function floristViewOrderDetails($order_id){
        $orderDetails = Orders::with('orders')->where('id',$order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id',$user_id)->first();
        $products = Products::get();
        $orders = orders::where(['florist_id'=>Session::get('adminId')])->get();
        Session::put('orders',$orders); 
        // if (Session::get('adminId') == $orderDetails->florist_id) {
        //     if ($orderDetails->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                
        //     }
        // }
        $timetable = DB::table('timetable')->where(['id'=>$orderDetails->delivery_time])->first();
        return view('admin.orders.florist_order_details')->with(compact('orderDetails','userDetails','products','timetable'));
    }

    public function viewOrderDetails($order_id){
        $orderDetails = Orders::with('orders')->where('id',$order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id',$user_id)->first();
        $products = Products::get();
        // dd($orderDetails->delivery_time);
        $timetable = DB::table('timetable')->where(['id'=>$orderDetails->delivery_time])->first();
        // dd($timetable);
        // Alert::info('Order Status', 'Change Order Status');
        $florist = Florist::where(['id'=>$orderDetails->florist_id])->first();
        if ($timetable != null) {
            # code...
            
            $timeLimit = $timetable->fromHour - 1;
            // dd($timeLimit);
            $timeHours = 19;
        }
        // $now = Carbon::now();
        // $month = $now->format('F');
        // $year = $now->format('yy');
        // $hours = $now->format('h');
        // $date = $orderDetails->delivery_date;
        // // dd($date);
        // // $time = Carbon::parse($date)->format('Y-m-d h:iA');
        // $time = Carbon::parse($now)->format('d-m-Y');
        // dd($time);
        // $fourthFridayMonthly = new Carbon('fourth friday of ' . $month . ' ' . $year);
        // dd($fourthFridayMonthly);
        // if ($date == '24-04-2021') {
        //     # code...
        //     dd('match');
        // }else{
        //     dd('not match');
        // }
        // dd($time);
        // dd($hours);
        // if (Session::get('adminId') == $orderDetails->florist_id) {
        //     if ($orderDetails->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
        //         if ($timetable != null) {
        //             if ($timeHours == $timeLimit ) {
        //                 $admin =  admin::where(['username'=>'admin'])->first();
        //                 $admin->notify(new updateStatus($florist));
                        
        //             }
        //         }
                
        //     }
        // }
        return view('admin.orders.order_details')->with(compact('orderDetails','userDetails','products','timetable'));
    }
 
    public function updateOrderStatus(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
        }else {
            return view('404');
        }
        $order = Orders::where('id',$data['order_id'])->first();
        // dd($order->user_email);
        Orders::where('id',$data['order_id'])->update(['order_status'=>$data['order_status']]);
        $newOrders = Orders::with('orders')->where('order_status','New')->get();
        if ($data['order_status']=="Delivered") {
            // dd('check');
            Mail::to($order->user_email)->send(new OrderShipped($order->florist_id));        
            
        }
        if ($data['order_status']=="In Process") {
            Mail::to($order->user_email)->send(new InProcessOrder($order->florist_id));        
            
        }
        // if ($data['order_status']=="Cancelled") {
        //     Mail::to($order->user_email)->send(new OrderShipped($order->florist_id));        
            
        // }
        // Products::where('id',$data['id'])->update(['status'=>$data['status']]);
        Session::put('newOrders',$newOrders);
        return redirect()->back()->with('flash_message_success','Order Status has been Updated Successfully!');
    }

    public function orderInvoice($order_id){
        $orderDetails = Orders::with('orders')->where('id',$order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id',$user_id)->first();
        $products = Products::get();
        // dd($orderDetails->delivery_time);
        return view('admin.orders.invoice')->with(compact('orderDetails','userDetails','products'));
    }

}//end of controller
