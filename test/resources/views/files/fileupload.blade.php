<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form class="" action="/fileupload" method="post" enctype="multipart/form-data">
        @csrf
            <h3>File Upload Form</h3>
            <input type="file" name="file" id="file"/>
            <button type="upload" class="btn btn-primary">Upload File</button>
    </form>
</body>
</html>