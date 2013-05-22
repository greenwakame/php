<?php
require_once 'ValidationHandler.php';

class NotNullValidationHandler extends ValidationHandler
{
    protected function execValidation($inout)
    {
        return (is_null($input) && $input !== '');
    }

    protected function getErrorMessage()
    {
        return '何も入力されていません。';
    }
}