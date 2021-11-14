<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title> Document</title>

</head>
<body>
  <h1> search what to watch </h1>

 <form action="/na" method='GET'>
    <label for="name"> Name:</label><br>
    <input type="text" id="name" name="name"><br>
          <label for="type">Type:</label><br>
            <input type="text" id="type" name="type"><br>
            <a href="querires.blade.php">
  <button type="submit"> discover</button>
  </a>
    </form>
         <h1><em>add a new movie!</em></h1>
        <form action="/add" method="POST">
          @csrf
        <label for="name"> Name:</label><br>
          <input type="text" name="name"><br>
          <label for="type">Type:</label><br>
            <input type="text" name="type"><br>
         <button id="sub">save</button>
         <span id="result"></span>
        </form>
</body>
</html>
