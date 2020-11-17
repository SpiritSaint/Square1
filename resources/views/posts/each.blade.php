<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <h3 class="text-lg font-medium text-gray-900">
                {{ $post->title }}
            </h3>

            <h3 class="text-sm font-medium text-gray-600 mt-3">
                {{ __('Created at') }} {{ \Carbon\Carbon::parse($post->publication_date)->format('Y-m-d H:i:s') }}
                {{ __('by') }} {{ $post->user->name }}
            </h3>

            <div class="mt-3 text-sm text-gray-600">
                <p>
                    {{ $post->description }}
                </p>
            </div>
        </div>

        @include('posts.controls', ['post' => $post])
    </div>
</div>
