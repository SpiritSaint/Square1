<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new Post') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">

                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf

                        <div>
                            <x-jet-label for="title" value="{{ __('Title') }}" />
                            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="description" value="{{ __('Description') }}" />
                            <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Back') }}
                            </a>

                            <x-jet-button class="ml-2">
                                {{ __('Store') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
