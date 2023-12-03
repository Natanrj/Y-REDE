<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial - yrede</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #000000;
            color: #f6eeee;
        }
        header {
            background-image: url(data:image/png;base64,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);
            color: #070707;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: space-between;
            background-color: #b42020;
            padding: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .post {
            background-color: #b42020;
            margin: 20px 0;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(244, 242, 242, 0.1);
        }
        .post h2 {
            margin-top: 0;
        }
        .post hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }
        .postagem {
            align-items:center;
            text-align: center; 
            margin-top: 20px;"
            display: inline-block; 
            padding: 10px 20px;
            background-color: white; 
            color: #010101; 
            text-decoration: none; 
            border-radius: 5px;
            font-size:30px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Bem-vindo</h1>
        <h3>site programado by NATAN</h2>
    </header>

    <nav>
        <div>
            <a href="/cadastra-usuario">Criar Conta</a>
            <a href="/login">Login</a>
        </div>
    </nav>

    <div>
            <a class="postagem" href="/cria-post">Nova Postagem</a>
    </div>

    <div class="container">
        <h2>Posts:</h2>
        @foreach ($posts as $post)
        <div class="post">
            <h2>Postagem - {{$post->id}}</h2>
            <p>{{$post->mensagem}}</p>
            <hr>
        </div>
        @endforeach
    </div>

</body>
</html>