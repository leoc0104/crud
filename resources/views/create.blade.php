@extends('templates.template')

@section('content')
  <h1 class="text-center mt-5 mb-4">@if(isset($student)) EDITAR @else CADASTRAR @endif</h1>

  <div class="col-8 m-auto">
    @if(isset($errors) && count($errors) > 0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
          {{$erro}} <br />
        @endforeach
      </div>
    @endif

    @if(isset($student))
      <form name="formEdit" id="formEdit" method="POST" action="{{url("students/$student->id")}}">
        @method('PUT')
    @else
      <form name="formCre" id="formCre" method="POST" action="{{url('students')}}">
    @endif
        @csrf

        <input class="form-control" type="text" name="nickname" id="nickname" placeholder="Apelido" value="{{$student->nickname ?? ''}}" required> <br />
        <select class="form-control" name="user_id" id="user_id" required>
          <option value="{{$student->relUsers->id ?? ''}}">{{$student->relUsers->name ?? '--Selecione um aluno--'}}</option>
          @foreach ($users as $user)
              <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
        <br />
        <input class="form-control" type="text" name="age" id="age" placeholder="Idade" value="{{$student->age ?? ''}}" required> <br />
        <input class="form-control" type="text" name="height" id="height" placeholder="Altura" value="{{$student->height ?? ''}}" required> <br />
        <input class="btn btn-primary" type="submit" value="@if(isset($student)) EDITAR @else CADASTRAR @endif">
      </form>
  </div>
@endsection