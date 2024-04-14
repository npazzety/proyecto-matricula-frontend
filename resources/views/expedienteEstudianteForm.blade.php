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
  <div>
    <head>
      <nav class="d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
        <h3 class="mt-3">Tuition<span class="text-orange">03</span></h3>
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
       <!-- <div class="d-flex align-items-center">
          <a class="me-3" href="{{ route('estudiante.login') }}">Estudiantes</a>
          <a class="me-3" href="{{ route('docente.login') }}">Docentes</a>
          <a class="me-3" href="{{ route('empleado.login') }}">Empleados</a>
          <a class="me-3" href="{{ route('estudiante.expediente.form') }}">registrate</a>
        </div> -->
      </nav>
    </head>
  </div>
  <main class="d-flex flex-column justify-content-center align-items-center mt-2">
    <section class="mb-5">
      <h3>Llena el formulario para poder crear tu <span class="text-orange">expediente</span></h3>
    </section>
    <section class="d-flex mb-3">
      <form action="{{ route('expediente.mandar') }}" method="post" class="d-flex flex-column justify-content-around p-8 form">
        @csrf
        @method('post')
        <div class="d-flex flex-column align-items-center justify-content-center my-2">
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
          <h3>Tuition<span class="text-orange">03</span></h3>
        </div> 
        <div>
          <label for="nombres">Nombres</label>
          <input class="form-control mb-3" id="nombres" type="text" placeholder="Nombres" name="nombres" minlength="3" maxlength="15" required>
          <label for="aplellidos">Apellidos</label>
          <input class="form-control mb-3" type="text" id="apellidos" placeholder="Apellidos" name="apellidos" minlength="3" maxlength="12" required>
          <label for="correo">Correo</label>
          <input class="form-control mb-3" type="email" id="correo" name="correo" placeholder="Correo" required>
          <label for="sexo">Sexo</label>
          <select class="form-select mb-3" name="sexo" id="sexo" required>
            <option selected>Selecciona tu sexo</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
          <label for="departamento">Departamento de residencia</label>
          <select class="form-select mb-3" name="departamento" id="departamento" required>
            <option selected>Selecciona el departamento de residencia</option>
            @foreach ($departamentos as $departamento)
              <option value="{{ $departamento }}">{{ $departamento }}</option> 
            @endforeach
          </select>
          <label for="carrera">Carrera</label>
          <select class="form-select mb-3" name="carrera" id="carrera" required>
            <option selected>Selecciona una carrera</option>
            @foreach ($carreras as $carrera)
              <option value="{{ $carrera }}">{{ $carrera }}</option> 
            @endforeach
          </select>
         <!-- <label for="foto">Subir fotografía</label>
          <input class="form-control mb-3" type="file" name="foto" id="foto"> -->
        </div>
        <button class="btn btn-primary">Enviar</button>
      </form> 
    </section>
   <!-- <section class="ms-1">
      <img src="{{ asset('img/docente.png') }}" alt="autenticación logo">
    </section> -->
  </main>
</body>
</html>