<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="humit">
	<meta name="description" content="API 문서 목록입니다.">
	<meta name="keywords" content="API">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>API 문서</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
</head>
<body>
	<div class="container">
		<h3>API Document</h3>
		<h4><a href="#User" id="User">User</a></h4>
		<table class="bordered">
			<thead>
				<tr>
					<th data-field="method" style="width:1%;" class="center-align">Method</th>
					<th data-field="spec">Specification</th>
					<th data-field="path">Path</th>
					<th data-field="build-version" style="width:1%">Version</th>
					<th data-filed="last-updated-date" class="center-align">Last Updated</th>
				</tr>
			</thead>
			<!--
			<?
			$arr = array('no' => 1, 'method'=>'GET', 'spec'=>'전체 회원 출력',
				'path' => '/api/user/', 'ver'=>'1.0.0', 'update'=>'20160320');
			 ?>
			<?
			"SELECT DISTINCT * FROM information_schema.tables WHERE 1";
			?>
			-->
			<tbody>
				<tr class="item">
					<input type="hidden" name="no" value=1>
					<td class="center-align"><a class="col s12 btn btn-block green">GET</a></td>
					<td>전체 회원 출력</td>
					<td>/api/user/</td>
					<td class="center-align">1.0.0</td>
					<td class="center-align">20160320</td>
				</tr>
				<tr class="item">
					<input type="hidden" name="no" value=2>
					<td class="center-align"><a class="col s12 btn btn-block blue">POST</a></td>
					<td>회원정보 출력</td>
					<td>/api/user/{id}</td>
					<td class="center-align">1.0.0</td>
					<td class="center-align">20160320</td>
				</tr>
				<tr class="item">
					<input type="hidden" name="no" value=3>
					<td class="center-align"><a class="col s12 btn btn-block orange">PUT</a></td>
					<td>회원정보 업데이트</td>
					<td>/api/user/{id}</td>
					<td class="center-align">1.0.0</td>
					<td class="center-align">20160320</td>
				</tr>
				<tr class="item">
					<input type="hidden" name="no" value=4>
					<td class="center-align"><a class="col s12 btn btn-block red">DELETE</a></td>
					<td>회원 탈퇴</td>
					<td>/api/user/{id}</td>
					<td class="center-align">1.0.0</td>
					<td class="center-align">20160320</td>
				</tr>
			</tbody>
		</table>

		<h4><a href="#Timeline" id="Timeline">Timeline</a></h4>
		<table class="bordered">
			<thead>
				<tr>
					<th data-field="method" style="width:1%;" class="center-align">Method</th>
					<th data-field="spec">Specification</th>
					<th data-field="path">Path</th>
					<th data-field="build-version" style="width:1%">Version</th>
					<th data-filed="last-updated-date" class="center-align">Last Updated</th>
				</tr>
			</thead>
			<tbody>
				<tr class="item">
					<input type="hidden" name="no" value=5>
					<td class="center-align"><a class="col s12 btn btn-block green">GET</a></td>
					<td>전체 타임라인 출력</td>
					<td>/api/timeline/</td>
					<td class="center-align">1.0.0</td>
					<td class="center-align">20160320</td>
				</tr>
				<tr class="item">
					<input type="hidden" name="no" value=6>
					<td class="center-align"><a class="col s12 btn btn-block blue">POST</a></td>
					<td>타임라인 포스팅</td>
					<td>/api/timeline/{id}</td>
					<td class="center-align">1.0.0</td>
					<td class="center-align">20160320</td>
				</tr>
				<tr class="item">
					<input type="hidden" name="no" value=7>
					<td class="center-align"><a class="col s12 btn btn-block orange">PUT</a></td>
					<td>타임라인 내용 업데이트</td>
					<td>/api/timeline/{id}</td>
					<td class="center-align">1.0.0</td>
					<td class="center-align">20160320</td>
				</tr>
				<tr class="item">
					<input type="hidden" name="no" value=8>
					<td class="center-align"><a class="col s12 btn btn-block red">DELETE</a></td>
					<td>타임라인 내용 삭제</td>
					<td>/api/timeline/{id}</td>
					<td class="center-align">1.0.0</td>
					<td class="center-align">20160320</td>
				</tr>
			</tbody>
		</table>
		<!--
		<a class="col s12 btn btn-block green">GET</a>
		<a class="col s12 btn btn-block blue">POST</a>
		<a class="col s12 btn btn-block orange">PUT</a>
		<a class="col s12 btn btn-block red">DELETE</a>
		-->
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<script type="text/javascript">
		//jQuery(".item").click(function(){
		jQuery('div.container').on('click','.item',function(){
			var idx = $(this).children("input[name=no]").val();
			console.log(idx+" clicked!");
		});
	</script>
</body>
</html>
