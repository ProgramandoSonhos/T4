<?php
$cidades = array('BH'=>31,'SP'=>11,'RJ'=>21);
?>
<!DOCTYPE html>
<html>
<body>

<h1>Exemplo Tabela Dinâmica</h1>

<table border="1">
<tr>
	<th>Cidade</th>
    <th>DDD</th>
</tr>
<?php
foreach($cidades as $cidade => $ddd){
?> 
<tr>
  <td><?php echo $cidade; ?></td>
  <td><?php echo $ddd; ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>