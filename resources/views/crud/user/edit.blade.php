<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    @includeif('partials.errors')
                    <div class="mb-4">
                        <h2 class="text-2xl mb-9">Asignar un rol</h2>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('user.update', $user->id) }}" role="form">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('crud.user.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>