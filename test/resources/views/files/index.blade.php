<!DOCTYPE html>
<html>
<body>
    <div class="row">
        <div class="col-md-12">
            <h3>File List</h3>
            <form action="/index" method="post">
                @csrf
                    @foreach($filedata as $row)
                            <a href="/show/1">{{$row['name']}}</a><br/>
                    @endforeach
            </form>
        </div>
    </div>
</body>
</html>
