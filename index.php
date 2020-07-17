<?php require_once 'include/constante.php'; ?>  
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
<head>   <title>Login </title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body id="fundo">	

<div class="card " id="tela-login">
 <!-- <img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
  <form action="controle/fazLogin.php" method="post">
  <div class="form-group">
    <label>Login</label>
    <input type="text" name="usuario" class="form-control" placeholder="Informe seu nome de usuário">
     </div>
  <div class="form-group">
    <label for="">Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="Insira sua senha">
  </div>

  <button type="submit" class="btn btn-success btn-block">Entrar</button>
</form>
    
  </div>
</div>
<?php if (isset($_GET['erro'])) { ?>
  <div class="alert alert-danger" role="alert" >
    Usuário e/ou senha inválidos!
  </div>
<?php   }   ?>
</body>
</html>