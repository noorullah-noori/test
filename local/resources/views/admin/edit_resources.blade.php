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
                            Edit Resources
                        </header>
                        <div class="panel-body">
                        <div class="form cmxform form-horizontal">
                            {!! Form::model($resources, ['route' => array('resources.update',$resources->id),'files'=>true]) !!}
                            <input name="_method" type="hidden" value="PATCH">
                                <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Title</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="title" name="title" value="{{$resources->title_en}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$resources->title_dr}}" id="title_dr" name="title_dr" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title_pa" value="{{$resources->title_pa}}" name="title_pa" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description" name="description">{{$resources->description_en}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_dr" class="control-label col-lg-3">Description Dari</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description_dr" name="description_dr">{{$resources->description_dr}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_pa" class="control-label col-lg-3">Description Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description_pa" name="description_pa">{{$resources->description_pa}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pdf" class="control-label col-lg-3">File English</label>
                                        <input type="file" name="pdf" class="file">
                                        <div class="input-group col-md-6 col-md-offset-3 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-pdf-o"></i></span>
                                          <input type="text" class="form-control input-lg" value="{{$resources->pdf_en}}" disabled placeholder="{{$resources->pdf_en}}">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="pdf_dr" class="control-label col-lg-3">File Dari</label>
                                        <input type="file" name="pdf_dr" class="file">
                                        <div class="input-group col-md-6 col-md-offset-3 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-pdf-o"></i></span>
                                          <input type="text" class="form-control input-lg" value="{{$resources->pdf_dr}}" disabled placeholder="{{$resources->pdf_dr}}">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                        <label for="pdf_dr" class="control-label col-lg-3">File Pashto</label>
                                        <input type="file" name="pdf_pa" class="file">
                                        <div class="input-group col-md-6 col-md-offset-3 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-pdf-o"></i></span>
                                          <input type="text" class="form-control input-lg" value="{{$resources->pdf_pa}}" disabled placeholder="{{$resources->pdf_pa}}">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                      </div>
                                      <div class="form-group ">
                                        <label for="date" class="control-label col-lg-3">Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="date" name="date" value="{{$resources->date_en}}" type="date">
                                        </div>
                                    </div>
                                      <div class="form-group ">
                                        <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="date_dr" value="{{$resources->date_dr}}" name="date_dr" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="type" class="control-label col-lg-3">Type</label>
                                        <div class="col-lg-6">
                                            <div class="ui label teal" style="margin-bottom:2px;">{{$resources->type}}</div>
                                            <select class="form-control" id="type" name="type">
                                            <option value="sar">Self-Assessment Reports</option>
                                            <option value="irm">IRM Reports</option>
                                            <option value="cp">Consultation Papers</option>
                                            <option value="nap">National Action Plans</option>
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