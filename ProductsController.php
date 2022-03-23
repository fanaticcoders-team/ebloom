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
use App\Mail\NewOrderMail;
use App\Mail\CancelOrder;
use App\Mail\NotAccepted;


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
use Exception;

class ProductsController extends Controller
{
    public function addProduct(Request $request)
    {
        if ($request->ismethod('post')) {
            $data = $request->all();
            // dd($data);
            // echo "<pre>";print_r($data);die;
            $product = new Products;
            if (Session::has('floristSession')) {
                # code...
                $florist = Florist::where(['email' => Session::get('floristSession')])->first();
            } else {
                if (Session::has('adminSession')) {
                    # code...
                    $florist = Florist::where(['email' => Session::get('adminSession')])->first();
                } else {
                    # code...
                    return redirect('/florist');
                }
            }

            // dd($florist->id);
            $product->occasion_id = $data['occasion_id'];
            // $product->type_id = $data['type_id'];
            $product->name = $data['product_name'];
            $product->name_eng = $data['product_name_english'];

            $product->code = $data['product_code'];
            $product->code_eng = $data['product_code_english'];

            // $product->company = $data['product_company'];
            $product->slug = str_slug($data['product_name']);
            $product->florist_id = $florist->id;
            // dd($product->florist_id);
            if (!empty($data['product_description'])) {
                $product->description = $data['product_description'];
            } else {
                $product->description = '';
            }
            if (!empty($data['product_description_english'])) {
                $product->description_eng = $data['product_description_english'];
            } else {
                $product->description_eng = '';
            }

            $product->price = $data['product_price'] ?? 0;

            //Upload image
            if ($request->hasfile('image')) {
                echo $img_tmp = Input::file('image');
                if ($img_tmp->isValid()) {

                    //image path code
                    $extension = $img_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $img_path = 'uploads/products/' . $filename;

                    //image resize
                    Image::make($img_tmp)->save($img_path);

                    $product->image = $filename;
                }
            } else {

                $product->image = '';
            }
            $product->save();
            $current_date_time = Carbon::now()->toDateTimeString();
            $productCount = Products::where('florist_id', $florist->id)->get()->count();
            if ($productCount >= 5) {
                # code...
                if ($florist->created_at == null) {
                    # code...
                    Florist::where('id', $florist->id)->update(['created_at' => $current_date_time]);
                }
            }
            return redirect(app()->getLocale() . '/admin/view-products')->with('flash_message_success', 'Product has been added successfully!!');
        }
        //Categories Dropdown menu Code
        $categories = Category::where(['parent_id' => 0])->get();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($categories as $cat) {
            $categories_dropdown .= "<option value='" . $cat->id . "'>" . $cat->name . "</option>";
            $sub_categories = Category::where(['parent_id' => $cat->id])->get();
            foreach ($sub_categories as $sub_cat) {
                $categories_dropdown .= "<option value='" . $sub_cat->id . "'>&nbsp;--&nbsp" . $sub_cat->name . "</option>";
            }
        }
        //
        //Occasion Dropdown menu Code
        $occasions = Occasion::get();
        $occasions_dropdown = "<option value='' selected disabled>Επιλογή</option>";
        foreach ($occasions as $cat) {
            $occasions_dropdown .= "<option value='" . $cat->id . "'>" . $cat->name . "</option>";
        }
        $occasions_dropdown_eng = "<option value='' selected disabled>Select</option>";
        foreach ($occasions as $cat) {
            $occasions_dropdown_eng .= "<option value='" . $cat->id . "'>" . $cat->name_eng . "</option>";
        }
        //Flower type Dropdown menu Code
        $types = Type::get();
        $types_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($types as $cat) {
            $types_dropdown .= "<option value='" . $cat->id . "'>" . $cat->name . "</option>";
        }

        if (Session::has('floristSession')) { //2 means shop owner
            $floristId = Session::get('floristId');
        } else {
            if (Session::has('adminId')) {

                # code...
                $floristId = Session::get('adminId');
            } else {
                # code...
                return redirect('/florist');
            }
        }
        $orders = orders::where(['florist_id' => $floristId, 'showOrder' => 1])->get();
        Session::put('orders', $orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');

        //     }
        // }

        return view('admin.products.add_product')->with(compact('occasions_dropdown_eng', 'categories_dropdown', 'occasions_dropdown', 'types_dropdown'));
    }
    public function viewProducts()
    {
        $products = null;
        if (Session::has('floristSession')) {
            $florist = Florist::where(['email' => Session::get('floristSession')])->first();
        } else {
            if (Session::has('adminSession')) {
                $florist = Florist::where(['email' => Session::get('adminSession')])->first();
                # code...
            } else {
                # code...
                return redirect('/florist');
            }
        }
        // $florist = Florist::where(['email'=>Session::get('adminSession')])->first();
        // dd($florist->id);
        if ($florist != null) {
            # code...
            $products = Products::where(['florist_id' => $florist->id])->get();
        } else {
            return redirect('/florist');
        }

        // dd($products);
        // $products = Products::get();

        $types = Type::get();

        if (Session::has('floristSession')) { //2 means shop owner
            $floristId = Session::get('floristId');
        } else {
            if (Session::has('adminId')) {
                # code...
                $floristId = Session::get('adminId');
            } else {
                return redirect('/florist');
            }
        }
        $orders = orders::where(['florist_id' => $floristId, 'showOrder' => 1])->get();
        Session::put('orders', $orders);

        $discounts = DB::table('product_discount')->get();
        // dd($discounts);

        return view('admin.products.view_products')->with(compact('products', 'discounts', 'types'));
    }
    public function editProduct($en, Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //Upload image
            if ($request->hasfile('image')) {
                echo $img_tmp = Input::file('image');
                if ($img_tmp->isValid()) {

                    //image path code
                    $extension = $img_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $img_path = 'uploads/products/' . $filename;

                    //image resize
                    Image::make($img_tmp)->save($img_path);
                }
            } else {
                $filename = $data['current_image'];
            }
            if (empty($data['product_description'])) {
                $data['product_description'] = '';
            }
            Products::where(['id' => $id])->update([
                'name' => $data['product_name'], 'name_eng' => $data['product_name_english'],
                'occasion_id' => $data['occasion_id'], 'code' => $data['product_code'], 'code_eng' => $data['product_code_english'],
                'description' => $data['product_description'], 'description_eng' => $data['product_description_english'], 'price' => $data['product_price'], 'slug' => str_slug($data['product_name']),
                'image' => $filename
            ]);
            return redirect(app()->getLocale() . '/admin/view-products')->with('flash_message_success', 'Product has been updated!!');
        }
        $productDetails = Products::where(['id' => $id])->first();

        //Occasion dropdown code
        $occasions = Occasion::get();
        $occasions_dropdown = "<option value='' selected disabled>Επιλογή</option>";
        foreach ($occasions as $cat) {
            if ($cat->id == $productDetails->occasion_id) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $occasions_dropdown .= "<option value='" . $cat->id . "' " . $selected . ">" . $cat->name . "</option>";
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
        $occasions_dropdown_eng = "<option value='' selected disabled>Select</option>";
        foreach ($occasions as $cat) {
            if ($cat->id == $productDetails->occasion_id) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $occasions_dropdown_eng .= "<option value='" . $cat->id . "' " . $selected . ">" . $cat->name_eng . "</option>";
        }
        //Flower type dropdown code
        $types = Type::get();
        $types_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($types as $cat) {
            if ($cat->id == $productDetails->type_id) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $types_dropdown .= "<option value='" . $cat->id . "' " . $selected . ">" . $cat->name . "</option>";
        }

        if (Session::has('floristSession')) { //2 means shop owner
            $floristId = Session::get('floristId');
        } else {
            if (Session::has('adminId')) {
                # code...
                $floristId = Session::get('adminId');
            } else {
                # code...
                return redirect('/florist');
            }
        }
        $orders = orders::where(['florist_id' => $floristId, 'showOrder' => 1])->get();
        Session::put('orders', $orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');

        //     }
        // }

        return view('admin.products.edit_product')->with(compact('productDetails', 'occasions_dropdown_eng', 'occasions_dropdown', 'types_dropdown'));
    }
    public function deleteProduct($en, $id = null)
    {
        Products::where(['id' => $id])->delete();
        Alert::success('Deleted Successfully', 'Success Message');
        return redirect()->back()->with('flash_message_error', 'Product Deleted');
    }




    public function deleteOrder($en, $id = null)
    {
        Orders::where(['id' => $id])->delete();
        Alert::success('Deleted Successfully', 'Success Message');
        return redirect()->back()->with('flash_message_error', 'Order Deleted');
    }


    public function updateStatus($en, Request $request, $id = null)
    {
        $data = $request->all();
        Products::where('id', $data['id'])->update(['status' => $data['status']]);
    }
    public function products($en, $slug = null)
    {

        $product = Products::where(['slug' => $slug])->first();
        if ($product != null) {

            $featuredProducts = Products::where(['featured_products' => 1])->get();
            $productDetails = Products::with('attributes')->where('id', $product->id)->first();
            $ProductsAltImages = ProductsImages::where('product_id', $product->id)->get();
            // echo $productDetails;die;

            if (Auth::check()) {
                $user_email = Auth::user()->email;
                $session_id = Session::get('session_id');
                $userCart = DB::table('cart')->where(function ($query) use ($user_email, $session_id) {
                    $query->where('user_email', '=', $user_email)
                        ->orWhere('session_id', '=', $session_id);
                })->get();
                // $userCart = DB::table('cart')->where('user_email',$user_email)->get();
            } else {
                $session_id = Session::get('session_id');
                $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();
            }
            // dd($session_id);
            foreach ($userCart as $key => $product) {
                $productDetails = Products::where(['id' => $product->product_id])->first();
                $userCart[$key]->image = $productDetails->image;
            }


            return view('wayshop.product_details')->with(compact('productDetails', 'ProductsAltImages', 'featuredProducts', 'userCart'));
        } else {
            return redirect()->back();
        }
    }
    public function addAttributes($en, Request $request, $id = null)
    {
        $productDetails = Products::with('attributes')->where(['id' => $id])->first();
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            foreach ($data['sku'] as $key => $val) {
                if (!empty($val)) {
                    //Prevent duplicate SKU Record
                    $attrCountSKU = ProductsAttributes::where('sku', $val)->count();
                    if ($attrCountSKU > 0) {
                        return redirect(app()->getLocale() . '/admin/add-attributes/' . $id)->with('flash_message_error', 'SKU is already exist please select another sku');
                    }
                    //Prevent duplicate Size Record
                    $attrCountSizes = ProductsAttributes::where(['product_id' => $id, 'size' => $data['size'][$key]])->count();
                    if ($attrCountSizes > 0) {
                        return redirect(app()->getLocale() . '/admin/add-attributes/' . $id)->with('flash_message_error', '' . $data['size'][$key] . 'Size is already exist please select another size');
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
            return redirect(app()->getLocale() . '/admin/add-attributes/' . $id)->with('flash_message_success', 'Products attributes added successfully!');
        }
        return view('admin.products.add_attributes')->with(compact('productDetails'));
    }
    public function addDiscount($en, Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            //echo"<pre>"; print_r($data);die;
            $id = rand(3, 100000);
            DB::table('product_discount')->insert([
                'id' => $id, 'product_id' => $data['product_id'], 'amount' => $data['amount'],
                'amount_type' => $data['amount_type'], 'expiry_date' => $data['expiry_date'], 'status' => 1
            ]);
            return redirect()->back()->with('flash_message_success', 'discount has been added Successfully');
        }

        $product = Products::where('id', $id)->first();
        $discounts = DB::table('product_discount')->where(['product_id' => $id])->get();
        if (Session::has('floristSession')) { //2 means shop owner
            $floristId = Session::get('floristId');
        } else {
            if (Session::has('adminId')) {
                # code...
                $floristId = Session::get('adminId');
            } else {
                # code...
                return redirect('/florist');
            }
        }
        // DB::table('product_discount')->delete();
        // $dis = DB::table('product_discount')->get();
        // dd($dis);

        $orders = orders::where(['florist_id' => $floristId, 'showOrder' => 1])->get();
        Session::put('orders', $orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');

        //     }
        // }
        // dd('check');

        return view('admin.products.add_discount')->with(compact('product', 'discounts'));
    }
    public function updateDiscountStatus($en, Request $request, $id = null)
    {
        $data = $request->all();
        DB::table('product_discount')->where('id', $data['id'])->update(['status' => $data['status']]);
    }
    public function deleteDiscount($en, $id = null)
    {
        DB::table('product_discount')->where('id', $id)->delete();
        Alert::success('Deleted', 'Success Message');
        return redirect()->back();
    }
    public function deleteAttribute($en, $id = null)
    {
        ProductsAttributes::where(['id' => $id])->delete();
        return redirect()->back()->with('flash_message_error', 'Product Attribute is deleted!');
    }
    public function editAttributes($en, Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            foreach ($data['attr'] as $key => $attr) {
                ProductsAttributes::where(['id' => $data['attr'][$key]])->update([
                    'sku' => $data['sku'][$key],
                    'size' => $data['size'][$key], 'price' => $data['price'][$key], 'stock' => $data['stock'][$key]
                ]);
            }
            return redirect()->back()->with('flash_message_success', 'Products Attributes Updated!!!');
        }
    }
    public function addImages($en, Request $request, $id = null)
    {
        $productDetails = Products::where(['id' => $id])->first();
        $productType = Type::where(['id' => $productDetails->type_id])->first();
        if ($request->isMethod('post')) {
            $data = $request->all();
            if ($request->hasfile('image')) {
                $files = $request->file('image');
                foreach ($files as $file) {
                    $image = new ProductsImages;
                    $extension = $file->getClientOriginalExtension();
                    $filename = rand(111, 9999) . '.' . $extension;
                    $image_path = 'uploads/products/' . $filename;
                    Image::make($file)->save($image_path);
                    $image->image = $filename;
                    $image->product_id = $data['product_id'];
                    $image->save();
                }
            }
            return redirect(app()->getLocale() . '/admin/add-images/' . $id)->with('flash_message_success', 'Image has been updated');
        }
        if (Session::has('floristSession')) { //2 means shop owner
            $floristId = Session::get('floristId');
        } else {
            if (Session::has('adminId')) {
                # code...
                $floristId = Session::get('adminId');
            } else {
                # code...
                return redirect('/florist');
            }
        }
        $orders = orders::where(['florist_id' => $floristId, 'showOrder' => 1])->get();
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');

        //     }
        // }
        $productImages = ProductsImages::where(['product_id' => $id])->get();
        return view('admin.products.add_images')->with(compact('productDetails', 'productType', 'productImages'));
    }
    public function deleteAltImage($en, $id = null)
    {
        $productImage = ProductsImages::where(['id' => $id])->first();

        $image_path = 'uploads/products/';
        if (file_exists($image_path . $productImage->image)) {
            unlink($image_path . $productImage->image);
        }
        ProductsImages::where(['id' => $id])->delete();
        Alert::success('Deleted', 'Success Message');
        return redirect()->back();
    }
    public function updateFeatured($en, Request $request, $id = null)
    {
        $data = $request->all();
        Products::where('id', $data['id'])->update(['featured_products' => $data['status']]);
    }
    public function getprice(Request $request)
    {
        $data = $request->all();
        //  echo "<pre>";print_r($data);die;
        $proArr = explode("-", $data['idSize']);
        $proAttr = ProductsAttributes::where(['product_id' => $proArr[0], 'size' => $proArr[1]])->first();
        echo $proAttr->price;
    }
    public function addtoCartOld(Request $request)
    {
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        $data = $request->all();
        // dd($data);
        // echo "<pre>";print_r($data);die;
        // dd(Session::get('session_id'));
        if (empty(Auth::user()->email)) {
            $data['user_email'] = '';
        } else {
            $data['user_email'] = Auth::user()->email;
        }
        $session_id = Session::get('session_id');
        if (empty($session_id)) {
            $session_id = str_random(40);
            Session::put('session_id', $session_id);
        }

        // $sizeArr = explode('-',$data['size']);
        $countProducts = DB::table('cart')->where([
            'product_id' => $data['product_id'], 'product_color' => 'color', 'price' => $data['price'],
            'size' => '1', 'session_id' => $session_id
        ])->count();
        if ($countProducts > 0) {
            return redirect()->back()->with('flash_message_error', 'Product already exists in cart');
        } else {
            DB::table('cart')->insert([
                'product_id' => $data['product_id'], 'product_name' => $data['product_name'],
                'product_code' => $data['product_code'], 'company' => $data['company'], 'price' => $data['price'],
                'size' => '1', 'quantity' => $data['quantity'], 'user_email' => $data['user_email'],
                'session_id' => $session_id
            ]);
        }
        if (Auth::check()) {
            Auth::user()->notify(new NewOrder());
        }

        return redirect(app()->getLocale() . '/cart')->with('flash_message_success', 'Product has been added in cart');
    }
    public function addtoCart(Request $request)
    {
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        $data = $request->all();
        // dd($data);
        // echo "<pre>";print_r($data);die;
        // dd(Session::get('session_id'));
        if (empty(Auth::user()->email)) {
            $data['user_email'] = '';
        } else {
            $data['user_email'] = Auth::user()->email;
        }
        $session_id = Session::get('session_id');
        if (empty($session_id)) {
            $session_id = str_random(40);
            Session::put('session_id', $session_id);
        }

        // $sizeArr = explode('-',$data['size']);
        $countProducts = DB::table('cart')->where([
            'product_id' => $data['product_id'], 'product_color' => 'color', 'price' => $data['price'],
            'size' => '1', 'session_id' => $session_id
        ])->count();
        if ($countProducts > 0) {
            return redirect()->back()->with('flash_message_error', 'Product already exists in cart');
        } else {
            DB::table('cart')->insert([
                'product_id' => $data['product_id'], 'store' => $data['store_name'], 'product_name_eng' => $data['product_name_eng'], 'product_name_gr' => $data['product_name_gr'],
                'description_eng' => $data['product_description_eng'], 'description_gr' => $data['product_description_gr'], 'price' => $data['price'],
                'image' => $data['product_image'], 'quantity' => $data['quantity'], 'gift' => $gift, 'msg' => $data['msg'], 'comment' => $data['comment'],
                'session_id' => $session_id
            ]);
        }


        return redirect(app()->getLocale() . '/cart')->with('flash_message_success', 'Product has been added in cart');
    }
    public function cart(Request $request)
    {

        if (Auth::check()) {
            $user_email = Auth::user()->email;
            $session_id = Session::get('session_id');

            $userCart = DB::table('cart')->where(function ($query) use ($user_email, $session_id) {
                $query->where('user_email', '=', $user_email)
                    ->orWhere('session_id', '=', $session_id);
            })->get();
            // dd($userCart);
            // $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
        } else {
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();
        }
        // dd($session_id);
        foreach ($userCart as $key => $products) {
            $productDetails = Products::where(['id' => $products->product_id])->first();
            $userCart[$key]->image = $productDetails->image;
        }
        // echo "<pre>";print_r($userCart);die;
        return view('wayshop.products.cart')->with(compact('userCart'));
    }

    public function deleteCartProduct($en, $id = null)
    {
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        DB::table('cart')->where('id', $id)->delete();
        return redirect(app()->getLocale() . '/cart')->with('flash_message_error', 'Product has been deleted!');
    }

    public function updateCartQuantity($en, $id = null, $quantity = null)
    {
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        DB::table('cart')->where('id', $id)->increment('quantity', $quantity);
        return redirect(app()->getLocale() . '/cart')->with('flash_message_success', 'Product Quantity has been updated Successfully');
    }

    public function applyCoupon(Request $request)
    {
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $couponCount = Coupons::where('coupon_code', $data['coupon_code'])->count();
            if ($couponCount == 0) {
                return response()->json('invalid');
                // return redirect()->back()->with('flash_message_error','Coupon code does not exists');
            } else {
                // echo "Success";die;
                $couponDetails = Coupons::where('coupon_code', $data['coupon_code'])->first();
                //Coupon code status
                if ($couponDetails->status == 0) {
                    return response()->json('not-active');
                    // return redirect()->back()->with('flash_message_error','Coupon code is not active');
                }
                //Check coupon expiry date
                $expiry_date = $couponDetails->expiry_date;
                $current_date = date('Y-m-d');
                if ($expiry_date < $current_date) {
                    return response()->json('expired');
                    // return redirect()->back()->with('flash_message_error','Coupon Code is Expired');
                }

                //Coupon is ready for discount

                $total_amount = 0;
                if (Session::has('cart')) {
                    foreach (Session::get('cart') as  $item) {
                        if ($item['store'] == $data['store']) {
                            $total_amount = $total_amount + ($item['price'] * $item['quantity']);
                        }
                    }
                }
                $finalAmount = 0;
                // $total_amount = $total_amount + Session::get('shipping_fee');
                Session::put('previousTotal', $total_amount);
                //Check if coupon amount is fixed or percentage
                if ($couponDetails->amount_type == "Fixed") {
                    $couponAmount = $couponDetails->amount;
                    $couponType = "€";
                    if (Session::has('finalAmount')) {
                        $finalAmount = Session::get('finalAmount') - $couponAmount;
                    } else {
                        $finalAmount = $total_amount - $couponAmount;
                    }
                } else {
                    $couponAmount = $couponDetails->amount;
                    $couponType = "%";
                    if (Session::has('finalAmount')) {
                        $finalAmount = Session::get('finalAmount') - (Session::get('finalAmount') * $couponDetails->amount / 100);
                    } else {
                        $finalAmount = $total_amount - ($total_amount * $couponDetails->amount / 100);
                    }
                }
                //Add Coupon code in session
                Session::put('CouponAmount', $couponAmount);
                Session::put('CouponCode', $data['coupon_code']);
                Session::put('couponType', $couponType);
                Session::put('finalAmount', number_format((float)$finalAmount, 2, '.', ''));

                $success = [];
                $success['couponAmount'] = $couponAmount;
                $success['couponType'] = $couponType;
                $success['finalAmount'] = number_format((float)$finalAmount, 2, '.', '');
                $success['msg'] = 'Ok';
                return response()->json($success);
                // return redirect()->back()->with('flash_message_success','Coupon Code is Successffully Applied.You are Availing Discount');
            }
        }
    }

    public function redeemPoints(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $redeemPoints = Auth::user()->points;

            if ($redeemPoints == 0) {
                # code...
            } else {
                # code...
                $price = 5;

                $remainingPoints = 0;

                if ($redeemPoints > 100) {
                    # code...
                    $remainingPoints = $redeemPoints - 100;
                    $redeemPoints = $redeemPoints - $remainingPoints;
                }

                $redeemAmount = ($redeemPoints * $price) / 100;
                // dd($redeemAmount);
                //Coupon is ready for discount


                $total_amount = 0;
                if (Session::has('cart')) {
                    foreach (Session::get('cart') as  $item) {
                        if ($item['store'] == $data['store']) {
                            $total_amount = $total_amount + ($item['price'] * $item['quantity']);
                        }
                    }
                }
                $finalAmount = 0;
                // $total_amount = $total_amount + Session::get('shipping_fee');
                Session::put('previousTotal', $total_amount);

                if (Session::has('finalAmount')) {
                    # code...
                    $finalAmount = Session::get('finalAmount') - $redeemAmount;
                } else {

                    $finalAmount = $total_amount - $redeemAmount;
                }


                // User::where('id',Auth::user()->id)->update(['points'=>$remainingPoints]);

                //Add Coupon code in session
                Session::put('remainingPoints', $remainingPoints);
                Session::put('redeemAmount', $redeemAmount);
                Session::put('redeemPoints', $redeemPoints);
                // Session::put('finalAmount', number_format((float)$finalAmount, 2, '.', ''));

                $success = [];
                $success['redeemAmount'] = $redeemAmount;
                $success['redeemPoints'] = $redeemPoints;
                $success['finalAmount'] = number_format((float)$finalAmount, 2, '.', '');
                $success['msg'] = 'Ok';
                return response()->json($success);
            }

            // return redirect()->back()->with('flash_message_success','Coupon Code is Successffully Applied.You are Availing Discount');

        }
    }

    public function cancelRedeemPoints()
    {
        Session::forget('remainingPoints');
        Session::forget('redeemAmount');
        Session::forget('redeemPoints');

        // Session::forget('finalAmount');

        return redirect()->back();
    }

    public function cancelCoupon()
    {
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        $userDetails = User::find($user_id);
        $shippingCount = DeliveryAddress::where('user_id', $user_id)->count();

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
            return redirect(app()->getLocale() . '/order_review');
        }

        return view('wayshop.products.checkout')->with(compact('userDetails'));
    }

