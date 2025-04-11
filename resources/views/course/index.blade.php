@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <div class="card-inner">
                    <ul class="preview-list justify-content-end">
                        <li class="preview-item">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#courseModal">Yangi Guruh Qo'shish</button>
                        </li>
                        
                    </ul>
                </div>



               
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered card-stretch">
                    <livewire:course.body />


                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
</div>

@endsection

@section ('modal')
<livewire:course.head />

@endsection

@section('javascript')
@parent


@endsection