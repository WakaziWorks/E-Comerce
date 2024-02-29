<?php

namespace App\Http\Controllers;
use App\Mpesa\STKPush;
use App\Models\MpesaSTK;
use Iankumu\Mpesa\Facades\Mpesa;//import the Facade
use Illuminate\Http\Request;

class MpesaSTKPUSHController extends Controller
{
    public $result_code = 1;
    public $result_desc = 'An error occured';

    // Initiate  Stk Push Request
    public function STKPush(Request $request)
    {

        $amount = $request->input('amount');
        $phoneno = $request->input('phonenumber');
        $account_number = $request->input('account_number');

        $response = Mpesa::stkpush($phoneno, $amount, $account_number);
        $result = json_decode((string)$response, true);

        MpesaSTK::create([
            'merchant_request_id' =>  $result['MerchantRequestID'],
            'checkout_request_id' =>  $result['CheckoutRequestID']
        ]);

        return $result;
    }
}
