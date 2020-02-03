<?php
session_start();
include("conexao.php");
    
    $sintoma = $_POST['sintoma']; //array
    $ponteiro = 0;
    $qtd = count($sintoma);
    $loop = 0;

    while ($loop < $qtd) {
        $sintomaselect = $sintoma[$ponteiro];
        $query = "select sd.doenca from doencas d join sintomadoenca sd on d.doenca = sd.doenca where sd.sintoma = '{$sintomaselect}'";
        $result = mysqli_query($conexao, $query);
        while ($registro = mysqli_fetch_array($result)) {
            $array[$ponteiro] = $registro;
            $ponteiro++;
        }
        $cubo[$loop] = $array;
        $ponteiro = 0;
        $loop++;
    }

    $loop = 0;
    $ponteiro = 0;
    $event1 = 0;
    $event2 = 0;
    $selector1 = 0;
    $selector2 = 0;

    while ($event1 != 1) {
        echo "teste1 ";
        $analizar = $cubo[$selector1][$selector2][0];
        if ($loop < $qtd) {
            echo "teste2 ";
            $qtdcubo = count($cubo[$loop]);
            while ($event2 < 1) {
                echo "teste3 ";
                if ($analizar != $cubo[$loop][$ponteiro][0]) {
                    echo "test4 ";
                    echo $cubo[$loop][$ponteiro][0]." ";
                    $ponteiro++;
                } else {
                    echo "fim ";
                    $selector2++;
                    $event2++;
                }
            }
            $selector2 = 0;
            $event2 = 0;
            $ponteiro = 0;
            $loop++;
        } else {
            $selector1++;
            $event1++;
        }
    }
    
    print_r($cubo);
    echo "<br>".$cubo[0][0][0];
    echo "<br>$qtd";
    echo "<br> $qtdcubo"
/*while ($ponteiro < $qtd) {
        $registro = $sintoma[$ponteiro];
        echo $registro;
        $ponteiro++;
    }*/
?>
