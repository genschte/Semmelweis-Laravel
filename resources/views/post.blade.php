@section('scripts')
@stop

@extends('spark::layouts.app')

<header class="entry-header">
    <div class="title-section">
        <div class="title-div">
            <h1 class="post-header">{{ $post->title }}</h1>
        </div>
        <div class="divider-post-title"></div>
        <div class="meta-information-post">
            <div class="author">von </div>
        </div>
        <div class="subheader-post">
            <h3 class="subheader-post-h3">{{ $post->subtitle }}</h3>
        </div>
        <div class="share-icons w-clearfix">
            <div class="circle-social-icon"></div>
            <div class="circle-social-icon float-right"></div>
        </div>
        <div class="entry-meta">
            {{ $post->updated_at }}
        </div><!-- .entry-meta -->
    </div>

    @if($post->premium  and ! (Auth::user()))
        <div class="jumbotron text-center">
            <h2>Registrieren Sie sich, um für diese Inhalte freigeschalten zu werden!</h2>
            <p>Dieser Inhalte ist für unsere Mitglieder reserviert.</p>
            <a href="/register" class="btn btn-lg btn-danger">Registrieren</a>
        </div>
    @else()
    <div class="main-image" style="background-image: url({{ $post->image }});"></div>


</header><!-- .entry-header -->

@section('content')

    <div class="entry-content container">
        <p>{{ $post->content }}</p>
    </div><!-- .entry-content -->

@endsection
@endif