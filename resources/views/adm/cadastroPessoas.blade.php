@extends('templateAdm')

@section('main')
<main> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Nova Pessoa</h3></div>
                    <div class="card-body">
                        <form action="{{ route('pessoa.store') }}" method="post" class="mt-4" autocomplete="off">
                            @csrf 
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="nome" id="nome" type="text" placeholder="Nome completo"/>
                                        <label for="nome">Nome completo</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="cpf" id="cpf" type="number" placeholder="CPF"/>
                                        <label for="cpf">CPF</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="data_nascimento" id="data_nascimento" type="data" placeholder="Data da nescimento" />
                                        <label for="data_nascimento">Data de nascimento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control" name="sexo" id="sexo" type="text" placeholder="Sexo" />
                                        <label for="sexo">Sexo</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" />
                                        <label for="email">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="password" id="password" type="password" placeholder="Create a password" />
                                        <label for="password">Senha</label>
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