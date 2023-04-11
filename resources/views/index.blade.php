@extends('templates.template')

@section('content')
  <h1 class="text-center mt-5 mb-5">CRUD</h1>

  <hr />

  <div class="text-center mt-4 mb-4">
    <a href="{{url('students/create')}}">
      <button class="btn btn-success">CADASTRAR</button>
    </a>
  </div>

  <div class="col-8 m-auto">
    <table class="table text-center">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Apelido</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Idade</th>
          <th scope="col">Altura</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($student as $students)
          @php
            $user = $students->find($students->id)->relUsers;
          @endphp
          <tr>
            <th scope="row">{{$students->id}}</th>
            <td>{{$students->nickname}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$students->age}}</td>
            <td>{{$students->height}}</td>
            <td>
              <a href="{{url("students/$students->id")}}">
                <button class="btn btn-dark">VISUALIZAR</button>
              </a>

              <a href="{{url("students/$students->id/edit")}}">
                <button class="btn btn-primary">EDITAR</button>
              </a>

              <a href="">
                <button class="btn btn-danger">DELETAR</button>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection