@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Contacts
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{route('contacts.store')}}" novalidate="novalidate">
                                <div class="form-group ">
                                        <label for="address" class="control-label col-lg-3">Address</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="address" name="address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="fb" class="control-label col-lg-3">Facebook</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="fb" name="fb" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="twitter" class="control-label col-lg-3">Twitter</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="twitter" name="twitter" type="text">
                                        </div>
                                    </div>
                                <div class="form-group ">
                                        <label for="g_plus" class="control-label col-lg-3">Google+</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="g_plus" name="g_plus" type="text">
                                        </div>
                                    </div>
                                  <div class="form-group ">
                                        <label for="phone" class="control-label col-lg-3">Phone</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="phone" name="phone" type="text">
                                        </div>
                                    </div>
                                  <div class="form-group ">
                                        <label for="fax" class="control-label col-lg-3">Fax</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="fax" name="fax" type="text">
                                        </div>
                                    </div>

                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <a href="{{url()->previous()}}" class="btn btn-default" type="button">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
        </div>

</section>

@include('admin.include.footer')