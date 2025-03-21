<div class="card-inner">
    <div class=" dt-bootstrap4 no-footer">
        <div class="row justify-between g-2">
            <div class="col-8 col-sm-6 text-left">
                <div class="">
                    <label>
                        <input wire:model.live="search" type="search" class="form-control form-control-sm" placeholder="Kitob nomini kiriting">
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

                        <th class="nk-tb-col " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Kitoblar</span></th>
                        <th class="nk-tb-col tb-col-mb " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Muallif</span></th>
                        <th class="nk-tb-col tb-col-md " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">GTIN</span></th>
                        <th class="nk-tb-col tb-col-lg " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Muqova/Bet</span></th>
                        <th class="nk-tb-col tb-col-lg " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Miqdor</span></th>
                        <th class="nk-tb-col" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Action</span></th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr class="nk-tb-item odd">

                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                    @if($book->img)
                                    <img src="{{asset($book->img)}}" alt="">
                                    @else
                                    <img src=".\images\logo.jpg" alt="">
                                    @endif
                                </div>
                                <div class="user-info">
                                   
                                        <span class="tb-lead">{{$book->name}}</span>
                                       
                                        <span>{{$book->origin_name}}</span>
                                      
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            
                            <span class="tb-amount">{{$book->author}}</span>
                            
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>{{$book->gtin}}</span>
                        </td>

                        <td class="nk-tb-col tb-col-md">
                           
                            <span class="tb-status">{{$book->cover}}/{{$book->pages}}</span>
                           
                        </td>
                        <td class="nk-tb-col tb-col-md">
                           
                            <span class="tb-status">{{$book->marks_count}}</span>
                           
                        </td>
                        <td class="nk-tb-col tb-col">
                            <ul class="nk-tb-actions gx-1">

                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="{{route('admin.book.edit',['book'=>$book->id])}}"><em class="icon ni ni-edit"></em><span>Sozlash</span></a></li>
                                                <li><a href="{{route('admin.book.show',['book'=>$book->id])}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                

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
                    {{$books->links()}}
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
