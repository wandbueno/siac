@extends('templateAdm')

@section('main')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Nova Função</h3></div>
                    <div class="card-body">
                        <form action="{{ route('funcao.store') }}" method="post" class="mt-4" autocomplete="off">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="codigo" id="codigo" type="text" placeholder="Nome completo"/>
                                        <label for="codigo">Codigo da função</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="nome" id="nome" type="text" placeholder="Nome completo"/>
                                        <label for="nome">Nome da Função</label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Registar</button></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection