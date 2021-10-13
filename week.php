<?php
echo date('W', strtotime('2021-01-01')) . "\n";
echo date('W', strtotime('2021-01-02')) . "\n";
echo date('W', strtotime('2021-01-03')) . "\n";
echo date('W', strtotime('2021-01-04')) . "\n";
echo date('W', strtotime('2021-01-05')) . "\n";
echo date('W', strtotime('2021-01-06')) . "\n";
echo date('W', strtotime('2021-01-07')) . "\n";
echo date('W', strtotime('2021-01-08')) . "\n";
echo week_start_date(2021, 1) . "\n";

function week_start_date($year, $week_number=1) {
    $time = strtotime("{$year}-01-01");
    $week = date("w", $time);
    if($week>4 || $week==0) {
        $time = strtotime("next Monday", $time);
    } elseif ($week != 1) {
        $time = strtotime("last Monday", $time);
    }   
    $week_number--;
    return date("Y/m/d", strtotime("+{$week_number} Week", $time));
}
