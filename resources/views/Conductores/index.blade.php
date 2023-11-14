<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            CONDUCTORES
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-md"
                        type="button">
                        Agregar Conductor
                    </button><br>

                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Crear nuevo Conductor
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="{{ route('conductor.store') }}" method="POST" class="p-4 md:p-5">
                                    @csrf
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <!-- NOMBRE Y APELLIDO -->
                                        <div class="col-span-2">
                                            <label for="nombre"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                                                y Apellido</label>
                                            <input type="text" name="nombre" id="nombre"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required="">
                                        </div>
                                        <!-- DNI -->
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="dni"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DNI</label>
                                            <input type="text" name="dni" id="dni"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required="">
                                        </div>
                                        <!-- TIPO DEL VEHÍCULO -->
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="tipo_vehiculo"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo
                                                del Vehículo</label>
                                            <select name="tipo_vehiculo" id="tipo_vehiculo"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required="">
                                                <option value="standard">Standard</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Camioneta">Camioneta</option>
                                                <option value="Camión">Camión</option>
                                            </select>
                                        </div>
                                        <!-- MARCA DEL VEHÍCULO -->
                                        <div class="col-span-2">
                                            <label for="marca_vehiculo"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marca
                                                del Vehículo</label>
                                            <input type="text" name="marca_vehiculo" id="marca_vehiculo"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required="">
                                        </div>
                                        <!-- MODELO DEL VEHÍCULO -->
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="modelo_vehiculo"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modelo
                                                del Vehículo</label>
                                            <input type="text" name="modelo_vehiculo" id="modelo_vehiculo"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required="">
                                        </div>
                                        <!-- PATENTE DEL VEHÍCULO -->
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="patente_vehiculo"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Patente
                                                del Vehículo</label>
                                            <input type="text" name="patente_vehiculo" id="patente_vehiculo"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required="">
                                        </div>

                                    </div>
                                    <button type="submit"
                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Agregar Conductor
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- TABLA CONDUCTORES -->


                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3"> Nombre Y Apellido</th>
                                    <th scope="col" class="px-6 py-3">DNI</th>
                                    <th scope="col" class="px-6 py-3">Cant. Vehiculos</th>
                                    <th scope="col" class="px-6 py-3">Cant.Multas</th>
                                    <th scope="col" class="px-6 py-3">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($conductores as $conductor)
                                    <tr
                                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $conductor->nombre }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $conductor->dni }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $conductor->vehiculos ? $conductor->vehiculos->count() : 0 }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $conductor->infracciones ? $conductor->infracciones->count() : 0 }}

                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('conductor.show', ['id' => $conductor->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
