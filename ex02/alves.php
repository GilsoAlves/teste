<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        $n = $_POST["nome"];
        $s = $_POST["sobrenome"];
        echo "Seja bem-vindo (a) $n $s";
        
        ?>
    </main>
</body>
</html>