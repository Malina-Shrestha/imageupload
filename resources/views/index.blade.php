<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <link href="{{ asset('public/bootstrap.min.css')}}" rel="stylesheet"/>
    <a href="{{ route('multi.create') }}" class="btn btn-primary">Add Image</a>
    <meta charset="UTF-8">
</head>
<body>
    <table class="table table-hover table-striped table-sm">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>
                        <img src="{{ asset('public/images/'.$data->image) }}" class="img-fluid small" style="max-width: 80px;">
                    </td>
                    <td>{{ date('Y M d (l)',strtotime($data->created_at)) }}</td>
                    <td>{{ date('Y M d (l)',strtotime($data->updated_at))}}</td>
                    <td>
                        <a href="#" class="btn btn-info btn-fill btn-sm">
                            Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
