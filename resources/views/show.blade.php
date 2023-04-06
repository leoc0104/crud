@extends('templates.template')

@section('content')
  <h1 class="text-center mt-5 mb-5">VISUALIZAR</h1>

  <hr />

  <div class="col-8 m-auto">
    @php
        $user = $student->find($student->id)->relUsers;
    @endphp
    ID: {{$student->id}} <br />
    Nome: {{$user->name}} <br />
    Email: {{$user->email}} <br />
    Apelido: {{$student->nickname}} <br />
    Idade: {{$student->age}} <br />
    Altura: {{$student->height}} <br />
  </div>
@endsection