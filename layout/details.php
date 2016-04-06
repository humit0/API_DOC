<html ng-app="myApp">
<head>
	<meta charset="utf-8">
	<meta name="author" content="humit">
	<meta name="description" content="API 상세 내용입니다.">
	<meta name="keywords" content="API">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>API 상세 보기</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
</head>
<body>
	<div class="container" ng-controller="MainCtrl">
		<div class="row">
			<nav>
			  <div class="nav-wrapper">
			  	<div class="col s12">
				  <a href="#!" class="breadcrumb">First</a>
				  <a href="#!" class="breadcrumb">Second</a>
				  <a href="#!" class="breadcrumb">Third</a>
			  	</div>
			  </div>
			</nav>
		</div>
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
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
	<script>
		var myApp = angular.module('myApp', []);
		myApp.controller('MainCtrl', ['$scope', function ($scope) {
			$scope.request_method = 'GET';
			$scope.request_name = '전체 회원 출력';
			$scope.request_url = '/api/user/{userid}';
		}]);
	</script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script type="text/javascript">
		jQuery(".item").click(function(){
			var idx = $(this).children("input[name=no]").val();
		})
	</script>
</body>
</html>
