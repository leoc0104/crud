@extends('templates.template')

@section('content')
  <h1 class="text-center mt-5 mb-4">CADASTRAR</h1>

  <div class="col-8 m-auto">
    <form name="formCre" id="formCre" method="POST" action="{{url('students')}}">
      @csrf

      <input class="form-control" type="text" name="nickname" id="nickname" placeholder="Apelido" required> <br />
      <select class="form-control" name="user_id" id="user_id" required>
        <option value="">--Selecione o usuário--</option>
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
      </select>
      <br />
      <input class="form-control" type="text" name="age" id="age" placeholder="Idade" required> <br />
      <input class="form-control" type="text" name="height" id="height" placeholder="Altura" required> <br />
      <input class="btn btn-primary" type="submit" value="CADASTRAR">
    </form>
  </div>
@endsection