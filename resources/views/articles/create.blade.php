<x-app-layout>
    <h1>{{ __('Maak een nieuw artikel') }}</h1>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('articles.store') }}">
        @csrf

        <div>
            <x-input-label for="title" :value="__('Titel')" />
            <x-text-input id="title" name="title" required />
            <x-input-error :messages="$errors->get('title')" />
        </div>

        <div>
            <x-input-label for="subtitle" :value="__('Subtitel')" />
            <x-text-input id="subtitle" name="subtitle"  />
            <x-input-error :messages="$errors->get('subtitle')" />
        </div>

        <div>
            <x-input-label for="content" :value="__('Inhoud')" />
            <x-text-area id="content" name="content" required />
            <x-input-error :messages="$errors->get('content')" />
        </div>

        <x-primary-button>
            {{ __('Sla artikel op') }}
        </x-primary-button>

    </form>
</x-app-layout>
