<?php

    $nome =  $_POST['nome'];
    $celular = $_POST['celular'];
    $cidade =  $_POST['cidade'];


    
    echo "
    <table border = '1'>
        <tr>
            <th>Nome</th>
            <th>Celular</th>
            <th>Cidade</th>
        </tr>
        <tr>
            <td>$nome</td>
            <td>$celular</td>
            <td>$cidade</td>
        </tr>
    </table>
    ";
?>