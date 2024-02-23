<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пухненкова №6</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    
    <div class="div">
        <h2>Введите число:</h2>
        <p>Введите число от 1 до 60</p>
        <form action="index.php" method="GET">
            <input type="text" name="q" size=22px value="<?php if(isset($_GET['q'])) echo $_GET['q']?>"><br>
            <input type="submit" name="result" value="Выполнить">
    </form>
    <?php
      error_reporting(E_ALL & ~E_NOTICE);
      ini_set('display_errors', 'Off');
        $q=$_GET['q'];
        if(isset($_GET['result']))
        {
            if(is_numeric($q))
            {
                if(($q<=60)and$q!=0)
                {
                    $we=$q%10;
                    if((($we<=3)or(($we>=6)and($we<=8)))and($we!=0))
                    {
                        $text='зеленый';
                        $color_green='green';
                    }
                    else
                    {
                        $text='красный';
                        $color_red='red';
                    }
                }
                else{ // если число больше заявленого
                    echo "СТРОГО введите число от 1 до 60";
                }
            }
            else{ // если введен символ
                echo "Введите именно число";
            }
        }
        else{ // если не нажата кнопка
            echo "Нажми кнопку и посмотрим что будет))";
        }
    ?>
    <p>Вывод:</p>
    <p>Сейчас горит <?=$text?> </p>
    <div class="znak">
        <div class="cvetofer">
            <div class= "<?=$color_red?> razmer red_static" ></div><!--равно обязательно -->
            <div class= "<?=$color?> razmer yelow_static" ></div>
            <div class= "<?=$color_green?> razmer green_static" ></div>
        </div>
        <div class="stop"> CТОП</div>
    </div>
    

    </div>

</body>
</html>