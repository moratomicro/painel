@extends('template/layout')

@section('content')
        <h1>{{ $title ?? Lista }}</h1>        
        <div class="table-responsive">
            <h4 style="text-align: right;">
                <small>
                    @if ($pessoas->count() === 1)
                        Um registro encontrado.
                    @elseif ($pessoas->count() > 1)
                        {{ $pessoas->count() }} Pessoas cadastradas.
                    @else
                        Não foram encontrados registros no Banco de Dados.
                    @endif
                </small>
            </h4>

            <hr>
            @if ($pessoas->count())                
            <table class="table table-bordered">
                <caption><a href="{{ route('pessoa.create') }}">Novo</a></li></caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">DT. NASC</th>
                        <th scope="col">CPF</th>
                        <th scope="col">CEP</th>
                        <th scope="col">RUA</th>
                        <th scope="col">Nº</th>
                        <th scope="col">BAIRRO</th>
                        <th scope="col">CIDADE</th>
                        <th scope="col">UF</th>
                        <th scope="col">FOTO</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pessoas as $pessoa)
                        <tr>
                            <th scope="row">{{ $pessoa->id }}</th>
                            <td>{{ $pessoa->nome }}</td>
                            <td>{{ date('d/m/Y', strtotime($pessoa->dt_Nasc)) }}</td>
                            <td>{{ $pessoa->cpf }}</td>
                            <td>{{ $pessoa->cep }}</td>
                            <td>{{ $pessoa->rua }}</td>
                            <td>{{ $pessoa->nº }}</td>
                            <td>{{ $pessoa->bairro }}</td>
                            <td>{{ $pessoa->cidade }}</td>
                            <td>{{ $pessoa->uf }}</td>                    
                            <td>{{ $pessoa->foto }}</td>
                            <td>
                                <div class="pull-right">
                                    <div class="btn-group btn-group-xs">
                                        <a href="{{ route('pessoa.show', $pessoa->id) }}" title="Visualizar"
                                            class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span>Vizualizar</a>
                                        <a href="{{ route('pessoa.edit', $pessoa->id) }}" title="Editar"
                                            class="btn btn-info btn-lg"><span class="glyphicon glyphicon-pencil"></span>Editar</a>
                                        <a href="{{ route('pessoa.destroy', $pessoa->id) }}" title="Remover"
                                            class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Remover</a>                                            
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @else
                <h3>Nenhum registro encontrado.</h3>
            @endif
        </div>
@endsection