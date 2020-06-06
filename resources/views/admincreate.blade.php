<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <meta charset="UTF-8">
    <link href="{{ asset('public/bootstrap.min.css') }}" rel="stylesheet" />
</head>
<body>
<form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div class="form-group" >
        <label for="image">Image</label>
        <input type="file" name="image[]" class="myfrm form-control">
    </div>
        {{--<button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="clone hide">--}}
    {{--<div class="hdtuto control-group lst input-group" style="margin-top:10px">--}}
    {{--<input type="file" name="image[]" class="myfrm form-control">--}}
    {{--<div class="input-group-btn">--}}
    {{--<button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>


</form>

</body>
</html>
