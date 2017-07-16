@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Users</h2>
        </div>
<div class="container pull-left" style="margin:10px;">
    <a href="{{route('register')}}" class="ui button teal">Create</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($users as $user)
    <tr>
      <th><?php echo $i++; ?></th>
      <td style="width:10%;">{{$user->name}}</td>
      <td style="width:10%;">{{$user->email}}</td>
      <td style="width:29%;">{{$user->password}}</td>
      <td>
      <form action="{{ route('delete_user', $user->id) }}" method="POST">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <a href="{{route('edit_user',$user->id)}}" class="ui tiny button blue ">Edit</a>
          <button class="ui tiny button red " onclick="return confirm_submit()">Delete</button>
      </form>
     
        
      </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
</section>

@include('admin.include.footer')