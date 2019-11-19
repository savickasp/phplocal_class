<?php


class First
{
    protected $company;

    protected function __construct($company)
    {
        $this->company = $company;
    }
}

class Second extends First
{
    protected $department;

    public function __construct($company, $department)
    {
        parent::__construct($company);
        $this->department = $department;
    }

    public function printAll () {
        print $this->company . '<br>' . $this->department;
    }
}

$x = new Second('Juoda','Salles');
$x->printAll();
//class Third extends Second
//{
//
//}
//
//class Fourth extends Third
//{
//
//}
//
//class Fifth extends Fourth
//{
//
//}
