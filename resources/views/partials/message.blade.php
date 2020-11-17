@if (session('message'))
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-green-300 sm:p-6">
                <div class="text-sm font-semibold text-white">
                    <p>
                        {{ session('message') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif
