<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beernamic</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/botones.css') }}">

  <link rel="icon" href="{{ asset('img/LogoBeernamic2.png') }}" type="image/x-icon">



</head>

<body>

  <main>
  
  @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Perfil del Usuario</h1>
    <div class="card">
        <div class="card-header">
            Información del Usuario
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </div>
    </div>
</div>
@endsection
  </main>


  
  
  <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>