<!DOCTYPE html>

<html>
<head>

    <title>Actors Index</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>

</head>

<body>

<div class="container">

    <div class="content">

        <div class="title">Actors Index</div>

        <h1>{{ $title }}</h1>
        <ul>
            @foreach($noms as $nom)
            <li>{{ $nom }}</li>
            @endforeach
        </ul>

         <ul>
             @foreach($age as $age)
            <li>{{ $age }}</li>
            @endforeach

         </ul>

        <ul>
            @foreach($localite as $ville => $acteurs)
                @if($ville == "Paris")
            <li>{{ $ville }}</li>

            <ul>@foreach($acteurs as $acteur)

                {{ $acteur }}

                @endforeach
            </ul>

                @endif
            @endforeach

<!--            <ul>-->
<!--                @foreach($acteurs as $clef => $val)-->
<!--                   <li>{{ dd ($val }}</li>-->
<!--                @endforeach-->
<!--            </ul>-->

        </ul>







    </div>

</div>

</body>

</html>
