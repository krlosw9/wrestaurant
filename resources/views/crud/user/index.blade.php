<x-app-layout>
    <div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <x-table>
                <div class="px-6 py-4 flex items-center">
                    <h1 class="text-lg font-bold text-gray-600 my-0 mx-auto pr-12">Usuarios</h1>
                </div>
                @if (Session::get('success'))
                    <div class="alert-message" role="alert">
                        <p class="font-bold"> {{ Session::get('success') }} </p>
                    </div>
                @endif
                @if (Session::get('failure'))
                    <div class="error-message" role="alert">
                        <p class="font-bold"> {{ Session::get('failure') }} </p>
                    </div>
                @endif
                @if ($users->count())
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="header-table">
                                    ID
                                </th>
                                <th scope="col"
                                    class="header-table">
                                    Nombre
                                </th>
                                <th scope="col"
                                    class="header-table">
                                    Email
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{ $user->id }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{ $user->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{ $user->email }}
                                        </div>
                                    </td>
                                    <td width="10px" class="px-6 py-4 text-right text-sm font-medium flex justify-center">
                                        <a class="btn btn-green" href="{{ route('user.edit',$user->id) }}">
                                            <i>Rol</i>
                                        </a>
                                        <form class="delete-form"
                                            action="{{ route('user.destroy', $user->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-red ml-2">
                                                <i>Eliminar</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- More people... -->
                        </tbody>
                    </table>
                @else
                    <div class="px-6 py-4">
                        No existe registros.
                    </div>
                @endif
            </x-table>
        </div>
    </div>
</x-app-layout>