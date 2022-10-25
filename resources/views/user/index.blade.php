@extends('templates.master')

@section('conteudo-view')

@if(session('success'))
    <!-- <h2>{{ session('success') ['messages'] }}</h2> -->
@else
    <!-- <h2>Sem retorno</h2> -->
@endif

    {!! Form::open(['route'=> 'user.store', 'method' => 'post', 'class' => 'form-padrao']) !!}

        @include('templates.formulario.input', ['label' =>  'Nuit', 'input' => 'nuit', 'attributes' => ['placeholder' => 'Nuit']])
        
        @include('templates.formulario.input', ['label' =>  'Name', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
        
        @include('templates.formulario.input', ['label' =>  'Telefone', 'input' => 'phone', 'attributes' => ['placeholder' => 'Telefone']])
        
        @include('templates.formulario.input', ['label' =>  'Email', 'input' => 'email', 'attributes' => ['placeholder' => 'Exemplo@gmail.com']])
        
        @include('templates.formulario.password', ['label' =>  'Password', 'input' => 'password', 'attributes' => ['placeholder' => 'Palavra-chave']])
        
        @include('templates.formulario.submit', ['input' => 'Cadastrar'])

    {!! Form::close() !!}

    <table class="dafault-table">
        <thead>
            <tr>
                <td>ID</td>
                <td>NUIT</td>
                <td>NOME</td>
                <td>CONTACTO</td>
                <td>NASCIMENTO</td>
                <td>GENERO</td>
                <td>NOTAS</td>
                <td>EMAIL</td>
                <td>STATUS</td>
                <td>PERMISSAO</td>
                <td class="remover">remover</td>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user-> id}}</td>
                <td>{{ $user-> nuit}}</td>
                <td>{{ $user-> name}}</td>
                <td>{{ $user-> phone}}</td>
                <td>{{ $user-> birth}}</td>
                <td>{{ $user-> gender}}</td>
                <td>{{ $user-> notes}}</td>
                <td>{{ $user-> email}}</td>
                <td>{{ $user-> status}}</td>
                <td>{{ $user-> permission}}</td>
                <td class="remover">
                
                {!! Form::open(['route'=>['user.destroy', $user->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('Remover') !!}
                    {!! Form::close() !!}

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('css-view')

@endsection

@section('js-view')

@endsection