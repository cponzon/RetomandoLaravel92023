
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
                    
                    <br>
                    <form id="form" name="form" method="POST" action="{{url('/actividades')}}">
                        @csrf
                        <!--<fieldset>
                            <legend>Crea los elementos de la lista:</legend>
                            <input type="text" id="actividad" name="actividad" placeholder="Escriba su actividad" />
                            <input type="button" onclick="" />
                            <button type="button" id="crearelemento" name="crearelemento" onclick="{{url('/actividades')}}">&#10003</button>
                            <button type="reset" id="borrarelemento" name="borrarelemento">X</button>
                        </fieldset>-->
                        <div>
                            <Label>Seleccione la actividad que debe realizar:</Label>
                        </div>
                        <div>
                            <select name="actividad">
                                <option>Escribir</option>
                                <option>Leer</option>
                                <option>Dibujar</option>
                                <option>Imprimir</option>
                                <option>Borrar</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
