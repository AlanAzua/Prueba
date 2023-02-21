<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
    body{
    color: #73879C; 
    background: #F7F7F7;
    }
    </style>
    <title>Editar Usuarios</title>
</head>
<body>
    <section>
        <div class="row">
            <h3 style="color: #6777ef"> Editar Usuarios</h3>
            <div class="col-ms-6">
                <div class="card">
                @if ($errors->any())
                    <div class="alert alert-dark  alert-dismissible fade show" role="alert">
                        <strong> ¡Revise los campos!</strong>
                        @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{$error}}</span>   
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                    {{!!Form::Model($user, ['method'=>'PUT', 'route'=>['usuarios.update', $user->id]])!!}}
                    <div Class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                {!! Form::text('name', null, array ('class'=>'form-control'))!!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="name">Apellido</label>
                                {!! Form::text('lastname', null, array ('class'=>'form-control'))!!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="name">Email</label>
                                {!! Form::text('email', null, array ('class'=>'form-control'))!!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="name">Contraseña</label>
                                {!! Form::password('password', array ('class'=>'form-control'))!!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="name">Contraseña</label>
                                {!! Form::password('confirm-password', array ('class'=>'form-control'))!!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <a href="/usuarios" class="btn btn-secundary" tabindex="5">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button> 
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
    <script>https://cdnjs.cloudflare.com/ajax/libs/gentelella/1.4.0/js/custom.min.js</script>
</body>
</html>