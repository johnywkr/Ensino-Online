<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <h1>Cadastro Aluno</h1>
    </header>

    <main>
        <div class="container">
            <form action="../controller/CadastrarAlunoController.php" method="POST">
                <input type="text" name="nome" id="nome" placeholder="Nome Completo">
                <br>
                <input type="text" name="cpf" id="cpf" placeholder="cpf">
                <br>
                <input type="text" name="email" id="email" placeholder="email">
                <br>
                <label for="">Data de nascimento</label>
                <br>
                <input type="date" name="datanasc" id="datanasc">
                <br>

                <label for="">Curso</label>
                <br>
                <input type="text" name="curso" id="curso" placeholder="curso">
                <br>
                <input type="submit" value="Cadastrar" class="submit">
            </form>
        </div>
    </main>

    <footer>

    </footer>
</body>

</html>