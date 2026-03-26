<?php

namespace App\Http\Controllers;
use App\Models\order_master;
use App\Models\order_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserOrderController extends Controller
{

public function showCheckout()
{
     
        return view('user.chackout'); 


}
    public function placeOrder(Request $request)
    {
    //    $user = $request->user();

    //         if (!$user) {
    //             return redirect('/login')->with('error', 'Please login first!');
    //         }

    //         $user_id = $user->id;
     $user_id = 1;

        // Session cart check
        $cart = session('cart');

        if(!$cart || count($cart) == 0){
            return redirect()->back()->with('error', 'Cart is empty!');
        }

         //  Step 3: Calculate total
                $total = 0;
                foreach($cart as $id => $details){
                    $total += $details['Product_price'] * $details['Product_qty'];
                }
                // dd($total);
        //  Step 4: Create Order Master
                $order = order_master::create([
                        'user_id' => $user_id,
                        'Order_date' => now(),           
                        'Order_status' => 'Pending', 
                        'Order_totalammount' => $total
                ]);
        //  Step 5: Create Order Details
            foreach($cart as $id => $details){
                order_details::create([
                    'Order_id' => $order->Order_id, 
                    'Product_id' => $id,
                    'Product_qty' => $details['Product_qty'],
                    'Product_price' => $details['Product_price'],
                ]);
            }
             //  Step 6: Clear session cart
            session()->forget('cart');

             return redirect('/order')->with('success', 'Order placed successfully!');
            // return "Checkout page works!";

    }

   public function myOrders()
            {
                //All oder_master data see
                $orders = order_master::all(); // later filter by user

                return view('user.order', compact('orders'));
            }

    
}
