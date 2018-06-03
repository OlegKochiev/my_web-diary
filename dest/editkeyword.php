<?php
    require_once('core.php');
    if(isset($_POST['btn3'])){
        if($_POST['newkeyword']!='' && $_POST['new-keyword-desc']!='' ){
            $keyword = $_POST['newkeyword'];
            $keywordDesc = $_POST['new-keyword-desc'];
            $db->setKeyword($keyword, $keywordDesc);
        }
    }
    $keyMas = $db->getKeywords();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editstyle.css">
    <script src="js/script.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создать ключевое слово</title>
</head>
<body>

    <header class="header">
        <a href="index.php">К задачам<br></a>
        <a href="createtask.html">Создать задачу</a>
    </header>

    <main class="main">
        <form action="<? echo $_SERVER['PHP_SELF'] ?>" method="post" class="form wrapper">
<?
if($keyMas != null){
foreach($keyMas as $mas)
{
    ?>
            <div class="editarea-container">
                <div class="keyword-container">
                    <input value="<? echo '#'.$mas['id_keyword'].': '.$mas['keyword']?>" readOnly type="text" name="editkeyword"  class="keyword" >
                    <textarea name="editkeyword-description"   class="keyword-desc" readOnly value=""><? echo $mas['description']?></textarea>
                </div>
                <div class="btn-container" id="<?echo $mas['id_keyword']?>">
                    <input type="button" onclick="editBtn(this)" value="Изменить" class="button" name="btn1">
                    <input type="button" onclick="deleteBtn(this)" value="Удалить" class="button" name="btn2" >
                </div>
            </div>
<?
    }}
?>
           <div class="newarea-container editarea-container">
                <div class="new-keyword-cont keyword-container">
                    <input type="text" name="newkeyword" class="keyword">
                    <textarea name="new-keyword-desc"   class="keyword-desc"></textarea>
                </div>
                <input type="submit" name="btn3" value="Добавить" class="button">
           </div>
        </form>
    </main>

</body>
</html>