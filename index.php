<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Aluguéis - Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>
 
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark align-items-center">
        <a class="navbar-brand mx-auto text-center" href="#"><img class="rounded img-fluid" src="./css/Banner - For Rent.png" width="850px"></a>
      </nav>
    </header>
  

    <form action="./funcoes/usuarioLogin.php" method="post">
      <h1>Faça o Login</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Usuário</strong></label>
        <input type="text" placeholder="Digite seu usuário" name="usuario" required>
        <label for="psw"><strong>Senha</strong></label>
        <input type="password" placeholder="Digite sua senha" name="senha" required>
      </div>
      <button type="submit">Login</button>
      <br>
      <p class="alert alert-danger">Não é cadastrado? <a href="index1.php"> Clique aqui para criar uma conta</a></p>

  <?php if(!empty($_SESSION['sucesso'])){?>
            <p class="alert alert-danger"><?php echo $_SESSION['sucesso'];  ?></p> 
            <?php unset($_SESSION['sucesso']); ?>
<?php   } ?>

  <?php if(!empty($_SESSION['login'])){?>
            <p class="alert alert-danger"><?php echo $_SESSION['login'];  ?></p> 
            <?php unset($_SESSION['login']); ?>

 <?php  } ?>
 <?php if(!empty($_SESSION['existe'])){?>
            <p class="alert alert-danger"><?php echo $_SESSION['existe'];  ?></p> 
            <?php unset($_SESSION['existe']); ?>

 <?php  } ?>
    </form>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/    ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>