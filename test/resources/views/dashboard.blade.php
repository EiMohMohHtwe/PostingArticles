<!DOCTYPE html>
<html>
<head>
<title>Dashboard
</title>
</head>
<body>


        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <header><h3>What do you have to say?</h3></header>
                <form action="{{route('post.create')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="body" id="body" cols="30" rows="10" placeholder="Your Body"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Create Post</button>
                    <input type="hidden" value="{{Session::token()}}" name="_token">
                </form>
            </div>
        </section>
        <section class="row-posts">
            <div class="col-md-6 col-md-offset-3">
                <header><h3>What people say...</h3></header>
                @foreach($posts as $post)
                <article class="post">
                    <p>{{ $post->body }}</p>
                    <div class="info">
                        Posted by {{ $post->user->first_name }} on {{ $post->created_at }}
                    </div>
                    <div class="interaction">
                        @if(Auth::user() == $post->user)
        
                            <a href="/editpost/{{$post->id}}/edit">Edit</a>
                            <a href="/comment" class="Comment">Comment</a> 
                           
                            
                        @endif
                    </div>
                </article>
            @endforeach
            </div>
        </section>


</form>
</body>
</html>

