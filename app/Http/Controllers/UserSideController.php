<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use Symfony\Component\HttpFoundation\Session\Session;

class UserSideController extends Controller
{
    public function ProductListing()
    {
        // echo "Product Listing Called";

        $productarray=product::all();
        return view('user.shop',compact('productarray'));
    }

    public function productdetails($id)
    {
        // echo $id;

        $productarray=product::where('Product_id',$id)->first();
        // if(!$productarray)
        //     {
        //         abort(404);
        //     }
        return view('user.productdetails',compact('productarray'));
    }

    public function addtocartprocess(Request $request,$id)
    {
        $Product_id=$id;
        $Product_qty=$request->input('Product_qty');

        $product=product::find($Product_id);
        if(!$product)
             {
                 abort(404);
             }

        //     // echo "Product_id" .$Product_id;
        //     // echo "Product_qty" .$Product_qty;

            $cart=session()->get('cart');
        //      $a=session()->all();
        //      print_r($a);

            if(!$cart)
                {
                    $cart=[
                        $id=>[
                            "Product_name"=>$product->Product_name,
                            "Product_price"=>$product->Product_price,
                            "Product_image"=>$product->Product_image,
                            "Product_details"=>$product->Product_details,
                            "Product_qty"=>$product->Product_qty,
                        ]
                    ];
                    session()->put('cart',$cart);
                    return redirect('/cart')->with('success','Product has been added to cart');
                   
                }

        //         if(isset($cart[$id]))
        //             {
        //                 $cart[$id]['Product_qty']=$cart[$id]['Product_qty']+$Product_qty;
        //                 session()->put('cart',$cart);
        //                 return redirect('/cart')->with('success','Product qty updat in a cart');
        //             }
            // $product = new product();
            // $Product_id=$id;
            // $Product_qty=$request->input('Product_qty');
            
            // $product=product::find($Product_id);
            // if(!$product)
            //  {
            //      abort(404);
            //  }
                $cart[$id]=[
                            "Product_name"=>$product->Product_name,
                            "Product_price"=>$product->Product_price,
                            "Product_image"=>$product->Product_image,
                            "Product_details"=>$product->Product_details,
                            "Product_qty"=>$product->Product_qty,
                ];
                session()->put('cart',$cart);
                return redirect('/cart')->with('success','Product has been added to cart');

        return redirect('cart')->with('sucessfully');
    }

    public function cart()
    {
       
             return view('user.cart');
    }

    public function removecart($id)
    {
        if($id)
            {
                $cart = session()->get('cart');
                if(isset($cart[$id]))
                    {
                        unset($cart[$id]);
                        session()->put('cart',$cart);
                    }
                    return redirect('/cart')->with('success','product has been removedfrom cart');
            }
    }

    public function updatecart(Request $request,$id)
    {
        $id=$id;
        $Product_qty=$request->Product_qty;

        if($id and $Product_qty)
            {
                $cart=session()->get('cart');
                $cart[$request->id]['Product_qty']=$Product_qty;
                session()->put('cart',$cart);
                return redirect('/cart')->with('seccess','cart update successfully');
            }
    }
    
}
