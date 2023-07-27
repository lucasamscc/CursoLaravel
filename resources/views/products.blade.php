<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
    <h1>produtos!</h1>
    <p>Teste de teclado</p>

    @if($busca != "")
       <p>O usuário está buscando por: {{$busca}}</p>
    @endif
    <a href="/">Voltar para a home</a>
</body>
</html>
