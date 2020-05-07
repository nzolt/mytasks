<?php


namespace App\Helpers;

class DateHelper
{
    public static function getMinDate()
    {
        return date('Y-m-d', time());
    }

}
