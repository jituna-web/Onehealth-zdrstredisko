<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Děkujeme za přihlášení! Než začnete, mohli byste ověřit svou e-mailovou adresu kliknutím na odkaz, který jsme vám právě poslali e-mailem? Pokud jste e-mail neobdrželi, rádi vám zašleme další.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Na e-mailovou adresu, kterou jste uvedli při registraci, byl odeslán nový ověřovací odkaz.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Opětovné zaslání ověřovacího e-mailu') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Odhlásit') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
