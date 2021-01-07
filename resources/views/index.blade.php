@extends('template/layout')

@section('content')        
        <div class="table-responsive"
            <table class="table table-bordered">
                <caption>Lista de pessoas</caption>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection