<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <meta charset="UTF-8">
    <link href="{{ asset('public/bootstrap.min.css') }}" rel="stylesheet" />
</head>
<body>
    <form action="{{ route('multi.store') }}" method = "post" enctype="multipart/form-data">
        @csrf
        <div class="form-control">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-control">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" require>
        </div><br>
        <div class="form-control">
            <button type="btn btn-primary">Submit</button>
        </div>

    </form>
</body>
</html>
