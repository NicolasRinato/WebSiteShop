<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/defaultStyle.css">
    <link rel="shortcut icon" href="../../public/assets/images/favicon.png" type="image/x-icon">
    <title>Panificadora & Docinhos - Sobre Nós</title>
</head>
<body>
    <header>
        <section class="logo-img">
            <picture class="logo">
                <img src="../../public/assets/images/logo.png" alt="logo" class="logo-img">
            </picture>
            <h1 class="logo-name">Panificadora & Docinhos</h1>
        </section>
        <nav class="navegacao-header">
            <ul class="navegacao-header">
                <li><a href="home.php">Home</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
        <section class="user-login">
                <?php
                if (!isset($_SESSION['logado'])) {
                    echo '<ul class="navegacao-header"> <li> <a href="registrar.php">Criar Conta</a> </li>';
                    echo '<li> <a href="login.php">Fazer Login</a> </li> </ul>';
                } else {
                    echo '<picture class="user-photo">';
                    echo '<img src="../../public/assets/images/defaultProfilePhoto.png" alt="Imagem de Usuario" class="user-photo">';
                    echo '</picture>';
                    echo '<ul> <li> <a href="logout.php">LogOut</a> </li> </ul>';

                }
                ?>
        </section>
    </header>
    <main>
        <section class="main-container">
            <h2>Sobre nós</h2>
            <section class="card">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, sit saepe, soluta voluptate iusto atque totam fugit dolor quibusdam sint labore possimus veniam qui minima consequatur veritatis aliquam maiores. Facere.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas culpa ex minima iste exercitationem. Deleniti, inventore odit. Distinctio eius commodi esse impedit, earum beatae et odio id repellat modi ducimus.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur numquam laborum, ipsa dicta repellat unde quo voluptas mollitia fuga eum, tempore obcaecati inventore deserunt itaque! Doloribus eius id omnis est?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias atque aperiam blanditiis quibusdam adipisci dolorum tempore excepturi perferendis quia est, accusamus cumque distinctio enim impedit soluta optio, repellat libero neque!</p>
            </section>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 - Panificadora & Docinhos - Todos os direitos reservados.</p>
    </footer>
</body>
</html>