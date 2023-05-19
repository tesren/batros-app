<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mensaje del sitio web de Batros</title>
    </head>

    <body>

        @if ($msg->ap_date)
            <p>Un cliente está interesado en agendar una cita para Batros Marina Residences</p>

            <p>Nombre: <strong>{{$msg->name}}</strong></p>
            <p>Correo: <strong>{{$msg->email}}</strong></p>
            <p>Teléfono: <strong>{{$msg->phone ?? 'Sin especificar'}}</strong></p>
            <p>Preferencia de contacto: {{$msg->contact_method ?? 'Sin preferencia'}}</p>
            <p>Comentarios: <strong>{{$msg->content ?? 'Sin Comentario'}}</strong></p> <br>

            <p>Fecha y hora escogida por el cliente</p>
            <p>Fecha: {{$msg->ap_date}}</p>
            <p>Hora: {{$msg->ap_time}}</p> <br>


            <p>Enviado desde: <a href="{{$msg->url}}">{{$msg->url}}</a> </p>
            <p>Enviado el: {{$msg->created_at}}</p>
        @else
            <p>Este mensaje fue enviado desde un formulario de contacto en el sitio web de Batros</p>

            <p>Mensaje de: <strong>{{$msg->name}}</strong></p>
            <p>Correo: <strong>{{$msg->email}}</strong></p>
            <p>Teléfono: <strong>{{$msg->phone ?? 'Sin especificar'}}</strong></p>
            <p>Contenido: <strong>{{$msg->content ?? 'Sin Contenido'}}</strong></p> <br>
            <p>Enviado desde: <a href="{{$msg->url}}">{{$msg->url}}</a> </p>
            <p>Enviado el: {{$msg->created_at}}</p>
        @endif
        
    </body>

</html>