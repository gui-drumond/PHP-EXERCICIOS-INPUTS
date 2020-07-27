<?php
$um=$_POST['1'];
$dois=$_POST['2'];
$tres=$_POST['3'];
$quatro=$_POST['4'];
$cinco=$_POST['5'];
$seis=$_POST['6'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra Combinacoes</title>
</head>
<body> 
     <div class="container">
        <table class="table table-dark ">
            <tr class="text-center"><th> <h1>Combinacoes</h1></th></tr>
            <?php 
              $combinacoes=0;
                for($primeiro=0;$primeiro<$um;$primeiro++)
                {
                    for($segundo=0;$segundo<$dois;$segundo++)
                    {
                        for($terceiro=0;$terceiro<$tres;$terceiro++)
                        {
                            for($quarto=0;$quarto<$quatro;$quarto++)
                            {
                                for($quinto=0;$quinto<$cinco;$quinto++)
                                {
                                    for($sexto=0;$sexto<$seis;$sexto++)
                                    {                                    
                                        $soma=$primeiro+$segundo+$terceiro+$quarto+$quinto+$sexto;
                                        if(($soma)%3==0 )
                                        {
                                            echo '<tr class="text-center">'."<td>"."  ".$primeiro." - ".$segundo." - ".$terceiro." - ".$quarto." - ".$quinto." - ".$sexto." = SOMA: $soma"."</td>"."</tr>";
                                            $combinacoes++; 
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            ?>
        </table>
        <?="<h1>$combinacoes</h1>"?>
    </div>
</body>
</html>