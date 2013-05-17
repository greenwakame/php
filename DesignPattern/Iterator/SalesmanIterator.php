<?php
require_once 'Employee.php';
class SalesmanIterator extends FilterIteator
{
    public function __construct($iterator)
    {
        parent::__construct($iterator);
    }

    public function accept()
    {
        $employee = $this->current();
        return ($employee->getJob() == 'SALESMAN');
    }
}