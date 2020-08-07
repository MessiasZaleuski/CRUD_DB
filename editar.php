<?php
require 'config.php';
$info = [];
$id = filter_input(INPUT_GET, 'id');
if($id) {

    $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
    $sql->bindValue('id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {

        $info = $sql->fetch(PDO::FETCH_ASSOC);

    }else {
         header("Location: index.php");
         exit;
    }

}else {
    header("Location: index.php");
    exit;
}

?>
<h1>Editar Usuário</h1>

<form method="POST"action = "editar_action.php">
<input type="hidden" name="id" value="<?=$info['id'];?>"/>
    

    <label>
    Nome:<br>
    <input type= "text" name="name" value="<?=$info['nome'];?>"/>
    </label><br><br>

    <label>
    E-mail:<br>
    <input type="email" name="email" value="<?=$info['email'];?>"/>
    </label><br><br>
    
    <label>
    Senha:<br>
    <input type="password" name="senha" value="<?=$info['senha'];?>"/>
    </label><br><br>
    
    <label>
    Data nascimento:<br>
    <input type="date" name="data_nascimento" value="<?=$info['data_nascimento'];?>"/>
    </label><br><br>
   
    <label>
    Cidade:<br>
    <input type="text" name="cidade" value="<?=$info['cidade'];?>"/>
    </label><br><br>

    <label>
    UF:<br>
    <input type="text" name="uf" value="<?=$info['uf'];?>"/>
    </label><br><br>
    
    <label>
    Observação:<br>
    <input type="text" name="observacao" value="<?=$info['observacao'];?>"/>
    </label><br><br>
    
    <label>
    Ativo:<br>
    <input type="text" name="ativo" value="<?=$info['ativo'];?>"/>
    </label><br><br>

    <input type="submit" value= "Salvar"/>

</form>