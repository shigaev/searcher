<?php

namespace shigaev\searcher;

class SearcherInFile
{
    /**
     * @var SearchTypeInterface
     */
    public $searchType;

    public $mime;

    public $filesize;

    public function search($fileName, $str)
    {
        /**
         * Если указан filesize или mime то проверить файл на соответсвие
         */

        if(empty($this->searchType)) {
            $this->loadDefaultSearchType();
        }

        $this->searchType->search($fileName, $str);
    }

    /**
     * @return \shigaev\searcher\SearchRow|SearchTypeInterface
     */
    private function loadDefaultSearchType() {
        $this->searchType = new SearchRow();
        return $this->searchType;
    }

}