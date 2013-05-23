<?php
class FIle
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function decompress()
    {
        echo $this->name . 'を展開しました。';
    }

    public function compress()
    {
        echo $this->name . 'を圧縮しました。';
    }

    public function create()
    {
        echo $this->name . 'を作成しました。';
    }
}