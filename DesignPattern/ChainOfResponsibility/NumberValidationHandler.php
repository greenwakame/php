<?php
require_once 'ValidationHandler.php';

class NumberValidationHandler extends ValidationHandler
{
    protected function execValidation($input)
    {
        return (preg_match('/^[0-9]*$/', $input) > 0);
    }

    protected function getErrorMeassage()
    {
        return '半角数字で入力して下さい。';
    }
}