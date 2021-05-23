<div>
    <div class="container-fluid bg-dark H100vh">
        <div class="pt-5 pb-5">
            <h2 class="text-center text-white">Bienvenido aqui podra revisar su horario de clases!</h2>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">



                        <div class="col-md-4">
                            <select class="form-select outline__none bg-dark text-white border__radius0 border-darken-3"
                                aria-label="Default select example" wire:model='searchYear'>
                                <option selected>Año</option>
                                <option value="1">1° Año</option>
                                <option value="2">2° Año</option>
                                <option value="3">3° Año</option>
                                <option value="4">4° Año</option>
                                <option value="5">5° Año</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select outline__none bg-dark text-white border__radius0 border-darken-3"
                                aria-label="Default select example" wire:model='searchClassroom'>
                                <option selected>Seccion</option>
                                <option value="1">Aula A</option>
                                <option value="2">Aula B</option>
                                <option value="3">Aula C</option>
                                <option value="4">Aula D</option>
                                <option value="5">Aula E</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select outline__none bg-dark text-white border__radius0 border-darken-3"
                                aria-label="Default select example" wire:model='searchTurns'>
                                <option selected>Turno</option>
                                <option value="1">Matutino</option>
                                <option value="2">Vespertino</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container table-responsive-md">
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-dark text-center">
                        @if ($schedules)
                            <thead>
                                <tr>
                                    <th colspan='8'>
                                        <h3>Horarios</h3>
                                    </th>
                                </tr>
                                <tr class="head__table">
                                    <th>Docente</th>
                                    <th>Horario</th>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miercoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule->names }} {{ $schedule->last_names }}</td>
                                        <td>{{ $schedule->hour }} a {{ $schedule->hour }}</td>
                                        <td>{{ $schedule->matter }}</td>
                                        <td>{{ $schedule->matter }}</td>
                                        <td>{{ $schedule->matter }}</td>
                                        <td>{{ $schedule->matter }}</td>
                                        <td>{{ $schedule->matter }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @else
                            <tr>
                                <td colspan="8"> No hay resultados...</td>
                            </tr>
                        @endif
                    </table>

                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>

</div>
