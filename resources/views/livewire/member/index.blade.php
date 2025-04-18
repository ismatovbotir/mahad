<div class="card-inner">
    <div class=" dt-bootstrap4 no-footer">
        <div class="row justify-between g-2">
            <div class="col-8 col-sm-6 text-left">
                <div class="">
                    <label>
                        <input wire:model.live="search" type="search" class="form-control form-control-sm" placeholder="Qidiruv uchun matn">
                    </label>
                </div>
            </div>
            <div class="col-4 col-sm-6 text-right">

            </div>
        </div>
        <div class="datatable-wrap my-3">
            <table class="datatable nowrap nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" role="grid">
                <thead>
                    <tr class="nk-tb-item nk-tb-head" role="row">

                        <th class="nk-tb-col " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Talaba</span></th>
                        <th class="nk-tb-col tb-col-mb " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Guruh</span></th>
                        <th class="nk-tb-col tb-col-mb " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Tel:</span></th>
                       
                        <th class="nk-tb-col tb-col-md " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Kitoblar</span></th>
                        <th class="nk-tb-col tb-col-lg " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Action</span></th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $user)
                    <tr class="nk-tb-item odd" wire:key="{{$user->id}}">

                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-dim  d-sm-flex" >
                                    @if($user->img)
                                    <img src="{{asset($user->img)}}" alt="" style="border-radius:5px;">
                                    @else
                                    <img src=".\images\logo.jpg" alt="" style="border-radius:5px;">
                                    @endif
                                </div>
                                <div class="user-info pl-1">
                                    <span class="tb-lead">{{$user->name}} {{$user->surename}} {{$user->patronymic}}<span class="dot dot-{{($user->status==1?'success':'danger')}} d-md-none ml-1"></span></span>
                                    <span>{{$user->email}}</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            @if($user->course)    
                                <span class="tb-amount">{{$user->course->name}}</span>
                            @endif
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            <span class="tb-amount">{{$user->phone}}</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            @if($user->transaction_count>0)    
                            <span>{{$user->transaction_count}} ta</span>
                            @endif
                        </td>

                        <td class="nk-tb-col tb-col-md">
                            @if($user->status==1)
                            <span class="tb-status text-success">Active</span>

                            @else
                            <span class="tb-status text-danger">Blocked</span>
                            @endif
                        </td>
                        <td class="nk-tb-col tb-col">
                            <ul class="nk-tb-actions gx-1">

                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="{{route('admin.member.edit',['member'=>$user->id])}}"><em class="icon ni ni-edit"></em><span>Sozlash</span></a></li>
                                                <li><a href="{{route('admin.member.show',['member'=>$user->id])}}"><em class="icon ni ni-book"></em><span>Kitoblar</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                @if($user->status==1)
                                                <li><a href="#" wire:click.prevent="block('{{$user->id}}')"><em class="icon ni ni-lock"></em><span>Block</span></a></li>


                                                @else
                                                <li><a href="#" wire:click.prevent="active('{{$user->id}}')"><em class="icon ni ni-unlock"></em><span>Active</span></a></li>

                                                @endif

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="row align-items-center">
            <div class="col-7 col-sm-12 col-md-9">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">
                    {{$data->links()}}
                    <!-- <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_1_previous"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" class="page-link">Prev</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item next" id="DataTables_Table_1_next"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                    </ul> -->
                </div>
            </div>

        </div>
    </div>
</div>