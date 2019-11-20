<?php

namespace calander;

Class WeekDay
{
    private $S;
    private $K;

    public function __construct($S, $K)
    {
        $this->S = $S;
        $this->K = $K;
    }

    public function afterKDays()
    {
        $afterK = date('D',strtotime("$this->S + $this->K days"));
        print $afterK;
    }
}