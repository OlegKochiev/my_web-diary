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
        
    </header>

    <main class="main">

        <div class="task wrapper">
            <div class="date-theme">
                <div class="date">
                    <span>
                        <?php 
                            echo date("d M Y H:i:s");
                        ?>
                    </span>
                </div>

                <div class="theme">
                    <span>
                        <?php echo "Тема:"?>
                    </span>
                    
                </div>
            </div>
    
            <div class="task-description">
                <p>
                    <?php echo "Task description!!"?>
                </p>
            </div>

            <div class="keywords">
                <ol>
                    <li>PHP7</li>
                    <li>HTML5</li>
                    <li>CSS</li>
                    <li>JS</li>
                </ol>
            </div>
            <div class="keyfunctions">
                <ul>
                    implode(),
                    explode(),
                    serialize(),
                    unserialize().
                </ul>
            </div>
        </div>


    </main>

    <footer class="footer">

    </footer>
</body>
</html>