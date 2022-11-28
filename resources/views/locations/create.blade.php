<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container my-5">

    <h1>Create</h1>

{{--    @include("errors.form_validation")--}}

    <form method="POST">

        @csrf

        <div class="form-group">
            <label>IP</label>
            <input type="number" name="ip" class="form-control" value="{{old("ip")}}">
            @error("number")
                @include("errors.form_single_validation", ["message" => $message])
            @enderror
        </div>

        <div class="form-group">
            <label>coord_x</label>
            <input type="number" name="coord_x" class="form-control">
            @error("coord_x")
                @include("errors.form_single_validation", ["message" => $message])
            @enderror


        </div>

        <div class="form-group">
            <label>coord_y</label>
            <input type="number" name="coord_y" class="form-control">

            @error("coord_y")
                @include("errors.form_single_validation", ["message" => $message])
            @enderror
        </div>

        <div>
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </form>
</div>


</body>
</html>
