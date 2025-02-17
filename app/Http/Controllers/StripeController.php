<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function checkout()
    {
        $secret_key = "sk_test_51Ma7n2I8fRgdwLJd4g81RwGNuhKBjNzW1zI3DMVWXImseIJKS8b4B3zgjyEYC3DTAo9O0spT2qv3hscRs47yyBVY00EEPUstSy";

        \Stripe\Stripe::setApiKey($secret_key);

        $session = Session::create([
            'mode'        => 'payment',
            'locale'    =>'en',
            'success_url' => route('success'),
            // 'cancel_url'  => route('checkout'),

            'line_items'  => [
                [
                    'price_data' => [
                        'unit_amount'  => 2500,
                        'currency'     => 'usd',
                        'product_data' => [
                            'name' => 'T-shirt',
                        ],
                    ],
                    'quantity'   => 1,
                ],
                [
                    'price_data' => [
                        'unit_amount'  => 12500,
                        'currency'     => 'usd',
                        'product_data' => [
                            'name' => 'T-shirt2',
                        ],
                    ],
                    'quantity'   => 2,
                ],

            ],
        ]);
        return redirect()->away($session->url);
    }

    public function success()
    {
        return view('index');
    }
}
