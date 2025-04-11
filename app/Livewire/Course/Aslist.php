<?php

namespace App\Livewire\Course;

use Livewire\Component;
use App\Models\Course;
use Livewire\Attributes\On;

class Aslist extends Component
{
    public $courses;
    public $currentCourse;
    
    #[On('course-added')]
    public function anyChange(){

        //return to_route('admin.member.create');
    }
    public function render()
    {
        //dd($this->currentCourse);
        $this->courses=Course::where('status',1)->orderBy('name','asc')->get();
        //dd($this->courses);
        return view('livewire.course.aslist');
    }
}
