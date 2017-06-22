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
                            Edit National Participant
                        </header>
                        <div class="panel-body">
                        <div class="form cmxform form-horizontal ">
                            {!! Form::model($national_participants, ['route' => array('national_participants.update',$national_participants->id),'files'=>true]) !!}
                            <input name="_method" type="hidden" value="PATCH">
                                <div class="form-group ">
                                        <label for="name" class="control-label col-lg-3">Name</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="name" name="name" value="{{$national_participants->name}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="member_since" class="control-label col-lg-3">Member Since</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$national_participants->member_since}}" id="member_since" name="member_since" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$national_participants->email}}" id="email" name="email" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="member_since" class="control-label col-lg-3">Details </label>
                                        <div class="col-lg-6">
                                            <textarea name="details" class="form-control">{{$national_participants->details}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="file" name="image" value="{{$national_participants->image}}" class="file">
                                        <div class="input-group col-md-6 col-md-offset-3 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon" style="padding:5px 5px;"><img style="width:60px;" class="img img-rounded" src="{{asset('n_participants/'.$national_participants->image)}}"></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="{{$national_participants->image}}">
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