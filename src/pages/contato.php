<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/defaultStyle.css">
    <link rel="shortcut icon" href="../../public/assets/images/favicon.png" type="image/x-icon">
    <title>Panificadora & Docinhos - Contato</title>
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
            <h2>Contate-nos</h2>
            <section class="card">
                <p>Instagram</p>
                <p>Facebook</p>
                <p>WhatsApp</p>
                <p>Email</p>
            </section>
        </section>
    </main>
    <footer>
        <p>&copy; Panificadora & Docinhos 2026. Todos os direitos reservados.</p>
    </footer>
</body>
</html>