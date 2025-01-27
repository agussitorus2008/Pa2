<?php

namespace App\Helpers;

class Helper
{
    public static function IDGenerator($length = 6)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public static function generate_coupon_code()
    {
        $code = '';
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < 6; $i++) {
            $code .= $characters[rand(0, $charactersLength - 1)];
        }
        return $code;
    }
}
