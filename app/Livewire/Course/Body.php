<?php

namespace App\Livewire\Course;

use Livewire\Component;
use App\Models\Course;
use Livewire\Attributes\On;

class Body extends Component
{
    public $courses;

    public function mount(){
        $this->courses=Course::withCount('members')->get();
    }
    #[On('course-added')]
    public function anySome(){
        $this->courses=Course::withCount('members')->get();
    }

    public function deleteCourse($id){
        Course::where('id',$id)->delete();
        $this->courses=Course::withCount('members')->get();
    }
    
    public function deactivateCourse($id){
        Course::where('id',$id)->update(['status'=>0]);
        $this->courses=Course::withCount('members')->get();
    }
    public function activateCourse($id){
        Course::where('id',$id)->update(['status'=>1]);
        $this->courses=Course::withCount('members')->get();
    }
    
    public function render()
    {
        //dd($this->courses);
        return view('livewire.course.body');
    }

}
