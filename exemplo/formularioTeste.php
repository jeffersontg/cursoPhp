<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
<div class="testbox">
      <form action="persistirExibir.php" method='POST'>
        <h1>Formulário de exemplo - Cadastro</h1>
        <p>Informe os dados solicitados nos campos:</p>
        <hr/>
        <div class="item">
          <p>Nome</p>
          <input type="text" name="nome" placeholder="Nome" required/>
        </div>
        <div class="item">
          <p>Data de nascimento</p>
          <input type="date" name="dataNascimento" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <p>Email</p>
          <input type="text" name="email"/>
        </div>
        <div class="item">
          <p>CPF</p>
          <input type="text" name="CPF"/>
        </div>        
        <div class="btn-block">
          <button type="submit" href="/">Enviar</button>
        </div>
      </form>
</div>    
</body>
</html>