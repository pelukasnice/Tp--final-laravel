<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('titulares.update', ['id' => $titular->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="relative z-0 w-full mb-5 group">
                            <label for="nombre"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nombre
                            </label>
                            <input type="text" name="nombre" id="nombre"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="{{ $titular->nombre }}" required="">
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <label for="apellido"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
                            <input type="text" name="apellido" id="apellido"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="{{ $titular->apellido }}" required="">
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <label for="dni"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DNI</label>
                            <input type="text" name="dni" id="dni"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="{{ $titular->dni }}" required="">
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="domicilio"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Domicilio</label>
                            <input type="text" name="domicilio" id="domicilio"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="{{ $titular->domicilio }}" required="">
                        </div>

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar
                            Titular</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
