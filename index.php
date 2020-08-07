<?php
require 'config.php';

//VERIFICANDO SE EXISTE REGISTRO.
$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<h1 class="pagina">ESCOLHA UMA DAS OPÇÕES ABAIXO</h1>
<a href="adicionar.php"> <input type="submit" value= "ADICIONAR USUÁRIO"/></a>&nbsp
<a href="formulario.html"> <input type="submit" value= "ORÇAMENTO"/></a><br><br>


<table border="1" width="80%">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>senha</th>
        <th>data_nascimento</th>
        <th>uf</th>
        <th>cidade</th>
        <th>observação</th>
        <th>ativo</th>
        <th>acões</th>
        
    </tr>
    
    <?php foreach($lista as $usuario): ?>
    <tr>
        <td><?=$usuario['id'];?></td>
        <td><?=$usuario['nome'];?></td>
        <td><?=$usuario['email'];?></td>
        <td><?=$usuario['senha'];?></td>
        <td><?=$usuario['data_nascimento'];?></td>
        <td><?=$usuario['cidade'];?></td>
        <td><?=$usuario['uf'];?></td>
        <td><?=$usuario['observacao'];?></td>
        <td><?=$usuario['ativo'];?></td>
        <td>
            <a href="editar.php?id=<?=$usuario['id'];?>">[Editar] </a>
            <a href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a>
        
    <?php endforeach; ?>
        
    </table>

    
   
