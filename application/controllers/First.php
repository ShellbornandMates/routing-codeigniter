<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{
    public function index() {
        // this is the view we want shown
	$record = $this->quotes->get('6');
        echo $record['what'];
    }
    public function zzz() {
       $record = $this->quotes->get('6');
        echo $record['what'];
    }
}