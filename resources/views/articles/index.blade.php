<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="text-xl">Alle artikelen</h1>
    <a href="{{ route('articles.create') }}" class="bg-white border-2 border-teal-500">
        {{ __('Schrijf een artikel') }}
    </a>
    @foreach ($articles as $article)
        <div class="mt-4">
            <h2>{{ __('Titel') }}: {{ $article->title }}</h2>
            @if ($article->subtitle)
                <p>{{ __('Subtitel') }}: {{ $article->subtitle }}</p>
            @endif
            <p>{{ __('Inhoud') }}: {{ $article->content }}</p>
            <a class="text-purple-500" href="{{ route('articles.show', $article) }}">{{ __('Bekijk dit artikel') }}</a>
            <a class="text-blue-500" href="{{ route('articles.edit', $article) }}">{{ __('Bewerk dit artikel') }}</a>
        </div>
    @endforeach
</x-app-layout>
