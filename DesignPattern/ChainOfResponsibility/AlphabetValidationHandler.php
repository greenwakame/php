<?php
require_once 'ValidationHandler.php';

class AlphabetValidationHandler extends ValidationHandler
{
    protected function execValidation($input)
    {
        return preg_match('/^[a-z]*$/i', $input);
    }

    proteted function getErrorMessage()
    {
        return '半角英字で入力して下さい。';
    }
}