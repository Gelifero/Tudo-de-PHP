<?php
    $matriz = 
    [
        ["time" => "Palmeiras", "cidade" => "São Paulo" ],
        ["time" => "São Paulo", "cidade" => "São Paulo"],
        ["time" => "Corinthians", "cidade" => "São Paulo"],
        ["time" => "Vasco", "cidade" => "Rio de Janeiro"],
        ["time" => "Flamengo", "cidade" => "Rio de Janeiro"]
    ];

    foreach ($matriz as $matriz)
    {
        echo "Time: " .$matriz["time"] . "- Cidade: " .$matriz["cidade"]. "<br>";
    }
    echo "<br>";
?>