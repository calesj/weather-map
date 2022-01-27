<?php
require 'app/clima-atual.php';
?>

<!doctype html>
<html lang="pt_BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script language="javascript" type="text/javascript"> </script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Clima Atual</title>
</head>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <div class="result"></div>

  <body>

    <h5><?php echo "$cidade, $uf " . $dadosClima['sys']['country'] ?></h5>
    <h6>
      <p id="time"></p><?php echo $diasemana[$diaDaSemanaNumero] ?>
    </h6>
    <h1>
      <p id="temperatura"><?php echo $dadosClima['main']['temp'] ?>ºC</p>
    </h1>
    <h2>
      <p id="clima"></p>
    </h2>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
<script>
  

  
    var timeDisplay = document.getElementById("time");
    var dateString = new Date().toLocaleString("pt-BR", {
      timeZone: "America/Sao_Paulo"
    });
    var formattedString = dateString.replace(", ", " - ");
    timeDisplay.innerHTML = formattedString;

    var temp ='<?=$dadosClima['main']['temp'] ?>'
    console.log(temp)

</script>

</html>