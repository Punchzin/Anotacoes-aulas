<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'Usuario.class.php';
$usuario = new Usuario();

$lista = $usuario->getAll();
?>

<a href="inserir.php">
    <br><button class="botao">ADICIONAR REGISTRO</button>
</a>

<?php
foreach($lista as $item):
    ?>
    <p><?php echo $item['id'];?></p>
    <p><?php echo $item['nome'];?></p>
    <p><?php echo $item['senha'];?></p>
    <p><?php echo $item['email'];?></p>
    <hr>
    <?php
endforeach;