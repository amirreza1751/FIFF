<?php

namespace App\Http\Controllers\API;

use App\PhoneNumberToken;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtpController extends Controller
{
    public function send_otp(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
            // sample phone number 09126774496
        ]);

        $token = mt_rand(10000,99999);
        $client1 =  new Client();
        $r = $client1->request('POST',
            'https://api.kavenegar.com/v1/33476D6852647047466A4B747A4A5A39326C564F326A77566845642F6D554C2F/verify/lookup.json?receptor='.$request->phone_number.'&token='.$token.'&template=fajrAlg',
            ['verify' => false]);
        $result = \GuzzleHttp\json_decode($r->getBody());
        PhoneNumberToken::create([
            'phone_number' => $request->phone_number,
            'token' => $token,
//            'date' => $result->entries[0]->date
            'used' => '0'
        ]);
        return $r->getBody();
    }
}
