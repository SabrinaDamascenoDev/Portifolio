
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
                <li><a href="" class="item">Portfólio</a></li>
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
                <a href="" class="icon"><i class="fa-brands fa-linkedin"></i></a>
                <a href="" class="icon"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
        <div class="banner">
            <img src="" alt="" class="img_banner">
        </div>
        <div class="shape"></div>

        <a href="#sobre-mim" class="ir-baixo">Veja mais <i class="fa-solid fa-arrow-down"></i></a>
    </section>

    <section class="hidden about" id="about">
        <h1>Sobre mim</h1>
        <div class="container_about ">
            <div class="logos">
                <div class="hidden">
                    <div class="sobre">
                        <h3>coisas</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam optio eaque est, ea libero
                            quas fuga
                            amet voluptas eum impedit necessitatibus, quo facere ducimus rerum voluptatum harum hic
                            dignissimos
                            assumenda!</p>
                    </div>
                </div>
                <div class="hidden">
                    <div class="experiencia">
                        <h3>Experiência</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat repudiandae architecto
                            atque,
                            sequi, dolorum incidunt quae unde enim tempora eius delectus et nam culpa ad maiores
                            temporibus
                            deserunt commodi! Nam.</p>
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
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="habs">
                <i class="fa-brands fa-react"></i>
                <h2>React JS</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="habs">
                <i class="fa-brands fa-html5"></i>
                <h2>Html</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="habs">
                <i class="fa-brands fa-css3-alt"></i>
                <h2>CSS</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="habs">
                <i class="fa-brands fa-php"></i>
                <h2>Php</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
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
                <button class="read-more">Read More</button>
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