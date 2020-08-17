<!DOCTYPE html>
<html>
<head>
<title>Comment</title>
</head>
    <body>
 
    
    <form action="{{url('/comment')}}" method="POST">
    @csrf
        <h5>List of Comments</h5>

        @foreach($comments as $comment)
                <article class="Comment">
                    <p>{{ $comment->comment }}</p>
                    <div class="info">
                        Posted by {{ $comment->user->first_name}} on {{ $comment->created_at }}
                    </div>
        @endforeach
    </form>
</body>
</html>
