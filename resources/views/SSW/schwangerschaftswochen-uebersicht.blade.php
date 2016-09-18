@section('css')
    <link href="ssw-uebersicht.css" />
@stop
@extends('spark::layouts.app')

<header class="ssw-uebersicht-header clearfix" style="background-image: url('/img/header-images/ssw-uebersicht.png');">
    <div class="ssw-header-div">
        <h1 class="ssw-h1">Die Übersicht der Schwangerschaft</h1>
        <div class="ssw-par">
            Hallo zur Übersicht aller Schwangerschaftswochen. Das Konzept ist recht einfach: Pro Schwangerschaftswoche findest du bei uns hilfreiche Tipps und Antworten, die dich gerade beschäftigen.
            Solltest du schon wissen, in welcher Schwangerschaftswoche du dich momentan befindest, kannst du gleich auf die richtige Woche navigieren. Ansonsten findest du hier rechts den Geburtsrechner, der dir
            hilft, diese Infos zu erfahren. Am Einfachsten ist es jedoch, wenn du dich auf unserer Seite anmeldest, um noch mehr Tipps und Tricks zu erhalten!
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
    <div class="container">

        @for ($i = 1; $i < 41; $i++)

            <div class="col-md-3">
                <a href="schwangerschaftswochen/{{ $i }}">
                <div class="ssw-container">
                    <img class="ssw-container-img" src="/img/ssw-uebersicht-preview/child-{{ $i }}.png" />
                    <div class="title-section">
                        <h4>{{ $i }} Schwangerschaftswoche</h4>
                    </div>
                </div>
                </a>
            </div>

        @endfor

    </div>
@endsection
