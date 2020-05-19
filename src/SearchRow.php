<?php

namespace shigaev\searcher;

class SearchRow implements SearchTypeInterface
{

    public function search($fileName, $str)
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
}