<?php
require('conexao.php');

$selectCargos = "Select id, nome from cargos";
$resultados = mysqli_query($conexao,$selectCargos);
$cargos="";

while($linha = mysqli_fetch_assoc($resultados)) {
	$cargos[] = $linha;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body> 

    <h2>Forms php</h2>

    <form action="salva.php" method="POST"> 
        Nome: <input type="text" id="nome" name="nome"><br />
        Cargo: <select name="cargo"> 
            <?php 
				foreach($cargos as $valor){
			?>

					<option value=<?php echo $valor['id'] ?>><?php echo $valor['nome'] ?></option>

            <?php  
				}
			?>
           
        </select>
        <br>
        Salário:<input type="text" name="salario"><br />
        <input type="submit" value="salvar">
    </form>

</body>

</html>