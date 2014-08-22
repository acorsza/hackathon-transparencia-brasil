<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'api.php';
$estado = "SP";
$partido = "PT";

$candidatos = new Connect();
$response = $candidatos->getAllCandidates($estado,null,$partido,null);
var_dump($response);
