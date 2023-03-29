<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
    <title>Acessar conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/bankgothic-lt-bt" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            background-color: #808080;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        .btn {
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }
    </style>
</head>

<body class="fundo">
    <form class="container" action="CRUD/LoginAuthentication.php" method="post">

        <h1 style="text-align: center;">Acessar conta</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" name="email" id="" placeholder="Seu email">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" name="password" id="" placeholder="Senha">
        </div>
        <br>

        <div class="button-container">
            <button type="submit" class="btn btn-success" name="Login">Logar</button>

        </div>
    </form>


    <form class="container" action="CRUD\SignupAuthentication.php" method="post">

        <h1 style="text-align: center;">Cadastrar-se</h1>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email_user" id="" placeholder="Seu email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" name="password_user" id="" placeholder="Senha">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Confirmar Senha</label>
            <input type="password" class="form-control" name="password_user_confirmation" id=""
                placeholder="Confirme senha">
        </div>
<br>
        <div class="button-container">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>


    <style>
        .button-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .button-container button {
            width: 48%;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>
