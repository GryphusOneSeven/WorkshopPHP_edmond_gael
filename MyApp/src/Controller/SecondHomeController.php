<?php

namespace App\Controller;

class SecondHomeController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('myLayout');
        $test = "test";
        $this->set("test", $test);
    }
}

?>