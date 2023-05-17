<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20,147,220), rgb(17, 57, 71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
           text-decoration: none;
           color: white;
           border: 3px solid dodgerblue;
           border-radius: 10px;
           padding: 10px;
        }
        a:hover{
            background: dodgerblue;            
        }
    </style>
</head>
<body>
    <h1>Sistema de Produtos</h1>
    <div class="box">
        <a href="">Gerenciar usuários</a>
        <a href="">Gerenciar pedidos</a>
        <a href="">Gerenciar produtos</a>
    </div>
</body>
</html>