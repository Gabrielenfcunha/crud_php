<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cadsatro</title>
</head>
<body>
  <h1>Novo cadastro</h1>
  <form  action="?page=salvar"  method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="nb-3">
      <label>Nome</label>
      <input type="text" name="nome" placeholder="">
    </div>
    <div class="nb-3">
      <label>Email</label>
      <input type="email" name="email" placeholder="exemplo@gamil.com ">
    </div>
    <div class="nb-3">
      <label>Senha</label>
      <input type="password" name="senha" placeholder="senha ">
    </div>
    <div class="nb-3">
      <label>Dta</label>
      <input type="date" name="data" >
    </div>
    <div class="nb-3">
      <button type="submit" name="enviar">Enviar</button>
    </div>
  </form>
</body>
</html>