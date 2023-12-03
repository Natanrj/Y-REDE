<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Postagem</title>

    <img src="https://i.pinimg.com/736x/43/26/0e/43260ed8d6041e9219d280655c3ea6c9.jpg" alt="">
    <style>
        img {width: 100px;}
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #080808;
            color: #f6f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #c42323;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: rgb(7, 7, 7);
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crie aqui a sua postagem</h1>
        <form action="/salva-post" method="POST">
            @crf
            <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Digite sua postagem aqui"></textarea>
            <button type="submit">Postar</button>
        </form>
    </div>
</body>
</html>
