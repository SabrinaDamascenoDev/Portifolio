
<?php
    include 'conexao.php';
    $projetos = array();
    $sql = "SELECT nome, descricao, foto, link FROM projeto";
    $result = mysqli_query($conn, $sql);
    
    // Armazenar os resultados em um array
    $projetos = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $projetos[] = $row;
        }
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
        <link rel="stylesheet" href="style_projects.css">
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

    <section class="home">
        <h1>Meu Portfólio</h1>
        <p>Aqui disponibilizo todos os meus projetos já criados.</p>

        <div class="projetos">
        <div class="card_maior logos2">
            <?php foreach ($projetos as $projeto): ?>
        <div class="card ">
            <div class="img-box">
                <img src="<?= $projeto['foto'] ?>" alt="">
            </div>
            <div class="contant">
                <h2><?= $projeto['nome'] ?></h2>
                <p><?= $projeto['descricao'] ?></p>
                <div class="hb">
                    <i class="fa-brands fa-js"></i>
                    <i class="fa-brands fa-css3-alt"></i>
                    <i class="fa-brands fa-html5"></i>
                </div>
                <a href="<?= $projeto['link']?>"><button class="read-more">Acessar</button></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
        </div>
    </section>

</body>
</html>