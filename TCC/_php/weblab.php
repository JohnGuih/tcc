<?php
session_start();
include("conexao.php");
    
    $sintoma = $_POST['sintoma']; //array
    $ponteiro = 0;
    $qtd = count($sintoma);
    $loop = 0;
    $doenca = array();

    while ($loop < $qtd) {
        $sintomaselect = $sintoma[$loop];
        echo $sintomaselect." ";
        $query = "select sd.doenca from doencas d join sintomadoenca sd on d.doenca = sd.doenca where sd.sintoma = '{$sintomaselect}'";
        $result = mysqli_query($conexao, $query);
        while ($registro = mysqli_fetch_array($result)) {
            $array[$ponteiro] = $registro[0];
            $ponteiro++;
        }
        $doenca = array_merge($array, $doenca);
        $ponteiro = 0;
        $loop++;
    }

    print_r($doenca);
    $doenca = array_unique($doenca);
    $ponteiro = 0;
    $qtd = count($doenca);
    $loop = 0;

    while ($loop < $qtd) {
        $doencaselect = $doenca[$loop];
        $query = "select sd.sintoma from sintomas s join sintomadoenca sd on s.sintoma = sd.sintoma where sd.doenca = '{$doencaselect}'";
        $result = mysqli_query($conexao, $query);
        while ($registro = mysqli_fetch_array($result)) {
            $matriz[$loop][$ponteiro] = $registro[0];
            $ponteiro++;
        }
        $ponteiro = 0;
        $loop++;
    }

    print_r($doenca);
    print_r($matriz);
    $_SESSION["doenca"] = $doenca;
    $_SESSION["sintoma"] = $matriz;
    header("Location: /TCC/resultado_weblab.php");
?>