    public function orderReview()
    {

        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;

        $userDetails = User::find($user_id);
        $shippingDetails = DeliveryAddress::where('user_id', $user_id)->first();
        $userCart = DB::table('cart')->where('user_email', $user_email)->get();

        foreach ($userCart as $key => $product) {
            $productDetails = Products::where('id', $product->product_id)->first();
            $userCart[$key]->image = $productDetails->image;
        }

        return view('wayshop.products.order_review')->with(compact('shippingDetails', 'userCart'));
    }

    public function saveOrder(Request $request)
    {
        if (Session::has('cart')) {
            if (Auth::check()) {
                $user_id = Auth::user()->id;
                $user_email = Auth::user()->email;
            } else {
                $user_id = rand(3, 100000);
                $user_email = '';
            }
            if (empty(Session::get('CouponCode'))) {
                $couponCode = "Not Used";
            } else {
                $couponCode = Session::get('CouponCode');
            }
            if (empty(Session::get('CouponAmount'))) {
                $couponAmount = 0;
            } else {
                $couponAmount = Session::get('CouponAmount');
            }
            if (empty(Session::get('redeemAmount'))) {
                $redeemAmount = 0;
            } else {
                $redeemAmount = Session::get('redeemAmount');
            }

            $order = new Orders;
            $order->user_id = $user_id ?? '';

            $city = Session::get('address')['city'];
            if (Session::has('checkoutAddress')) {

                $order->florist_id = Session::get('checkoutAddress')['florist_id'] ?? '';
                $order->florist_name = Session::get('checkoutAddress')['florist_name'] ?? '';
                $order->user_email = $user_email ?? '';
                $order->name = Session::get('checkoutAddress')['name'] ?? '';
                $order->address = Session::get('address')['completeAddress'] ?? '';

                $order->city = $city ?? '';
                $order->floor = Session::get('checkoutAddress')['floor'] ?? '';

                $order->pincode = Session::get('address')['zip_code'] ?? '';
                $order->mobile = Session::get('checkoutAddress')['cellphone'] ?? '';
                $order->optional_phone = Session::get('checkoutAddress')['phone'] ?? ''; //optional_phone === sender phone
                $order->doorbell = Session::get('checkoutAddress')['doorbell'] ?? '';
                $order->address_msg = Session::get('checkoutAddress')['address_msg'] ?? '';

                $order->sender = Session::get('checkoutAddress')['sender'] ?? '';
                $order->senderName = Session::get('checkoutAddress')['senderName'] ?? '';
                $order->senderEmail = Session::get('checkoutAddress')['senderEmail'] ?? '';
                $order->company = Session::get('checkoutAddress')['company'] ?? '';

                $order->receiptOptions = Session::get('checkoutAddress')['receiptOptions'] ?? '';
                $order->bussinessName = Session::get('checkoutAddress')['bussinessName'] ?? '';
                $order->vat = Session::get('checkoutAddress')['vat'] ?? '';
                $order->bussinessType = Session::get('checkoutAddress')['bussinessType'] ?? '';
                $order->bussinessAddress = Session::get('checkoutAddress')['bussinessAddress'] ?? '';
                $order->bussinessTex = Session::get('checkoutAddress')['bussinessTex'] ?? '';
                $order->bussinessArea = Session::get('checkoutAddress')['bussinessArea'] ?? '';
                $order->bussinessTk = Session::get('checkoutAddress')['bussinessTk'] ?? '';
                $order->bussinessPhone = Session::get('checkoutAddress')['bussinessPhone'] ?? '';

                $order->country = Session::get('checkoutAddress')['inviceMail'] ?? '';

                $order->coupon_code = $couponCode;
                $order->coupon_amount = $couponAmount;
                $order->redeem_amount = $redeemAmount;

                $order->order_status = "New";
                $order->payment_method = 'online';
                $order->grand_total = Session::get('checkoutAddress')['total_amount'] ?? '';
                $order->delivery_date = Session::get('checkoutAddress')['delivery_date'] ?? '';
                $order->delivery_time = Session::get('checkoutAddress')['timeId'] ?? 'any';
                $timetable = DB::table('timetable')->where(['id' => Session::get('checkoutAddress')['timeId']])->first();
                if ($timetable == null) {
                    $order->fromHour = 0; // shipping charges means kilometer limit
                } else {
                    $order->fromHour = $timetable->fromHour;
                }
                $order->shipping_charges = Session::get('shipping_fee') ?? '0';
                $order->showOrder = 1;

                if (Session::has('remainingPoints')) {
                    $order->remaining_points = Session::get('remainingPoints');
                }

                $order->save();
                Session::put('lastOrderId', $order->id);
            }

            $order_id = DB::getPdo()->lastinsertID();
            $orderNo = 'EB' . str_pad($order_id, 5, '0', STR_PAD_LEFT) ?? '';
            Orders::where('id', $order_id)->update(['orderNo' => $orderNo]);
            $cartProducts = DB::table('cart')->where('user_email', $user_email)->get();
            foreach (Session::get('cart') as $product) {
                $cartPro = new OrdersProduct();
                $cartPro->order_id = $order_id ?? 0;
                $cartPro->user_id = $user_id ?? 0;
                $cartPro->product_id = $product['product_id'] ?? 0;
                $cartPro->product_name = $product['name_gr'] ?? '';
                $cartPro->product_name_eng = $product['name_eng'] ?? '';

                $cartPro->store = $product['store'] ?? '';
                $cartPro->product_price = $product['price'] ?? '';
                $cartPro->product_qty = $product['quantity'] ?? '';
                $cartPro->gift = $product['gift'] ?? '';
                $cartPro->gift_msg = $product['msg'] ?? '';
                $cartPro->comment = $product['comment'] ?? '';
                $cartPro->save();
            }
            // }
            // print_r("<pre>");
            // print_r('Cart Pro data is---->');
            // print_r($cartPro);
            // print_r("</pre>");
            Session::put('order_id', $order_id);
            Session::put('grand_total', Session::get('checkoutAddress')['total_amount'] ?? '');
            $florist = Florist::where('id', Session::get('checkoutAddress')['florist_id'] ?? '')->first();
            // start give points
            // print_r("<pre>");
            // print_r('Florist Data is---->');
            // print_r($florist);
            // print_r("</pre>");
            if (Auth::check()) {
                $redeemPoints = Auth::user()->points;
                if (Session::has('remainingPoints')) {
                    # code...
                    User::where('id', Auth::user()->id)->update(['points' => Session::get('remainingPoints')]);
                    $redeemPoints = Session::get('remainingPoints');
                }


                $totalAmount = Session::get('checkoutAddress')['total_amount'] ?? '';
                $totalPoints = $redeemPoints + $totalAmount;
                User::where('id', Auth::user()->id)->update(['points' => $totalPoints]);
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

            $order = Orders::where('id', $order_id)->first();
            // $florist = Florist::where('id', $order->florist_id)->first();
            $admin = admin::first();
            $products = Products::get();
            // print_r('<pre>');
            // print_r('Orders data is---->');
            // print_r($order);
            // print_r('Florist data is----->');
            // print_r($florist);
            // print_r('Admin data is---->');
            // print_r($admin);
            Mail::to($order->senderEmail ?? 'user@gmail.com')->send(new InProcessOrder($florist, $order, $products));

            Mail::to($admin->email)->send(new NewOrderMail($florist, $order, $products));
            Mail::to($florist->email)->send(new NewOrderMail($florist, $order, $products));

            // print_r('Save order work admin');
            // print_r($products);
            // print_r("</pre>");
            //---------------end save order-----------
        }
    }

    public function saveOrder0(Request $request)
    {
        // print_r('is this wokring???');
        if (Session::has('cart')) {
            // dd(Session::get('cart'));
            // print_r(Session::has('cart'));
            if (Auth::check()) {
                $user_id = Auth::user()->id;
                $user_email = Auth::user()->email;
            } else {
                $user_id = rand(3, 100000);
                $user_email = '';
            }
            // $data=$request->all();
            if (empty(Session::get('CouponCode'))) {
                $couponCode = "Not Used";
            } else {
                $couponCode = Session::get('CouponCode');
            }
            if (empty(Session::get('CouponAmount'))) {
                $couponAmount = 0;
            } else {
                $couponAmount = Session::get('CouponAmount');
            }
            if (empty(Session::get('redeemAmount'))) {
                $redeemAmount = 0;
            } else {
                $redeemAmount = Session::get('redeemAmount');
            }

            // dd(Session::get('address'));
            //-------------save order--
            $order = new Orders;
            $order->user_id = $user_id ?? '';

            $city = Session::get('address')['city'];
            // $city = DB::connection()->getPdo()->quote(utf8_encode($city));
            if (Session::has('checkoutAddress')) {
                $order->florist_id = Session::get('checkoutAddress')['florist_id'] ?? '';
                $order->florist_name = Session::get('checkoutAddress')['florist_name'] ?? '';
                $order->user_email = $user_email ?? '';
                $order->name = Session::get('checkoutAddress')['name'] ?? '';
                $order->address = Session::get('address')['completeAddress'] ?? '';

                $order->city = $city ?? '';
                $order->floor = Session::get('checkoutAddress')['floor'] ?? '';

                $order->pincode = Session::get('address')['zip_code'] ?? '';
                $order->mobile = Session::get('checkoutAddress')['cellphone'] ?? '';
                $order->optional_phone = Session::get('checkoutAddress')['phone'] ?? ''; //optional_phone === sender phone
                $order->doorbell = Session::get('checkoutAddress')['doorbell'] ?? '';
                $order->address_msg = Session::get('checkoutAddress')['address_msg'] ?? '';

                $order->sender = Session::get('checkoutAddress')['sender'] ?? '';
                $order->senderName = Session::get('checkoutAddress')['senderName'] ?? '';
                $order->senderEmail = Session::get('checkoutAddress')['senderEmail'] ?? '';
                $order->company = Session::get('checkoutAddress')['company'] ?? '';

                $order->receiptOptions = Session::get('checkoutAddress')['receiptOptions'] ?? '';
                $order->bussinessName = Session::get('checkoutAddress')['bussinessName'] ?? '';
                $order->vat = Session::get('checkoutAddress')['vat'] ?? '';
                $order->bussinessType = Session::get('checkoutAddress')['bussinessType'] ?? '';
                $order->bussinessAddress = Session::get('checkoutAddress')['bussinessAddress'] ?? '';
                $order->bussinessTex = Session::get('checkoutAddress')['bussinessTex'] ?? '';
                $order->bussinessArea = Session::get('checkoutAddress')['bussinessArea'] ?? '';
                $order->bussinessTk = Session::get('checkoutAddress')['bussinessTk'] ?? '';
                $order->bussinessPhone = Session::get('checkoutAddress')['bussinessPhone'] ?? '';

                $order->country = Session::get('checkoutAddress')['inviceMail'] ?? '';

                $order->coupon_code = $couponCode;
                $order->coupon_amount = $couponAmount;
                $order->redeem_amount = $redeemAmount;

                $order->order_status = "New";
                $order->payment_method = 'online';
                $order->grand_total = Session::get('checkoutAddress')['total_amount'] ?? '';
                $order->delivery_date = Session::get('checkoutAddress')['delivery_date'] ?? '';
                $order->delivery_time = Session::get('checkoutAddress')['timeId'] ?? 'any';
                $timetable = DB::table('timetable')->where(['id' => Session::get('checkoutAddress')['timeId']])->first();
                if ($timetable == null) {
                    $order->fromHour = 0; // shipping charges means kilometer limit
                } else {
                    $order->fromHour = $timetable->fromHour;
                }
                $order->shipping_charges = Session::get('shipping_fee') ?? '0';
                $order->showOrder = 1;

                if (Session::has('remainingPoints')) {
                    # code...
                    // User::where('id',Auth::user()->id)->update(['points'=>Session::get('remainingPoints')]);

                    $order->remaining_points = Session::get('remainingPoints');
                }

                $order->save();
                Session::put('lastOrderId', $order->id);
                // dd('order save');
            }

            $order_id = DB::getPdo()->lastinsertID();

            $orderNo = 'EB' . str_pad($order_id, 5, '0', STR_PAD_LEFT) ?? '';
            Orders::where('id', $order_id)->update(['orderNo' => $orderNo]);

            // send email

            // end send email

            $cartProducts = DB::table('cart')->where('user_email', $user_email)->get();
            // dd(Session::get('cart'));
            // if (Session::has('cart')) {
            # code...
            foreach (Session::get('cart') as $product) {
                $cartPro = new OrdersProduct();
                $cartPro->order_id = $order_id ?? 0;
                $cartPro->user_id = $user_id ?? 0;
                $cartPro->product_id = $product['product_id'] ?? 0;
                $cartPro->product_name = $product['name_gr'] ?? '';
                $cartPro->product_name_eng = $product['name_eng'] ?? '';

                $cartPro->store = $product['store'] ?? '';
                $cartPro->product_price = $product['price'] ?? '';
                $cartPro->product_qty = $product['quantity'] ?? '';
                $cartPro->gift = $product['gift'] ?? '';
                $cartPro->gift_msg = $product['msg'] ?? '';
                $cartPro->comment = $product['comment'] ?? '';
                $cartPro->save();
            }
            // }

            Session::put('order_id', $order_id);
            // print('Order id--->');
            // print_r($order_id);
            Session::put('grand_total', Session::get('checkoutAddress')['total_amount'] ?? '');
            // Session::forget('cart');
            // print_r('total_amount');
            // print_r(Session::get('checkoutAddress')['total_amount']);
            $florist = Florist::where('id', Session::get('checkoutAddress')['florist_id'] ?? '')->first();
            // start give points


            // if (Auth::check()) {
            //     $redeemPoints = Auth::user()->points;
            //     if (Session::has('remainingPoints')) {
            //         # code...
            //         User::where('id',Auth::user()->id)->update(['points'=>Session::get('remainingPoints')]);
            //         $redeemPoints = Session::get('remainingPoints');
            //     }


            //     $totalAmount = Session::get('checkoutAddress')['total_amount'] ?? '';
            //     $totalPoints = $redeemPoints + $totalAmount ;
            //     User::where('id',Auth::user()->id)->update(['points'=>$totalPoints]);
            // }

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

            // $order = Orders::where('id',$order_id)->first();
            // $florist = Florist::where('id',$order->florist_id)->first();
            // $admin = admin::first();
            // $products = Products::get();
            // Mail::to($order->senderEmail??'user@gmail.com')->send(new InProcessOrder($florist,$order,$products));

            // Mail::to($admin->email)->send(new NewOrderMail($florist,$order,$products));
            // Mail::to($florist->email)->send(new NewOrderMail($florist,$order,$products));
            //---------------end save order-----------


        }
    }

    public function placeOrder(Request $request)
    {
        $this->saveOrder($request);
        // dd(Session::get('checkoutAddress'));
        // if ($request->isMethod('post')) {

        // $shippingDetails = DeliveryAddress::where('user_email',$user_email)->first();

        // ------------------ start payment section-----

        // The POST URL and parameters

        // $request =  'https://demo.vivapayments.com/api/orders';	// demo environment URL
        $request =  'https://www.vivapayments.com/api/orders';    // production environment URL

        // Your merchant ID and API Key can be found in the 'Security' settings on your profile.
        $merchant_id = '493f6e1e-a9da-4806-973f-fd468619e0de';
        $api_key = 'QjfD7T6F0xxmyuHO02X2f6dSHLU8oS';

        //demo accout
        // $merchant_id = 'd02176cc-cd20-4843-9ae4-0b9d37779247';
        // $api_key = '&zhAfc';


        //Set the Payment Amount

        $amount = Session::get('checkoutAddress')['total_amount'] * 100;    // Amount in cents

        if (Session::has('redeemAmount')) {
            # code...
            $getamount = Session::get('checkoutAddress')['total_amount'] - Session::get('redeemAmount');
            // dd($getamount);
            $amount = (Session::get('checkoutAddress')['total_amount'] - Session::get('redeemAmount')) * 100;    // Amount in cents

        } else {
            $amount = Session::get('checkoutAddress')['total_amount'] * 100;    // Amount in cents
        }

        // dd($amount);
        //Set some optional parameters (Full list available here: https://developer.vivawallet.com/api-reference-guide/payment-api/#tag/Payments/paths/~1orders/post)
        $allow_recurring = 'true'; // If set to true, this flag will prompt the customer to accept recurring payments in the future.
        $request_lang = 'en-US'; //This will display the payment page in English (default language is Greek)
        // $source = '9563'; //demo accout source // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.
        $source = '6637'; // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.

        $postargs = 'Amount=' . urlencode($amount) . '&AllowRecurring=' . $allow_recurring . '&RequestLang=' . $request_lang . '&SourceCode=' . $source;

        // Get the curl session object
        $session = curl_init($request);

        // Set the POST options.
        curl_setopt($session, CURLOPT_POST, true);
        curl_setopt($session, CURLOPT_POSTFIELDS, $postargs);
        curl_setopt($session, CURLOPT_HEADER, true);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($session, CURLOPT_USERPWD, $merchant_id . ':' . $api_key);
        // curl_setopt($session, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');

        // Do the POST and then close the session
        $response = curl_exec($session);
        // dd($response);
        // Separate Header from Body
        $header_len = curl_getinfo($session, CURLINFO_HEADER_SIZE);
        $res_header = substr($response, 0, $header_len);
        $res_body =  substr($response, $header_len);

        curl_close($session);
        // dd($res_body);
        // Parse the JSON response
        $result_obj = '';
        try {
            if (is_object(json_decode($res_body))) {
                $result_obj = json_decode($res_body);
            } else {
                preg_match('#^HTTP/1.(?:0|1) [\d]{3} (.*)$#m', $res_header, $match);
                throw new Exception("API Call failed! The error was: " . trim($match[1]));
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        if ($result_obj != '') {
            # code...
            // dd('here');
            if ($result_obj->ErrorCode == 0) {    //success when ErrorCode = 0
                $orderId = $result_obj->OrderCode;
                // echo 'Your Order Code is: <b>'. $orderId.'</b>';
                // echo '<br/><br/>';
                // echo 'To simulate a successful payment, use the 16-digit test credit card 5511070000000020, with a valid expiration date and 111 as CVV2.';
                // echo '</br/><a href="https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId.'" >Make Payment</a>';
                return redirect('https://www.vivapayments.com/web/newtransaction.aspx?ref=' . $orderId);
                // return redirect('https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId);

                // return view('checkout')->with(compact('floristDetails','orderId'));
            } else {
                echo 'The following error occured: ' . $result_obj->ErrorText;
            }
        } else {
            dd('viva account error');
        }
    }

    public function thanks()
    {
        // print_r('<pre>');
        // print_r('Is this working--->');
        // print_r(Auth::user()->email);
        // print_r('</pre>');
        $user_email = Auth::user()->email;
        DB::table('cart')->where('user_email', $user_email)->delete();
        Session::forget('session_id');
        return view('wayshop.orders.thanks');
    }

    public function userOrders()
    {
        $user_id = Auth::user()->id;
        $orders = Orders::with('orders')->where('user_id', $user_id)->orderBy('id', 'DESC')->get();
        // dd($orders);
        return view('order')->with(compact('orders'));
    }

    public function userOrderDetails($en, $order_id)
    {
        // dd($en." : ".$order_id);
        $orderDetails = Orders::with('orders')->where('id', $order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id', $user_id)->first();
        $products = Products::get();


        // if (Session::get('adminId') == $orderDetails->florist_id) {
        //     if ($orderDetails->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');

        //     }
        // }
        // dd('4324');
        return view('orderDetails')->with(compact('orderDetails', 'userDetails', 'products'));
    }

    //admin view orders

    public function viewOrders()
    {
        // dd(Session::get('adminId'));
        if (Session::has('adminStatus')) {
            # code...
            if (Session::get('adminStatus') == "1") {
                # code...
                // $orders = Orders::with('orders')->orderBy('id','DESC')->get();
                $orders = Orders::where(['showOrder' => 1])->get();
                // dd($orders);
                Session::put('orders', $orders);
            } else {
                if (Session::has('floristSession')) { //2 means shop owner
                    $floristId = Session::get('floristId');
                } else {
                    if (Session::has('adminId')) {
                        # code...
                        $floristId = Session::get('adminId');
                    } else {
                        # code...
                        return redirect('/admin');
                    }
                }
                $orders = orders::where(['florist_id' => $floristId, 'showOrder' => 1])->get();

                Session::put('orders', $orders);
                // foreach ($orders as $key => $order) {
                //             # code...
                //     if ($order->order_status=="New") {
                //         Alert::info('You have recived new order', 'Change Order Status');

                //     }
                // }
                $orders = Orders::where(['florist_id' => Session::get('adminId'), 'showOrder' => 1])->get();
            }
        } else {
            return redirect('/florist');
        }

        return view('admin.orders.view_orders')->with(compact('orders'));
    }

    public function viewCanceledOrders()
    {
        // dd(Session::get('adminId'));
        // $orders = Orders::with('orders')->orderBy('id','DESC')->get();
        $orders = Orders::where(['order_status' => 'Not Accepted'])->get();


        $sessionOrders = Orders::where(['showOrder' => 1])->get();
        Session::put('orders', $sessionOrders);
        return view('admin.orders.cancel_orders')->with(compact('orders'));
    }
    public function notProcessedOrders()
    {
        // dd(Session::get('adminId'));
        // $orders = Orders::with('orders')->orderBy('id','DESC')->get();
        $orders = Orders::where(['showOrder' => 0])->orderBy('id', 'DESC')->get();


        $sessionOrders = Orders::where(['showOrder' => 1])->get();
        Session::put('orders', $sessionOrders);
        return view('admin.orders.not_processed_orders')->with(compact('orders'));
    }
    public function ordersForDelete()
    {
        // dd(Session::get('adminId'));
        // $orders = Orders::with('orders')->orderBy('id','DESC')->get();
        $orders = Orders::where(['showOrder' => 1])->orderBy('id', 'DESC')->get();


        return view('admin.orders.orders_for_delete')->with(compact('orders'));
    }

    public function changeShowOrderStatus($en, Request $request, $id = null)
    {
        $data = $request->all();

        Orders::where('id', $id)->update(['showOrder' => 1]);

        $order = Orders::where('id', $id)->first();
        $florist = Florist::where('id', $order->florist_id)->first();
        $admin = admin::first();
        $products = Products::get();
        Mail::to($order->senderEmail ?? 'user@gmail.com')->send(new InProcessOrder($florist, $order, $products));

        Mail::to($admin->email)->send(new NewOrderMail($florist, $order, $products));
        Mail::to($florist->email)->send(new NewOrderMail($florist, $order, $products));

        $user = User::where('id', $order->user_id)->first();


        if ($user != null) {
            $redeemPoints = $user->points;
            if ($order->remaining_points != null) {
                # code...
                User::where('id', $user->id)->update(['points' => $order->remaining_points]);
                $redeemPoints = $order->remaining_points;
            }


            $totalAmount = $order->grand_total ?? '';
            $totalPoints = $redeemPoints + $totalAmount;
            User::where('id', $user->id)->update(['points' => $totalPoints]);
        }


        // Orders::where('id',$id)->update(['showOrder'=>1]);
        return redirect()->back();
    }

    public function floristViewOrders()
    {
        // DB::table('orders')->where(['id'=>99])->delete();
        // DB::table('orders')->where(['id'=>96])->delete();

        // dd($orders);
        // DB::table('orders')->where('product_id',null)->delete();
        // $orders = Orders::with('orders')->orderBy('id','DESC')->get();
        if (Session::has('floristSession')) {
            # code...
            $orders = Orders::where(['florist_id' => Session::get('floristId'), 'showOrder' => 1])->get();
        } else {
            if (Session::has('adminId')) {
                # code...
                $orders = Orders::where(['florist_id' => Session::get('adminId'), 'showOrder' => 1])->get();
            } else {
                return redirect('/florist');
            }
        }

        if (Session::has('floristSession')) { //2 means shop owner
            $floristId = Session::get('floristId');
        } else {
            $floristId = Session::get('adminId');
        }
        // dd(Session::get('floristSession'));
        $orders = orders::where(['florist_id' => $floristId, 'showOrder' => 1])->get();
        Session::put('orders', $orders);
        $timetable = DB::table('timetable')->where(['florist_id' => $floristId])->get();
        Session::put('timeTable', $timetable);
        // dd($orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');

        //     }
        // }
        // dd(count($orders));
        // $florists = Florist::get();
        // dd($orders);
        return view('admin.orders.florist_orders')->with(compact('orders'));
    }

    public function floristViewOrderDetails($en, $order_id)
    {
        $orderDetails = Orders::with('orders')->where('id', $order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id', $user_id)->first();
        $products = Products::get();
        if (Session::has('adminId')) {
            # code...
            $orders = orders::where(['florist_id' => Session::get('adminId'), 'showOrder' => 1])->get();
        } else {
            # code...
            return redirect('/florist');
        }

        // Session::put('orders',$orders);
        // if (Session::get('adminId') == $orderDetails->florist_id) {
        //     if ($orderDetails->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');

        //     }
        // }
        $timetable = DB::table('timetable')->where(['id' => $orderDetails->delivery_time])->first();
        return view('admin.orders.florist_order_details')->with(compact('orderDetails', 'userDetails', 'products', 'timetable'));
    }

    public function viewOrderDetails($en, $order_id)
    {
        $orderDetails = Orders::with('orders')->where('id', $order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id', $user_id)->first();
        $products = Products::get();
        // dd($orderDetails->delivery_time);
        $timetable = DB::table('timetable')->where(['id' => $orderDetails->delivery_time])->first();
        // dd($timetable);
        // Alert::info('Order Status', 'Change Order Status');
        $florist = Florist::where(['id' => $orderDetails->florist_id])->first();
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
        return view('admin.orders.order_details')->with(compact('orderDetails', 'userDetails', 'products', 'timetable'));
    }

    public function updateOrderStatus(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
        } else {
            return view('404');
        }
        $products = Products::get();
        $order = Orders::where('id', $data['order_id'])->first();
        $florist = Florist::where('id', $order->florist_id)->first();
        $admin = admin::first();

        // dd($florist);
        Orders::where('id', $data['order_id'])->update(['order_status' => $data['order_status']]);
        $newOrders = Orders::with('orders')->where('order_status', 'New')->get();
        if ($data['order_status'] == "Delivered") {
            // dd('check');
            $userCount = DB::table('florist_rating')->where(['user_email' => $order->senderEmail])->count();

            Mail::to($order->senderEmail ?? 'user@gmail.com')->send(new OrderShipped($florist, $userCount));
            // Mail::to($admin->email)->send(new OrderShipped($order->florist_id));
            // Mail::to($florist->email)->send(new OrderShipped($order->florist_id));
        }

        if ($data['order_status'] == "In Process") {
            Mail::to($order->senderEmail ?? 'user@gmail.com')->send(new InProcessOrder($florist, $order, $products));
        }
        if ($data['order_status'] == "New") {
            // Mail::to($order->senderEmail??'user@gmail.com')->send(new NewOrderMail($florist,$order));
            Mail::to($admin->email)->send(new NewOrderMail($florist, $order, $products));
            Mail::to($florist->email)->send(new NewOrderMail($florist, $order, $products));
        }
        if ($data['order_status'] == "Cancelled") {
            // dd('Cancelled');
            // dd($order->senderEmail);

            Mail::to('user@gmail.com')->send(new CancelOrder($florist, $order, $products));
            // Mail::to($admin->email)->send(new CancelOrder($florist,$order,$products));
            Mail::to($florist->email ?? 'user@gmail.com')->send(new CancelOrder($florist, $order, $products));
        }
        if ($data['order_status'] == "Not Accepted") {
            Mail::to($admin->email)->send(new NotAccepted($florist, $order));
        }
        // dd('ed');
        // Products::where('id',$data['id'])->update(['status'=>$data['status']]);
        Session::put('newOrders', $newOrders);
        return redirect()->back()->with('flash_message_success', 'Order Status has been Updated Successfully!');
    }

    public function orderInvoice($en, $order_id)
    {
        $orderDetails = Orders::with('orders')->where('id', $order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id', $user_id)->first();
        $products = Products::get();
        // dd($orderDetails->delivery_time);
        $timetable = DB::table('timetable')->where(['id' => $orderDetails->delivery_time])->first();

        return view('admin.orders.invoice')->with(compact('orderDetails', 'userDetails', 'products', 'timetable'));
    }

    public function checkNewOrder(Request $request)
    {
        $data = $request->all();
        if ($data['floristId'] == 'admin') {
            $ordersCount  = Orders::where(['showOrder' => 1])->get()->count();
        } else {
            $ordersCount  = Orders::where(['florist_id' => $data['floristId'], 'showOrder' => 1])->get()->count();
        }
        // dd($ordersCount);
        $success['orderCount'] = $ordersCount;
        $success['msg'] = 'Ok';
        return response()->json($success);
    }

    public function placeOrder2(Request $request)
    {

        // $request =  'https://demo.vivapayments.com/api/orders';	// demo environment URL
        $request =  'https://www.vivapayments.com/api/orders';    // production environment URL

        // Your merchant ID and API Key can be found in the 'Security' settings on your profile.
        $merchant_id = '493f6e1e-a9da-4806-973f-fd468619e0de';
        $api_key = 'QjfD7T6F0xxmyuHO02X2f6dSHLU8oS';

        //demo accout
        // $merchant_id = 'd02176cc-cd20-4843-9ae4-0b9d37779247';
        // $api_key = '&zhAfc';


        //Set the Payment Amount

        $amount = Session::get('checkoutAddress')['total_amount'] * 100;    // Amount in cents

        if (Session::has('redeemAmount')) {
            # code...
            $getamount = Session::get('checkoutAddress')['total_amount'] - Session::get('redeemAmount');
            // dd($getamount);
            $amount = (Session::get('checkoutAddress')['total_amount'] - Session::get('redeemAmount')) * 100;    // Amount in cents

        } else {

            $amount = Session::get('checkoutAddress')['total_amount'] * 100;    // Amount in cents
        }

        //Set some optional parameters (Full list available here: https://developer.vivawallet.com/api-reference-guide/payment-api/#tag/Payments/paths/~1orders/post)
        $allow_recurring = 'true'; // If set to true, this flag will prompt the customer to accept recurring payments in the future.
        $request_lang = 'en-US'; //This will display the payment page in English (default language is Greek)
        // $source = '9563'; //demo accout source // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.
        $source = '6637'; // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.

        $postargs = 'Amount=' . urlencode($amount) . '&AllowRecurring=' . $allow_recurring . '&RequestLang=' . $request_lang . '&SourceCode=' . $source;

        // Get the curl session object
        $session = curl_init($request);

        // Set the POST options.
        curl_setopt($session, CURLOPT_POST, true);
        curl_setopt($session, CURLOPT_POSTFIELDS, $postargs);
        curl_setopt($session, CURLOPT_HEADER, true);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($session, CURLOPT_USERPWD, $merchant_id . ':' . $api_key);
        // curl_setopt($session, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');

        // Do the POST and then close the session
        $response = curl_exec($session);
        // dd($response);
        // Separate Header from Body
        $header_len = curl_getinfo($session, CURLINFO_HEADER_SIZE);
        $res_header = substr($response, 0, $header_len);
        $res_body =  substr($response, $header_len);

        curl_close($session);
        // dd($res_body);
        // Parse the JSON response
        $result_obj = '';
        try {
            if (is_object(json_decode($res_body))) {
                $result_obj = json_decode($res_body);
            } else {
                preg_match('#^HTTP/1.(?:0|1) [\d]{3} (.*)$#m', $res_header, $match);
                throw new Exception("API Call failed! The error was: " . trim($match[1]));
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        if ($result_obj != '') {
            # code...
            // dd('here');
            if ($result_obj->ErrorCode == 0) {    //success when ErrorCode = 0
                $orderId = $result_obj->OrderCode;
                return redirect('https://www.vivapayments.com/web/newtransaction.aspx?ref=' . $orderId);
                // return redirect('https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId);

            } else {
                echo 'The following error occured: ' . $result_obj->ErrorText;
            }
        } else {
            dd('viva account error');
        }

        // ----end payment section----------
    }

    public function placeOrder0(Request $request)
    {
        // die('testing LoadView Function---->');
        // $this->saveOrder($request);
        $amount = Session::get('checkoutAddress')['total_amount'] * 100;

        return view('everypayform', ['amount' => $amount]);
        // $request =  'https://demo.vivapayments.com/api/orders';	// demo environment URL
        // $request =  'https://www.vivapayments.com/api/orders';	// production environment URL

        // // Your merchant ID and API Key can be found in the 'Security' settings on your profile.
        // $merchant_id = '493f6e1e-a9da-4806-973f-fd468619e0de';
        // $api_key = 'QjfD7T6F0xxmyuHO02X2f6dSHLU8oS';

        // //demo accout
        // // $merchant_id = 'd02176cc-cd20-4843-9ae4-0b9d37779247';
        // // $api_key = '&zhAfc';


        // //Set the Payment Amount

        // $amount = Session::get('checkoutAddress')['total_amount'] * 100;	// Amount in cents

        // if (Session::has('redeemAmount')) {
        //     # code...
        //     $getamount = Session::get('checkoutAddress')['total_amount'] - Session::get('redeemAmount');
        //     // dd($getamount);
        //     $amount = (Session::get('checkoutAddress')['total_amount'] - Session::get('redeemAmount')) * 100;	// Amount in cents

        // }else{

        //     $amount = Session::get('checkoutAddress')['total_amount'] * 100;	// Amount in cents
        // }

        // //Set some optional parameters (Full list available here: https://developer.vivawallet.com/api-reference-guide/payment-api/#tag/Payments/paths/~1orders/post)
        // $allow_recurring = 'true'; // If set to true, this flag will prompt the customer to accept recurring payments in the future.
        // $request_lang = 'en-US'; //This will display the payment page in English (default language is Greek)
        // // $source = '9563'; //demo accout source // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.
        // $source = '6637'; // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.

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
        // // dd($response);
        // // Separate Header from Body
        // $header_len = curl_getinfo($session, CURLINFO_HEADER_SIZE);
        // $res_header = substr($response, 0, $header_len);
        // $res_body =  substr($response, $header_len);

        // curl_close($session);
        // // dd($res_body);
        // // Parse the JSON response
        // $result_obj = '';
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
        // if ($result_obj != '' ) {
        //     # code...
        //     // dd('here');
        //     if ($result_obj->ErrorCode==0){	//success when ErrorCode = 0
        //         $orderId = $result_obj->OrderCode;
        //         return redirect('https://www.vivapayments.com/web/newtransaction.aspx?ref='.$orderId);
        //         // return redirect('https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId);

        //     }
        //     else{
        //         echo 'The following error occured: ' . $result_obj->ErrorText;
        //     }
        // }else{
        //     dd('viva account error');
        // }

        // ----end payment section----------
    }

    function loadView(Request $request)
    {
        $reqData = $request;
        $amount = Session::get('checkoutAddress')['total_amount'] * 100;    // Amount in cents
        if (Session::has('redeemAmount')) {
            # code...
            $getamount = Session::get('checkoutAddress')['total_amount'] - Session::get('redeemAmount');
            // dd($getamount);
            $amount = (Session::get('checkoutAddress')['total_amount'] - Session::get('redeemAmount')) * 100;    // Amount in cents

        } else {
            $amount = Session::get('checkoutAddress')['total_amount'] * 100;    // Amount in cents
        }

        $allow_recurring = 'true'; // If set to true, this flag will prompt the customer to accept recurring payments in the future.
        $request_lang = 'en-US'; //This will display the payment page in English (default language is Greek)
        // $source = '9563'; //demo accout source // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.
        $source = '6637'; // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.
        $tfcdata = $request->data;
        // $pk = 'sk_3twVit0RWMSevu7fDQIiyZnjA4YaabLc';
        $pk = 'sk_b8e82LpmyE5XRbzf9iLqIySUPqXe8PWM';

        $postRequest = array(
            'token' => $tfcdata,
            'amount' => $amount,
            'description' => ''
        );

        // $sellerId = explode("_", $tfcdata);
        // $seller = "sel_" . $sellerId[1];

        // $request = 'https://sandbox-api.everypay.gr/payments';
        $request = 'https://api.everypay.gr/payments';
        // $directTransfer = "https://api.everypay.gr/sellers/{$seller}/transfers";
        $session = curl_init($request);
        // $cURLConnection = curl_init('https://sandbox-api.everypay.gr/payments');
        curl_setopt($session, CURLOPT_USERPWD, $pk);
        curl_setopt($session, CURLOPT_POSTFIELDS, $postRequest);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($session);
        // $apiResponse = curl_exec($cURLConnection);
        // // dd($response);
        // // Separate Header from Body
        $header_len = curl_getinfo($session, CURLINFO_HEADER_SIZE);
        $res_header = substr($response, 0, $header_len);
        $res_body =  substr($response, $header_len);
        curl_close($session);
        // $dtData = array(
        //     'type' => 'debit',
        //     'amount' => $amount,
        //     'decription' => '',
        // );
        // // Direct Transfer Code
        // $curlDTcode = curl_init($directTransfer);
        // curl_setopt($curlDTcode, CURLOPT_USERPWD, $pk);
        // curl_setopt($curlDTcode, CURLOPT_POSTFIELDS, $dtData);
        // curl_setopt($curlDTcode, CURLOPT_RETURNTRANSFER, true);
        if ($response != '' && $response != null) {
            $this->saveOrder($reqData);
        }
        // curl_close($session);
        

        $result_obj = '';
        try {
            if (is_object(json_decode($res_body))) {
                $result_obj = json_decode($res_body);
            } else {
                preg_match('#^HTTP/1.(?:0|1) [\d]{3} (.*)$#m', $res_header, $match);
                throw new Exception("API Call failed! The error was: " . trim($match[1]));
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        if ($result_obj != '') {
            # code...
            // dd('here');
            if ($result_obj->ErrorCode == 0) {    //success when ErrorCode = 0
                $orderId = $result_obj->OrderCode;
                // echo 'Your Order Code is: <b>'. $orderId.'</b>';
                // echo '<br/><br/>';
                // echo 'To simulate a successful payment, use the 16-digit test credit card 5511070000000020, with a valid expiration date and 111 as CVV2.';
                // echo '</br/><a href="https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId.'" >Make Payment</a>';
                // return redirect('https://www.vivapayments.com/web/newtransaction.aspx?ref=' . $orderId);
                // return redirect('https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId);

                // return view('checkout')->with(compact('floristDetails','orderId'));
                // return redirect('http://ebloom.globaltouchdev.eu/gr');
                return redirect('http://ebloom.gr');
            } else {
                echo 'The following error occured: ' . $result_obj->ErrorText;
            }
        } else {
            // dd('viva account error');
        }
        // die('testing LoadView Function---->');
        // print_r($response);
        // echo "<br>";
        // $apiResponse - available data from the API request
        $jsonArrayResponse = json_decode($response);
        // print_r($jsonArrayResponse);
        // return view("/thankyou");
        // return redirect('https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId);
    }

    function savePaymentDetails()
    {
        // 'Code to save payment details';
    }
}//end of controller
