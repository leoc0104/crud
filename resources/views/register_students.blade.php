<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CADASTRAR</title>
</head>
<body>
    <h1>CADASTRAR ALUNO</h1>

    <form action="/register_students" method="POST">
        @csrf

        <label for="">Nome: </label>
        <input name="name" type="text" placeholder="Digite o nome...">

        <br /><br />

        <label for="">Celular: </label>
        <input name="phone" type="text" placeholder="Digite o celular...">

        <br /><br />

        <label for="">Descrição: </label>
        <input name="description" type="text" placeholder="Digite a descrição...">

        <br /><br />

        <label for="">Status: </label>

        <select name="status">
            <option value="null"> ========== </option>
            <option value="0">Matrículado</option>
            <option value="1">Transferido</option>
        </select>

        <br /><br />

        <label for="">Série: </label>
        <input name="status" type="text" placeholder="Digite a série do aluno...">

        <br /><br />

        <label for="">Inserir foto do aluno: </label>
        <input name="file" type="file" placeholder="Insira a foto do aluno">

        <br /><br /><br /><br />

        <button>SALVAR</button>
    </form>
</body>
</html>