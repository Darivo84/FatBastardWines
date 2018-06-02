<html>
<head>
	<title></title>
</head>
<body>
<?php
$json = '{

"user": [{"name":"kk"},
{"surname":"kk"},
{"email":"k@k.com"},
{"tel":"08288998989"},
{"date_of_birth":"11/7/1944"},
{"location":"Limpopo"},
{"answer":"john_and_paul"},
{"subscribe":"yes"}],"user": [{"name":""},
{"surname":""},
{"email":""},
{"tel":""},
{"date_of_birth":"//"},
{"location":""},
{"answer":""},
{"subscribe":"yes"}],"user": [{"name":"kk"},
{"surname":"kk"},
{"email":"k@k.com"},
{"tel":"08288998989"},
{"date_of_birth":"7/5/1967"},
{"location":"Limpopo"},
{"answer":"mick_and_keith"},
{"subscribe":""}],"user": [{"name":"kk"},
{"surname":"kk"},
{"email":"k@k.com"},
{"tel":"08288998989"},
{"date_of_birth":"5/4/1972"},
{"location":"Gauteng"},
{"answer":"mick_and_keith"},
{"subscribe":""}],"user": [{"name":"kk"},
{"surname":"Sur"},
{"email":"k@k.com"},
{"tel":"08288998989"},
{"date_of_birth":"8/5/1976"},
{"location":"Mpumalanga"},
{"answer":"john_and_paul"},
{"subscribe":""}]
}';

// var_dump(json_decode($json, true));
var_dump(json_decode($json));

// $mail = json_decode($json);

// echo $mail;
 ?>


</body>
<script src="node_modules/indexeddbshim/dist/indexeddbshim.min.js"></script>

  <script src="js/db.js"></script>
  <script src="js/app.js"></script>
</html>
