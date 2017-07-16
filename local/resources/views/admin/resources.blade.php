@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Resources</h2>
          
            <div class="container pull-left">
                <a href="{{route('resources.create')}}" class="ui button teal">Create</a>
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th>No.</th>
      <th>Title</th>
      <th>Description</th>
      <th>PDF</th>
      <th>Type</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($resources as $value)
    <tr>
      <th><?php echo $i++; ?></th>
      <td style="width:150px;">{{$value->title_en}}</td>
      <td style="width:450px;">{{$value->description_en}}</td>
      <td><a href="{{asset('uploads/reports/'.$value->pdf_en)}}" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
      <td>{{$value->type}}</td>
      <td>
        <form action="{{route('resources.destroy',$value->id)}}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a href="{{route('resources.edit',$value->id)}}" class="ui tiny button blue">Edit</a>
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
