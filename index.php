
<?php
    include 'conexao.php';
    $projetos = array();
    $sql = "SELECT nome, descricao, foto, link FROM projeto";
    $result = mysqli_query($conn, $sql);
    
    //  Armazenar os resultados em um array
    $projetos = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $projetos[] = $row;
        }
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <title>Portpólio</title>
</head>

<body>
    <header>
        <div class="icon_header">
            <i class="fa-solid fa-code">SD</i>
        </div>
        <nav>
            <ul class="itens_header">
                <li><a href="" class="item active">Home</a></li>
                <li><a href="#about">Sobre mim</a></li>
                <li><a href="#habilidades" class="item">Habilidades</a></li>
                <li><a href="#portfolio" class="item">Portfólio</a></li>
            </ul>

        </nav>

        <nav class="mobile_nav">
            <button class="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="itens_header_mobile">
                <li><a href="" class="item_mobile">Home</a></li>
                <li><a href="#about" class="item_mobile">Sobre mim</a></li>
                <li><a href="#  habilidades" class="item_mobile">Habilidades</a></li>
                <li><a href="#portfolio" class="item_mobile">Portfólio</a></li>



        </nav>
    </header>

    <section class="home hidden">

        <div class="infors">
            <h2><Span>S</Span>abrina <span>D</span>amasceno</h2>
            <p>Desenvolvedora <span>Full-stack</span></p>

            <div class="icons">
                <a href="www.linkedin.com/in/sabrina-damasceno-4a81a0265" class="icon"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/SabrinaDamascenoDev" class="icon"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
        <div class="banner">
            <img src="" alt="" class="img_banner">
        </div>
        <div class="shape"></div>

        <a href="#about" class="ir-baixo">Veja mais <i class="fa-solid fa-arrow-down"></i></a>
    </section>

    <section class="hidden about" id="about">
        <h1>Sobre mim</h1>
        <div class="container_about ">
            <div class="logos">
                <div class="hidden">
                    <div class="sobre">
                        <h3>Sobre</h3>
                        <p>Sou uma desenvovedora full-stack, comecei minha jornada com programação no Ensino médio, no qual cursei Informática em uma escola técnica, 
                            o que me fez ficar apaixonada pela área, especialmente pelo desenvolvimento web.</p>
                    </div>
                </div>
                <div class="hidden">
                    <div class="experiencia">
                        <h3>Experiência</h3>
                        <p>Além de toda minha jornada na ensino médio tecnico, fui designada para um estágio, ao final do curso, 100% voltado para programação web, no qual usei 
                            tecnologias como react js, next js e js. Atualmente estou cursando Sistemas de Informação na UFC.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="habilidades hidden" id="habilidades">
        <h1>Habilidades</h1>

        <div class="hab">
            <div class="habs">
                <i class="fa-brands fa-js"></i>
                <h2>JavaScript</h2>
                <p>2 anos de experiência, com 5 projetos desenvolvidos.</p>
            </div>
            <div class="habs">
                <i class="fa-brands fa-react"></i>
                <h2>React JS</h2>
                <p>6 meses de experiência, com 3 projetos desenvolvidos.</p>
            </div>
            <div class="habs">
                <i class="fa-brands fa-html5"></i>
                <h2>Html</h2>
                <p>3 anos de experiência, com mais de 25 projetos desenvolvidos.</p>
            </div>
            <div class="habs">
                <i class="fa-brands fa-css3-alt"></i>
                <h2>CSS</h2>
                <p>3 anos de experiência, com mais de 25 projetos desenvolvidos. </p>
            </div>
            <div class="habs">
                <i class="fa-brands fa-php"></i>
                <h2>Php</h2>
                <p>1 ano e meio de experiência, com 4 projetos desenvolvidos. </p>
            </div>
        </div>
    </section>

    <section class="portfolio hidden" id="portfolio">
        <h1 class="title">Portfólio</h1>

        <div class="card_maior logos2">
            <?php foreach ($projetos as $projeto): ?>
        <div class="card hidden">
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
        <a href="projetos.php"><button class="mais_projetos">Ver mais</button></a>

    </section>

    <footer>
        <div class="footer_icon">
            <i class="fa-solid fa-code">SD</i>
        </div>

        <p>Todos os direitos autorais@SabrinaDamasceno</p>
    </footer>
</body>
<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

</html>