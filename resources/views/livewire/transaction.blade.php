<div>
    <form action="">
        <div class="row">

            <div class="form-group col-md-6">

                <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Kitob kodi" wire:model="bookMark" wire:keydown.enter="searchBook">
            </div>
            <div class="form-group col-md-6">

                <input type="text" class="form-control form-control-lg" id="full-name" wire:model="bookName" disabled>
            </div>
            @if($button==1)
            <div class="form-group col-md-6">

                <a wire:click.prevent="saveBook" href="" class="btn btn-success" id="full-name" >Save</a>
            </div>
            @endif

        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            @if(count($trans)>0)
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Kitob nomi</th>
                        <th scope="col">Brilgan sana</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($trans as $index=>$tran)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>
                           <div class="user-avatar bg-dim d-none d-sm-flex" style="border-radius:10px;">
                               <img class="" src="{{asset($tran->mark->book->img)}}" alt="">
                           </div>
                        </td>
                        <td>
                            {{$tran->mark->book->name}}
                        </td>
                        <td>
                           {{$tran->created_at}}
                        </td>
                        
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div>{{$trans->links()}}</div>
            @endif
        </div>
    </div>



</div>