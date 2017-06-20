<!DOCTYPE html>
<html>
<head>
  <link href="{{asset('css/semantic.min.css')}}" rel="stylesheet" />
  <title></title>
</head>
<body>
<div class="ui">
<div class="ui container">
  <div class="ui right floated pointing secondary menu">
  	<div class="item">Home</div>
  	<div class="ui pointing dropdown link item">
  		About
  		<i class="icon dropdown"></i>
  		<div class="menu">
  			<div class="item">about us</div>
  			<div class="ui pointing dropdown link item">
  				more
  				<i class="icon dropdown">
  					<div class="menu">
  						<div class="item">abc</div>
  						<div class="item">cde</div>
  					</div>
  				</i>
  			</div>
  		</div>
  	</div>
  </div>
</div>
</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/semantic.min.js')}}"></script>
<script>
	 $('.dropdown').dropdown({transition: 'drop' }).dropdown({ on: 'hover' });
</script>
</body>
</html>