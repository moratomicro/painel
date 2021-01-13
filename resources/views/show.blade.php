@extends('template/layout')

@section('content')
    <div class="container span7 text-left col-md-5 col-md-offset-3">
        <h4 class="title-pg">
            <a href="{{route('pessoa.index')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-step-backward" title="Voltar para página principal."></span>Voltar</a>
            - {{ $title ?? Pessoa }}
        </h4>

        <div style="background-color:lightblue; width: 500px">
            <p><b>ID: </b>{{$pessoa->id}}</p>
            <p><b>Nome: </b>{{$pessoa->nome}}</p>
            <p><b>Data de Nascimento: </b>{{date('d/m/Y', strtotime($pessoa->dt_Nasc))}}</p>
            <p><b>CPF: </b>{{$pessoa->cpf}}</p>
            <p><b>CEP: </b>{{$pessoa->cep}}</p>
            <p><b>Rua: </b>{{$pessoa->rua}} 
               <b>Nº: </b>{{$pessoa->nº}}</p>
            <p><b>Bairro: </b>{{$pessoa->bairro}}
            <p><b>Cidade: </b>{{$pessoa->cidade}}
               <b>UF: </b>{{$pessoa->uf}}</p>
            <p>
                @if ($pessoa->foto)
                    <img src="{{ url("storage/{$pessoa->foto}") }}" alt="{{ $pessoa->nome }}" style="max-width: 300px;">
                @endif
            </p>
            <hr>
            {!! Form::open(['route' => ['pessoa.destroy', $pessoa->id], 'method' => 'DELETE']) !!}
                {!! Form::submit("Deletar Paciente: $pessoa->nome", ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop