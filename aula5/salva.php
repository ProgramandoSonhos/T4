<?php 

require('conexao.php');
    //var_dump($_POST);
    $nome = $_POST['nome'];
    $idCargo = $_POST['cargo'];
    $salario = $_POST['salario'];

    $sql = "insert into funcionarios(nome,fk_cargo,salario) values('$nome',$idCargo,$salario)";
    if($connect->query($sql)===true){
              echo "Dados inseridos com sucesso. ".$connect->affected_rows." linha atualizada<br/>"     ;
          }else{
              echo "Erro ao salvar dados!". $connect->error;
          }

?>