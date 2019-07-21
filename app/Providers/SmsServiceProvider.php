<?php


namespace App\Providers;


use Overtrue\EasySms\EasySms;

class SmsServiceProvider
{
    public function sms()
    {
        try {
            $easySms = new EasySms(config('sms'));
            $easySms->send('15904435047', [
                'template' => '1ba6dbf76aad488eb06069949809b882',
                'data' => [
                    '1234',
                ],
            ]);
        } catch (NoGatewayAvailableException $e) {
            var_dump($e->getMessage());
        }
        return true;
    }

}