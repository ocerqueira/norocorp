<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="..App\Modulos\Dashboard\Views\css\dashboard.css"> -->
    <title>Document</title>


    <style>
        #modulo {
            background-color: red;
            width: 100%;
            /* height: 50vh; */
            padding: 1rem;
            margin: 0;
        }

        .metas {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            height: 10rem;
            background-color: aqua;
            border-radius: 5px;
        }

        .cards {
            background-color: pink;
            width: 20%;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <main id="modulo">
        <section class="informacoes">
            <h1>Bem vindo [nome usuario]</h1>
            <span>[nome dia da semana] data dd/mm/yy </span>
        </section>
        <section class="metas">
            <div class="cards metas">
                <h1>META</h1>
            </div>

            <div class="cards metas">
                <h1>META</h1>
            </div>
            <div class="cards metas">
                <h1>META</h1>
            </div>
        </section>

        <section></section>
    </main>
</body>

</html>