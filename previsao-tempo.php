<?php

use app\WebService\OpenWeatherMap;

//Dependências
require 'app/WebService/OpenWeatherMap.php';

//Istância da classe
$obOpenWeatherMap = new OpenWeatherMap('60ee266484700ba887b49863fa9ed56d');


//Executa a consulta na API no WeatherMap
$dadosPrevisao = $obOpenWeatherMap->consultarPrevisaoTempo('São Paulo', 'SP');
//Cidade
foreach (($dadosPrevisao['list'] ?? []) as $previsao) {
    //Monta os dados de impressão

       echo $previsao['dt_txt'];
       echo $previsao['main']['temp'];
        echo $previsao['main']['feels_like'];
        echo $previsao['weather'][0]['description'];
        
    }
//echo "Cidade: " . $cidade . " / " . $uf . PHP_EOL;


