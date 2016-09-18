@extends('spark::layouts.app')

<header class="welcome-header clearfix">
    <div class="div-welcome-header-section-h1">
        <h1>Die ersten Schritte</h1>
    </div>
    <div class="welcome-header-news-section">
        <div class="welcome-header-news-section-element">
            <h3 class="welcome-featured-header">Töpfchen oder Toilette?</h3>
            <div class="welcome-featured-date">19. Mai 2016</div>
        </div>
        <div class="active welcome-header-news-section-element">
            <h3 class="welcome-featured-header">Video: Babymassage</h3>
            <div class="welcome-featured-date">27. Juni 2016</div>
        </div>
        <div class="welcome-header-news-section-element">
            <h3 class="welcome-featured-header">9-Monate Ernährungskalender</h3>
            <div class="welcome-featured-date">22. Mai 2016</div>
        </div>
    </div>
</header>

@section('content')
    <home :user="user" inline-template>
        <div class="container">

        </div>
    </home>

@endsection
