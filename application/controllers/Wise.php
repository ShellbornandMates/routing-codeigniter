<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application {
    
    public function bingo() {
        
        $record = $this->quotes->get('6');
        echo $record['what'];
    
    }
}