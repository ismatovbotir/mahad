<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\WithPagination;
use App\Models\Mark;
use App\Models\Transaction as Trans;
use Illuminate\Support\Facades\Auth;

class Transaction extends Component
{
    use WithPagination;
    
    public string $bookName;
    public string $bookMark;
    public string $member;
    public $showButton = 0;
    public $message;
    public function searchBook()
    {
        //dd($this->bookMark);
        $mark = Mark::with('book')->where('id', $this->bookMark)->first();
        if ($mark == null) {
            $this->message = "Bunday kitob Topilmadi";
        } else {
            //dd($mark->status);
            if ($mark->status == 3) {
                $this->message="Ushbu Kitobsiz yaroqsiz deb topilgan";
                $this->showButton=0;
            }elseif($mark->status==2){
               
                $trans = Trans::with('member')->where('mark_id', $mark->id)->where('status','2')->latest('updated_at')->first();
                //dd($trans);
                if($trans->member->id==$this->member){
                    $this->message = "Kitob(".$mark->book->name.") qaytarilyabdimi?";
                    $this->showButton = 2;
                }else{
                    $this->message = "Ushbu kitob, Talaba: " . $trans->member->name . " tasarrufida";
                    $this->showButton=0;
                }
                //dd($this->message);
            }else{
                $this->bookName = $mark->book->name;
                $this->showButton = 1;
            }

            
        }
    }

    public function saveBook($status)
    {

        Trans::create([

            'user_id' => Auth::user()->id,
            'member_id' => $this->member,
            'mark_id' => $this->bookMark,
            'status' => $status
        ]);
        Mark::where('id', $this->bookMark)->update(['status' => 2]);
        $this->reset(['bookMark']);

        // $table->id();
        // $table->foreignUuid('user_id');
        // $table->foreignUuid('member_id')->nullable();
        // $table->foreignUuid('mark_id');
        // $table->string('status');
        // $table->timestamps();

    }
    public function returnBook() {

        Trans::update([

            'user_id' => Auth::user()->id,
            'member_id' => $this->member,
            'mark_id' => $this->bookMark,
            'status' => 1
        ]);
        Mark::where('id', $this->bookMark)->update(['status' => 2]);
        $this->reset(['bookMark']);

        // $table->id();
        // $table->foreignUuid('user_id');
        // $table->foreignUuid('member_id')->nullable();
        // $table->foreignUuid('mark_id');
        // $table->string('status');
        // $table->timestamps();




    }

    public function render()
    {
        $trans = Trans::with(['mark.book'])->where('member_id',$this->member)->where('status',2)->paginate(10);
        $message=$this->message;
        $button = $this->showButton;
        return view('livewire.transaction', compact('trans', 'button','message'));
    }
}
