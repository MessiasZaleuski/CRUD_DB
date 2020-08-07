<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'nome');
$email = filter_input (INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento');
$cidade = filter_input(INPUT_POST, 'cidade');
$uf = filter_input(INPUT_POST, 'uf');
$observacao = filter_input(INPUT_POST, 'observacao');
$ativo = filter_input(INPUT_POST, 'ativo');

/*ESTÁ CONDIÇÃO ABAIXO É ENQUANTO O USUÁRIO NÃO DIGITAR OS 
CAMPOS CORRETAMENTE, NÃO PASSA PARA OURA TELA.
*/
if($name && $email && $senha && $data_nascimento && $cidade
    && $uf && $observacao && $ativo) {

        //VERIFICA SE HÁ E-MAIL DUPLICADOS.
        $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() === 0) {
          $sql=$pdo->prepare("INSERT INTO usuario (nome,email,senha,data_nascimento,
            cidade,uf,observacao,ativo) VALUES (:nome, :email, :senha,
            :data_nascimento, :cidade, :uf, :observacao, :ativo)"); 
            $sql->bindValue(':nome', $name);
            $sql->bindValue(':email',$email);
            $sql->bindValue(':senha',$senha);
            $sql->bindValue(':data_nascimento',$data_nascimento);
            $sql->bindValue(':cidade',$cidade);
            $sql->bindValue(':uf',$uf);
            $sql->bindValue(':observacao',$observacao);
            $sql->bindValue(':ativo',$ativo);
            $sql->execute();

            //VOLTAR PARA O INDEX.
            header("Location: index.php");
            exit;

        }else{
          header ("Location: adicionar.php");
        exit;
    }

        }else{
             header("Location: adicionar.php");
           exit;
}