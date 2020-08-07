<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'nome');
$email = filter_input (INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento');
$cidade = filter_input(INPUT_POST, 'cidade');
$uf = filter_input(INPUT_POST, 'uf');
$observacao = filter_input(INPUT_POST, 'observacao');
$ativo = filter_input(INPUT_POST, 'ativo');

if ($id && $name && $email && $senha && $data_nascimento && $cidade
    && $uf && $observacao && $ativo) {

        //ATUALIZAÇÃO DO CAMPO EDITAR
    $sql = $pdo->prepare("UPDATE usuario SET nome = :name, email = :email,
    senha = :senha, data_nascimento = :data_nascimento, cidade = :cidade,
    uf = :uf, observacao = :observacao, ativo = :ativo WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->bindValue(':data_nascimento', $data_nascimento);
    $sql->bindValue(':cidade', $cidade);
    $sql->bindValue(':uf', $uf);
    $sql->bindValue(':observacao', $observacao);
    $sql->bindValue(':ativo', $ativo);
    $sql->execute();

    header("Location: index.php");
    exit;

    }else{
     header("Location: adicionar.php");
    exit;
}