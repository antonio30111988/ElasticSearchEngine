<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
		<link href="{{ url('css/app.css')}}" rel="stylesheet" />
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	</head>
    <body>
    	<div class="container">
    		@yield('content')
    	</div>

    	<!-- JAVASCRIPT -->  
	    	<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
		<script src="{{ URL::to('js/modal.js') }}"></script>
		<script type="text/javascript">
		  $('select').select2(
		  {
			  tags: true,
			  createTag: function (params) {
				return {
				  id: params.term,
				  text: params.term,
				  newOption: true
				}
			  },
			  templateResult: function (data) {
				var $result = $("<span></span>");

				$result.text(data.text);

				if (data.newOption) {
				  $result.append(" <em>(new)</em>");
				}

				return $result;
			  }
			}		
		  );
		  selectData=$('select').select2('data');
		   console.log("select dsta "+selectData);
		</script>
    </body>
</html>