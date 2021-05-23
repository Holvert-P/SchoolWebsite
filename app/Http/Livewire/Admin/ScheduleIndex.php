<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\schedule;
use Illuminate\Support\Facades\DB;

class ScheduleIndex extends Component
{
    public $searchYear;
    public $searchClassroom;
    public $searchTurns;
    public function render()
    {
        $schedules=DB::select("SELECT hour,grades.description as grade , groups.description as 'group',peoples.names,peoples.last_names,class_matters.name as matter

        FROM schedules,groups,grades,teachers,peoples,class_matters
        
        WHERE schedules.turns_id='".$this->searchTurns."'

        AND groups.id='".$this->searchClassroom."'
        AND schedules.matters_id='".$this->searchClassroom."'

        AND groups.grades_id='".$this->searchYear."'
        AND grades.id='".$this->searchYear."'
        
        AND schedules.teachers_id=teachers.id
        AND peoples.id=teachers.peoples_id
        
        AND schedules.classroom_id=class_matters.id");
        // $schedules=schedule::all();
        return view('livewire.admin.schedule-index',compact('schedules',));
    }
}
