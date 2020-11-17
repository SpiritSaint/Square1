<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @include('partials.message')

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 mr-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Create') }}
            </a>
            @include('partials.dashboard-post-sort')
        </div>

        @foreach($posts as $post)
            @include('posts.each', ["post" => $post])
        @endforeach
    </div>
</x-app-layout>
