<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>
<body>
    <form action="/show" method="post">
        @csrf
        @foreach($resources as $row)
            <img src="{{$row['name']}}" alt="" width="150" height="150"><br/>
        @endforeach
    </form>
</body>
</html>