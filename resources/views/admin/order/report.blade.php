<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoLife Store</title>
</head>
<body>
    <h1>Report All Orders</h1>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $o)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $o->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>