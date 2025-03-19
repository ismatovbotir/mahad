<div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
    <!-- <form action=""> -->
        @csrf
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Yangi {{$title}}</h5>

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Ism</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Ism " wire:model="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">familiya</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Familiya" wire:model="surename">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Tugilgan Sana</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="01.01.2000" wire:model="bday">

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">E-mail</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name" placeholder="e-mail" wire:model="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Tel</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="sirli soz" wire:model="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Kurs</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="Bosqich" wire:model="course">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">


                                        <div class="form-control-select">

                                            <label class="form-label" for="role">Role</label>
                                            <select class="form-select"  name="role">
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
                                            <button wire:click="createMember" class="btn btn-success">Saqlash</button>
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

    <!-- </form> -->
</div><!-- .modal -->