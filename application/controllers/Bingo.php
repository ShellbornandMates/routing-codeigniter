<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Homepage for our app
     */
    public function index()
    {
        $record = $this->quotes->get('5');
        echo $record['what'];
    }

}
