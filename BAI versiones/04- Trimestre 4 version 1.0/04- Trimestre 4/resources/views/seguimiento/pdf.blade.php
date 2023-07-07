<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
    
</head>
<body>
    <h2>Seguimientos</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Descripción</th>
                <th>Responsable</th>
                <th>Productos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($seguimientos as $seguimiento)
                <tr>
                    <td>{{ $seguimiento->id }}</td>
                    <td>{{ $seguimiento->Descripción }}</td>
                    <td>{{ $seguimiento->Responsable }}</td>
                    <td>{{ $seguimiento->Productos }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>