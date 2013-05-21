<?php
require_once 'News.php';
require_once 'NewsBuilder.php';

class RssNewsBuilder implements NewsBuilder
{
    public function parse($url)
    {
        $data = simplexml_load_file($url);
        if ($data == false) {
            throw new Exception('read data [' .
                                htmlspeciahars($url, ENT_QUOTES) .
                                '] failed !');
        }

        $list = array();
        foreach ($data->item as $item) {
            $dc = $item->children('URL');
            $list[] = new News($item->title,
                               $item->link,
                               $dc->data);
        }
        return $list;
    }
}