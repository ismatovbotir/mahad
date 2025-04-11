<div wire:ignore.self  class="modal fade" tabindex="-1" id="courseModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yangi Guruh</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="addCourse"  class="form-validate is-alter" novalidate="novalidate">
                    <div class="row">


                        <div class="form-group col-md-12">
                            
                            <div class="form-control-wrap">
                                <input type="text" class="form-control invalid" id="full-name" required="" aria-describedby="full-name-error" aria-invalid="true" placeholder="Guruh nomi" wire:model="courseName">
                                @error('courseName') 
                                <span id="full-name-error" class="invalid">Guruh nomi</span>
                                @enderror
                            </div>
                       
                        </div>
                        <div class="form-group col-md-6">
                            
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" placeholder="B.yili" wire:model="start"  required="">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                           
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" placeholder="T.yili" wire:model="end" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button   type="submit" class=" btn btn-success form-control-lg" ><em class="icon ni ni-plus"></em></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>














{{--

    <div class="nk-block-head nk-block-head-sm">
        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group">
                  
                    <input type="text" class="form-control form-control-lg" placeholder="Guruh nomi" wire:model="courseName" wire:change="courseNameChanged">
                    @error('courseName') 
                        <div class="text-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-md-2">
    <div class="form-group">

        <input type="number" class="form-control form-control-lg" placeholder="B.yili" wire:model="start" required>
    </div>
</div>
<div class="col-md-2">
    <div class="form-group">

        <input type="number" class="form-control form-control-lg" placeholder="T.yili" wire:model="end" required>
    </div>
</div>

<div class="col-md-2">


    <button wire:click="addCourse" class=" btn btn-success form-control-lg"><em class="icon ni ni-plus"></em></button>


</div><!-- .toggle-wrap -->

</div><!-- .nk-block-head-content -->
</div><!-- .nk-block-between -->
--}}