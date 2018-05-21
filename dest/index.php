<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <a href="createtask.html">Создать задачу</a>
    </header>

    <main class="main">
        <?php
            require_once('core.php');

            $queryArr = getDatas();
            foreach($queryArr as $mas){
        ?>

        <div class="task wrapper">
            <div class="date-theme">

                <div class="theme">
                    <span>
                        <?
                            echo '#id:'.$mas['id    ']
                        ?>
                    </span>
                    <span>
                        <? 
                            echo ' Тема: '.$mas['theme']
                        ?>
                    </span>
                </div>
                <div class="date">
                    <span>
                        <?php 
                            echo $mas['date'];
                        ?>
                    </span>
                </div>


            </div>
    
            <div class="task-description">
                <p>
                    <? 
                        echo $mas['description']
                    ?>
                </p>
            </div>

            <div class="keywords">
                <ol>
                    <li>
                        <?
                            echo $mas['keywords'];
                        ?>
                    </li>
                </ol>
            </div>
            <div class="keyfunctions">
                <ul>
                    <?
                        echo $mas['keyfunctions'];
                    ?>
                </ul>
            </div>

        </div>
    <?
        }
    ?>

    </main>

    <footer class="footer">

    </footer>
</body>
</html>