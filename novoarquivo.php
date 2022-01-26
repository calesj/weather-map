<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div id="DivSaida">
        <!-- VALOR DA VARIÁVEL SERÁ MOSTRADO AQUI -->
        <?php require_once("index.php"); ?>
    </div>
</body>
<script type="text/javascript">
    

        minhaUrl = "clima-atual.php"; // CAMINHO DA PÁGINA COM O ECHO

        setInterval(function(){

            $.ajax({
                url: minhaUrl,
                success: function(result) {
                    $('#DivSaida').html(result);
                }
            });

        }, 1000); // TEMPO PARA ATUALIZAR EM MS (milissegundos)

    
</script>
</html>
