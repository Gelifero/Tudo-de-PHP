<?php
    $string_conexao = "pgsql:host=127.0.0.1; port=5432; dbname=cursos; user=postgres; password=postgres";
    $conn = new PDO($string_conexao);

    if (!$conn) { 
        echo "Não conectado";
    exit;
    }
    $varSQL = "SELECT nome, celular, email from aluno";
    $select = $conn->query($varSQL);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nome</td>
            <td>Celular</td>
            <td>Email</td>
        </tr>
            <?php
                while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['celular'] . "</td>";
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>