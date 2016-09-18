<a href="/schwangerschaftswochen/info/{{ $post->slug }}" class="no-underline">
    <div class="layout-3"><img class="layout-3-img" src="{{ $post->image }}">
        <h2 class="layout-3-h2">{{ $post->title }}</h2>
        <span class="price
            {{ $post->premium ? 'price-premium' : 'price-free' }}">
            {{ $post->premium ? 'Nur für Mitglieder' : 'Für Alle' }}</span>
    </div>
</a>