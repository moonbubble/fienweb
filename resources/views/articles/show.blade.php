<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="text-xl">{{ __('Artikel') }} {{ $article->id }}</h1>

    <div class="mt-4">
        <h2>{{ __('Titel') }}: {{ $article->title }}</h2>
        @if ($article->subtitle)
            <p>{{ __('Subtitel') }}: {{ $article->subtitle }}</p>
        @endif
        <p>{{ __('Inhoud') }}: {{ $article->content }}</p>
        <a class="text-blue-500" href="{{ route('articles.edit', $article) }}">{{ __('Bewerk dit artikel') }}</a>
    </div>
</x-app-layout>
