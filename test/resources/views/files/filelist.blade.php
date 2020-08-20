<!DOCTYPE html>
<html>
<body>
    <div class="row">
        <div class="col-md-12">
            <h3>File List</h3>
            <form action="/filelist" method="post">
                @csrf
                <table class="table table-bordered" border="5" width="50%">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Path</th>
                        <th>Type</th>
                    </tr>
                    @foreach($filedata as $row)
                        <tr>
                            <td>{{$row['id']}}</td>
                            <td>{{$row['name']}}</td>
                            <td>{{$row['url']}}</td> 
                            <td>{{$row['path']}}</td> 
                            <td>{{$row['type']}}</td> 
                        </tr>
                    @endforeach
                </table>
            </form>
        </div>
    </div>
</body>
</html>
