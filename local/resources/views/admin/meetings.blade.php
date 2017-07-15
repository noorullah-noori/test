@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Meetings</h2>
          
            <div class="container pull-left">
                <a href="{{route('meetings.create')}}" class="ui button teal">Create</a>
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th>No.</th>
      <th>Time</th>
      <th>Date</th>
      <th>Meeting Title</th>
      <th>Agenda</th>
      <th>Type</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($meetings as $value)
    <tr>
      <th><?php echo $i++; ?></th>
      <td>{{$value->time}}</td>
      <td>{{$value->date_en}}</td>
      <td>{{$value->meeting_title_en}}</td>
      <td style="width:40%;">{{$value->agenda}}</td>
      <td>{{$value->type}}</td>
      <td>
        <form action="{{route('meetings.destroy',$value->id)}}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a href="{{route('meetings.edit',$value->id)}}" class="ui button blue tiny">Edit</a>
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
