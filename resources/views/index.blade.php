<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taggs    </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet">


        <!-- Styles -->
        </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-xs-8  col-xs-offset-2">
                    <h1 class="page-header">Tutorial de tags(Sistemas de Etiquetacion)</h1>
                    
                    @if(session('info')) 
                        <div class="alert alert-success" role="alert">
                            {{ session('info')  }}
                        </div>
                    @endif

                    @if(count($errors))
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif    
                    
                    <form action=" {{ route('post.store') }} " method="POST">
                        @csrf
                       <div class="form-group">
                           <label>Titulo</label>
                           <input class="form-control" type="text" name="title">
                       </div>
                         <div class="form-group">
                           <label>Contenido</label>
                            <textarea name="body" class="form-control"  rows="7tags"></textarea>
                        </div>
                         <div class="form-group">
                           <label>Etiquetas (separadas por coma)</label>
                           <input class="form-control" data-role="tagsinput" type="text" name="tags">
                       </div>
                         <div class="form-group">
                             <button type="submit" class="btn btn-primary">Guardar</button>
                       </div>
                       
                       
                    </form>

                    <hr>
                    @foreach ($posts as $post)
                        <div class="panel panel-primary">
                            <div class="panel-heading"> {{ $post->title }} </div>
                            <div class="panel-body"> {{ $post->body }} </div>
                            <div class="panel-footer">
                                @forelse ($post->tags as $tag)
                                     <span class="label label-info"> {{ $tag->name }} </span>   
                                @empty
                                    <em>Sin Etiquetas</em>
                                @endforelse
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>    
        </div>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
        
    </body>
</html>
