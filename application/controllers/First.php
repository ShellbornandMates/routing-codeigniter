<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{
    public function index() {
	$record = $this->quotes->get('6');
        echo $record['what'];
    }
    public function zzz() {
       $record = $this->quotes->get('6');
        echo $record['what'];
    }
    public function gimme($id){
        $record = $this->quotes->get($id);
        echo $record['what'];
    }
    
}