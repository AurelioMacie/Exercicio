@extends('templates.master')

@section('conteudo-view')

{!! Form::open(['route'=> 'instituition.store', 'method' => 'post', 'class' => 'form-padrao']) !!}

@include('templates.formulario.input', ['label' =>  'Name', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
@include('templates.formulario.submit', ['input' => 'Cadastrar'])

{!! Form::close() !!}

<table class="dafault-table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Instituicao</td>
                <td>Descricao</td>
                <td>Opcoes</td>
                <td class="remover">remover</td>
            </tr>
        </thead>

        <tbody>
            @foreach($instituitions as $instituition)
            <tr>
                <td>{{ $instituition-> id}}</td>
                <td>{{ $instituition-> name}}</td>
                <td>{{ $instituition-> description}}</td>
                <td class="remover">
                
                {!! Form::open(['route'=>['instituition.destroy', $instituition->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('Remover') !!}
                    {!! Form::close() !!}

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection