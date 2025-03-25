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
                        <form action="{{route('admin.member.update',['member'=>$member->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                           
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
                                            <div class="col-md-3">


                                                <div class="card card-bordered">
                                                    <img src="{{$member->img!=null?asset($member->img):'images/logo.jpg'}}" class="card-img-top" alt="">

                                                </div>

                                                <div class="form-group mt-1">



                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile" name="photo">
                                                            <label class="custom-file-label" for="customFile">Rasm faylini tanlang</label>
                                                        </div>
                                                    </div>



                                                </div>

                                            </div>


                                            <div class="col-md-9">
                                                <div class="row">

                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="full-name">Ism</label>
                                                        <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Ism " name="name" value="{{old('name',$member->name)}}">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="full-name">Familiya</label>
                                                        <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Familiya" name="surename" value="{{old('surename',$member->surename)}}">
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="birth-day">Tugilgan Sana</label>
                                                            <input type="date" class="form-control form-control-lg" name="bday" value="{{old('bday',$member->bday)}}">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="full-name">Passport</label>
                                                            <input type="text" class="form-control form-control-lg" id="full-name" placeholder="JSHSHIR(PINFL)" name="passport" value="{{old('passport',$member->passport)}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="display-name">E-mail</label>
                                                            <input type="text" class="form-control form-control-lg" id="display-name" placeholder="e-mail" name="email" value="{{old('email',$member->email)}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="phone-no">Tel</label>
                                                            <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="telefon raqami" name="phone" value="{{old('phone',$member->phone)}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="phone-no">A'zolik kartasi</label>
                                                            <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="A'zolik kartasi raqami" name="card" value="{{$member->card}}">
                                                        </div>
                                                    </div>

                                                   

                                                    <div class="col-md-3">
                                                        <div class="form-group">



                                                            <label class="form-label" for="role">Role</label>
                                                            <select class="form-select" name="role">

                                                                @foreach($roles as $role)
                                                                @if($role->id==$member->role_id)
                                                                <option value="{{$role->id}}" selected>{{$role->name}}</option>
                                                                @else
                                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                                @endif
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                    <li>
                                                        <button type="submit" class="btn btn-success">Saqlash</button>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('admin.member.index')}}" data-dismiss="modal" class="link link-light">Bekor</a>
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
</div>

@endsection

@section ('modal')

@endsection