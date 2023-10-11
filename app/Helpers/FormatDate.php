<?php

namespace App\Helpers;

use Exception;
use Carbon\Carbon;

/**
 * Created by Marselinus Harson Rewo 2023
 * Format Date and DateTime
 */
class FormatDate
{
    protected $property1;


    public static function getMonthName($month)
    {
        $month = (int) $month;
        $arrayMonth = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'Juny',
            7 => 'July',
            8 => 'Agust',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];

        return $arrayMonth[$month];
    }

    public static function getCutMonthName($month)
    {
        $month = (int) $month;
        $arrayMonth = [
            1 => 'Jan',
            2 => 'Feb',
            3 => 'Mar',
            4 => 'Apr',
            5 => 'May',
            6 => 'Jun',
            7 => 'Jul',
            8 => 'Agust',
            9 => 'Sept',
            10 => 'Oct',
            11 => 'Nov',
            12 => 'Dec',
        ];

        return $arrayMonth[$month];
    }

    public function getDateTime($data)
    {
        $parse = Carbon::parse($data);
        $month = $parse->format('m');
        $day = $parse->format('l');
        $date = $parse->format('d');
        $year = $parse->format('Y');
        $time = $parse->format('H:i');
        $month_name = self::getMonthName($month);
        $day_name = (string) $day;

        return "$day_name, $date $month_name $year $time";
    }

    public function getDate($data)
    {
        $parse = Carbon::parse($data);
        $month = $parse->format('m');
        $day = $parse->format('l');
        $date = $parse->format('d');
        $year = $parse->format('Y');
        $time = $parse->format('H:i');
        $month_name = self::getMonthName($month);
        $day_name = (string) $day;

        return "$day_name, $date $month_name $year";
    }

    public static function getDateTimeCutMonthTime($data)
    {
        $parse = Carbon::parse($data);
        $month = $parse->format('m');
        $day = $parse->format('l');
        $year = $parse->format('Y');
        $time = $parse->format('H:i');
        $month_name = substr($month, 0, 3);
        $date = $parse->format('d');

        return "$date $month_name $year $time";
    }

    public static function getDateTimeCutMonth($data)
    {
        $parse = Carbon::parse($data);
        $month = $parse->format('m');
        $day = $parse->format('l');
        $year = $parse->format('Y');
        $time = $parse->format('H:i');
        $month_name = self::getCutMonthName($month);
        $date = $parse->format('d');

        return "$date $month_name $year";
    }
}
