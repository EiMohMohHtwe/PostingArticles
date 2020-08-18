 <!DOCTYPE html>
<html>
<head>
<title>Edit Post</title>
</head>
<body>
    <form class="" action="{{route('dashboard.update', ['post' => $post->id]) }}" method="POST">
    @csrf
    @method('PATCH')
        <h3><b>Edit Post</b></h3>
        <div class="form-group">
            <label for="body">Your Body</label><br>
            <div class="form-group">
                <textarea name="body" id="body" cols="30" rows="10">{{$post->body}}</textarea>
            </div>
            <button type="update" class="btn btn-primary">Update Post</button>
        </div>    
    </form>
</body>
</html>

