<!DOCTYPE html>
<html>
<head>
<title>Dashboard
</title>
</head>
<body>

        <a href="{{ route('posts.create') }}">Create new article</a>

        <section class="row-posts">
            <div class="col-md-6 col-md-offset-3">
                <header><h3>What people say...</h3></header>
                @foreach($posts as $post)
                <article class="post">
                    <p>
                        <a href="{{ route('posts.show', $post)}}">
                            {{ $post->body }}
                        </a>
                    </p>
                    <div class="info">
                        Posted by {{ $post->user->first_name }} on {{ $post->created_at }}
                    </div>
                    <div class="interaction">
                        @if(Auth::user() == $post->user)
        
                            <a href="/editpost/{{$post->id}}/edit">Edit</a>
                           
                            
                        @endif
                    </div>
                </article>
            @endforeach
            </div>
        </section>


</form>
</body>
</html>

