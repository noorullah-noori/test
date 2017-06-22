@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive" style="background-color:white;padding-left:10px;padding-top:10px">
        <div class="row">
           <center><h2>Contacts</h2>
            </center>
            <div class="container pull-left">
                <a href="{{route('contacts.create')}}" class="ui button teal">Create</a>
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th>No.</th>
      <th>Address</th>
      <th>Facebook</th>
      <th>Twitter</th>
      <th>Google+</th>
      <th>Phone</th>
      <th>Fax</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($contacts as $value)
    <tr>
      <td><?php echo $i++; ?></td>
      <td>{{$value->address}}</td>
      <td>{{$value->fb}}</td>
      <td>{{$value->twitter}}</td>
      <td>{{$value->g_plus}}</td>
      <td>{{$value->phone}}</td>
      <td>{{$value->fax}}</td>
      <td>
        <form action="{{ route('contacts.destroy', $value->id) }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a href="{{route('contacts.edit',$value->id)}}" class="ui tiny button blue">Edit</a>
            <button class="ui tiny button red" onclick="return confirm_submit()">Delete</button>
        </form>
        
        <!-- <a href="{{route('contacts.destroy',$value->id)}}" class="btn btn-info btn-sm" onclick="return confirm_submit()">Delete</a> -->
      </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
</section>

@include('admin.include.footer')
