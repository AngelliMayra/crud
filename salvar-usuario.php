<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];

        $sql = "INSERT INTO usuario (nome, cpf, email) VALUES ('{$nome}', '{$cpf}', '{$email}')";

        $res = $conn->query($sql);
        if($res==true){
            print"<script> alert('Cadastrado com sucesso');</script>";
            print"<script> location.href = '?page=listar';</script>";

            

        } else{
            print"<script> alert('Dado não cadastrado');</script>";
            print"<script> location.href = '?page=listar';</script>";

        }
        


    case 'editar':
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];

        $sql = "UPDATE usuario SET nome = '{$nome}', cpf = '{$cpf}', email = '{$email}' WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);
        if($res==true){
            print"<script> alert('Editado com sucesso');</script>";
            print"<script> location.href = '?page=listar';</script>";

            

        } else{
            print"<script> alert('Não foi possível editar');</script>";
            print"<script> location.href = '?page=listar';</script>";

        }
        break;

    case 'excluir':
        $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        if($res==true){
            print"<script> alert('Excluído com sucesso');</script>";
            print"<script> location.href = '?page=listar';</script>";

            

        } else{
            print"<script> alert('Não foi possível excluir');</script>";
            print"<script> location.href = '?page=listar';</script>";

        }
        break;
}
