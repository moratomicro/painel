@extends('template/layout')

@section('content')
    <h1>{{ $title ?? Cadastro }}</h1>

    <hr>
    
    @if( isset($pessoa))
    {{Form::open(array('method' => 'PUT', 'route' => 'pessoa.update', $pessoa->id, 'enctype' => 'multipart/form-data'))}}
    @else
    {{Form::open(array('route' => 'pessoa.store', 'enctype' => 'multipart/form-data'))}}
    @endif
        <div class="form-group">
            {{ Form::label('nome', 'Nome:') }}
            {{ Form::text('nome', $pessoa->nome ?? old('nome'), ['class'=>'form-control', 'rows'=>5]) }}
        </div>
        <div class="form-group">
            {{ Form::label('dt_Nasc', 'Dt. Nasc:') }}
            {{ Form::date('dt_Nasc', $pessoa->dt_Nasc ?? old('dt_Nasc'), ['class'=>'form-control']) }}            
        </div>
        <div class="form-group">
            {{ Form::label('cpf', 'CPF:') }}
            {{ Form::text('cpf', $pessoa->cpf ?? old('cpf'), ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('cep', 'CEP:') }}
            {{ Form::text('cep', $pessoa->cep ?? old('cep'), ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('rua', 'Rua:') }}
            {{ Form::text('rua', $pessoa->rua ?? old('rua'), ['class'=>'form-control', 'rows'=>5]) }}
        </div>
        <div class="form-group">
            {{ Form::label('nº', 'Nº:') }}
            {{ Form::number('nº', $pessoa->nº ?? old('nº'), ['class'=>'form-control', 'placeholder' => 'número']) }}
        </div>
        <div class="form-group">
            {{ Form::label('bairro', 'Bairro:') }}
            {{ Form::text('bairro', $pessoa->bairro ?? old('bairro'), ['class'=>'form-control', 'rows'=>5]) }}
        </div>
        <div class="form-group">
            {{ Form::label('cidade', 'Cidade:') }}
            {{ Form::text('cidade', $pessoa->cidade ?? old('cidade'), ['class'=>'form-control', 'rows'=>5]) }}
        </div>
        <div class="form-group">
            {{ Form::label('uf', 'UF:') }}
            {{ Form::text('uf', $pessoa->uf ?? old('uf'), ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('foto', 'Foto:') }}
            {{ Form::file('foto', ['class'=>'form-control']) }}
        </div>
        <div>
            {{ Form::submit('Salvar', ['class' => 'btn btn-success']) }}
        </div>
        
    {{Form::close()}}
        
@endsection