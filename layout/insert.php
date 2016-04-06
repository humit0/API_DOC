<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="humit">
	<meta name="description" content="API 상세 내용입니다.">
	<meta name="keywords" content="API">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>API 추가하기</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
</head>
<body>
	<div class="container">
		<h3>Adding API</h3>
		<form action="">
			<div class="row">
				<div class="col s3">
					<label>Category</label>
					<select name="category" class="browser-default">
						<option value="1">category1</option>
						<option value="2">category2</option>
						<option value="3">category3</option>
						<option value="4">category4</option>
						<option value="5">category5</option>
					</select>
				</div>
				<div class="col s3">
					<label>Method</label>
					<select name="method" class="browser-default">
						<option value="1">GET</option>
						<option value="2">POST</option>
						<option value="3">PUT</option>
						<option value="4">DELETE</option>
					</select>
				</div>
				<div class="input-field col s4">
					<label>Name</label>
					<input type="text" name="name" class="validate">
				</div>
				<div class="input-field col s2">
					<label>URL</label>
					<input type="text" name="url" class="validate">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<label>Description</label>
					<textarea name="description" class="materialize-textarea"></textarea>
				</div>
			</div>
			<a class="waves-effect waves-light btn" id="load_params">Load url params</a>
			<label for="">URL Parameters</label>
			<div id="url_params">
				
			</div>
			<div id="header_params">
				
			</div>
			<br/>
			<button class="btn waves-effect waves-light" type="submit">Submit</button>
		</form>
		<!--
		<h4>[{{ request_method }}] {{ request_name }} ( <code>{{ request_url }}</code> )</h4>
		<div class="contents">
			<div class="details">
				<h5>Description</h5>
				전체 회원을 출력하는 API입니다.
			</div>

			<div class="url_param">
				<h5>URL parameter</h5>
				NULL
			</div>
			<div class="header_param">
				<h5>Header parameter</h5>
				NULL
			</div>
			<div class="response">
				<h5>Success Response</h5>
				TABLE
				<h5>Error Code</h5>
				TABLE
			</div>
		</div>
	-->
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script type="text/javascript">
		var re = /\{(\w+)\}/g;

		jQuery('div.container').on('click.load_params','#load_params', function(){
			var match;
			var url = jQuery('input[name=url]').val();
			//var url = "/api/{v}/users/{user_id}";
			console.log(url);
			var $t = jQuery('#url_params');
			$t.empty();
			while(match = re.exec(url)){
				//jQuery("<input type='text' style='color:black' name='hello' disabled value='"+match[1]+"'>").appendTo($t);
				//jQuery("<tr><td>"+match[1]+"<input type='hidden' name='url_param.name[]' value="+match[1]+"></td><td><input type='text' name='url_param.description[]'></td></tr>").appendTo($t);
				jQuery("<div class='input-field'><label>"+match[1]+"</label><input type='hidden' name='url_param.name[]' value="+match[1]+"><input type='text' name='url_param.description[]'></div>").appendTo($t);
			}

		});

	</script>
</body>
</html>
