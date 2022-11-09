<?php

//Get path image
function get_path_image($url = false)
{
    if($url) {
        $url_parts = parse_url($url);
        $url = isset($url_parts['path']) ? $url_parts['path'] : '';
        $url .= isset($url_parts['query']) ? "?".$url_parts['query'] : '';
    }
    return $url;
}

function str_limit($value, $limit = 24, $end = '...')
{
    if (mb_strwidth($value, 'UTF-8') <= $limit) {
        return $value;
    }
    return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')).$end;
}

function format_date($datetime)
{
    $year   = date("Y",strtotime($datetime));
    $month  = date("m",strtotime($datetime));
    $day    = date("d",strtotime($datetime));
    switch($month) {
        case 1:
            $month = 'Jan';
            break;
        case 2:
            $month = 'Feb';
            break;
        case 3:
            $month = 'Mar';
            break;
        case 4:
            $month = 'Apr';
            break;
        case 5:
            $month = 'May';
            break;
        case 6:
            $month = 'Jun';
            break;
        case 7:
            $month = 'Jul';
            break;
        case 8:
            $month = 'Aug';
            break;
        case 9:
            $month = 'Sep';
            break;
        case 10:
            $month = 'Oct';
            break;
        case 11:
            $month = 'Nov';
            break;
        case 12:
            $month = 'Dec';
            break;
        default:
            $month = '';
    }
    return  $month. ' '.$day.', '.$year;
}