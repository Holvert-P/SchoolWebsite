<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo del usuario">
        </div>
        <div class="card-body">
            <table class="table table-striped">
                @if ($users->count())
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                 
                  
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td width="10px">
                                <a class="btn btn-info" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                            </td>
                        </tr>
                     
                    @endforeach
                    @else
                    <tr>No hay resultados...</tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="card-footer m-auto">
            {{ $users->links() }}
        </div>
    </div>
</div>
