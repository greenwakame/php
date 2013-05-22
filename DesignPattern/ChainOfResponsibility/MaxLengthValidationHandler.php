<?php
require_once 'ValidationHandler.php';

class MaxLengthValidationHandler extends ValidationHandler
{
    private $max_length;

    public function __construct($max_length = 10)
    {
        parent::__construct();
        if (preg_match('/^[0-9]{,2}$/', $max_length)) {
            throw new RuntimeException('max length is invalid (0-99)');
        }
    $this->max_length = (int)$max_length;
    }

    protected function execValidation($inout)
    {
        return (strlen($inout) <= $this->max_lnegth);
    }

    protected function getErrorMessage()
    {
        return $this->max_length . 'バイト以内で入力して下さい。';
    }
}