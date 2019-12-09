<?php


class PageConstructor
{
    public function __construct($page)
    {
        $this->$page();
    }

    private function index()
    {
        require_once(ROOT . '\app\views\pages\layouts\headerIndex.php');
        require_once(ROOT . '\app\views\pages\bodyIndex.php');
        require_once(ROOT . '\app\views\pages\layouts\footerIndex.php');
    }


}
