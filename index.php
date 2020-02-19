<?php
//CONEXÃO
require_once 'db_connect.php';

//SESSÃO
session_start();

//  VERIFICAÇÃO DO BOTÃO DE ENVIAR
if(isset($_POST['btn-entrar'])){
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    if(empty($login) or empty($senha)){
        $erros[] = "<p> O Campo Login/Senha Precisa ser Preenchido </p>";
    } else{
        $sql = "SELECT login FROM usuarios WHERE login = '$login' ";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0){
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND  senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) == 1){
            $dados = mysqli_fetch_array($resultado);
            $_SESSION['logado'] = true;
            $_SESSION['id_usuario'] = $dados['id'];
            header('location: home.php');
        }else{
            $erros[] = "<p>Usuário e Senha Incorretos </p>";
        }
        }else{
            $erros[] = "<p> Usuário Inexistente";
        }

    }
}
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>

<body>
    <section>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <?php
                    if(!empty($erros)){
                        foreach ($erros as $erro){
                            echo $erro;
                            
                        }
                    }
                    ?>
                    <div class="box">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input type="text" name="login"  placeholder="Seu usuário">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" name="btn-entrar">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>