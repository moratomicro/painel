@extends('template/layout')

@section('content')
    <h1>{{ $title ?? Cadastro }}</h1>

    <hr>

    {{ Form::open(array('url' => 'create', 'class' => 'form-horizontal', 'role' => 'form')) }}

    <div class="form-group">
        <label for="nome" class="col-lg-2 control-label">Nome</label>
        <div class="col-lg-6">
            {{ Form::text('titulo', '', array('class' => 'form-control', 'placeholder' => 'Nome')) }}
        </div>
    </div>

    <div class="form-group">
        <label for="dt_nasc" class="col-lg-2 control-label">Dt. Nasc</label>
        <div class="col-lg-6">
            {{ Form::textarea('dt_nasc', '', array('class' => 'form-control', 'placeholder' => 'Dt. Nasc')) }}
        </div>
    </div>

    <div class="form-group">
        <label for="cpf" class="col-lg-2 control-label">CPF</label>
        <div class="col-lg-6">
            {{ Form::textarea('cpf', '', array('class' => 'form-control', 'placeholder' => 'CPF')) }}
        </div>
    </div>

    <div class="form-group">
        <label for="cep" class="col-lg-2 control-label">CEP</label>
        <div class="col-lg-6">
            {{ Form::textarea('cep', '', array('class' => 'form-control', 'placeholder' => 'CEP')) }}
        </div>
    </div>

    <div class="form-group">
        <label for="rua" class="col-lg-2 control-label">Rua</label>
        <div class="col-lg-6">
            {{ Form::textarea('rua', '', array('class' => 'form-control', 'placeholder' => 'Rua')) }}
        </div>
    </div>

    <div class="form-group">
        <label for="nº" class="col-lg-2 control-label">Nº</label>
        <div class="col-lg-6">
            {{ Form::textarea('nº', '', array('class' => 'form-control', 'placeholder' => 'Nº')) }}
        </div>
    </div>

    <div class="form-group">
        <label for="bairro" class="col-lg-2 control-label">Bairro</label>
        <div class="col-lg-6">
            {{ Form::textarea('bairro', '', array('class' => 'form-control', 'placeholder' => 'Bairro')) }}
        </div>
    </div>

    <div class="form-group">
        <label for="cidade" class="col-lg-2 control-label">Cidade</label>
        <div class="col-lg-6">
            {{ Form::textarea('cidade', '', array('class' => 'form-control', 'placeholder' => 'Cidade')) }}
        </div>
    </div>

    <div class="form-group">
        <label for="uf" class="col-lg-2 control-label">UF</label>
        <div class="col-lg-6">
            {{ Form::textarea('uf', '', array('class' => 'form-control', 'placeholder' => 'UF')) }}
        </div>
    </div>

    <div class="form-group">
        <label for="foto" class="col-lg-2 control-label">Foto</label>
        <div class="col-lg-6">
            {{ Form::textarea('foto', '', array('class' => 'form-control', 'placeholder' => 'Foto')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
            <a href="{{ url('artigos') }}" title="Cancelar" class="btn btn-default">Cancelar</a>
        </div>
    </div>

{{ Form::close() }}
@endsection