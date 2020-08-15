<!DOCTYPE html>
<html>
<head>
<title>Comment</title>
</head>
    <body>
 
    
    <form action="{{route('comment.create')}}"  method="post">
    @csrf

    <div class="form-group">
   
      <h1>Post</h1>

        <Label>Write Comment</Label>
        <input class="form-control" name="comment" type="text">
    </div>

    <button type="Submit" class="btn btn-primary">Submit</button>

    </form>
        <h5>List of Comments</h5>

        @foreach($comments as $comment)
                <article class="comment">
                    <p>{{ $comment->comment }}</p>
                    <div class="info">
                        Posted by {{ $comment->user->first_name }} on {{ $comment->created_at }}
                    </div>
                    
                </article>
            @endforeach
    </body>
    </html>