<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Viewing Note: {{ $note->id }}</h1>

    <h3>
        <a href="/notes/">Go Back</a>
    </h3>
        <hr>
    <li>
        <h2>Title:</h2>
        <p>{{ $note->title }}</p>
        <br>
        <h2>Description:</h2>
        <p>{{ $note->content }}</p>
    </li>

</body>
</html>