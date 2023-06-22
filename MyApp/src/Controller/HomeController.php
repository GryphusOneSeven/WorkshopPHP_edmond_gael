<?php

namespace App\Controller;

class HomeController extends AppController
{
    public function index()
    {
        $test = "test";
        $this->set("test", $test);
    }

    public function second()
    {
        $this->viewBuilder()->setLayout('myLayout');
        $test = "test";
        $this->set("test", $test);
    }

}
?>