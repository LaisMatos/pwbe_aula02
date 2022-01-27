<?php

//declaração de variaveis
$nota1= (double)0;
$nota2= (double)0;
$nota3= (double)0;
$nota4= (double)0;
$media= (double)0;

    //tratamento do botão post
    if (isset($_POST['btncalc'])) {
        
    //atribuição de dados
    $nota1= $_POST['txtn1'];
    $nota2= $_POST['txtn2'];
    $nota3= $_POST['txtn3'];
    $nota4= $_POST['txtn4'];

    //calular media
    $media=($nota+$nota2+$nota3+$nota4)/4;
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
    </head>
	<body>
        
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtn1" value=""  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtn2" value="" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtn3" value="" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtn4" value="" >
                    </div>
                    <div>
                        <input type="submit" name="btncalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                Média: <?php echo($media);?>
            </footer>
        </div>
        
		
	</body>

</html>