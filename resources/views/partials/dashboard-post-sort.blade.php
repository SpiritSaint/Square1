@if (!$posts->isEmpty())
    @if (request()->input('sort') == 'asc')
        <a href="{{ route('dashboard') }}?sort=desc" class="inline-flex items-center px-4 py-2 mr-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            {{ __('Sort desc') }}
        </a>
    @elseif (request()->input('sort') == 'desc' || !request()->has('sort'))
        <a href="{{ route('dashboard') }}?sort=asc" class="inline-flex items-center px-4 py-2 mr-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            {{ __('Sort asc') }}
        </a>
    @endif
@endif
