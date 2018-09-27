<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Pizzaria</title>
</head>
<body>
    <header id="cover">
        <nav id="navbar">
            <img src="img/pizza-slice.svg" alt="pizza" id="logo-nav">
            <ul id="nav-itens">
                <li>
                    <a href="#promocionais" class="hide-on-desktop vertical-anchor">Promoções</a>
                    <a href="#promocionais" class="hide-on-mobile left-anchor">Promoções</a>
                </li>
                <li>
                    <a href="#outras" class="hide-on-desktop vertical-anchor">Cardápio</a>
                    <a href="#outras" class="hide-on-mobile diagonal-anchor">Cardápio</a>
                </li>
                <li>
                    <a href="#contact" class="vertical-anchor">Contato</a>
                </li>
            </ul>
        </nav>
        <section id="landing">
            <div id="content-landing">
                <h1>Giuseppe Pizza</h1>
                <hr>
                <h1>Pizza Delievery</h1>
            </div>
            <a href="#promocionais" class="btn-pager hide-on-mobile left-anchor">
                <i class="fas fa-angle-right"></i>
            </a>
            <a href="#promocionais" class="btn-pager hide-on-desktop vertical-anchor">
                <i class="fas fa-angle-down"></i>
            </a>
        </section>
    </header>
    <main id="cardapio">
        <section id="promocionais">
            <a href="#cover" class="btn-pager hide-on-mobile voltar right-anchor">
                <i class="fas fa-angle-left"></i>
            </a>
            <a href="#cover" class="btn-pager hide-on-desktop voltar vertical-anchor">
                <i class="fas fa-angle-up"></i>
            </a>
            <div class="container">
                <h1>Pizzas</h1>
                <h2>Promocionais</h2>
                <div id="pizzas-promocionais">
                    <?php for($i = 0; $i < 4; $i++){?>
                    <div class="pizza-promo">
                        <div class="pizza-description">
                            <h3 class="pizza-title">2 Queijos</h3>
                            <p class="pizza-itens">Molho de tomate, queijo, Lorem ipsum dolor sit amet.</p>
                        </div>
                        <h3 class="pizza-valor">R$ 23,00</h3>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <a href="#outras" class="btn-pager proximo vertical-anchor">
            <i class="fas fa-angle-down"></i>
            </a>
        </section>
        <section id="outras">
            <a href="#promocionais" class="btn-pager voltar vertical-anchor">
                <i class="fas fa-angle-up"></i>
            </a>
            <div class="container">
                <h1>Outras</h1>
                <h2>Pizzas</h2>
                <div id="pizzas-outras">
                    <?php for($i = 0; $i < 8; $i++){?>
                        <div class="pizza-promo">
                            <div class="pizza-description">
                                <h3 class="pizza-title">2 Queijos</h3>
                                <p class="pizza-itens">Molho de tomate, queijo, Lorem ipsum dolor sit amet.</p>
                            </div>
                            <h3 class="pizza-valor">R$ 23,00</h3>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <a href="#contact" class="btn-pager proximo hide-on-mobile right-anchor">
                <i class="fas fa-angle-left"></i>
            </a>
            <a href="#contact" class="btn-pager proximo hide-on-desktop vertical-anchor">
                <i class="fas fa-angle-down"></i>
            </a>
            </section>
    </main>
    <footer id="contact">
        <a href="#outras" class="btn-pager voltar hide-on-mobile left-anchor">
            <i class="fas fa-angle-right"></i>
        </a>
        <a href="#outras" class="btn-pager voltar hide-on-desktop vertical-anchor">
        <i class="fas fa-angle-up"></i>
        </a>
        <div class="container">
            <h1>Contato</h1>
            <h2>(13) 3821-7646</h2>
            <h2>(13) 3821-7548</h2>
            <h3>Rua Fario Montanha, Jardim Azul - Registro/SP</h3>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>