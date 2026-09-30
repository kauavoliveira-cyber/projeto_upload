<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enviar imagem</h1>
    <form action="processa_upload.php" method="post" enctype="multipart/form-data">
        <label>selecione a imagem:</label><br><br>
        <input type="file" name="imagem" required><br><br>
        <button type="submit">enviar</button> 
</form>
<br>
<a href="index.php">voltar para a galeria </a>
</body>
</html>