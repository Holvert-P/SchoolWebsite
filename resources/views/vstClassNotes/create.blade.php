@extends('layouts.app')

@section('contenido')
    <div class="table-responsive-md H100vh bg-dark">
        <form action="{{ route('notes.store') }}" method="POST">
            {!! csrf_field() !!} 
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <td colspan="7">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="text-left pt-5 pb-2">Registro de notas.</h5>
                                    <p class="pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                        nam.
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input
                                                class="form-control bg-dark text-white outline__none border__radius0 border-darken-2"
                                                type="date" value="2021-05-30" id="example-date-input">
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    {{-- <th> Materia</th> --}}
                    <th> Estudiante</th>
                    <th> IP</th>
                    <th> IIP</th>
                    <th> IIIP</th>
                    <th> IVP</th>
                    <th> Nota Final</th>
                </tr>
            </thead>
            <tbody class="text-center">
               
                <tr>
                    {{-- <td class="col-md-2 p-0">
                        <select class="form-select outline__none bg-dark text-white border__radius0 border-0"
                            aria-label="Default select example">
                            <option selected>---Ninguna---</option>
                            @foreach ($clases as $clase){
                                <option value="{{$clase->id}}">{{$clase->name}}</option>
                            }
                            @endforeach

                        </select>
                    </td> --}}
                    <td class="col-md-2 p-0 select">
                        <select class="form-select outline__none bg-dark text-white border__radius0 border-0"
                            aria-label="Default select example">
                            <option selected>---Ninguno---</option>

                            @foreach ($alumnos as $alumno){
                                <option value="{{$alumno->id}}" class="select_item">{{$alumno->peoples->names}}</option>
                            }
                            @endforeach
                        </select>
                    </td>
                  
                        {{-- <input type="hidden" name="matters_id" id="matters_id"  value="{{ old('matters_id') }}"> --}}
                  
                    <td class="col-md-2">
                        <input type="number" class="outline__none bg-dark text-white border__radius0 border-0"
                            placeholder="0" name="IP" id="IP">
                    </td>
                    <td class="col-md-2">
                        <input type="number" class="outline__none bg-dark text-white border__radius0 border-0"
                            placeholder="0" name="IIP" id="IIP">
                    </td>
                    <td class="col-md-2">
                        <input type="number" class="outline__none bg-dark text-white border__radius0 border-0"
                            placeholder="0" name="IIIP" id="IIIP" >
                    </td>
                    <td class="col-md-2">
                        <input type="number" class="outline__none bg-dark text-white border__radius0 border-0"
                            placeholder="0" name="IVP" id="IVP">
                    </td>
                    <td class="col-md-2 ">
                        <input type="number" readonly class="outline__none bg-dark text-white border__radius0 border-0"
                            placeholder="0">
                    </td>
                    <td class="hiddens">
                        <input type="hidden" value="{{$id}}" name="matters_id">
                        <input type="hidden"  name="students_id" id="students_id">
                    </td>
                </tr>
            
            </tbody>
        </table>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  
                    <input class="btn btn-primary me-md-2 outline__none borderradius0 btn__custom"
                        value="Guardar" style="float: right" type="submit">
                  
                </div>
            </div>
        </div>
    </form> 
    </div>

@endsection
