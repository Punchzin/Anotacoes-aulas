<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

include "Usuario.class.php";
$usuario = new Usuario();
$usuario ->incluirRegistro($nome, $email, $senha);

header("location:index.php");
?>

<script>
    alert ("Usuario Incluido!");
</script>