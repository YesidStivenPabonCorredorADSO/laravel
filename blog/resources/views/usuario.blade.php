<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="{{route('usuario')}}" method="POST">
        @csrf
       <div>
           <input type="text" name="name" placeholder="Ingrese su nombre" value="{{old('name')}}">
       </div>
       <div>
        <input type="text" name="email" placeholder="Ingrese su correo" value="{{old('name')}}">
       </div>
       <div>
        <label for="">Confirmar Email</label>
           <input type="text" name="email_confirmation"placeholder="confirme su correo"value="{{old('email')}}">
       </div>
       <div>
           <input type="number" name="password" placeholder="Ingrese contraseña"value="{{old('password')}}">
       </div>
       <div>
        <input type="number" name="password" placeholder="Ingrese contraseña"value="{{old('password')}}">
       </div>
       <button  type="submit">Guardar</button>
    </form>
     
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
</body>
</html>