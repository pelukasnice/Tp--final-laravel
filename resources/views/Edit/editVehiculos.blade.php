<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $vehiculo->id }} {{ $vehiculo->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    

                    <form action="{{ route('vehiculos.update', ['idVehiculo' => $vehiculo->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                    
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Vehículo</label>
                            <select name="tipo" id="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                <option value="standar" {{ $vehiculo->tipo == 'standar' ? 'selected' : '' }}>Standar</option>
                                <option value="SUV" {{ $vehiculo->tipo == 'SUV' ? 'selected' : '' }}>SUV</option>
                                <option value="Camioneta" {{ $vehiculo->tipo == 'Camioneta' ? 'selected' : '' }}>Camioneta</option>
                                <option value="Camión" {{ $vehiculo->tipo == 'Camión' ? 'selected' : '' }}>Camión</option>
                            </select>
                        </div>
                    
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="marca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marca del Vehículo</label>
                            <input type="text" name="marca" id="marca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $vehiculo->marca }}" required="">
                        </div>
                    
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="modelo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modelo del Vehículo</label>
                            <input type="text" name="modelo" id="modelo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $vehiculo->modelo }}" required="">
                        </div>
                    
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="patente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Patente del Vehículo</label>
                            <input type="text" name="patente" id="patente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $vehiculo->patente }}" required="">
                        </div>
                    
                        <!-- Otros campos del vehículo -->
                    
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar Vehículo</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>