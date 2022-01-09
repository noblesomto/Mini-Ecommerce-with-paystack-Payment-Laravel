<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\Models\Payment;
use App\Models\Order;

class PaymentController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
     //Getting authenticated user 
       
        
        $paymentDetails = Paystack::getPaymentData(); //this comes with all the data needed to process the transaction
        // Getting the value via an array method    
        $order_id = $paymentDetails['data']['reference'];// Getting InvoiceId I passed from the form
        $status = $paymentDetails['data']['status']; // Getting the status of the transaction
        $amount = $paymentDetails['data']['amount']; //Getting the Amount
        $number = $randnum = rand(1111111111,9999999999);// this one is specific to application
        $number = 'year'.$number;

        $cartItems = \Cart::getContent();
        foreach ($cartItems as $item){
            Order::create(['order_id' => $order_id,'post_id'=>$item->id, 'title'=>$item->name, 'price'=>$item->price, 'quantity'=>$item->quantity]);
        }

        // dd($status);
        if($status == "success"){ //Checking to Ensure the transaction was succesful
          
            Payment::create(['order_id' => $order_id,'amount'=>$amount,'status'=>1]); // Storing the payment in the database
            
            \Cart::clear();     
            return redirect()->route('cart.list');
        }
      
        // Now you have the payment details,
        // you can store the authorization_code in your DB to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
