<?php

function mostraTitulo()
{
	echo "<h3>Funções sem parâmetro</h3>";
}

function mostraTitulo2($valor)
{
	echo '<h3>Função com parâmetro - '.$valor.'</h3>';
}


?>
<!DOCTYPE html>
<html>
<body>

<h1>Exemplo Função</h1>
<?php

mostraTitulo();
$nome = 'Paulo';
mostraTitulo2($nome);

?>

</body>
</html>