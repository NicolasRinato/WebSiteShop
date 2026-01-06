<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/defaultStyle.css">
    <link rel="shortcut icon" href="../../public/assets/images/favicon.png" type="image/x-icon">
    <title>Panificadora & Docinhos - Homepage</title>
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
                <?php
                    if (!isset($_SESSION['logado'])) {
                        echo '<li><a href="registrar.php">Criar Conta</a></li>';
                        echo '<li><a href="login.php">Fazer Login</a></li>';
                    }
                ?>
            </ul>
        </nav>
        <?php
            if (isset($_SESSION['logado'])) {
                echo '<section class="profile-login">';
                echo '<img src="" alt="" class="profile-login">';
                echo '</section>';
            }
        ?>
    </header>
    <main>
        <section class="main-container">
            <h2>Inicio</h2>
            <section class="card">
                <p>Serviço tal :D</p>
            </section>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 - Panificadora & Docinhos - Todos os direitos reservados.</p>
    </footer>
</body>
</html>