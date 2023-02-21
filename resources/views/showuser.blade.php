<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="ListarUsuario">
        <p>Usuarios Registrados y sus actividades:</p>
    </div>
    <div class="ResultadoUsuarios">
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actividades</th>
            </thead>
            <tbody>
                @foreach ($users as $user)           
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            {{$users->links()}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>