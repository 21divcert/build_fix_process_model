<?php
   include "../lib/mysql.php";
   $name = $_POST["name"];
   $id = $_POST["id"];
   $pass = $_POST["pass"];
   $email = $_POST["email"];
   $name = $_POST["name2"];
   $sql = "INSERT INTO user (user_id, user_pw, user_kakao_mail, user_kakao_nick, user_img, user_k) VALUES('$id','$pass','$email','$name','http://k.kakaocdn.net/dn/dpk9l1/btqmGhA2lKL/Oz0wDuJn1YV2DIn92f6DVK/img_640x640.jpg',0)";
   $result = mysqli_query($conn,$sql);
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
<?php
   }
?>