@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
        <div class="nk-block">
                <div class="card card-bordered card-stretch">
                <form action="{{route('admin.member.update',['member'=>$member->id])}}" method="POST" >
                    @csrf
                    @method('PUT')
                    
                            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                            <div class="modal-body modal-body-lg">
                                <h5 class="title">{{$title}}</h5>
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
                                                    <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Ism " name="name" value="{{$member->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Familiya</label>
                                                    <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Familiya" name="surename" value="{{$member->surename}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="birth-day">Tugilgan Sana</label>
                                                    <input type="date" class="form-control form-control-lg" name="bday"  value="{{$member->bday}}" >

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Passport</label>
                                                    <input type="text" class="form-control form-control-lg" id="full-name" placeholder="JSHSHIR(PINFL)" name="passport"  value="{{$member->passport}}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="display-name">E-mail</label>
                                                    <input type="text" class="form-control form-control-lg" id="display-name" placeholder="e-mail" name="email"  value="{{$member->email}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no">Tel</label>
                                                    <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="telefon raqami" name="phone"  value="{{$member->phone}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no">Kurs</label>
                                                    <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="Bosqich" name="course"  value="{{$member->course}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">


                                                    <div class="form-control-select">

                                                        <label class="form-label" for="role">Role</label>
                                                        <select class="form-select" name="role">
                                                            <option value="0">Rol tanlang</option>
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