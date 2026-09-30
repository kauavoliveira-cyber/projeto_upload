<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pastaDestino= "upload/";
    if  (isset($_FILES["arquivo"]) && $_FILES["arquivos"]["error"] == 0) {
        $nomeArquivo = basename($_FILES["arquivo"]["name"]);
        $caminhoDestino = $pastaDestino . $nomeArquivo

        //verificar se é uma imagem 
        $tipoArquivo = strtolower(pathinfo($caminhoDestino, PATHINFO_EXTENSION));
        $tiposPermitidos = ["jpg", "jpeg", "png", "gif"];

        if(in_array($tipoArquivo, $tiposPermitidos)) {
            if(move_uploaded_file($_FILES["arquivo"]["tmp_name"], $caminhoDestino)) {
                echo "upload realizado com sucesso!<br>";
                echo "<a href='index.php'>ver galeria</a>";
                } else{
                    echo" erro ao salvar o arquivo.";
                }
        } else {
            echo "tipo de arquivo não permitido. Envie apenas a imagem (jpg, png, gif)."
        } else{
            echo "nenhum aquivo enviado.";
        }
        ?>




</body>
</html>