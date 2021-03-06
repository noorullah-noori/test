@include('admin.include.header')

<style>
    .file {
      visibility: hidden;
      position: absolute;
    }


</style>

<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Event Or Seminar
                        </header>
                        <div class="panel-body">
                        <div class="form cmxform form-horizontal ">
                            {!! Form::model($events, ['route' => array('events.update',$events->id),'files'=>true]) !!}
                            <input name="_method" type="hidden" value="PATCH">
                               <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$events->title_en}}" id="title" name="title" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$events->title_dr}}" id="title_dr" name="title_dr" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title_pa" value="{{$events->title_pa}}" name="title_pa" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="description" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description" name="description">{{$events->description_en}}</textarea>
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="description_dr" class="control-label col-lg-3">Description Dari</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description_dr" name="description_dr">{{$events->description_dr}}</textarea>
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="description_pa" class="control-label col-lg-3">Description Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description_pa" name="description_pa">{{$events->description_pa}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="date" class="control-label col-lg-3">Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="date" value="{{$events->date_en}}" name="date" type="date">
                                        </div>
                                    </div>
                                <div class="form-group ">
                                        <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$events->date_dr}}" id="date_dr" name="date_dr" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="type" class="control-label col-lg-3">Type</label>
                                        <div class="col-lg-6">
                                            <div class="ui label teal" style="margin-bottom:2px;">{{$events->type}}</div>
                                            <select class="form-control" id="type" name="type">
                                                <option value="seminar">Seminar</option>
                                                <option value="event">Event</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="image" value="{{$events->image}}" class="file">
                                        <div class="input-group col-md-6 col-md-offset-3 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon" style="padding:5px 5px;"><img style="width:60px;" class="img img-rounded" src="{{asset('events&seminars/'.$events->image)}}"></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="{{$events->image}}">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
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

<script>
    $(document).on('click', '.browse', function(){
      var file = $(this).parent().parent().parent().find('.file');
      file.trigger('click');
    });
    $(document).on('change', '.file', function(){
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
</script>

@include('admin.include.footer')