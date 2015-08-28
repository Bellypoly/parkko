<?php
include '../var.php';
$park_car = [
    'ณข1549ลำปาง' => 'B145'
];

function get_data($license = '', $province = '')
{
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
}

//example
//get_data('ณข1549', 'ลำปาง');