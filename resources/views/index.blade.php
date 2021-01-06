<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="keywords" content="tags, que, eu, quiser, usar, para, os, robos, do, google" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title ?? 'PAINEL'}}</title>  
        
        <!-- icone -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('/img/favicon.ico')}}"/>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">    
        
    </head>
    <body>
        @extends('template.menu')
        <br />
        <br />        
        <br />
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
                    @foreach(@pessoas as @pessoa)
                        <tr>
                            <th scope="row">{{ @pessoa->id }}</th>
                            <td>{{ @pessoa->nome }}</td>
                            <td>{{ date('d/m/Y', strtotime($pessoa->dt_Nasc)) }}</td>
                            <td>{{ @pessoa->cpf }}</td>
                            <td>{{ @pessoa->cep }}</td>
                            <td>{{ @pessoa->rua }}</td>
                            <td>{{ @pessoa->nº }}</td>
                            <td>{{ @pessoa->bairro }}</td>
                            <td>{{ @pessoa->cidade }}</td>
                            <td>{{ @pessoa->uf }}</td>                    
                            <td>{{ @pessoa->foto }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>