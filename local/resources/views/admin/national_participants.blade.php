@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">National Participants</h2>
          
            <div class="container pull-left">
                <a href="{{route('national_participants.create')}}" class="ui button teal">Create</a>
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th>No.</th>
      <th>Image</th>
      <th>Name</th>
      <th>Member Since</th>
      <th>Email</th>
      <th>Details</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($national_participants as $value)
    <tr>
      <th><?php echo $i++; ?></th>
      <td style="width:13%;"><img style="width:100px;" src="{{asset('n_participants/'.$value->image)}}"></td>
      <td>{{$value->name}}</td>
      <td style="width:10%;">{{$value->member_since}}</td>
      <td>{{$value->email}}</td>
      <td style="width:30%;">{{$value->details}}</td>
      <td>
        <form action="{{route('national_participants.destroy',$value->id)}}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a href="{{route('national_participants.edit',$value->id)}}" class="ui button blue tiny">Edit</a>
            <button class="ui button red tiny" onclick="return confirm_submit()">Delete</button>
        </form>
      </td>

    </tr>
 @endforeach
  </tbody>
</table>
</div>
</section>

@include('admin.include.footer')
