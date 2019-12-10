<!DOCTYPE html>
<html>
<body>

<h1>Exemplo Select Dinâmico</h1>

<select>
<option value="">Selecione uma opção</option>
<?php
$cidades = array('BH'=>31,'SP'=>11,'RJ'=>21);

foreach($cidades as $cidade => $ddd){
?> 
<option value="<?php echo $ddd; ?>"><?php echo $cidade; ?></option>
<?php
}
?>
</select>


</body>
</html>