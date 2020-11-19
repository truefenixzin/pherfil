@extends('admin.layout.layout')
@section('content')
    <div class="container my-5">
        <form action="{{route('pauta.store')}}" method="post" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="subtitle">Situação:</label>
                <textarea style="resize: none" class="form-control" rows="5" id="situation" name="situation"></textarea>
            </div>

            <div class="form-group">
                <label for="description">Sugestão:</label>
                <textarea style="resize: none" class="form-control" rows="5" id="sugestion" name="sugestion"></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-lg btn-success ">Cadastrar</button>
            </div>
        </form>
    </div>
@endsection
