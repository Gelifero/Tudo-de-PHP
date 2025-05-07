<?php
    $n1 = 4;
    $n2 = 2;
    $media = ($n1 + $n2)/2;
    if ($media >= 7)
        echo "Sua media é: $media, voce esta aprovado";
    elseif ($media < 7 and $media >= 4)
        echo "Sua media é: $media, voce esta de recuperacao";
    else
        echo "Sua media e: $media, voce esta reprovado";
?>