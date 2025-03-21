<div class="row">

    <div class="btn-toolbar mb-3">
        <div class="btn-group">
            <input type="number" wire:model="qty" class="text-center">
            <button wire:click="createMark" type="button" class="btn btn-success">Kitob Qo'shish</button>
        </div>
    </div>

    <div class="col-md-12">
        @if(count($marks)>0)
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Bo'lim</th>
                    <th scope="col">Status</th>
                    <th scope="col">Chop etilganmi?</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($marks as $index=>$mark)
                <tr>
                    <th scope="row">{{$mark->id}}</th>
                    <td>
                        <input type="text" class="text-right mark-input" value="{{$mark->shelf}}" wire:change="updateShelf('{{$mark->id}}',$event.target.value)">
                    </td>
                    <td class="text-success">{{$mark->status}}</td>
                    <td>
                        @if($mark->printed)
                            <span class="icon ni ni-done text-success"></span>
                        @else
                            <span class="icon ni ni-cross text-danger"></span>
                        @endif
                    </td>
                    <td><a wire:click="justUpdate" href="{{route('admin.mark.print',['mark'=>$mark->id])}}" class="btn btn-info" target="_blank"><span class="icon ni ni-printer" ></span></a></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <div>{{$marks->links()}}</div>
        @endif
    </div>
</div>