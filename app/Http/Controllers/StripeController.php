<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function checkout() {
        Stripe::setApiKey(config('stripe.sk'));
        $session = Session::create([
            'line_items' => [
                [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Sleek African Men Shirt'
                    ],
                    'unit_amount' => 5000,
                ],

                'quantity' => 1,
            ],
        ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('index')
        ]);

        return redirect()->away($session->url);

    }

    public function success() {
        return view('index');

    }
}
