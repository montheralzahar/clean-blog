<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
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
</head>

<body>
    <div class="container d-flex gap-3 mt-5">
        <a class="btn btn-dark " href="{{ route('admin.index') }}">Home</a>
        <a class="btn btn-dark " href="{{ route('admin.contact') }}">Contact messages</a>
        <a class="btn btn-dark " href="{{ route('admin.posts') }}">All Posts</a>
        <a class="btn btn-dark " href="{{ route('admin.add_post') }}">Add post</a>
    </div>
</body>

</html>
