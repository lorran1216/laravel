<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Table</title>
    <style>
        body{
            background: linear-gradient(to bottom, #3498db, #2ecc71);
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        h1{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 50px;
            margin-top: 100px;
            font-family: 'Times New Roman', Times, serif;
        }
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            margin:0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: black;
            color: white;
        }

        tr:nth-child(even) {
            background-color: beige;
        }

        tr:nth-child(odd) {
            background-color: white;
        }
    </style>
</head>
<body>

    <div><h1>Movies Table</h1></div>

    <div class="container">
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Duration (min)</th>
                    <th>Release Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movs as $mov)
                    <tr>
                        <td>{{ $mov->id }}</td>
                        <td>{{ $mov->title }}</td>
                        <td>{{ $mov->duration }}</td>
                        <td>{{ $mov->release_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>