<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All notes</h1>

    <h3>
        <a href="/notes/create">Create Note</a>
    </h3>
    
    <hr>

    <li>
        @foreach($allNotes as $note)
            <ol>
                <h2>{{ $note->title }}</h2>   
                <p>{{ $note->content }}</p>
                <h5><a href="/notes/{{$note->id}}">Show</a></h5>
                {{-- <h6><a href="/notes/{{$note->id}}">Destroy</a></h6> --}}
                <form action="/notes/{{$note->id}}/delete" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>

                <hr>
            </ol>
        @endforeach
    </li>

</body>
</html>