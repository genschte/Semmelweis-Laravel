@section('css')
    <link href="ssw-uebersicht.css" />
@stop

@section('scripts')
@stop

@extends('spark::layouts.app')

<header class="ssw-uebersicht-header clearfix" style="background-image: url('/img/header-images/ssw-uebersicht.png');">
    <div class="ssw-header-div">
        <h1 class="ssw-h1">{{ $pregnantweek->header_text }}</h1>
        <div class="ssw-par">
            {{ $pregnantweek->header_par }}
        </div>
    </div>
</header>

<div class="action-banner">
    <div class="container">
        <div class="col-md-8">
            <h3 class="action-banner-header">Wollen Sie maßgeschneiderte Infos für Ihre Schwangerschaft?</h3>
        </div>
        <div class="col-md-4"><div class="action-banner-btn"><a href="/register">Gleich registrieren!</a></div></div>
    </div>
</div>

@section('content')

    <div class="ssw-grid">
        <div class="ssw-grid-item ssw-grid-item--width2">
            <div class="layout-1 clearfix">
                <div class="layout-1-div-1"><img class="layout-1-img" src="/img/ssw-uebersicht/{{ $pregnantweek->medical_img }}">
                </div>
                <div class="layout-1-div-2">
                    <div class="layout-1-category">{{ $pregnantweek->header_text }}</div>
                    <h2 class="layout-1-h2">{{ $pregnantweek->medical_title }}</h2>
                    <p>{{ $pregnantweek->medical_text }}</p><a class="layout-1-btn btn" style="background-color:[acf field='layout_1_btn_color']; color:[acf field='layout_1_btn_color_text']" href="[acf field='layout_1_link']">Weiterlesen</a>
                </div>
            </div>
        </div>

        <div class="ssw-grid-item">
            <div class="layout-2">
                <h2 class="layout-2-h2">{{ $pregnantweek->row_1_left_title }}</h2>
                <p class="layout-2-p">{{ $pregnantweek->row_1_left_par }}</p>
                <div class="layout-2-btn-center"><a class="layout-2-btn w-button" href="{{ $pregnantweek->row_1_left_link }}">{{ $pregnantweek->row_1_left_btn }}</a>
                </div>
                <div class="layout-2-img-div">
                    <img class="layout-2-img" src="/img/ssw-uebersicht/{{ $pregnantweek->row_1_left_img }}"></div>
            </div>
            <p></p>
        </div>

        <div class="ssw-grid-item">
            <div class="layout-7"><img class="layout-7-img" src="/img/ssw-uebersicht/{{ $pregnantweek->row_2_right_logo }}">
                <div class="btn"><a class="layout-7-img" href="{{ $pregnantweek->row_2_right_link }}">Jetzt entdecken</a>
                </div>

                <div class="layout-7-category-box">
                    <div class="layout-7-category">
                        <div>{{ $pregnantweek->row_2_right_cat }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ssw-grid-item ssw-grid-item--width2">
            <div class="layout-9 clearfix" style="background-image: url('/img/ssw-uebersicht/{{ $pregnantweek->row_2_left_bg_img }}');">
                <div class="layout-9-category">{{ $pregnantweek->row_2_left_cat }}</div>
                <h2 class="layout-9-heading">{{ $pregnantweek->row_2_left_header }}</h2>
            </div>
        </div>
    </div>

    <!-- Start of Premium or Free Section -->

    <h2 class="header-premium-or-free">Passende Beiträge unserer Experten <br> zu dieser Schwangerschaftswoche</h2>
    <div class="container">
        <div class="row">

            @foreach($posts as $post)

            <div class="col-md-3">
                @include('partials.post-card', ['post'=>$post]);
            </div>

            @endforeach
        </div>
    </div>

@endsection
<script src="/js/masonry.pkgd.js">

    jQuery('.ssw-grid').masonry({
        itemSelector: '.ssw-grid-item',
        columnWidth:370
    });

    jQuery(document).ready(function($) {
        $('.ssw-slider').unslider();
    });
</script>


