@if(request()->user()->can("update", $post))
    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
        <a href="{{ route('posts.edit', $post) }}" class="inline-flex items-center px-4 py-2 mr-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            {{ __('Edit') }}
        </a>

        <form method="POST" action="{{ route('posts.destroy', $post) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-600 transition ease-in-out duration-150">
                {{ __('Delete') }}
            </button>
        </form>
    </div>
@endif
