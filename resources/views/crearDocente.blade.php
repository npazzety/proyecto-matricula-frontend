<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <title>login</title>
</head>
<body class="page mx-auto">
  <div class="mb-4">
    <head>
      <nav class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
          <h3>Tuition<span class="text-orange">03</span></h3>
        </div>
        <div class="d-flex align-items-center">
          <h6 class="fw-light me-3">Usuario</h6>
          <h6 class="fw-light me-3">Correo</h6>
          <button class="btn btn-primary"><a class="me-3 text-white" href="{{ route('logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>
  </div>
  <main class="d-flex flex-column justify-content-center align-items-center">
    <div class="mb-5">
      <h3>Crear expediente de docente</h3>
    </div>
    <div>
      <form action="#" method="post" class="form mb-5 d-flex flex-column p-8">
        <input class="form-control mb-3" type="text" name="nombre" placeholder="Nombres">
        <input class="form-control mb-3" type="text" name="apellido" placeholder="Apellidos">
        <input class="form-control mb-3" type="text" name="correo" placeholder="Correo">
        <input class="form-control mb-3" type="text" name="especializacion" placeholder="Especializacion">
        <input class="form-control mb-3" type="password" name="contrasena" placeholder="Contraseña">
        <label for="carrera">Carrera</label>
        <select class="form-select mb-3" name="carrera" id="carrera" required>
          <option selected>Selecciona una carrera</option>
          @foreach ($carreras as $carrera)
            <option value="{{ $carrera }}">{{ $carrera }}</option> 
          @endforeach
        </select>
        <select name="sexo" class="form-select mb-3" >
          <option selected>sexo</option>
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
        </select>
        <select name="departamento" class="form-select mb-3">
          <option selected>Departamento de residencia</option>
          @foreach ($departamentos as $departamento)
          <option value="{{ $departamento }}">{{ $departamento }}</option> 
          @endforeach
        </select>
        <div class="d-flex justify-content-center align-items-center mb-3">
          <div class="form-check me-3">
            <input class="form-check-input" type="radio" name="cargo" id="docente" value="docente" checked>
            <label class="form-check-label" for="docente">
              Docente
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="cargo" value="coordinador" id="coordinador">
            <label class="form-check-label" for="coordinador">
              Coordinador
            </label>
          </div>
        </div>
        <button class="btn btn-primary">Guardar</button>
        <!--TODO: agregar opcion para subir foto y mandarlo al server -->
      </form>
    </div>
  </main>
</body>