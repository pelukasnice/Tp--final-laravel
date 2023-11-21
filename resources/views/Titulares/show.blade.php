<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Vehiculos asociados a {{ $conductor->nombre }} {{ $conductor->apellido }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Agregar Vehiculos
                    </button> <br>

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
                                        Agregar un nuevo Vehiculo
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
                                <form action="{{ route('titulares.vehiculos.store', ['id' => $conductor->id]) }}"
                                    method="POST" class="p-4 md:p-5">
                                    @csrf
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="tipo_vehiculo"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo
                                                del Vehículo</label>
                                            <select name="tipo_vehiculo" id="tipo_vehiculo"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required="">
                                                <option value="standar">Standar</option>
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
                                        Agregar Vehiculo
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3"> Marca</th>
                                    <th scope="col" class="px-6 py-3">Modelo</th>
                                    <th scope="col" class="px-6 py-3">Patente</th>
                                    <th scope="col" class="px-6 py-3">tipo</th>
                                    <th scope="col" class="px-6 py-3 text-center">Cant. Infracciones</th>
                                    <th scope="col" class="px-6 py-3">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehiculos as $vehiculo)
                                    <tr
                                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ strtoupper($vehiculo->marca) }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $vehiculo->modelo }}
                                        </td>
                                        <td class="px-6 py-4">

                                            {{ $vehiculo->patente }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $vehiculo->tipo }}

                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{ $vehiculo->infracciones ? $vehiculo->infracciones->count() : 0 }}

                                        </td>
                                        <td class="px-6 py-4">

                                            <!-- RUTA PARA REDIRIGIR A ID DEL CONDUCTOR-->

                                            <div class="flex items-center">
                                                <a href="{{ route('infracciones.show', ['idVehiculo' => $vehiculo->id]) }}"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                                                    </svg>
                                                </a>

                                                <a href="{{ route('vehiculos.edit', ['idVehiculo' => $vehiculo->id]) }}"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="m13.835 7.578-.005.007-7.137 7.137 2.139 2.138 7.143-7.142-2.14-2.14Zm-10.696 3.59 2.139 2.14 7.138-7.137.007-.005-2.141-2.141-7.143 7.143Zm1.433 4.261L2 12.852.051 18.684a1 1 0 0 0 1.265 1.264L7.147 18l-2.575-2.571Zm14.249-14.25a4.03 4.03 0 0 0-5.693 0L11.7 2.611 17.389 8.3l1.432-1.432a4.029 4.029 0 0 0 0-5.689Z"/>
                                                      </svg>
                                                </a>
                                            </div>

                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <br><br>
                    <div class="flex items-center justify-center ">
                        <a href="javascript:history.back()"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
                            Atrás
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
