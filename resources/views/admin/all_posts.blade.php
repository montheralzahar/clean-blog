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
            <h1>All Posts</h1>
            <div>
                <a class="btn btn-dark mt-4" href="{{ route('admin.index') }}">Dashboard</a>
                <a class="btn btn-dark mt-4" href="{{ route('admin.add_post') }}">Add post</a>
            </div>
        </div>
        <div>
            @foreach ($posts as $post)
                <div class="container p-2  mt-4">
                    <div>title:{{ $post->title }}</div>
                    <div><img width="80" src="{{ asset($post->image) }}" alt=""></div>
                    <div>{{ $post->content }}</div>
                    <div class="mt-3">
                        <a class="btn btn-info" href="">edit</a>
                        <form class="d-inline" action="{{ route('admin.destroy_post', $post->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
        {{ $posts->appends($_GET)->links() }}
    </div>


    <script src="{{ asset('frontAssets/js/all.js') }}"></script>
    <script src="{{ asset('frontAssets/js/all.min.js') }}"></script>
</body>

</html>
