<?php

use app\WebService\OpenWeatherMap;

//Dependências
require 'app/WebService/OpenWeatherMap.php';

//Definindo horario e data do Brasil
date_default_timezone_set('America/Sao_Paulo');
//Istância da classe
$obOpenWeatherMap = new OpenWeatherMap('60ee266484700ba887b49863fa9ed56d');
$data = date('Y-m-d');
$hora = date('H:i:s');
$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
$diaDaSemanaNumero = date('w',strtotime($data));
//Variaveis
$cidade = "São Paulo";
$uf = "SP";
//Executa a consulta na API no WeatherMap
$dadosClima = $obOpenWeatherMap->consultarClimaAtual($cidade, $uf);
//echo "Cidade: " . $cidade . " / " . $uf . PHP_EOL;
//echo "Temperatura: " . ($dadosClima['main']['temp'] ?? 'Desconhecido'). PHP_EOL;
//echo "Sensação Términa: " . ($dadosClima['main']['feels_like'] ?? 'Desconhecido').PHP_EOL;
//echo "Clima: " . ($dadosClima['weather'][0]['description'] ?? 'Desconhecido').PHP_EOL;
