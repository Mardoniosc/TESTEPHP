<?php

class Model
{
    private function returnResponse($url, $metodo){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMEREQUEST, 'GET');
        return json_decode(curl_exec($ch));
    }

    public function getMessage()
    {
        //Aqui eu crio minhas regras,
        //por exemplo, buscar esta mensagem
        //no banco de dados
        return 'Hello World';
    }

    public function getAllUser() {
        
        $url = 'http://localhost:8080/usuarios';

        $metodo = 'GET';
        return $this->returnResponse($url, $metodo); 
    }

    

}