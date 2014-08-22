<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'api.php';

    $cn = new Connect();
    
    $response = $cn->getCargos();
    var_dump($response);
    

