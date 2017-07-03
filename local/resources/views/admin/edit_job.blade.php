@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Jobs And Oppurtunities
                        </header>
                        <div class="panel-body">
                        <div class="form cmxform form-horizontal ">
                            {!! Form::model($job, ['route' => array('jobs.update',$job->id)]) !!}
                            <input name="_method" type="hidden" value="PATCH">
                                <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Job Title</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="title" name="title" value="{{$job->title}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="expiry_date" class="control-label col-lg-3">Expiry Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$job->expiry_date}}" id="expiry_date" name="expiry_date" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="description" name="description">{{$job->description}}</textarea>
                                        </div>
                                    </div>  
                                    <div class="form-group ">
                                        <label for="responsibilities" class="control-label col-lg-3">Responsibilites</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="responsibilities" name="responsibilities">{{$job->responsibilities}}</textarea>
                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-3 col-lg-6">
                                                <button class="btn btn-primary" type="submit">Save</button>
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
