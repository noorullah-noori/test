@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Create Agenda
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{route('agendas.store')}}" novalidate="novalidate">
                                <div class="form-group ">
                                    <label for="time" class="control-label col-lg-3">Time</label>
                                    <div class="col-lg-6">
                                        <input type="time" class="form-control"  name="time">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="date" class="control-label col-lg-3">Date</label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                </div>
                                  <div class="form-group ">
                                    <label for="date_dr" class="control-label col-lg-3">Date Dair</label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="date_dr">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="agenda" class="control-label col-lg-3">Agenda</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="agenda"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="agenda_dr" class="control-label col-lg-3">Agenda Dari</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="agenda_dr"></textarea>
                                    </div>
                                </div>
                                  <div class="form-group ">
                                    <label for="agenda_pa" class="control-label col-lg-3">Agenda Pashto</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="agenda_pa"></textarea>
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