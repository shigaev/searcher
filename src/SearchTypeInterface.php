<?php


namespace shigaev\searcher;


interface SearchTypeInterface
{
    function search($filename, $str);
}