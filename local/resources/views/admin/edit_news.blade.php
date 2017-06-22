@include('admin.include.header')

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
                            {!! Form::model($news, ['route' => array('news.update',$news->id)]) !!}
                            <input name="_method" type="hidden" value="PATCH">
                                <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">News Title</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="title" name="title" value="{{$news->title}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="date" class="control-label col-lg-3">Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$news->created_date}}" id="date" name="date" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                            <label for="short_desc" class="control-label col-lg-3">Short Description</label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control " id="short_desc" name="short_desc">{{$news->short_desc}}</textarea>
                                            </div>
                                        </div>
                                    <div class="form-group ">
                                            <label for="description" class="control-label col-lg-3">Description</label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control " id="description" name="description">{{$news->description}}</textarea>
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