<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>FILE UPLOAD</title>
</head>
<body>
    <div class="container mt-3">
    <h1>FILE UPLOAD</h1>
    <hr>
    <form action="{{url('/file-upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-groub">
            <label for="berkas">Gambar</label>
            <input type="file" name="berkas" id="berkas" class="form-control-file">
            @error('berkas')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-2">INPUT</button>
    </form>
    </div>
</body>
</html>