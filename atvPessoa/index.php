<link rel="stylesheet" type="text/css" href="style.css">

<?php
include 'Pessoa.class.php';
$pessoa = new Pessoa();

$lista = $pessoa->getAll();
?>

<br>
<table>
<?php
foreach($lista as $item):
    ?>
    <tr>
        <td><?php echo $item['id']."-";?></td>
        <td><?php echo $item['nome']."-";?></td>
        <td><?php echo $item['idade']."-";?></td>
        <td><?php echo $item['email']."<br>";?></td>
        <?php echo "<hr>"; ?>
        
    </tr>
    </table>
    <?php
endforeach;