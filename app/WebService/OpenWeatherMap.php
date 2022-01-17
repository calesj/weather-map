<?php


namespace app\WebService;

class OpenWeatherMap{
    /**
     * URL BASE DAS APIS
     * @var string
     */
    const BASE_URL = 'https://api.openweathermap.org';

    /**
     * CHAVE DE ACESSO DA API
     * @var string
     */
    private $apiKey;

    public function __construct($apiKey){
        $this->apiKey = $apiKey;
    }
    /**
     * Método responsavel por obter o clima atual de uma cidade no Brasil
     * @param string $cidade
     * @param string $uf
     * @return array
     */

    public function consultarClimaAtual($cidade,$uf){
        return $this->get('/data/2.5/weather',
    [
        'q'=> $cidade.',BR-'.$uf.',BRA'
    ]);

    }
    /**
     * Método responsavel por executar a consulta GET na api do OpenWeatherMap
     * @param string $resource
     * @param array $params
     * @return array
     */
    private function get($resource,$params = []){
     //Parâmetros adicionais
     $params['units'] = 'metric';
     $params['lang'] = 'pt_br';
     $params['appid'] = $this->apiKey;
    
     //Endpoint
     $endpoint = self::BASE_URL.$resource.'?'.http_build_query($params);

     //Inicia o curl
     $curl = curl_init();
     //Configurações do Curl
       curl_setopt_array($curl,[
         CURLOPT_URL => $endpoint,
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_CUSTOMREQUEST => 'GET'
     ]);
     //response
    $response = curl_exec($curl);

    //Fecha a conexao do Curl
    curl_close($curl);
//Response em array
     return json_decode($response,true);
    }

}