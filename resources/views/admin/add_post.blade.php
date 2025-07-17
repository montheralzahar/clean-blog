<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontAssets/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontAssets/css/bootstrap.css.map') }}">
    <link rel="stylesheet" href="{{ asset('frontAssets/css/bootstrap.min.css') }}">
    <style>
        .head {
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="d-flex head mt-4">
            <h1>Add new posts</h1>
            <div>
                <a class="btn btn-dark mt-4" href="{{ route('admin.index') }}">Dashboard</a>
            </div>
        </div>
        <form action="{{ route('admin.add_post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4"><x-input name="title" placeholder="post title ..." /></div>
            <div class="mt-4"><x-input name="image" type="file" /></div>
            <div class="mt-4">
                <div>
                    <textarea name="content" placeholder="post content ..." cols="30" rows="10"
                        class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                    @error('content')
                        <div><small class="text-danger">{{ $message }}</small></div>
                    @enderror
                </div>
                <button class="btn btn-primary mt-4">post</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('frontAssets/js/all.js') }}"></script>
    <script src="{{ asset('frontAssets/js/all.min.js') }}"></script>
</body>

</html>
