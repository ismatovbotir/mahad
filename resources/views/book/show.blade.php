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






                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-2">


                                    <div class="card card-bordered">
                                        <img src="{{$book->img!=null?asset($book->img):'images/logo.jpg'}}" class="card-img-top  h-25" alt="">

                                    </div>

                                </div>
                                <div class="col-md-10">

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Kitob nomi</label>
                                                <input type="text" class="form-control form-control-lg" id="-name" placeholder="Kitob Nomi" value="{{$book->name}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="origin-name">Asl nomi</label>
                                                <input type="text" class="form-control form-control-lg" id="origin-name" placeholder="Asl(orinal) nomi" value="{{$book->origin_name}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="gtin">GTIN</label>
                                                <input type="text" class="form-control form-control-lg" id="gtin" placeholder="Kitob ISBN raqami" value="{{$book->gtin}}" disabled>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="publisher">Nashriyot</label>
                                                <input type="text" class="form-control form-control-lg " id="publisher" placeholder="Nashriyot nomi" value="{{$book->publisher}}" disabled>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="published">Nashr Yili</label>
                                                <input type="number" class="form-control form-control-lg " id="published" placeholder="Nashr Yili" value="{{$book->published}}" disabled>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="cover">Muqova</label>
                                                <input type="text" class="form-control form-control-lg " id="cover" placeholder="Muqova" value="{{$book->cover}}" disabled>

                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label" for="pages">Saxifalar soni</label>
                                                <input type="number" class="form-control form-control-lg" placeholder="Saxifalar soni" id="pages" value="{{$book->pages}}" disabled>
                                            </div>
                                        </div>


                                        <div class="col-md-2">
                                            <div class="form-group">


                                                

                                                    <label class="form-label" for="category">Kategoriya</label>
                                                    
                                                    <input type="text" class="form-control form-control-lg" placeholder="Saxifalar soni" value="{{($book->category_id?$book->category->name:'')}}" disabled>

                                                
                                            </div>
                                        </div>

                                        <div class="col-md-2">


                                            <div class="form-group">
                                                <label class="form-label" for="shelfe">Kitob adresi</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Kitob adresi" id="shelf" value="{{$book->shelf}}" disabled>
                                            </div>



                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="author">Muallif,Tarjimon va Muxarrir</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Muallif" id="author" value="{{$book->author}}" disabled>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                                
                            </div>
                        </div><!-- .tab-pane -->


                    </div>
                </div>

            </div>

            <div class="nk-block">
                <div class="card card-bordered card-stretch">
                    <div class="card-inner">
                        <livewire:book.mark-index id="{{$book->id}}" />





                    </div>
                </div>

            </div>



        </div>
    </div>
</div>

@endsection

@section ('modal')

@endsection