<?php
    require_once 'core.php';
    if($_POST['keyword'] != '' && $_POST['keywordDesc'] != ''){
        echo ($db->setKeyword($_POST['keyword'], $_POST['keywordDesc']));
    } else {
        echo "error";
    }