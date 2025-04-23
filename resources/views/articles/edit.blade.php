<x-app-layout>
    <h1 class="text-orange-500 text-lg">{{ __('Bewerk artikel') }} {{ $article->id }}</h1>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    {{-- Even checken wat ik nou mee geef --}}
    <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <x-input-label for="title" :value="__('Titel')" />
            <x-text-input id="title" name="title" required :value="old('title', $article->title)" />
            <x-input-error :messages="$errors->get('title')" />
        </div>

        <div>
            <x-input-label for="subtitle" :value="__('Subtitel')" />
            <x-text-input id="subtitle" name="subtitle" :value="old('subtitle', $article->subtitle)" />
            <x-input-error :messages="$errors->get('subtitle')" />
        </div>
        <div>
            <x-input-label for="content" :value="__('Inhoud')" />
            <x-text-area id="content" name="content" required :value="old('content', $article->content)" />
            <x-input-error :messages="$errors->get('content')" />
        </div>

        <x-primary-button>
            {{ __('Update artikel') }}
        </x-primary-button>

    </form>
</x-app-layout>
