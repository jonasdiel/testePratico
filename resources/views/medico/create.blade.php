@extends('template')

@section('body')
    <form action="{{url('medico')}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="post" />
        <div class="form-group">
            <a href="{{url('medico')}}">Buscar médicos</a><br>
            <label for="nomeAlt">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
            <label for="telefoneAlt">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
            <label for="crmAlt">CRM</label>
            <input type="text" class="form-control" id="crm" name="crm">
            <label for="especialidades">Especialidades</label>
            <select class="form-control" id="especialidades[]" name="especialidades[]" multiple>
                @foreach(\App\Especialidade::all() as $cod=>$especialidade)
                    <option value="{{$especialidade->id}}">{{$especialidade->nome}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
