<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (Session::get('failure'))
                    <div class="error-message" role="alert">
                        <p class="font-bold"> {{ Session::get('failure') }} </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
