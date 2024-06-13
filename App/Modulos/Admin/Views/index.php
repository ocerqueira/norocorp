<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="App\Modulos\Admin\Views\css\admin.css">
    <title>Document</title>

    <style>
        main {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #modulo {

            display: flex;
            align-items: center;
            background-color: blueviolet;
            padding: 5px;
        }

        .alerta {
            padding: .8rem;
            background-color: #fff5;
            box-shadow: 0 0.4rem .8rem #0005;
            border-radius: .5rem;
        }

        .analise {
            width: 80vw;
            padding: .8rem;
            background-color: #fff5;
            box-shadow: 0 0.4rem .8rem #0005;
            border-radius: .5rem;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        textarea {
            border-radius: .5rem;
            padding: .3rem;
        }

        input[type='submit'] {
            background-color: red;
            border: none;
            padding: .5rem 1rem;
            border-radius: .3rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <main id="modulo">
        <section class="alerta">
            <h1>Aviso</h1>
            <textarea name="aviso" id="aviso" cols="150" rows="5"></textarea><br>
            <input type="submit" value="excluir">
            <input type="submit" value="salvar">
            <input type="submit" value="atualizar">
        </section>
        <section class="analise">
            <article class="cards">
                <h3>Usuários</h3>
                <span>Online: </span>
                <span>Ativos: </span>
            </article>
            <article class="cards">
                <h3>Usuários</h3>
                <span>Online: </span>
                <span>Ativos: </span>
            </article>
            <article class="cards">
                <h3>Usuários</h3>
                <span>Online: </span>
                <span>Ativos: </span>
            </article>
            <article class="cards">
                <h3>Usuários</h3>
                <span>Online: </span>
                <span>Ativos: </span>
            </article>
        </section>
        <section class="atalhos">
            <article class="cards">
                <h3>Usuários</h3>
                <span>Online: </span>
                <span>Ativos: </span>
            </article>
        </section>
        <section class="modulos">
            <article class="cards">
                <h2>Politicas</h2>
            </article>
            <article class="cards">
                <h2>Permissões</h2>
            </article>
            <article class="cards">
                <h2>Empresas</h2>
            </article>
            <article class="cards">
                <h2>Sistema</h2>
            </article>
        </section>
    </main>
</body>

</html>