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
                                        <a href="{{route('admin.book.index')}}" class="dropdown-toggle btn btn-icon btn-danger"><em class="icon ni ni-home"></em></a>
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
                        <form action="{{route('admin.book.update',['book'=>$book->id])}}" method="POST" enctype="multipart/form-data">
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">Kitob nomi</label>
                                                <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Kitob Nomi" name="name" value="{{old('name',$book->name)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">Asl nomi</label>
                                                <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Asl(orinal) nomi" name="originname" value="{{old('originname',$book->origin_name)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="birth-day">GTIN</label>
                                                <input type="text" class="form-control form-control-lg " name="gtin" placeholder="Kitob ISBN raqami" value="{{old('gtin',$book->gtin)}}">

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label">Nashriyot</label>
                                                <input type="text" class="form-control form-control-lg " name="publisher" placeholder="Nashriyot nomi" value="{{old('publisher',$book->publisher)}}">

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label">Nashr Yili</label>
                                                <input type="number" class="form-control form-control-lg " name="published" placeholder="Nashr Yili" value="{{old('published',$book->published)}}" max="{{date('Y')}}">

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">Muqova</label>
                                                <select class="form-select" name="cover">
                                                    <option value="Qattiq" {{ $book->cover=='Qattiq'?'selected':'' }}>Qattiq</option>
                                                    <option value="Yumshoq" {{ $book->cover=='Yumshoq'?'selected':'' }}>Yumshoq</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="display-name">Saxifalar soni</label>
                                                <input type="number" class="form-control form-control-lg" placeholder="Saxifalar soni" name="pages" value="{{old('pages',$book->pages)}}">
                                            </div>
                                        </div>


                                        <div class="col-md-2">
                                            <div class="form-group">


                                                

                                                    <label class="form-label">Kategoriya</label>
                                                    <select class="form-select" name="category">

                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}" {{$category->id==$book->category_id ?'selected':'' }}>{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="display-name">Muallif,Tarjimon va Muxarrir</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Muallif" name="author" value="{{old('author',$book->author)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">


                                            <div class="card card-bordered">
                                                <img src="{{$book->img!=null?asset($book->img):'images/logo.jpg'}}" class="card-img-top" alt="">

                                            </div>

                                        </div>
                                        <div class="col-md-6">


                                            <div class="form-group">
                                                <label class="form-label" for="display-name">Kitob adresi</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="KItob adresi" name="shelf" value="{{old('shelf',$book->shelf)}}">
                                            </div>

                                            <div class="form-group">


                                                <label class="form-label" for="customFileLabel">Rasm(Tasvir)</label>
                                                <div class="form-control-wrap">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="photo">
                                                        <label class="custom-file-label" for="customFile">Rasm faylini tanlang</label>
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
                                                    <a href="{{route('admin.book.index')}}" class="link link-light">Bekor</a>
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