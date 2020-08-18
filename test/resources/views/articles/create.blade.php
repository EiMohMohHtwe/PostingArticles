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
            <header><h3>What do you have to say?</h3></header>
            <form action="{{route('post.create')}}" method="post">
                @csrf
                <div class="form-group">
                    <input class="form-control" name="title" id="title" type="text" placeholder="Your Title"><br>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="10" placeholder="Your Body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>
</body>
</html>