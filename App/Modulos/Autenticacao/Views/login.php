<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title><?php echo isset($title) ? $title : 'Login'; ?></title>
</head>

<body>
    <main>
        <section class="form">
            <h1>Login</h1>
            <?php if (isset($erro)): ?>
                <p style="color:red;"><?php echo $erro; ?></p>
            <?php endif; ?>
            <form method="POST" action="/login">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" required>
                <br>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <br>
                <button type="submit">Login</button>
            </form>
        </section>
        <section class="banner">
            <img src="#" alt="banner">
        </section>

    </main>

</body>

</html>