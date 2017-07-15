@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Agenda
                        </header>
                        <div class="panel-body">
                        <div class="form cmxform form-horizontal ">
                            {!! Form::model($agendas, ['route' => array('agendas.update',$agendas->id)]) !!}
                            <input name="_method" type="hidden" value="PATCH">
                                 <div class="form-group ">
                                    <label for="time" class="control-label col-lg-3">Time</label>
                                    <div class="col-lg-6">
                                        <input type="time" class="form-control" value="{{$agendas->time}}"  name="time">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="date" class="control-label col-lg-3">Date</label>
                                    <div class="col-lg-6">
                                        <input type="date" value="{{$agendas->date_en}}" class="form-control" name="date">
                                    </div>
                                </div>
                                  <div class="form-group ">
                                    <label for="date_dr" class="control-label col-lg-3">Date Dair</label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" value="{{$agendas->date_dr}}" name="date_dr">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="agenda" class="control-label col-lg-3">Agenda</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="agenda">{{$agendas->agenda_en}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="agenda_dr" class="control-label col-lg-3">Agenda Dari</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="agenda_dr">{{$agendas->agenda_dr}}</textarea>
                                    </div>
                                </div>
                                  <div class="form-group ">
                                    <label for="agenda_pa" class="control-label col-lg-3">Agenda Pashto</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="agenda_pa">{{$agendas->agenda_pa}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Update</button>
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