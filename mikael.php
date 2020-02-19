<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>RX</title>
  </head>
  <body>
  <div class="container">
      <h1>Faça Seu Cadastro</h1>
      <form method="POST" action="incluir.php" name="form" id="form">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="txtNome">Nome Completo</label>
            <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome Completo">
          </div>
          <div class="form-group col-md-6">
            <label for="txtLogin">Login</label>
            <input type="text" class="form-control" id="txtLogin" name="txtLogin" placeholder="Digite um Nome de Login">
          </div>
          
          <div class="form-group col-md-6">
            <label for="txtSenha">Senha</label>
            <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="Senha">
          </div>
        
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="txtEmail">Email</label>
            <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
          </div>

          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="txtAtivo">Ativo</label>
            <input type="number" class="form-control" id="txtAtivo" name="txtAtivo" placeholder="1 - Para Ativo e 0 - Para Inativo">
          </div>
          
        </div>        
        <div class="container">
        <input type="submit" class="btn btn-primary" id="btnIncluir" name="btnIncluir" value="Incluir">
        <input type="reset" class="btn btn-primary" id="btnLimpar" name="btnLimpar" value="Limpar">
        </div>
      </form>
</div>
<?php
        
        $cn = mysqli_connect("localhost", "root", "", "cms");
        $r = NULL;
        $q = mysqli_query($cn, "SELECT * FROM usuario;");
        while($row = mysqli_fetch_assoc($q)){
            $r[] = $row;
        }
        mysqli_close($cn);

        $ativo = $_POST["txtAtivo"];
        if($ativo == 1){
          echo "Usuário Ativo";
        }else if($ativo == 0){
          echo "Usuário Inativo";
        }else{
          echo "Desconhecido";
        }
?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>