<?php

function diff_dates($from_date)
{
$current_date_time = date('Y-m-d H:i:s');
$to_time = strtotime($current_date_time);
$from_time = strtotime($from_date);
$minutes=round(abs($to_time - $from_time) / 60,2);
return $minutes;
}
function convert_hours($minutes)
{
    $hours = intdiv($minutes, 60).':'. ($minutes % 60);
    return $hours;
}
?>