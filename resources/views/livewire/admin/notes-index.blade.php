<div>
    <div class="table-responsive-md H100vh bg-dark p-5 ">
        <table class="table table-bordered table-dark container">
            <thead>
                <tr>
                    <td colspan="7">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="text-center pt-5 pb-2 h1">Registro de notas.</h5>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-5 d-flex container">
                                    {{-- <div class="form-outline"> --}}
                                        <input type="text" id="form1"
                                            class="form-control bg-dark text-white outline_none border_radius0 border-darken-2"
                                            wire:model='searchName' placeholder="Buscar alumno">
                                    {{-- </div> --}}
                                    <button type="button" class="btn btn-primary btn_custom border_radius0">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </thead>
            <tbody class="text-center">
                @if ($notes)


                    <tr>
                        <th> Materia</th>
                        <th> Estudiante</th>
                        <th> IP</th>
                        <th> IIP</th>
                        <th> IIIP</th>
                        <th> IVP</th>
                        <th> Nota Final</th>
                    </tr>
                    @foreach ($notes as $note)
                        <tr>
                            <td class="col-md-2">
                                {{ $note->name }}
                            </td>
                            <td class="col-md-2">
                                {{ $note->names }}
                            </td>
                            <td class="col-md-1">
                                {{ $note->IP }}

                            </td>
                            <td class="col-md-1">
                                {{ $note->IIP }}

                            </td>
                            <td class="col-md-1 ">
                                {{ $note->IIIP }}

                            </td>
                            <td class="col-md-1">
                                {{ $note->IVP }}
                            </td>
                            <td class="col-md-1">
                                {{ round(($note->IP + $note->IIP + $note->IIIP + $note->IVP) / 4) }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>No hay resultados...</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('class') }}">
                        <input class="btn btn-primary me-md-2 outline__none borderradius0 btn__custom"
                            value="Registrar Nota" style="float: right" type="submit">
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
