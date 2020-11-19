@extends('admin.layout.layout')
@section('content')
    <div class="container my-5">
        <a class="btn btn-success ml-3 mb-5" href="{{route('admin.pauta.cadastro')}}">Cadastrar novo artigo</a>
        <?php
        if(!empty($posts)){
        ?>
        <section class="articles_list">
            <?php
            foreach ($posts as $post){
            ?>
            <article class="ml-3 mb-5">
                <div class="form-group">
                    <label for="title">Título:</label>
                    <input type="text" class="form-control" id="title" name="title" disabled value="{{$post->title}}">
                </div>

                <div class="form-group">
                    <label for="subtitle">Situação:</label>
                    <textarea style="resize: none" class="form-control" rows="3"
                              disabled>{{$post->situation}}</textarea>
                </div>

                <div class="form-group">
                    <label for="description">Sugestão:</label>
                    <textarea style="resize: none" class="form-control" rows="3"
                              disabled>{{$post->sugestion}}</textarea>
                </div>

                <small>Criado em: {{date('d/m/Y H:i', strtotime($post->created_at))}}
                    | Editado em: {{date('d/m/Y H:i', strtotime($post->updated_at))}}</small>
                {{--                <form action="" method="post" class="mt-3">--}}
                {{--                    @csrf--}}
                {{--                    @method('DELETE')--}}
                <p><a href="" class="btn btn-primary">Editar</a></p>
                {{--                    <button type="submit" class="btn btn-danger">Excluir</button>--}}
                {{--                </form>--}}
            </article>
            <hr>
            <?php
            }
            ?>
        </section>
    <?php
    }
    ?>
@endsection
