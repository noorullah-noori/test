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
                            Edit News
                        </header>
                        <div class="panel-body">
                        <div class="form cmxform form-horizontal ">
                            {!! Form::model($news, ['route' => array('news.update',$news->id),'files'=>'true']) !!}
                            <input name="_method" type="hidden" value="PATCH">
                               <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">News Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title" name="title" value="{{$news->title_en}}" type="text">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="title_dr" class="control-label col-lg-3">News Title DAri</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$news->title_dr}}" id="title_dr" name="title_dr" type="text">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="title_pa" class="control-label col-lg-3">News Title Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title_pa" value="{{$news->title_pa}}" name="title_pa" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="date" class="control-label col-lg-3">Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="date" name="date" value="{{$news->created_date_en}}" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control date_dr" id="date_dr" name="date_dr" type="text" value="{{$news->created_date_dr}}" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="short_desc" class="control-label col-lg-3">Short Description</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="short_desc" name="short_desc">{{$news->short_desc_en}}</textarea>
                                        </div>
                                    </div>
                                      <div class="form-group ">
                                        <label for="short_desc_dr" class="control-label col-lg-3">Short Description Dari</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="short_desc_dr" name="short_desc_dr">{{$news->short_desc_dr}}</textarea>
                                        </div>
                                    </div>
                                      <div class="form-group ">
                                        <label for="short_desc_pa" class="control-label col-lg-3">Short Description Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="short_desc_pa" name="short_desc_pa">{{$news->short_desc_pa}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description" name="description">{{$news->description_en}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_dr" class="control-label col-lg-3">Description Dari</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description_dr" name="description_dr">{{$news->description_dr}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_pa" class="control-label col-lg-3">Description Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description_pa" name="description_pa">{{$news->description_pa}}</textarea>
                                        </div>
                                    </div>
                                         <div class="form-group">
                                        <label for="image" class="control-label col-lg-3">Image</label>

                                        <input type="file" class="file" name="image" id="image">

                                        <div class="input-group col-md-6 col-md-offset-3 col-xs-12" style="padding-left:15px; padding-right:14px;">

                                            <span class="input-group-addon"><img style="width:50px;height:30px" src="{{asset('news_img/'.$news->image)}}"></span>
                                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
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