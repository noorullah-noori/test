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
                                            <input class="form-control" id="title" name="title" value="{{$stories->title}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <textarea rows="10" class=" form-control" id="description" name="description">{{$stories->description}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                            <label for="author" class="control-label col-lg-3">Author</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" value="{{$stories->author}}" id="author" name="author" type="text">
                                            </div>
                                        </div>
                                    <div class="form-group ">
                                            <label for="description" class="control-label col-lg-3">Description</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" value="{{$stories->date}}" id="date" name="date" type="date">
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