@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Stories</h2>
          
            <div class="container pull-left">
                <a href="{{route('stories.create')}}" class="ui button teal">Create</a>
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th>No.</th>
      <th>Title</th>
      <th>Description</th>
      <th>Author</th>
      <th>Publised Date</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($stories as $value)
    <tr>
      <th><?php echo $i++; ?></th>
      <td style="width:15%;">{{$value->title_en}}</td>
      <td style="width:40%;">{{$value->description_en}}</td>
      <td>{{$value->author_en}}</td>
      <td>{{$value->date_en}}</td>
      <td>
        <form action="{{route('stories.destroy',$value->id)}}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a href="{{route('stories.edit',$value->id)}}" class="ui button blue tiny">Edit</a>
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
