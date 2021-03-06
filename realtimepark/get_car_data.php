<?php
include '../var.php';
include 'cal_hour.php';
include 'calculate_charge.php';
$park_car = [
    'สฬ5420กรุงเทพมหานคร' => 'A124',
    'ณข1549ลำปาง' => 'B145',
    'ฌส2709กรุงเทพมหานคร' => 'A211',
];

function get_data($license = '', $province = '')
{
    $temp;
    date_default_timezone_set("Asia/Bangkok");
    foreach ($GLOBALS['data'] as $val) {
        if($val['license'] == $license && $val['province'] == $province) {
            $temp = $val;
        }
    }
    $park_car = $GLOBALS['park_car'];

    $result = [];
    $result['park'] = $park_car[$license . $province];
    $result['time_in'] = $temp['time_in'];
    $result['time_now'] = date('Y/m/d H:i:s');
    $result['hours'] = countHours($result['time_in'], $result['time_now']);
    $result['price'] = calculate_charge($result['time_in'], $result['time_now']);
    return $result;
}

//example
// $dd = get_data('ณข1549', 'ลำปาง');
// var_dump($dd);