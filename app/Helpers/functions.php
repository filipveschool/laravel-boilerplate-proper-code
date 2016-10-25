<?php
/**
 * Created by PhpStorm.
 * User: filipve
 * Date: 25/10/2016
 * Time: 16:18.
 */
function set_active($path, $active = 'active')
{
    return call_user_func_array('Request::is', (array) $path) ? $active : '';
}

/**
 * @param $bytes
 * @param int $decimals
 * @return string
 */
function human_filesize($bytes, $decimals = 2)
{
    $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)).
    @$size[$factor];
}

/**
 * @param $mimeType
 * @return bool
 */
function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}

function diff_date_for_humans(Carbon\Carbon $date): string
{
    return (new Jenssegers\Date\Date($date->timestamp))->ago();
}

function roman_year(int $year = null): string
{
    $year = $year ?? date('Y');
    $romanNumerals = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];
    $result = '';
    foreach ($romanNumerals as $roman => $yearNumber) {
        // Divide to get  matches
        $matches = intval($year / $yearNumber);
        // Assign the roman char * $matches
        $result .= str_repeat($roman, $matches);
        // Substract from the number
        $year = $year % $yearNumber;
    }
    return $result;
}