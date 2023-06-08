<?php
	session_start();
	$connect = mysqli_connect("localhost","root","3220","ajdb");
	$id = $_POST["user_id"];
	$pass = $_POST["user_pw"];
	$email = $_POST["user_kakao_mail"];
	$name = $_POST["user_kakao_nick"];
	$sql = "INSERT INTO user (user_id,user_pw,user_kakao_mail,user_kakao_nick) VALUES('$id','$pass','$email','$name')";
	$result = mysqli_query($connect,$sql);
	if($result){
?>
		<script>
			alert("회원가입이 됐습니다. 로그인 해주세요.");
			location.href='./login.php';
		</script>
<?php

	}else{
?>
		<script>
			alert("회원가입에 실패하셨습니다. 다시 시도해주세요.");
			location.href='./join.php';
		</script>
<?php	}
?>