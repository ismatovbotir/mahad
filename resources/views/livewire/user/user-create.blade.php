<div>
<form  method="POST">
        @csrf
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Yangi </h5>

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Ism Sharif" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">E-mail</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name" placeholder="e-mail" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Password</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" placeholder="sirli soz" name="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Role</label>

                                        <div class="form-control-select">

                                            <select name="role" id="" class="form-select">

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
    </form>
</div>
