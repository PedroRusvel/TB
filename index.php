<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>AppFit Login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./style.css">
  
</head>
<body>

<div class="login-form">
  <div class="text">
    LOGIN
  </div>
  <form action="conexao.php" action="conexao2.php" method="post">
    <div class="field">
      <div class="fas fa-envelope"></div>
      <input type="text" name="email" placeholder="E-mail">
    </div>
    <div class="field">
      <div class="fas fa-lock"></div>
      <input type="password" name="senha" placeholder="Senha">
    </div>
    <a href="App.php"><button>Entrar</button></a>
    <div class="link">
      Não tem cadastro?
      <a href="cadastro.php">Cadastrar</a>

      <?php
        if(isset($_GET['validation'])){; // isset- negacao. Se o login está negativo 
        ?>
            <div class="text-danger">
                Usuário ou senha inválido(s)!
            </div>
        <?php
        }
        ?>
    </div>
  </form>
</div>
<!-- partial -->
  
</body>
</html>
