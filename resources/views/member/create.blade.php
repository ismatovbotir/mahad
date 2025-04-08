@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">

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

                                    <li class="nk-block-tools-opt">
                                        <a href="{{route('admin.member.index')}}" class="dropdown-toggle btn btn-icon btn-danger"><em class="icon ni ni-home"></em></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div><!-- .toggle-wrap -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->



            <div class="nk-block">
                <div class="card card-bordered card-stretch">

                    <div class="card-inner">
                        <form action="{{route('admin.member.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf




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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">Ism</label>
                                                <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Ism " name="name" value="{{@old('name')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">Familiya</label>
                                                <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Familiya" name="surename" value="{{@old('surename')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">Sharif</label>
                                                <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Sharif" name="patronymic" value="{{@old('patronymic')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="birth-day">Tugilgan Sana</label>
                                                <input type="date" class="form-control form-control-lg " name="bday" value="{{@old('bday')}}">

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">Passport</label>
                                                <input type="text" class="form-control form-control-lg" id="full-name" placeholder="JSHSHIR(PINFL)" name="passport" value="{{@old('passport')}}">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="display-name">E-mail</label>
                                                <input type="text" class="form-control form-control-lg" id="display-name" placeholder="e-mail" name="email" value="{{@old('email')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">Tel</label>
                                                <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="telefon raqami" name="phone" value="{{@old('phone')}}">
                                            </div>
                                        </div>


                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">A'zolik kartasi</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Karta raqami" name="card" value="{{@old('card')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">




                                                <label class="form-label" for="role">Role</label>
                                                <select class="form-select" name="role">

                                                    @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        
                                        <div class="col-12">
                                            <div class="form-group">


                                                <label class="form-label" for="customFileLabel">Adres</label>
                                                <div class="form-control-wrap">


                                                    <input type="text" name="address" class="form-control no-resize" value="{{@old('address')}}">
                                                    
                                                   

                                                </div>



                                            </div>

                                        </div>

                                        <div class="col-12">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-success">Saqlash</button>
                                                </li>
                                                <li>
                                                    <a href="{{route('admin.member.index')}}" class="link link-light">Bekor</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .tab-pane -->

                            </div><!-- .tab-content -->



                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section ('modal')

@endsection