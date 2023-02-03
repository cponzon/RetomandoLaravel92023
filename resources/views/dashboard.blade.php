<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--{{("You're logged in!")                        
                     }}<br>
                    {{("Ya estas logeado en la pagina, para que veas que sí busque hacia donde apuntaba, luego de hacer el registro o de logearte")
                    }}-->
                    <p>Hola __________, ya te encuentras logeado en nuestra página.
                        Por favor selecciona la lista de actividades que deseas realizar:
                    </p>
                    <br>
                    <h4>LISTA DE ACTIVIDADES</h4>
                    <div class="large-4 columns" style="float: left">
                        <input type="checkbox" name="Leer">
                        <label title="tiene designado como actividad leer">Leer</label>
                    </div>
                    <div class="large columns-4" style="float: left">
                        <input type="checkbox" name="Leer">
                        <label title="tiene designado como actividad escribir">Escribir</label>
                    </div>
                    <div class="large columns-4" style="float: left">
                        <input type="checkbox" name="Leer">
                        <label title="tiene designado como actividad dibujar">Dibujar</label>
                    </div>
                    <div class="large columns-4" style="float: left">
                        <input type="checkbox" name="Leer">
                        <label title="tiene designado como actividad corregir">Corregir</label>
                    </div>
                    <div class="large columns-4" style="float: left">
                        <input type="checkbox" name="Leer">
                        <label title="tiene designado como actividad imprimir">Imprimir</label>
                    </div>
                    <div class="large columns-4" style="float: left">
                        <input type="checkbox" name="Leer">
                        <label title="tiene designado como actividad borrar">Borrar</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
