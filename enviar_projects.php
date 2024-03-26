<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include 'conexao.php';



    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $link = $_POST['link'];



    if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem = $_FILES['imagem']['name'];
        $imagem_temp = $_FILES['imagem']['tmp_name'];
        $caminho_imagem = "img/" . $imagem;
        move_uploaded_file($imagem_temp, $caminho_imagem);
    } else {
        $caminho_imagem = "img/eu.png";
    }


    // Insere os dados no banco de dados
    $sql = "INSERT INTO projeto (nome, descricao, foto, link) VALUES ('$nome', '$descricao', '$caminho_imagem', '$link')";


    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style_envio.css">
       
    <title>Projetos - portfólio</title>
</head>
<body>
<header>
        <div class="icon_header">
            <i class="fa-solid fa-code">SD</i>
        </div>
        <nav>
            <ul class="itens_header">
                <li><a href="index.php" class="item active">Home</a></li>
            </ul>


        </nav>


       
    </header>
    

    <form action="" method="post" enctype="multipart/form-data" class="formDeEnvio">
        <input type="text" id="nome" name="nome" placeholder="Nome do projeto"><br><br>
        <textarea id="descricao" name="descricao" placeholder="Descrição do projeto"></textarea><br><br>
        <label for="imagem">Imagem:</label><br>
        <input type="file" id="imagem" name="imagem"><br><br>
        <input type="text" id="link" name="link" placeholder="Link do projeto"><br><br>


        <input type="submit" value="Enviar">
    </form>


</body>
</html>
