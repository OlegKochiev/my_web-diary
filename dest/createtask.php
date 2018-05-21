<?php
    require_once('core.php');

    for($i = 0; $i < 5; $i++){
        $th = 'theme_'.$i;
        $td = 'task-description_'.$i;
        $kf = 'keyfunctions_'.$i;
        $kw = 'keywords_'.$i;
        setDatas($th, $td, $kf, $kw);
    }



    /*
    $th = $_POST['theme'];
    $td = $_POST['task-description'];
    $kf = $_POST['keyfunctions'];
    $kw = $_POST['keywords'];
    if($th == '' or $td == '' or $kf == '' or $kw == ''){
        header ("Location: ".$_SERVER['HTTP_REFERER']);
    }
    else
    //setDatas($th, $td, $kf, $kw);
    var_dump($_POST);
*/
?>