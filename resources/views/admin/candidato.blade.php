@extends('admin.layout.simples')
@section('contentsimple')

    <!-- Nested Row within Card Body -->
    <div class="row  justify-content-center">
        <div class="col-lg-7">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Preencha os dados abaixo e boa sorte!</h1>
                </div>
                <form method="POST" action="{{route('candidatar')}}" class="user">
                    @csrf
                    @error('name')
                    <div class="alert alert-danger text-center" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    @error('sucesso')
                    <div class="alert alert-success text-center" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('erro')
                    <div class="alert alert-danger text-center" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="name" id="name" autofocus
                               placeholder="digite o seu nome">
                    </div>
                    <div class="form-group">
                        <label for="equipe">Equipe:</label>
                        <select class="form-control form-control-lg" name="equipe" id="equipe">
                            <option value="operacao">operação</option>
                            <option value="administrativo">administrativo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="turno">Turno :</label>
                        <select class="form-control form-control-lg" name="turno" id="turno">
                            <option value="manha">manhã</option>
                            <option value="tarde">tarde</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-user btn-block">Concluir</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
