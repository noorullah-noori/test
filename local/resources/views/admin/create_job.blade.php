@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Jobs And Oppurtunities
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{route('jobs.store')}}" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Job Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title" name="title" type="text">
                                        </div>
                                    </div>
                                        <div class="form-group ">
                                        <label for="title_da" class="control-label col-lg-3">Job Title Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title_da" name="title_da" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="title_pa" class="control-label col-lg-3">Job Title Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title_pa" name="title_pa" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="expiry_date" class="control-label col-lg-3">Expiry Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="expiry_date" name="expiry_date" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="expiry_date_da" class="control-label col-lg-3">Expiry Date Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="expiry_date_da" name="expiry_date_da" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description" name="description"></textarea>
                                        </div>
                                    </div>
                                      <div class="form-group ">
                                        <label for="description_da" class="control-label col-lg-3">Description Dari</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description_da" name="description_da"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_pa" class="control-label col-lg-3">Description Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description_pa" name="description_pa"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="responsibilities" class="control-label col-lg-3">Responsibilites</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="responsibilities" name="responsibilities"></textarea>
                                        </div>
                                    </div>
                                      <div class="form-group ">
                                        <label for="responsibilities_da" class="control-label col-lg-3">Responsibilites Dari</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="responsibilities_da" name="responsibilities_da"></textarea>
                                        </div>
                                    </div>
                                      <div class="form-group ">
                                        <label for="responsibilities_pa" class="control-label col-lg-3">Responsibilites Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="responsibilities_pa" name="responsibilities_pa"></textarea>
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