<div>

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
                            <div class="user-avatar bg-dim d-none d-sm-flex" style="border-radius:5px;">
                                <img class="" src="{{asset($tran->mark->book->img)}}" alt="" style="border-radius:5px;">
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