<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
         $vetor= array();
       
       $vetor[0] = "João";
       $vetor[1] = "Mariana";
       $vetor[2] = "Jessica";
       $vetor[3] = "Nathalia";
       $vetor[4] = "Vitor";
       $vetor[5] = "Luan";
       $vetor[6] = "Lucas";
       $vetor[7] = "Emanoel";
       $vetor[8] = "Kamila";
       $vetor[9] = "Anderson";
        ?>
        
        <select>
            <option> Nomes </option>
            <?php for($i=0; $i<10; $i++){ ?>
            <option> <?php echo $vetor[$i] ?> </option>
            <?php } ?>
        </select>    
    </body>
</html>
