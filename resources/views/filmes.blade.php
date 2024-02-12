<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <style>

        body{
            height: 100vh;
            background-image: linear-gradient(to right, #3CB371, #4682B4 );
        }

        .title{
            display: flex;
            margin-left: 150px;
            margin-bottom: 10px;
            font-family: "Helvetica Neue", Heveltica, sans-serif;
        }

        h2, li{
            font-family: "Times New Roman", Times, serif;
        }
        .container {
            height: 210px;
            width: 1216px;
            background-image: linear-gradient(to right, #B0C4DE, #4682B4);
            display: flex;
            margin-bottom: 20px;
            margin-left:150px;
            border: 1px solid #4682B4;
            border-radius: 0 10px 10px 0;
        }

        .photo {
            flex: 0 0 150px; /* Largura fixa da foto */
            margin-right: 20px;
        }

        .photo img {
            width: 100%;
            height: auto;
            border-radius: 0 10px 10px 0;
        }

        .description {
            flex: 1; /* A descrição ocupa todo o espaço restante */
        }

        .description h2 {
            margin-top: 25px;
        }

        .description ul {
            list-style-type: none;
            padding: 0;
        }

        .description ul li {
            margin-bottom: 5px;
        }

        .button {
            bottom: 10px;
            right: 10px;
            width: 100px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class=title>
        <h1>
            Movies Store
        </h1>
    </div>

    @foreach($movs as $mov)
        <div class="container">
           <div class="photo">
                <img src="https://api.lorem.space/image/movie?w=158&h=220" alt="Foto">
            </div>
            <div class="description">
                <h2>{{$mov->title}}</h2>
                <ul>
                    <li><strong>Duration:</strong> {{$mov->duration}} </li>
                    <li><strong>Date:</strong> {{$mov->release_date}} </li>
                    <li><strong>Description:</strong> {{$mov->description}} </li>
                </ul>
            </div>
            <button class="button">Acessar</button>
        </div>    
    @endforeach
</body>
</html>
