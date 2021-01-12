@extends('template/layout')

@section('content')
    <h1>{{ $title ?? Cadastro }}</h1>

    <hr>
    
    {{Form::open(array('route' => 'pessoa.index'))}}
        <div class="form-group">
            {{ Form::label('nome', 'Nome:') }}
            {{ Form::text('nome', null, ['class'=>'form-control', 'rows'=>5]) }}
        </div>
        <div class="form-group">
            {{ Form::label('dt_Nasc', 'Dt. Nasc:') }}
            {{ Form::date('dt_Nasc', null, ['class'=>'form-control']) }}            
        </div>
        <div class="form-group">
            {{ Form::label('cpf', 'CPF:') }}
            {{ Form::text('cpf', null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('cep', 'CEP:') }}
            {{ Form::text('cep', null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('rua', 'Rua:') }}
            {{ Form::text('rua', null, ['class'=>'form-control', 'rows'=>5]) }}
        </div>
        <div class="form-group">
            {{ Form::label('nº', 'Nº:') }}
            {{ Form::number('nº', null, ['class'=>'form-control', 'placeholder' => 'número']) }}
        </div>
        <div class="form-group">
            {{ Form::label('bairro', 'Bairro:') }}
            {{ Form::text('bairro', null, ['class'=>'form-control', 'rows'=>5]) }}
        </div>
        <div class="form-group">
            {{ Form::label('cidade', 'Cidade:') }}
            {{ Form::text('cidade', null, ['class'=>'form-control', 'rows'=>5]) }}
        </div>
        <div class="form-group">
            {{ Form::label('uf', 'UF:') }}
            {{ Form::text('uf', null, ['class'=>'form-control']) }}
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