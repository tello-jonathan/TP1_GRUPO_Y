    <h1> {{$mensaje}} Usuario</h1>


    <label for="primerNombre">Primer Nombre</label>
    <input type="text" id="primerNombre" name="primerNombre" value="{{isset($admin->primerNombre)?$admin->primerNombre:''}}" placeholder="Primer Nombre">
    <br>
    <label for="segundoNombre">Segundo Nombre</label>
    <input type="text" id="segundoNombre"name="segundoNombre" value="{{isset($admin->segundoNombre)?$admin->segundoNombre:''}}" placeholder="Segundo Nombre">
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" id="apellido"name="apellido" value="{{isset($admin->apellido)?$admin->apellido:''}}" placeholder="Apellido">
    <br>
    <label for="correo">Correo</label>
    <input type="text" id="correo"name="correo" value="{{isset($admin->correo)?$admin->correo:''}}" placeholder="Correo">
    <br>
    <input type="submit" value="{{$mensaje}}">   
    <a href="{{url('/admin')}}">Regresar</a>                                     