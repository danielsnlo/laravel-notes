<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Note</h1>

    <form action="/notes" method="post">
        @csrf

        <h3>
            <a href="/notes/">Go Back...</a>
        </h3>
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
            <br>
            <br>
        <label for="content">Content: </label>
        <textarea name="content" id="title"></textarea>
            <br>
            <br>
        <input type="submit" value="Create">
    </form>
</body>
</html>