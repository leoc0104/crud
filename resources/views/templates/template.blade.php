<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <title>CRUD</title>
</head>
<body>
	@yield('content')

	<h2>LISTA DE ALUNOS</h2>

    <table>
		<tr>
			<th>Foto</th>
			<th>ID</th>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Descrição</th>
			<th>Status</th>
			<th>Série</th>
			<th>Ação</th>
		</tr>	
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><a href=>[Excluir]</a><a href=''>[Alterar]</a></td>
		</tr>
	</table>

	<button>ADICIONAR</button>

	<button>PESQUISAR</button>
</body>
</html>