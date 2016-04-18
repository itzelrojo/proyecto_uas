<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DOCUMENTO PDF-MATERIAS</title>
    </head>
    <body>
        <h1>PROYECTO UAS {{$carrera->nombre_carrera}}</h1>
        <img style="position: absolute; top: -3%; left: 92%;" src ="{{asset('imagenes/uas.png')}}" alt="" width="90px" height="110px"
        class= "img-rounded">
        <hr>
        <h3>Materia: <u>{{$materia->materias}}</u></h3>
        <strong>TEMAS</strong>
        <ol>
            @foreach($temas as $t)  
                <li>{{$t-> nombre_tema}}</li>
            @endforeach

        </ol>

    </body>
</html>