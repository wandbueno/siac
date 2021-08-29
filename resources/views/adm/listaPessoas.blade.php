@extends('templateAdm')

@section('main')
<div style="margin: 50px">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Pessoas cadastradas
            <a class="btn btn-primary btn-sm" style="float: right;" href="{{ route('pessoa.create') }}">Novo registro</a>
        </div>
        <div class="card-body">
            <table class="table table-striped mt-4 datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                        @foreach($pessoas as $pessoa)
                    @php
                        $i++;
                    @endphp 
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $pessoa->nome }}</td>
                            <td>{{ $pessoa->email }}</td> 
                            <td>{{ $pessoa->cpf }}</td>
                            <td>{{ $pessoa->data_nascimento }}</td>
                            <td class="d-flex">
                                {{-- <a class="mr-3 btn btn-sm btn-outline-success" href="{{ route('pessoa.edit', ['id' => $pessoa->id]) }}">Editar</a> --}}
                                <form action="{{ route('pessoa.delete', ['pessoa' => $pessoa->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-sm btn-outline-danger" type="submit" value="Remover">
                                </form>                     
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<div>
@endsection
