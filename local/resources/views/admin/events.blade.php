@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Events & Seminars</h2>
          
            <div class="container pull-left">
                <a href="{{route('events.create')}}" class="ui button teal">Create</a>
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th>No.</th>
      <th>Image</th>
      <th>Title</th>
      <th>Description</th>
      <th>Type</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($events as $value)
    <tr>
      <th><?php echo $i++; ?></th>
      <td><img style="width:100px;" src="{{asset('events&seminars/'.$value->image)}}"></td>
      <td>{{$value->title}}</td>
      <td style="width:40%;">{{$value->description}}</td>
      <td>{{$value->type}}</td>
      <td>
        <form action="{{route('events.destroy',$value->id)}}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a href="{{route('events.edit',$value->id)}}" class="ui tiny button blue">Edit</a>
            <button class="ui tiny button red" onclick="return confirm_submit()">Delete</button>
        </form>
      </td>
      <td></td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
</section>

@include('admin.include.footer')
