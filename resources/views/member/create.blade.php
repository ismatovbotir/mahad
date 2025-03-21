@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
        <div class="nk-block">
                <div class="card card-bordered card-stretch">
                <form action="{{route('admin.member.store')}}" method="POST">
                    @csrf
                    
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
                                                    <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Ism " name="name" value="{{@old('name')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">familiya</label>
                                                    <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Familiya" name="surename" value="{{@old('surename')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="birth-day">Tugilgan Sana</label>
                                                    <input type="date" class="form-control form-control-lg " name="bday" value="{{@old('bday')}}">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Passport</label>
                                                    <input type="text" class="form-control form-control-lg" id="full-name" placeholder="JSHSHIR(PINFL)" name="passport" value="{{@old('passport')}}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="display-name">E-mail</label>
                                                    <input type="text" class="form-control form-control-lg" id="display-name" placeholder="e-mail" name="email" value="{{@old('email')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no">Tel</label>
                                                    <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="telefon raqami" name="phone" value="{{@old('phone')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no">Kurs</label>
                                                    <input type="text" class="form-control form-control-lg"  placeholder="Bosqich" name="course" value="{{@old('name')}}">
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
                                                        <a href="{{route('admin.member.index')}}"  class="link link-light">Bekor</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .tab-pane -->

                                </div><!-- .tab-content -->
                            </div><!-- .modal-body -->
                      

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