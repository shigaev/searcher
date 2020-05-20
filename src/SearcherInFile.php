<?php

namespace shigaev\searcher;

class SearcherInFile
{
    /**
     * @var SearchTypeInterface
     */
    public $searchType;

    public $allowedMime;

    public $maxFilesize;

    public function search($fileName, $str)
    {
        /**
         * Если указан filesize или mime то проверить файл на соответсвие
         */
        if ($this->allowedMime && is_array($this->allowedMime)) {
            $mime = mime_content_type($fileName);
            if (!in_array($mime, $this->allowedMime)) {
                throw new \Exception('Неправильный тип файла ' . $mime);
                return false;
            }
        }

        if ($this->maxFilesize) {
            $fileSize = filesize($fileName);
            if ($fileSize > $this->maxFilesize) {
                throw new \Exception('Файл слишком большой ' . $fileSize);
                return false;
            }
        }

        if (empty($this->searchType)) {
            $this->loadDefaultSearchType();
        }

        $this->searchType->search($fileName, $str);
    }

    /**
     * @return \shigaev\searcher\SearchRow|SearchTypeInterface
     */
    private function loadDefaultSearchType()
    {
        $this->searchType = new SearchRow();
        return $this->searchType;
    }

}