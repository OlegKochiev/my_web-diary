<?php
    require_once('core.php');

    $th = $_POST['theme'];
    $td = $_POST['task-description'];
    $kf = $_POST['keyfunctions'];
    $kw = $_POST['keywords'];
  
    if ($th == '' or $td == '' or $kf == '' or $kw == '') {
        header ("Location: ".$_SERVER['HTTP_REFERER']);
    } else {
        setDatas($th, $td, $kf, $kw);
        header ("Location: ".$_SERVER['HTTP_REFERER']);
    }

?>