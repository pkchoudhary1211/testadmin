<html>
  <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
  </head>
  <body>
<form>
  {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
  {!! Form::select('name', ['L' => 'Large', 'S' => 'Small'], 'L',['class' => 'form-control']) !!}
  {!! Form::selectMonth('month','',['class' => 'form-control']); !!}
</form>
 
    <input id="cities" class="form-control" value="" placeholder="Enter Tags" data-role="tagsinput" type="text">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
    <script>
      $(function() {
        $('#cities').tagsinput({
          maxTags: 3
        });
      });
    </script>
  </body>
</html>