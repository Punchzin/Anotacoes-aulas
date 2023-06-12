<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

include "Pessoa.class.php";
$pessoa = new Pessoa();
$pessoa ->incluirRegistro($nome, $email, $idade);

header("location:index.php");
?>

<script>
    alert ("Pessoa Incluida!");
</script>