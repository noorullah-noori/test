@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Meeting
                        </header>
                        <div class="panel-body">
                        <div class="form cmxform form-horizontal ">
                            {!! Form::model($meetings, ['route' => array('meetings.update',$meetings->id)]) !!}
                            <input name="_method" type="hidden" value="PATCH">
                                <div class="form-group ">
                                    <label for="time" class="control-label col-lg-3">Time</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" id="time" name="time" value="{{$meetings->time}}" type="time">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="time" class="control-label col-lg-3">Date</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" id="time" name="date" value="{{$meetings->date}}" type="date">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="meeting_title" class="control-label col-lg-3">Meeting Title</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="meeting_title" value="{{$meetings->meeting_title}}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="description" class="control-label col-lg-3">Agenda</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="agenda">{{$meetings->agenda}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                        <label for="type" class="control-label col-lg-3">Type</label>
                                        <div class="col-lg-6">
                                            <div class="ui label teal" style="margin-bottom:2px;">{{$meetings->type}}</div>
                                            <select class="form-control" id="type" name="type">
                                                <option value="meeting_minutes">Meeting Minutes</option>
                                                <option value="session">session</option>
                                            </select>
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