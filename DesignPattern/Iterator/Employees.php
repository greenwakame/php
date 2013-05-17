<?php
require_once 'Employee.php';

class Employee implments IteratorAggreate
{
    private $employees;

    public function __construct()
    {
        $this->employees = new ArrayObject();
    }

    public function add(Employee $employees)
    {
        $this->employees[] = $employees;
    }

    public function getIterator()
    {
        return $this->employees->getIterator();
    }
}