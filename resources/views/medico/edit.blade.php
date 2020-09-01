@extends('template')

@section('body')
    <form action="{{url('medico/'.$dados['id'])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="put" />
        <div class="form-group">
            <a href="{{url('medico')}}">Buscar médicos</a><br>
            <label for="nomeAlt">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$dados['nome']}}">
            <label for="telefoneAlt">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{$dados['telefone']}}">
            <label for="crmAlt">CRM</label>
            <input type="text" class="form-control" id="crm" name="crm" value="{{$dados['crm']}}">
            <label for="especialidades">Especialidades</label>
            <select multiple class="form-control" id="especialidades[]" name="especialidades[]">
                @foreach(\App\Especialidade::all() as $cod=>$especialidade)
                    <option value="{{$especialidade->id}}">{{$especialidade->nome}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
