<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="text-xl">Alle artikelen</h1>
    @foreach ($articles as $article)
        <div class="mt-2">
            <h2>Titel: {{ $article->title }}</h2>
            @if ($article->subtitle)
                <p>Subtitel: {{ $article->subtitle }}</p>
            @endif
            <p>Content: {{ $article->content }}</p>
        </div>
    @endforeach
</x-app-layout>
