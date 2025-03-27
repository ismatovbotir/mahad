<div class="mb-3">
    <form action="" wire:submit.prevent>
        <div class="row">

            @if($button==1)
            <div class="form-group col-md-3  my-auto">

                <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Kitob kodi" wire:model="bookMark" wire:keydown.enter="searchBook" disabled>
            </div>
            <div class="form-group col-md-3  my-auto" >


                <div class="alert alert-primary alert-icon my-auto">
                    <em class="icon ni ni-alert-circle"></em> <strong>{{$msg}}</strong>
                </div>

            </div>

            <div class="form-group col-md-3 my-auto">

                <a wire:click.prevent="saveBook" href="" class="btn btn-success" id="full-name">Ha</a>
                <a wire:click.prevent="cancelBook" href="" class="btn btn-danger" id="full-name">Yoq</a>
            </div>
            @elseif($button==2)
            <div class="form-group col-md-3 my-auto">

                <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Kitob kodi" wire:model="bookMark" wire:keydown.enter="searchBook" disabled>
            </div>
            <div class="form-group col-md-3 my-auto">

                <div class="alert alert-danger alert-icon my-auto">
                    <em class="icon ni ni-alert-circle"></em> <strong>{{$msg}}</strong>
                </div>
            </div>


            <div class="form-group col-md-3 my-auto">

                <a wire:click.prevent="returnBook" href="" class="btn btn-success" id="full-name">Ha</a>
                <a wire:click.prevent="cancelBook" href="" class="btn btn-danger" id="full-name">Yoq</a>
            </div>

            @else
            <div class="form-group col-md-3 my-auto">

                <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Kitob kodi" wire:model="bookMark" wire:keydown.enter="searchBook">
            </div>
                @if($msg!=null)
                <div class="form-group col-md-3 my-auto">


                    <div class="alert alert-danger alert-icon">
                        <em class="icon ni ni-alert-circle"></em> <strong>{{$msg}}</strong>
                    </div>

                </div>
                @endif




            @endif

        </div>
    </form>
</div>