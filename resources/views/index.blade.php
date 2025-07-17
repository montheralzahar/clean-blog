@extends('master')
@section('title', 'Home page')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('frontAssets/assets/img/home-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="{{ route('post', $post->id) }}">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ \Illuminate\Support\Str::limit($post->content, 10, '...') }}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="{{ route('index') }}">{{ env('APP_NAME') }}</a>
                            on {{ date('M d , Y') }}
                        </p>
                    </div>
                @endforeach
                {{ $posts->links() }}
                <!-- Divider-->
                <hr class="my-4" />
            </div>
        </div>
    </div>
@endsection
