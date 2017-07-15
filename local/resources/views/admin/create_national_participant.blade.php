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
                            Create National Participant
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{route('national_participants.store')}}" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-3">Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                 <div class="form-group ">
                                    <label for="name_dr" class="control-label col-lg-3">Name Dari</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name_dr">
                                    </div>
                                </div>
                                 <div class="form-group ">
                                    <label for="name_pa" class="control-label col-lg-3">Name Pashto</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name_pa">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="member_since" class="control-label col-lg-3">Member Since</label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control"  name="member_since">
                                    </div>
                                </div>
                                 <div class="form-group ">
                                    <label for="member_since_dr" class="control-label col-lg-3">Member Since Dari</label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control"  name="member_since_dr">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="email" class="control-label col-lg-3">Email</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="details" class="control-label col-lg-3">Details</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="details"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="details_dr" class="control-label col-lg-3">Details Dari</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="details_dr"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="details_pa" class="control-label col-lg-3">Details Pashto</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="details_pa"></textarea>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="type" class="control-label col-lg-3">Category</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="type" id="type">
                                            <option value="gov">Government Reformers</option>
                                            <option value="cso">CSOs</option>
                                            <option value="priv">Private Sector Reformers</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <input type="file" name="image" class="file">
                                        <div class="input-group col-md-6 col-md-offset-3 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>

                                    {{csrf_field()}}

                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <a href="{{url()->previous()}}" class="btn btn-default" type="button">Cancel</a>
                                    </div>
                                </div>
                                </form>
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