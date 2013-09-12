<?php

//===================== Functions =========================

function removedir($dr) {
    $d = opendir($dr);
    while ($file = readdir($d)) {
        if ($file == "." || $file == "..") {
            continue;
        }
        if (is_dir($dr . "/" . $file)) {
            rmdir($dr . "/" . $file);
        } else {
            unlink($dr . "/" . $file);
        }
    }

    closedir($d);

    return rmdir($dr);
}

//END function removedir

function fileExist($id, $file_name, $dir, $exist, $notex) {
    $path = $dir . '/' . $id . '/' . $file_name; // Please Check directory first!!!!!!!!!!!!
    if (file_exists($path)) {
        $fileEx = $exist;
    } else {
        $fileEx = $notex;
    }
    return $fileEx;
}

//END function fileExist

function thai_date($str_date, $show_day = "n") {
    $time_stamp = strtotime($str_date);
    $days = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
    $months = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    $d = date('w', $time_stamp);
    $day = $days[$d];
    $date = date('j', $time_stamp);
    $m = date('m', $time_stamp) - 1;
    $month = $months[$m];
    $year = date('Y', $time_stamp) + 543;
    if ($show_day == 'y') {
        return "วัน$day ที่ $date $month พ.ศ.$year";
    } else {
        return "$date $month $year";
    }
}

function controll($name) {
    $conf = new config();
    echo $conf->controllers($name);
}

function get_controll($name) {
    $conf = new config();
    require_once $conf->controllers($name);
}

function includes($name) {
    $conf = new config();
    echo $conf->includes($name);
}

function get_includes($name) {
    $conf = new config();
    require_once $conf->includes($name);
}

function plugins($file_name) {
    $conf = new config();
    echo $conf->plugins($file_name);
}

function script($file_name){
    $conf = new config();
    echo $conf->script($file_name);
}

function style($file_name){
    $conf = new config();
    echo $conf->style($file_name);
}

function views($name) {
    $conf = new config();
    echo $conf->views($name);
}

function get_views($name) {
    $conf = new config();
    require_once $conf->views($name);
}

function uploads($file_name) {
    $conf = new config();
    echo $conf->uploads($file_name);
}

function doc_head($title){
    echo '
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- disable iPhone inital scale -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <title>' . $title . '</title>
        
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

        <!-- main css -->
        <link href="../themes/adaptive-design/css/style.css" rel="stylesheet" type="text/css">

        <!-- media queries css -->
        <link href="../themes/adaptive-design/css/media-queries.css" rel="stylesheet" type="text/css">

        <!-- html5.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="../themes/adaptive-design/js/html5.js"></script>
        <![endif]-->

        <!-- css3-mediaqueries.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="../themes/adaptive-design/js/css3-mediaqueries.js"></script>
        <![endif]-->
        
    ';
}
?>