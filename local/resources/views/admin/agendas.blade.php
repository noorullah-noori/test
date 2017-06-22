@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Agendas</h2>
          
            <div class="container pull-left">
                <a href="{{route('agendas.create')}}" class="ui button teal">Create</a>
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th>No.</th>
      <th>Time</th>
      <th>Agenda</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($agendas as $value)
    <tr>
      <th><?php echo $i++; ?></th>
      <td>{{$value->time}}</td>
      <td style="width:45%;">{{$value->agenda}}</td>
      <td>
        <form action="{{route('agendas.destroy',$value->id)}}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a href="{{route('agendas.edit',$value->id)}}" class="ui button blue tiny">Edit</a>
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
