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

                    <livewire:member.index />

                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
</div>

@endsection

@section ('modal')
<div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
    <form action="{{route('admin.member.store')}}" method="POST">
        @csrf
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Yangi {{$title}}</h5>
                    <div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
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
                                        <input type="text" class="form-control form-control-lg date-picker" name="bday">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Passport</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" placeholder="JSHSHIR(PINFL)" name="surename">
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
                                        <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="telefon raqami" name="phone">
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
                                            <select class="form-select" name="role">
                                                <option value="0">Rol tanlang</option>
                                                @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

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

                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->

    </form>
</div><!-- .modal -->
@endsection