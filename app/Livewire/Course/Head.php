<?php

namespace App\Livewire\Course;

use Livewire\Component;
use App\Models\Course;

class Head extends Component
{
    public string $courseName='';
    public  $start='';
    public  $end='';
    public int $showButton=0;
    
    public function mount(){
        $this->start=Date('Y');
        $this->end=Date('Y')+4;
        
       
    }
    public function addCourse(){
        
        //dd($this->courseName);
        if($this->courseName==""){
            $this->addError('courseName', 'Guruh nomini kiriting');    
        }else{

            $yStart=$this->start?$this->start:Date('Y');
                $yEnd=$this->end?$this->end:$yStart+4;
    
                Course::create([
                    'name'=>$this->courseName,
                    'start'=>$yStart,
                    'end'=>$yEnd
                ]);
           
            $this->reset('courseName','start','end');
            $this->dispatch("course-added");
            
            //$this->dispatchBrowserEvent('close-modal');
        }    

    }

  

    public function courseNameChanged(){
        $isCourse=Course::where('name',$this->courseName)->first();
        if($isCourse==null){
            $this->showButton=1;
        }

    }
    
    public function render()
    {
     
        return view('livewire.course.head');
    }
}
