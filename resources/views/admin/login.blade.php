@extends('admin.layout.simples')
@section('contentsimple')
    <!-- Outer Row -->

    <!-- Nested Row within Card Body -->
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Seja bem vindo!</h1>
                </div>
                <form class="user" method="post" action="{{route('admin.login.do')}}">
                    @csrf

                    <hr>
                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger text-center">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br/>
                                @endforeach
                            </div>
                        @endif
                        <input type="email" name="email" value="{{old('login')}}" class="form-control form-control-user"
                               id="email" aria-describedby="emailHelp"
                               placeholder="informe o seu login..." autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control form-control-user"
                               placeholder="Informe sua senha...">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-user btn-block">
                        Login
                    </button>
                    <a href="{{route('front.index')}}" class="btn btn-primary btn-user btn-block">
                        voltar
                    </a>
                </form>
                <hr>
                <div class="text-center">
{{--                    <a class="small" href="forgot-password.html">Esqueceu sua senha??</a>--}}
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection


