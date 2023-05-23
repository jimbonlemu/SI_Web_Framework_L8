<html>
<head>
    <title>Upload File dengan Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boostrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
            <h2 class="text-center my-5">Upload File dengan Laravel</h2>
            <div class="col-lg-8 mx-auto my-5">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $errors }} <br/>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('upload.proses') }}" method="POST" enctype="multipart/form-data">
                    {{ @csrf_field }}

                    <div class="form-group">
                        <b>File gambar</b><br/>
                        <input type="file" name="file">
                    </div>
                    <div class="form-group">
                        <b>Keterangan</b>
                        <textarea class="form-group" name="keterangan"></textarea>
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>