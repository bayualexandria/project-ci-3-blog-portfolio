<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        return redirect('auth');
    }
}

function elapsed_time($timestamp, $precision = 2)
{
    $time = time() - $timestamp;
    $a = array('Decade' => 315576000, 'Year' => 31557600, 'Month' => 2629800, 'Week' => 604800, 'Day' => 86400, 'Hours' => 3600, 'Min' => 60, 'Sec' => 1);
    $i = 0;
    foreach ($a as $k => $v) {
        $$k = floor($time / $v);
        if ($$k) $i++;
        $time = $i >= $precision ? 0 : $time - $$k * $v;
        $s = $$k > 1 ? 's' : '';
        $$k = $$k ? $$k . ' ' . $k . $s . ' ' : '';
        @$result .= $$k;
    }
    return $result ? $result . 'ago' : '1 sec to go';
}
