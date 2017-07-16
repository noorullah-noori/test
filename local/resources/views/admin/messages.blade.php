@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
           <h2 class="ui block header ">Messages</h2>
              <div class="container pull-left">
                <!-- <a href="{{route('messages.create')}}" class="btn btn-info">Create</a> -->
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Description</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($messages as $value)
    <tr>
      <th><?php echo $i++; ?></th>
      <td>{{$value->name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->subject}}</td>
      <td>{{$value->description}}</td>
      <td>
        <!-- <a href="{{route('messages.destroy',$value->id)}}" >Delete</a> -->
        <form action="{{ route('messages.destroy', $value->id) }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button class="ui tiny button red" onclick="">Delete</button>
        </form>
      </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
</section>

@include('admin.include.footer')
