<?php
function countHours($datetime1, $datetime2)
{
    $date1 = new DateTime($datetime1);
    $date2 = new DateTime($datetime2);

    $diff = $date2->diff($date1);

    $hours = $diff->h;
    $hours = $hours + ($diff->days*24);

    return $hours + 1;
}
