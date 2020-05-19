<?php

function searchRow($fileName, $str)
{

    if (strpos(file_get_contents($fileName), $str) !== false) {
        // do stuff
        $filestream = fopen($fileName, 'r') or die('Файл невозможно открыть');

        while (!feof($filestream)) {
            echo fgets($filestream) . '<br>';
        }
        fclose($filestream);
    }
}


searchRow('manifest', 'Lorem');



//echo fread($filestream, filesize('manifest'));


//$str = 'Most user users usually find PHP useful.';
//
//echo "' $str '<br>Длина строки: " . strlen($str);
//
//echo "<br>Первое вхождение 'us': " . strpos($str, 'us');
//echo "<br>Последнее вхождение 'us': " . strrpos($str, 'us');
//echo "<hr>Подстрока от первого вхождения 'us' без учета регистра: " . stristr($str, 'us');
//echo "<hr>Символы от первого вхождения 'u': " . strchr($str, 'u');
//echo "<br>Символы от последнего вхождения 'u': " . strrchr($str, 'u');
//
//$str = 'SQL in easy steps features SQL queries';
//echo "$str'<br>'SQL' счетчик: " . substr_count($str, 'SQL');
//
//echo '<hr>Позиция: 27' . substr($str, 27);
//echo '<hr>Позиция: 4, длина 13: ' . substr($str, 4, 13);