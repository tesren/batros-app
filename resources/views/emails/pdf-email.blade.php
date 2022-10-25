<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mensaje del sitio web de Batros</title>
    </head>

    <body>
        <p>{{$msg->content}}</p> <br>

        <p>Nombre: <strong>{{$msg->name}}</strong></p>
        <p>Correo: <strong>{{$msg->email}}</strong></p> <br>

        <p>Enviado desde: <a href="{{$msg->url}}">{{$msg->url}}</a> </p>
        <p>Enviado el: {{$msg->created_at}}</p>
    </body>

</html>