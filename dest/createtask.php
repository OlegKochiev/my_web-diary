<?php
    require_once('core.php');

    $th = $_POST['theme'];
    $td = $_POST['task-description'];
    $kf = $_POST['keyfunctions'];
    $kw = $_POST['keywords'];
    $wk = $_POST['work'];
    $sc = $_POST['source'];
  
    if ($th == '' or $td == '' or $kf == '' or $kw == '') {
        header ("Location: ".$_SERVER['HTTP_REFERER']);
    } else {
        setDatas($th, $td, $kf, $kw, $wk, $sc);
        header ("Location: ".$_SERVER['HTTP_REFERER']);
    }

?>