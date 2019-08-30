<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CCAvenue configuration file
    |--------------------------------------------------------------------------
    |   gateway = CCAvenue
    |   view    = File
     */

    'gateway' => 'CCAvenue', // Making this option for implementing multiple gateways in future

    'testMode' => false, // True for Testing the Gateway [For production false]

    'ccavenue' => [ // CCAvenue Parameters
        'merchantId' => env('CCAVENUE_MERCHANT_ID', '50226'),
        'accessCode' => env('CCAVENUE_ACCESS_CODE', 'AVLY02GB54BA05YLAB'),
        'workingKey' => env('CCAVENUE_WORKING_KEY', 'C14223EA5D43520D32948F27739FDBAC'),

        // Should be route address for url() function
        'redirectUrl' => env('CCAVENUE_REDIRECT_URL', 'donate/response'),
        'cancelUrl' => env('CCAVENUE_CANCEL_URL', 'payment/cancel'),

        'currency' => env('CCAVENUE_CURRENCY', 'INR'),
        'language' => env('CCAVENUE_LANGUAGE', 'EN'),
    ],

    // Add your response link here. In Laravel 5.* you may use the api middleware instead of this.
    'remove_csrf_check' => [
        'donate/response',
        'donate/cancel',
        'admissions/payment',
        'admission/cancel',
        'payment/cancel'
    ],

];
