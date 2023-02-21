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
    <title>Usuarios</title>
</head>
<body>
    <section>
            <h3 style="color: #6777ef">Usuarios</h3>
                <div class="card">
                    <a class="btn btn-warning" href="{{route('usuarios.create')}}">Nuevo Usuario</a>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <thead style="background-color: #6777ef">
                            <tr>
                                <th style= "display: none;">ID</th>
                                <th style= "color: #fff;">Nombre</th>
                                <th style= "color: #fff;">Apellido</th>
                                <th style= "color: #fff;">Email</th>
                                <th style= "color: #fff;">Password</th>
                                <th style= "color: #fff;">Creacion</th>
                            </tr>
                            <tbody>
                                @foreach($usuarios as $usuario)
                                <tr>
                                    <td style= "display: none;">{{$usuario->id}}</td>
                                    <td style= "color: #6777ef;">{{$usuario->name}}</td>
                                    <td style= "color: #6777ef;">{{$usuario->lastname}}</td>
                                    <td style= "color: #6777ef;">{{$usuario->email}}</td>
                                    <td style= "color: #6777ef;">{{$usuario->password}}</td>

                                    <td>
                                    <a class="btn btn-info" href="{{ route('usuarios.edit', $usuario->id)}}"> Editar</a>

                                    {!! Form::open(['method' => 'DELETE', 'route'=> ['usuarios.destroy', $usuario->id, 'style'=> 'display:inline']]) !!}
                                    {!! form::submit('Borrar', ['class'=> 'btn btn-danger'])!!}
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class=" Pagination justify-content-end">
                            {!! $usuarios->links()!!}
                        </div>
                    </div>
                </div>
    </section>
<script>https://cdnjs.cloudflare.com/ajax/libs/gentelella/1.4.0/js/custom.min.js</script>
</body>
</html>