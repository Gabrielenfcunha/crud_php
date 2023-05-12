<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<nav class="navbar-nav">
    <ul>
      <div class="nav-iten">
        <li>
          <a href="index.php">Home</a>
        </li>
      </div>
      <div class="nav-iten">
        <li>
          <a href="?page=cadastro">cadastro</a>
        </li>
      </div>
      <div class="nav-iten">
        <li>
          <a href="?page=listar">lista de usuario</a>
        </li>
      </div>
    </ul>
  </nav>
<div class="containar">
  <div class="row">
    <div class="cool mt-5">
      <?php
      include("function.php");
      switch (@$_REQUEST["page"]) {
        case "cadastro":
          include("cadastro.php");
        break;
        case "listar":
          include("listar.php");
        break;
        case "salvar":
          include("salvar.php");
        break;
        case "editar":
          include("editar.php");
        break;
        default:
          echo "<h1>Bem vindo!</h1>";
        break;
      }
    ?>
    </div>
  </div>
</div>
 
</body>
</html>