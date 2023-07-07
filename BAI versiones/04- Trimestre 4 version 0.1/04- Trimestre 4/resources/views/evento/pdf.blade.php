<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDF Citas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        /* Estilos CSS para el PDF */
        /* ... */
    </style>
</head>
<body>
    <h1>Listado de Citas</h1>

    <table>
        <thead>
            <tr>
                <th>Evento</th>
                <th>Fecha de inicio</th>
                <th>Fecha de fin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->event }}</td>
                <td>{{ $event->start_date }}</td>
                <td>{{ $event->end_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
