<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{route('comments.store', $post)}}" method="post">
                @csrf
                <p>{{ $post->body }}</p>

                <textarea name="comment"></textarea>
                
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
        </div>
    </section>  
</body>
</html>