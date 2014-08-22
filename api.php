<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    class Connect{

        protected $url_acesso = 'http://api.transparencia.org.br/api/v1/';
        protected $app_token = 'zzT2iLU9tk5H';

        private function sendRequest($url){

            $ch = curl_init($this->url_acesso.$url);
            curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'App-Token: '.$this->app_token,
            'Content-Type: application/json',
            'Accept: application/json'));

        // Getting results

        $result = json_decode(curl_exec($ch));
        curl_close($ch);
        return $result;
        }

        public function getAllCandidates($state,$position=null,$party=null,$name=null){

            $url = 'candidatos?estado='.$state.'&cargo='.$position;
            if($party != null){
                    $url = $url.'&partido='.$party;
            }
            if($name != null){
                    $url = $url.'&nome='.$name;
            }
            return $this->sendRequest($url);
            }
            
        public function getEstados() {
            $url = 'estados';
            return $this->sendRequest($url);
        }
        
        public function getCargos() {
            $url = 'cargos';
            return $this->sendRequest($url);
        }
    }
    ?>
