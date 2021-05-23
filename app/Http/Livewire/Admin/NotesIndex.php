<?php

namespace App\Http\Livewire\Admin;


use App\Models\student_class;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NotesIndex extends Component
{
    public $searchName;
    public function render()
    {
        $notes = DB::select("SELECT class_matters.name,peoples.names,peoples.last_names,IP,IIP,IIIP,IVP 
        FROM notes,class_matters,student_classes,peoples,alumnos
        WHERE student_classes.students_id=alumnos.id
        AND alumnos.peoples_id=peoples.id
        AND notes.id=student_classes.notes_id
        AND notes.matters_id=class_matters.id
        AND peoples.names like '%" .$this->searchName."%'");
        return view('livewire.admin.notes-index', compact('notes'));
    }
}
