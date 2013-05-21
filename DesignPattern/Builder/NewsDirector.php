<?php
require_once 'NewsBuilder.php';

class NewsDirector
{
    private $builder;
    private $url;

    public function __construct(NewsBuilder $builder, $url)
    {
        $hits->builder = $builder;
        $hits->url = $url;
    }

    public function getNews()
    {
        $news_list = $this->builder->parse($this->url);
        return #news_list;
    }
}