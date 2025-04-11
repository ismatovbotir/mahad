<div class="card-inner">
    <div class=" dt-bootstrap4 no-footer">

        <div class="datatable-wrap my-3">
            <table class="datatable nowrap nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" role="grid">
                <thead>
                    <tr class="nk-tb-item nk-tb-head" role="row">

                        <th class="nk-tb-col " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">#</span></th>
                        <th class="nk-tb-col tb-col-mb " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Guruh nomi</span></th>
                        <th class="nk-tb-col tb-col-md " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Ta'lim yili</span></th>
                        <th class="nk-tb-col tb-col-lg " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Talabalar</span></th>
                        <th class="nk-tb-col tb-col-lg " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Status</span></th>
                      
                        <th class="nk-tb-col tb-col-lg " tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1"><span class="sub-text">Action</span></th>
                       

                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr class="nk-tb-item odd" wire:key="{{$course->id}}">

                        <td class="nk-tb-col">
                            {{$course->id}}
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">

                            <span class="tb-amount">{{$course->name}}</span>

                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>{{$course->start}}-{{$course->end}}</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            @if($course->members_count>0)    
                            <span>{{$course->members_count}}</span>
                            @endif
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            @if($course->status==1)    
                            <span class="text-success">Aktiv</span>
                            @else
                            <span class="text-secondary">Yopilgan</span>
                            @endif
                        </td>
                       
                       
                       
                        <td class="nk-tb-col tb-col-md">

                            @if($course->members_count==0)
                            <button wire:click="deleteCourse({{$course->id}})" class='btn btn-danger'><span class="ni ni-cross"></span></button>
                            @else
                                @if($course->status==1)
                                    <button wire:click="deactivateCourse({{$course->id}})" class='btn btn-secondary'><span class="ni ni-lock"></span></button>
                                @else
                                  <button wire:click="activateCourse({{$course->id}})" class='btn btn-success'><span class="ni ni-check"></span></button>
                                @endif
                            @endif
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="row align-items-center">
            <div class="col-7 col-sm-12 col-md-9">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">


                </div>
            </div>

        </div>
    </div>
</div>