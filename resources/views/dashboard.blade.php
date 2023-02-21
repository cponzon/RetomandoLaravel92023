
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
                    
                    <p>Hola , ya te encuentras logeado en nuestra página.
                        Por favor ingresa en la opción que deseas realizar:
                    </p>
                    <br>
                    <a class="crearlista" href="{{ url('/actividades') }}">• Crear Lista De Actividades</a>
                    <br><br>
                    <a class="ListarUsuarios" href="{{ url('/showuser') }}">• Listar Usuarios Registrados Y sus Actividades</a>
                    <br><br>
                    <a class="ListarUsuarios" href="">• OPCION 3</a>
                    <br><br>
                    <a class="ListarUsuarios" href="">• OPCION 4</a>
                    <br><br>
                    <!--<h4>LISTA DE ACTIVIDADES</h4>
                    <form method="POST" action="/form-post">
                        <table id="separacion_celdas">
                            <tr>
                                <td>
                                    <div class="large-4 columns" style="float: left">
                                        <input type="checkbox" name="Leer">
                                        <label title="tiene designado como actividad leer">Leer</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="large columns-4" style="float: left">
                                        <input type="checkbox" name="Leer">
                                        <label title="tiene designado como actividad escribir">Escribir</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="large columns-4" style="float: left">
                                        <input type="checkbox" name="Leer">
                                        <label title="tiene designado como actividad dibujar">Dibujar</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="large columns-4" style="float: left">
                                        <input type="checkbox" name="Leer">
                                        <label title="tiene designado como actividad corregir">Corregir</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="large columns-4" style="float: left">
                                        <input type="checkbox" name="Leer">
                                        <label title="tiene designado como actividad imprimir">Imprimir</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="large columns-4" style="float: left">
                                        <input type="checkbox" name="Leer">
                                        <label title="tiene designado como actividad borrar">Borrar</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
