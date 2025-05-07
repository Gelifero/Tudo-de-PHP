<?php
    function imc ($peso, $altura) {
            return $peso / ($altura * $altura);
        }
    
        $peso = 70;
        $altura = 1.75;
        $imc = imc($peso, $altura);

        function classificacao ($imc) {
            if ($imc < 18.5) {
                return "Abaixo do peso: $imc";
            } else if ($imc >= 18.5 && $imc < 24.9) {
                return "Peso normal: $imc";
            } else if ($imc >= 25 && $imc < 29.9) {
                return "Sobrepeso: $imc";
            } else if ($imc >= 30 && $imc < 34.9) {
                return "Obesidade grau I: $imc";
            } else if ($imc >= 35 && $imc < 39.9) {
                return "Obesidade grau II: $imc";
            } else {
                return "Obesidade grau III: $imc";
            }
        }
?>