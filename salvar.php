<?php
switch ($_REQUEST["acao"]) {
  case 'cadastrar':
    $nome = $_POST["nome"];
    $emial = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $data = $_POST["data"];
    
    $sql ="INSERT INTO text_estagio (nome,email,senha,data) VALUES ('{$nome}','{$emial}','{$senha}','{$data}')";
    
    $res = $conentar->query($sql);
    if ($res==TRUE) {
        echo "<script>alert('Cadastro com sucesso');</script>";
        echo "<script>location.href='?page=listar';</script>";
    }else{
      echo "<script>alert('Não é possivel Cadastro ');</script>";
      echo "<script>location.href='?page=listar';</script>";
    }
    break;
  case 'editar':
      $nome = $_POST["nome"];
      $emial = $_POST["email"];
      $senha = md5($_POST["senha"]);
      $data = $_POST["data"];

      $sql = "UPDATE text_estagio SET 
                  nome='{$nome}',
                  email='{$emial}', 
                  senha='{$senha}',
                  data='{$data}' 
              WHERE 
                  id=".$_REQUEST["id"];   

      $res = $conentar->query($sql);
      if ($res==TRUE) {
          echo "<script>alert('editar com sucesso');</script>";
          echo "<script>location.href='?page=listar';</script>";
      }else{
        echo "<script>alert('Não é possivel editar ');</script>";
        echo "<script>location.href='?page=listar';</script>";
      }
      break;
  case 'excluir':
    $sql = "DELETE FROM text_estagio WHERE id=".$_REQUEST["id"]; 
    $res = $conentar->query($sql);
    if ($res==TRUE) {
        echo "<script>alert('Excluir com sucesso');</script>";
        echo "<script>location.href='?page=listar';</script>";
    }else{
      echo "<script>alert('Não é possivel excluir');</script>";
      echo "<script>location.href='?page=listar';</script>";
    }
    break;

}
?>