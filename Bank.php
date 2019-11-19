<?php

class Bank {

    protected $balance;
    protected $owner;
    protected $accountNumber;

    public function __construct($balance, $owner, $accountNumber) {
        $this->balance = $balance;
        $this->owner = $owner;
        $this->accountNumber = $accountNumber;
    }

    public function getBalance() {
        print 'Balance: ' . $this->balance . '<br>';
        return $this;
    }

    public function increaseBalance($amount) {
        $this->balance += $amount;
        $this->getBalance();
        return $this;
    }

    public function decreaseBalance($amount) {
        $this->balance -= $amount;

        if ($this->balance >= 0) {
            
        } else {
            $this->balance += $amount;
            print 'not enough funds <br>';
        }
        $this->getBalance();
        return $this;
    }

}
