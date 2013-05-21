<?php
require_once 'NewsDirector.php';
require_once 'RssNewsBuilder.php';

$builder = new RssNewsBuilder();
$url = 'RSSのURL';

$director = new NewsDirector($builder, $url);

foreach ($director->getNews() as $article) {
    printf ('<li>[%s]<a href= "%s">%s</a></li>',
            $article->getData(),
            $article->getUrl(),
            $article->getTitle()
            );
}