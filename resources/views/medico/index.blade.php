@extends('template')

@section('body')

    <form>
        <div class="form-group">
            <a href="{{url('medico/create')}}">Novo Médico</a><br>
            <label for="exampleInputEmail1">Buscar médico</label>
            <input type="text" class="form-control" id="busca" aria-describedby="buscaHelp">
            <small id="buscaHelp" class="form-text text-muted">Preencha com um termo para buscar</small>
            <button type="button" class="btn btn-primary"
                    onclick="window.location.href='/medico?busca='+(document.getElementById('busca').value)">Buscar
            </button>
        </div>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Ações</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dados as $cod=>$medico)
            <tr>
                <th scope="row">
                    <a href="{{url('medico/'.$medico['id'].'/edit')}}">Editar</a>
                </th>
                <td>{!! $medico['nome'] !!}</td>
                <td>{!! $medico['telefone'] !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
