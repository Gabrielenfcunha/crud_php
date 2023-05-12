<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cadsatro</title>
</head>
<body>
  <h1>Editar cadastro</h1>
  <?php
    $sql = "SELECT * FROM text_estagio WHERE id=".$_REQUEST["id"];

    $res = $conentar->query($sql);
    $row = $res->fetch_object();
  ?>fetch_
  <form  action="?page=salvar"  method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id;?>">
    <div class="nb-3">
      <label>Nome</label>
      <input type="text" name="nome" value="<?php echo $row->nome;?>">
    </div>
    <div class="nb-3">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $row->email;?>">
    </div>
    <div class="nb-3">
      <label>Senha</label>
      <input type="password" name="senha" required>
    </div>
    <div class="nb-3">
      <label>Dta</label>
      <input type="date" value="<?php echo $row->data; ?>" name="data" >
    </div>
    <div class="nb-3">
      <button type="submit" name="enviar">Enviar</button>
    </div>
  </form>
</body>
</html>