<?php
	session_start();
	$connect = mysqli_connect("localhost","root","","어쩌다제주");
	$id = $_POST["id"];
	$pass = $_POST["pass"];
	
	$sql = "INSERT INTO user (user_id,user_pw) VALUES('$id','$pass')";
	
	$result = mysqli_query($connect,$sql);
	if($result){
?>
		<script>
			alert("회원가입이 됐습니다. 로그인 해주세요.");
			location.href='./login.php';
			//<?php header('Location: ./login.php')?>
		</script>
<?php

	}else{
?>
		<script>
			alert("회원가입에 실패하셨습니다. 다시 시도해주세요.");
			location.href='./join.php';
			//<?php header('Location: ./login.php')?>
		</script>
<?php
	}
?>