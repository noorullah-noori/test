@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Jobs And Oppurtunities</h2>
        </div>
<div class="container pull-left" style="margin:10px;">
    <a href="{{route('jobs.create')}}" class="ui button teal">Create</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Job Title</th>
      <th>Expiry Date</th>
      <th>Description</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($jobs as $job)
    <tr>
      <th><?php echo $i++; ?></th>
      <td>{{$job->title}}</td>
      <td>{{$job->expiry_date}}</td>
      <td>{{$job->description}}</td>
      <td>
      <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <a href="{{route('jobs.edit',$job->id)}}" class="ui tiny button blue ">Edit</a>
          <button class="ui tiny button red " onclick="return confirm_submit()">Delete</button>
      </form>
     
        <!-- <a href="{{route('jobs.destroy',$job->id)}}" onclick="return confirm_submit()">Delete</a> -->
        
      </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
</section>

@include('admin.include.footer')