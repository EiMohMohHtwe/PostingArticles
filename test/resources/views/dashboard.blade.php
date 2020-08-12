<!DOCTYPE html>
<html>
<head>
<title>Dashboard
</title>
</head>
<body>

@csrf
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <header><h3>What do you have to say?</h3></header>
                <form action="{{route('post.create')}}" method="post">
                    <div class="form-group">
                        <textarea class="form-control" name="body" id="new-post" cols="30" rows="10" placeholder="Your Post"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                    <input type="hidden" value="{{Session::token()}}" name="_token">
                </form>
            </div>
        </section>
        <section class="row-posts">
            <div class="col-md-6 col-md-offset-3">
                <header><h3>What other people say...</h3></header>
                
            </div>
        </section>
</form>
</body>
</html>

