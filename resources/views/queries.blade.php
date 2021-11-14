<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Recommended Movies </h1>
<table border="1">
    <tr>

        <td>id</td>
        <td>name</td>
        <td>type</td>
        <td>release_year</td>
        <td>language</td>
        </tr>
        @foreach ($movies as $movie)
         <tr>
            <td>{{$movie ['id']}} </td>
            <td>{{$movie ['name']}} </td>
            <td>{{$movie ['type']}} </td>
            <td>{{$movie ['release_year']}} </td>
            <td>{{$movie ['language']}} </td>
        </tr>
        @endforeach
</table>
</body>
</html>
