<h1>Listar Usuário</h1>

<?php

$sql = "SELECT * FROM usuario";

$res= $conn->query($sql);

$qtd = $res -> num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-bordered'>";
        print "<tr>"; 
        print "<th>Nome</th>";
        print "<th>CPF</th>";
        print "<th>Email</th>";
        print "<th>Ações</th>";
        print "</tr>"; 
    
    while($row = $res-> fetch_object()){
        print "<tr>"; 
        print "<td>".$row -> nome ."</td>";
        print "<td>".$row -> cpf."</td>";
        print "<td>".$row -> email."</td>";
        print "<td> <button onclick=\"location.href='?page=editar&id=".$row ->id."';\" class = 'btn btn-success'>Editar</button>
                    <button <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'} else{false;}\" class = 'btn btn-danger'>Excluir</button> 
        
            </td>";
        print "</tr>"; 
    }
    print"</table>";

}else{
    print"<p class='alert alert-danger> Não encontramos nenhum registro</p>";
}

?>