!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Cadastro de Cliente</h1>

    <form action="processa.php" method="POST">

        <label>Nome Completo</label>
        <input type="text" name="nome">

        <label>E-mail</label>
        <input type="email" name="email">

        <label>Idade</label>
        <input type="text" name="idade">

        <label>Cidade</label>
        <input type="text" name="cidade">

        <label>Sexo</label>

        <select name="sexo">

            <option value="">Selecione</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>

        </select>

        <label>Observações</label>

        <textarea name="observacoes"></textarea>

        <button type="submit">Enviar</button>

    </form>

</div>

</body>
</html>


