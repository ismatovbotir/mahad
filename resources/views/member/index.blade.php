@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">{{$title}}</h3>
                            <div class="nk-block-des text-soft">
                                <p>Tizimda {{$data->total()}} {{$title}} mavjud</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        {{--<li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>--}}
                                        <li class="nk-block-tools-opt">
                                            <button href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="modal" data-target="#profile-edit"><em class="icon ni ni-plus"></em></button>

                                </div>
                                </li>
                                </ul>
                            </div>
                        </div><!-- .toggle-wrap -->
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered card-stretch">
                    <div class="card-inner-group">

                        <div class="card-inner p-0">
                            <div class="nk-tb-list nk-tb-ulist is-compact">
                                <div class="nk-tb-item nk-tb-head">
                                    {{--<div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>--}}
                                    <div class="nk-tb-col"><span class="sub-text">{{$title}}</span></div>

                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">Email</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">Phone</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">Sinf</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">Kitoblar</span></div>

                                    <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                    {{--
                                        <div class="nk-tb-col nk-tb-col-tools text-right">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                    <ul class="link-tidy sm no-bdr">
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" id="bl">
                                                                                <label class="custom-control-label" for="bl">Balance</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" id="ph">
                                                                                <label class="custom-control-label" for="ph">Phone</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="vri">
                                                                                <label class="custom-control-label" for="vri">Verified</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="st">
                                                                                <label class="custom-control-label" for="st">Status</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                        </div>
                                    --}}
                                    <div class="nk-tb-col"><span class="sub-text">Action</span></div>
                                </div><!-- .nk-tb-item -->
                                @foreach($data as $user)
                                <div class="nk-tb-item">

                                    <div class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-primary">
                                                <span>{{$user->name}}</span>
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">{{$user->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <span>{{$user->email}}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <span>{{$user->phone}}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <span>{{$user->course}}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <span>{{$user->books}}</span>
                                    </div>


                                    <div class="nk-tb-col">
                                        <span class="tb-status text-success">Active</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">

                                        <div class="drodown">
                                            <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{route('admin.member.show',['member'=>$user->id])}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-repeat"></em><span>Orders</span></a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- .nk-tb-item -->
                                @endforeach

                            </div><!-- .nk-tb-list -->
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <ul class="pagination justify-content-center justify-content-md-start">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul><!-- .pagination -->
                        </div><!-- .card-inner -->
                    </div><!-- .card-inner-group -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
</div>

@endsection

@section ('modal')
<form action="{{route('admin.member.store')}}" method="POST">
    @csrf
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Yangi {{$title}}</h5>
                    {{--<ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">{{$title}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#address">Address</a>
                    </li>
                    </ul>--}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Ism</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Ism " name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">familiya</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Familiya" name="surename">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Tugilgan Sana</label>
                                        <input type="text" class="form-control form-control-lg date-picker" id="birth-day" name="bday">
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">E-mail</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name" placeholder="e-mail" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Tel</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="sirli soz" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Kurs</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="Bosqich" name="course">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       

                                        <div class="form-control-select">

                                        <label class="form-label" for="role">Role</label>
                                        <select class="form-select" id="role" data-ui="lg" name="role">
                                                <option value="0">Rol tanlang</option>
                                                @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>

                                                @endforeach

                                            </select>

                                        </div>

                                        
                                        
                                           


                                    </div>
                                </div>
                                {{--
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Tel:</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="Aloqa uchun raqam" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Sinf</label>
                                        <input type="text" class="form-control form-control-lg" id="birth-day" name="course" disabled>
                                        
                                    </div>
                                </div>
                                

                                <div class="col-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="latest-sale">
                                        <label class="custom-control-label" for="latest-sale">Use full name to display </label>
                                    </div>
                                </div>
                                
                                --}}
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-success">Saqlash</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Bekor</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        {{--
                        <div class="tab-pane" id="address">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Address Line 1</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Address Line 2</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l2" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-st">State</label>
                                        <input type="text" class="form-control form-control-lg" id="address-st" value="Kentucky">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-county">Country</label>
                                        <select class="form-select" id="address-county" data-ui="lg">
                                            <option>Canada</option>
                                            <option>United State</option>
                                            <option>United Kindom</option>
                                            <option>Australia</option>
                                            <option>India</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="{{route('admin.user.show',['user'=>1])}}" class="btn btn-lg btn-primary">Update Address</a>
                        </li>
                        <li>
                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            --}}<!-- .tab-pane -->
        </div><!-- .tab-content -->
    </div><!-- .modal-body -->
    </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
    </div><!-- .modal -->

</form>
@endsection