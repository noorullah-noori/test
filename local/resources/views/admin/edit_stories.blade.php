@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Stories
                        </header>
                        <div class="panel-body">
                        <div class="form cmxform form-horizontal ">
                            {!! Form::model($stories, ['route' => array('stories.update',$stories->id)]) !!}
                            <input name="_method" type="hidden" value="PATCH">
                                <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Title</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="title" name="title" value="{{$stories->title_en}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title_dr" name="title_dr" value="{{$stories->title_dr}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title_pa" name="title_pa" value="{{$stories->title_pa}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <textarea rows="10" class=" form-control" id="description" name="description">{{$stories->description_en}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_dr" class="control-label col-lg-3">Description Dari</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description_dr" name="description_dr">{{$stories->description_dr}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_pa" class="control-label col-lg-3">Description Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description_pa" name="description_pa">{{$stories->description_pa}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                            <label for="author" class="control-label col-lg-3">Author</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" value="{{$stories->author_en}}" id="author" name="author" type="text">
                                            </div>
                                        </div>
                                     <div class="form-group ">
                                        <label for="author_dr" class="control-label col-lg-3">Author Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="author_dr" value="{{$stories->author_dr}}" name="author_dr" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="author_pa" class="control-label col-lg-3">Author Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="author_pa" value="{{$stories->author_pa}}" name="author_pa" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                            <label for="description" class="control-label col-lg-3">Date English</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" value="{{$stories->date_en}}" id="date" name="date" type="date">
                                            </div>
                                        </div>
                                    <div class="form-group ">
                                        <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="date_dr" value="{{$stories->date_dr}}" name="date_dr" type="date">
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