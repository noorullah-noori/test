@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Contacts
                        </header>
                        <div class="panel-body">
                        <div class="form cmxform form-horizontal ">
                            {!! Form::model($contacts, ['route' => array('contacts.update',$contacts->id)]) !!}
                            <input name="_method" type="hidden" value="PATCH">
                                <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Address&nbsp;<i class="fa fa-map-marker"></i></label>

                                        <div class="col-lg-6">
                                                <textarea class="form-control " id="message" name="address">{{$contacts->address}}</textarea>
                                            </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="fb" class="control-label col-lg-3">Facebook&nbsp;<i class="fa fa-facebook"></i></label>

                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$contacts->fb}}" id="fb" name="fb" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="twitter" class="control-label col-lg-3">Twitter&nbsp;<i class="fa fa-twitter"></i></label>

                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$contacts->twitter}}" id="twitter" name="twitter" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="g_plus" class="control-label col-lg-3">Google Plus&nbsp;<i class="fa fa-google-plus"></i></label>

                                        <div class="col-lg-6">
                                            <input class="form-control " id="g_plus" name="g_plus" value="{{$contacts->g_plus}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="phone" class="control-label col-lg-3">Phone&nbsp;<i class="fa fa-phone"></i></label>

                                        <div class="col-lg-6">
                                            <input class="form-control " id="phone" name="phone" value="{{$contacts->phone}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="fax" class="control-label col-lg-3">Fax&nbsp;<i class="fa fa-fax"></i></label>

                                        <div class="col-lg-6">
                                            <input class="form-control " id="fax" name="fax" value="{{$contacts->fax}}" type="text">
                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-3 col-lg-6">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <a href="{{url()->previous()}}" class="btn btn-default"  type="button">Cancel</a>
                                            </div>
                                        </div>
                            {!! Form::close() !!}
                        </div>
                        </div>
                    </section>
        </div>

</section>

@include('admin.include.footer')
