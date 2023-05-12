<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atulizar</title>
</head>
<body>
  <h1>Listagem</h1>
  <?php
      $sql ="SELECT * FROM text_estagio ";
    
      $res = $conentar->query($sql);

      $qtd = $res->num_rows;
      if ($qtd > 0) {
        echo"<table border='1'>";
        echo" <thead>";
        echo" <tr>";
        echo " <th>ID</th>";
        echo " <th>None</th>";
        echo " <th>E-mail</th>";
        echo " <th>data</th>";
        echo " <th>Ação</th>";
        echo"</tr>";
        echo"</thead>";
        while ($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->nome."</td>";
            echo "<td>".$row->email."</td>";
            echo "<td>".$row->data."</td>";
            echo "<td><button onclick=\"location.href='?page=editar&id=".$row->id."';\">Editar</button>
            <button onclick=\"if (confirm('Tem certeza que deseja excluir'))
            {location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{FALSE}\">Excluir</button>
            </td>";
            echo "</tr>";
        } 
        echo "</table>";
      }else{
        echo "<p class='alert' >Não encontrado resultado";
      }





  ?>
</body>
</html>
