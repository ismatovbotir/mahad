<div class="card-inner">
    <div class=" dt-bootstrap4 no-footer">
        <div class="row justify-between g-2">
            <div class="col-8 col-sm-6 text-left">
                <div class="">
                    <label>
                        <input wire:model.live="search" type="search" class="form-control form-control-sm" placeholder="Qidiruv uchun matn" >
                    </label>
                </div>
            </div>
            <div class="col-4 col-sm-6 text-right">

            </div>
        </div>
        <div class="datatable-wrap my-3">
            <table class="datatable nowrap nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false"  role="grid" >
                <thead>
                    <tr class="nk-tb-item nk-tb-head" role="row">

                        <th class="nk-tb-col " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Talaba</span></th>
                        <th class="nk-tb-col tb-col-mb " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Tel:</span></th>
                        <th class="nk-tb-col tb-col-md " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Kitoblar</span></th>
                        <th class="nk-tb-col tb-col-lg " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col tb-col-lg " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Action</span></th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $user)
                    <tr class="nk-tb-item odd">

                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">{{$user->name}} {{$user->surename}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                    <span>{{$user->email}}</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            <span class="tb-amount">{{$user->phone}}</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>2 ta</span>
                        </td>

                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-success">Active</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                               {{-- <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>--}}
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>

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