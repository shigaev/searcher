# searcher
Мини библиотека для поиска текста в файле

composer.json
```json 
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/shigaev/searcher.git"
    }
  ],
  "require": {
    "shigaev/searcher": "dev-master"
  }
}
```

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

$searcher = new \shigaev\searcher\SearcherInFile();
$searcher->maxFilesize = 618;
$searcher->allowedMime = [
    "text/plain"
];
try {
    $searcher->search('filename', 'text');
} catch (\Exception $e) {
    echo $e->getMessage();
}
?>
```
