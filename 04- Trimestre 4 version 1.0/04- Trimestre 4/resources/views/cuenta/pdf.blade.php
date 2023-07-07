<!doctype html>
<html lang="en">

<head>
  <title>PDF cuentas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<h1 class="text-center">USUARIOS</h1>

<table id="cuentas" class="table table-striped table-bordered shadow-lg mt-4">
    <thead class="bg-primary text-white">
    <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Permiso</th>
            </tr>
    </thead>
    <tbody>
        @foreach ($cuentas as $cuenta)
        <tr>
                <td>{{ $cuenta->id }}</td>
                <td>{{ $cuenta->nombre }}</td>
                <td>{{ $cuenta->email }}</td>
                <td>{{ $cuenta->permiso }}</td>
                <td>
                </td>
        @endforeach
    </tbody>
</table>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>