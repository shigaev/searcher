<?php

namespace shigaev\searcher;

class SearchRow implements SearchTypeInterface
{

    public function search($fileName, $str)
    {
        if (strpos(file_get_contents($fileName), $str) !== false) {
            $filestream = fopen($fileName, 'r') or die('Файл невозможно открыть');
            while (!feof($filestream)) {
                echo fgets($filestream) . '<br>';
            }
            fclose($filestream);
        }

        $fopen = file($fileName);
        foreach ($fopen as $key => $value) {
            if (substr_count($value, $str)) {
                echo '<b>строка</b> ' . ($key + 1);
                echo ' <b>позиция</b> ' . strpos($value, $str);
            }
        }
    }
}