<div>
    <div class="row">

        <div class="col-md-3">

            <div class="btn-toolbar mb-4 ">
                <div class="btn-group">
                    <input type="number" wire:model="qty" class="text-center">
                    <button wire:click="createMark" type="button" class="btn btn-success">Kitob Qo'shish</button>

                </div>


            </div>
        </div>
        <div class="col-md-3">
            <div class="btn-group">

                @if(count($printItems)>0)


                <a wire:click="justUpdate" href="{{route('admin.mark.print')}}" class="btn btn-info" target="_blank"><span class="icon ni ni-printer"></span> ({{count($printItems)}})</a>
                {{--<a wire:click="justUpdate" href="{{route('admin.mark.print')}}" class="btn btn-info" target="_blank"><span class="icon ni ni-printer"></span></a>--}}

                @endif
            </div>
        </div>
        {{--<div class="form-group col-md-9">

            <input type="text" wire:model.live="search">



        </div>--}}
    </div>
    <div class="row">



        <div class="col-md-12">
            @if(count($marks)>0)
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col"><span class="ni ni-printer"></span></th>
                        <th scope="col">id</th>
                        <th scope="col">Bo'lim</th>
                        <th scope="col">Status</th>
                        <th scope="col">Chop etilganmi?</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marks as $index=>$mark)
                    <tr wire:key="{{$mark->id}}">
                        <td>

                            <input type="checkbox" wire:model.live="printItems" wire:click="updatePrintItems" value="{{$mark->id}}">



                        </td>
                        <td scope="row">{{$mark->idx}}</td>
                        <td>
                            <input type="text" class="text-right mark-input" value="{{$mark->shelf}}" wire:change="updateShelf('{{$mark->id}}',$event.target.value)">
                        </td>
                        @if($mark->status==0)
                        <td class="text-warning">Yangi</td>
                        @elseif($mark->status==1)
                        <td class="text-success">Kutubxonada</td>
                        @elseif($mark->status==2)
                        <td class="text-secondary">Talabada</td>
                        @else
                        <td class="text-danger">Yaroqsiz</td>
                        @endif


                        <td>
                            @if($mark->printed)
                            <span class="icon ni ni-done text-success"></span>
                            @else
                            <span class="icon ni ni-cross text-danger"></span>
                            @endif
                        </td>
                        <td>

                            @if($mark->status==3)
                            <a wire:click.prevent="restoration('{{$mark->id}}',1)" href="" class="btn btn-success"><span class="icon ni ni-done"></span></a>
                            @elseif($mark->status<=1)
                                <a wire:click.prevent="restoration('{{$mark->id}}',3)" href="" class="btn btn-secondary"><span class="icon ni ni-setting"></span></a>
                                @endif

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div>{{$marks->links()}}</div>
            @endif
            
        </div>
    </div>
</div>