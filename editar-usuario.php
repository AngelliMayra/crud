<h1>Editar Usuário</h1>

<?php

    $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];
    $res = $conn ->query($sql);
    $row = $res -> fetch_object();

?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar" >
    <input type="hidden" name="id" value="<?php print $row->id; ?>"

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row ->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" value="<?php print $row ->cpf; ?>"class="form-control">
    </div>
    <div class="mb-3">
        <label>email</label>
        <input type="email" name="email" value="<?php print $row ->email; ?>"class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>


</form>