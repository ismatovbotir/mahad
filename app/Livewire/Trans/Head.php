<?php

namespace App\Livewire\Trans;

use Livewire\Component;

use Livewire\WithPagination;
use App\Models\Mark;
use App\Models\Transaction as Trans;
use Illuminate\Support\Facades\Auth;

class Head extends Component

{
    use WithPagination;

    public string $bookName;
    public string $bookMark;
    public string $member;
    public $showButton = 0;
    public $message;

    public function searchBook()
    {
        
        $this->showButton=0;
        $mark = Mark::with('book')->where('id', $this->bookMark)->first();
        //dd($mark);
        if ($mark == null) {
            $this->message = "Bunday kitob Topilmadi";
            $this->reset('bookMark');
        } else {
            //dd($mark->book);
            $cBooks=Trans::with('mark.book')->where('status',2)->where('member_id',$this->member)->where('state',0)->get();
            //dd($cBooks);
            if($cBooks!=null){
                
                foreach($cBooks as $cBook){
                   // dd($cBook->mark->book_id."  ".$mark->book->id);
                    if($cBook->mark->book_id==$mark->book->id){
                        
                        $this->message="Talaba tasarrufida ushbu kitobdan mavjud";
                        $this->showButton=0;
                        $this->reset('bookMark');
                    }else{
                        $this->bookName = $mark->book->name;
                        $this->showButton = 1;
                        $this->message=$mark->book->name;
                    }
                
                }

            }else{

            


            //dd($mark->status);
            if ($mark->status == 3) {
                $this->message = "Ushbu Kitobsiz yaroqsiz deb topilgan";
                $this->reset('bookMark');
            } elseif ($mark->status == 2) {

                $trans = Trans::with('member')->where('mark_id', $mark->id)->where('status', '2')->latest()->first();
                //dd($trans);
                if ($trans->member->id == $this->member) {
                    $this->message = "Kitob(" . $mark->book->name . ") qaytarilyabdimi?";
                    $this->bookName=$mark->book->name;
                    $this->showButton = 2;
                } else {
                    $this->message = "Ushbu kitob(". $mark->book->name."), Talaba: " . $trans->member->name . " tasarrufida";
                    $this->reset('bookMark');
                }
                //dd($this->message);
            } else {
                $this->bookName = $mark->book->name;
                $this->showButton = 1;
                $this->message=$mark->book->name;
            }
        }
        }
    }

    public function saveBook()
    {

        Trans::create([

            'user_id' => Auth::user()->id,
            'member_id' => $this->member,
            'mark_id' => $this->bookMark,
            'status' => 2
        ]);
        Mark::where('id', $this->bookMark)->update(['status' => 2]);
        $this->showButton = 0;
        $this->message='';
        
        $this->reset(['bookMark']);
        $this->dispatch("mark-status");
        

    }
    public function returnBook()
    {
        Trans::where([
            ['member_id',$this->member],
            ['mark_id',$this->bookMark],
           [ 'status',2]])
           ->latest()->first()->update(['state'=>1]);

        
        
        
        Trans::create([

            'user_id' => Auth::user()->id,
            'member_id' => $this->member,
            'mark_id' => $this->bookMark,
            'status' => 1
        ]);
        Mark::where('id', $this->bookMark)->update(['status' => 1]);
        $this->reset(['bookMark']);
        $this->showButton = 0;
        $this->message='';
        //$this->bookName='';
        $this->dispatch("mark-status");
        // $table->id();
        // $table->foreignUuid('user_id');
        // $table->foreignUuid('member_id')->nullable();
        // $table->foreignUuid('mark_id');
        // $table->string('status');
        // $table->timestamps();




    }

    public function cancelBook(){
        $this->reset(['bookMark']);
        $this->message=''; 
        $this->showButton=0; 
    }

    public function render()
    {
        //$trans = Trans::with(['mark.book'])->where('member_id', $this->member)->where('status', 2)->paginate(10);
        $msg = $this->message;
        $button = $this->showButton;
       // dd($msg);
        return view('livewire.trans.head', compact('button', 'msg'));
    }
}
