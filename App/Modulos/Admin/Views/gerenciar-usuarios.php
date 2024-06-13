<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */

        /* body {
            display: flex;
            align-items: center;
            justify-content: center;
        } */

        table, th, td {
            border-collapse: collapse;
            padding: 1rem;
        }

        main.table {
            /* padding: 1rem; */
            width: 90vw;
            /* min-height: calc(90vh - 100%); */
            background-color: #fff5;
            box-shadow: 0 0.4rem .8rem #0005;
        }

        .table_header {
            width: 100%;
            padding: 1rem;
        }

        .table_body::-webkit-scrollbar{
            width: 0.5rem;
            height: 0.5rem;
        }

        .table_body::-webkit-scrollbar-thumb {
            border-radius: .5rem;
            background-color: red;
        }

        .table_body {
            max-height: 50vh;
        }

        tbody tr:nth-child(even) {
            background-color: #0000000b;
        }

        tbody tr:hover {
            background-color: #fff6;
        }
    </style>

</head>

<body>
    <main class="table">
        <section class="table_header">
        <h1><?php echo $title; ?></h1>
        </section>
        <section class="table_body">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Unidade</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th>
                        <th>Contato</th>
                        <th>Cargo</th>
                        <th>Setor</th>
                        <th>IP Acesso</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['sobrenome']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>