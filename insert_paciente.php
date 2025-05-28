<?php

//receber os dados do formulário
 
$nm_paciente = $_POST['nm_paciente'];
$idade = $_POST ['idade'];
$dt_nascimento = $_POST['dt_nascimento'];

//incluir a conexão

include 'conexao.php';

//instrução de insert

$insert = "INSERT INTO tb_paciente VALUE (NULL, '$nm_paciente', $idade, '$dt_nascimento')";

//Utilizar uma função do php para executar o comando da variavel insert

$resultado = $conexao->query($insert);

if ($resultado){
    echo "<script>alert('Cadastrado com Sucesso!'); history.back(); </script>";
}
?>