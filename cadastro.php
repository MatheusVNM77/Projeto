<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página de Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Página de Cadastro</h1>
    <form name="form" id="form" method="POST" action="index.php">
        <label for="txtNome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o Nome Completo">
        <label for="txtLogin">Login:</label>
        <input type="text" name="login" id="login" placeholder="Digite o Nome de Login">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Digite a Senha">
        <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar">
    </form>
    <br>
    <br>
    <br>
    <?php
    session_start();
    include("db_connect.php");
    if(isset($_POST["btnCadastrar"]) == true){

    $nome = mysqli_real_escape_string($connect, $_POST['nome']);
    $login = mysqli_real_escape_string($connect, $_POST['login']);
    $senha = mysqli_real_escape_string($connect, $_POST['senha']);

    $sql = "INSERT INTO usuarios VALUE (null, '$nome', '$login', '$senha');";


    if(mysqli_affected_rows($connect) > 0){
        $id = mysqli_insert_id($connect);
    }

    //FECHAR CONEXÃO MYSQL
    mysqli_close($conexao);
}
    ?>
</body>
</html>