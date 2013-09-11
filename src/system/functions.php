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
function controll($name){
    $conf = new config();
    echo $conf->controllers($name);
}

function inc_controll($name) {
    $conf = new config();
    require_once $conf->controllers($name);
}

?>