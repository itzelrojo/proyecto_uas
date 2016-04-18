<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>PROYECTO UAS</h1>
                     <img src ="{{asset('imagenes/uas.png')}}" alt="" width="90px" height="110px" class= "img-rounded">
                </div>
                <div class="col-xs-2">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation"> <a href="{{url('/')}}">Inicio</a></li>
                    @foreach($carreras as $carrera)
                      <li role="presentation"> <a href="{{url('/materias')}}/{{$carrera->id}}">{{$carrera->nombre_carrera}}</a></li>  
                    @endforeach
                </ul>
                </div>
                @yield('index')
                @yield('informatica')
                @yield('medicina')
                @yield('agronomia')
                @yield('quimica')
                @yield('contabilidad')
                @yield('odontologia')
                @yield('psicologia')
                @yield('trabajo_social')
            </div>
        </div>
    </body>
</html>