<!DOCTYPE html>
<html>
<head>
	<style>
		  *{
	  margin: 0;
	  padding: 0;
	  text-decoration: none;
	  list-style: none;
	  box-sizing: border-box;
	  font-family: 'Inter';
  }
  .full{
	  position: relative;
	  width: 100%;
	  height: 100vh;
	  background-color: #FFA500;
	  display: flex;
	  justify-content: center;
	  flex-direction: column;
	  align-items: center;
  }
  header{
	  position: relative;
	  width: 85%;
	  /* height: 100%; */
	  padding-top: 20px;
	  padding-bottom: 15px;
	  display: flex;
	  justify-content: space-between;
	  align-items: center;
  }
  .login_section{
	  position: relative;
	  width: 100%;
	  height: 100vh;
	  display: flex;
	  justify-content: center;
  }
  .login_wrap{
	  position: relative;
	  width: 85%;
	  height: 100%;
  }
  .logo_area{
	  position: relative;
	  width: 100%;
	  height: 30%;
	  display: flex;
	  justify-content: center;
	  align-items: center;
  }
  .weather{
	  position: relative;
	  width: 60px;
	  height: 100%;
	  display: flex;
	  flex-direction: column;
	  justify-content: center;
	  align-items: center;
  }
  .weather>p>img{
	  width: 40px;
	  
  }
  .weather>p{
	  font-size: 18px;
	  
  }
  .login_area{
	  position: relative;
	  width: 100%;
	  height: 70%;
  }
  .login_title{
	  position: relative;
	  width: 100%;
	  height: 100px;
	  display: flex;
	  justify-content: center;
	  align-items: center;
  }
  .login_title>p{
	  font-size: 25px;
	  color: #562900;
	  font-weight: 600;
  }
  .login_area>ul{
	  position: relative;
	  width: 100%;
	  height: 270px;
  }
  .login_area>ul>li{
	  position: relative;
	  width: 100%;
	  height: 50px;
  }
  .login_area>ul>li{
	  margin-bottom: 20px;
  }
  .login_input{
	  position: relative;
	  width: 100%;
	  height: 50px;
	  border: none;
	  border-bottom: 2px solid #562900;
	  outline: none;
	  font-size: 18px;
	  font-weight: 600;
  }
  .login_btn{
	  position: relative;
	  width: 100%;
	  height: 50px;
	  background-color: #562900;
	  font-size: 18px;
	  color: white;
	  font-weight: 600;
	  border: none;
	  border-radius: 8px;
	  cursor: pointer;
  }
  .login_area>ul>li:nth-child(2){
	  margin-bottom: 40px;
  }
  .login_area>ul>li:nth-child(4){
	  display: flex;
	  justify-content: space-between;
	  margin: 0;
  }
  .login_area>ul>li>p>a{
	  color: #454545;
  }
  .login_area>i{
	  display: flex;
	  justify-content: center;
	  height: 20px;
	  font-style: normal;
  }
  .login_area>i>span{
	  position: absolute;
	  width: 100%;
	  display: block;
	  border-top: 1px solid #562900;
	  margin-top: 10px;
  }
  .login_area>i>p{
	  position: absolute;
	  z-index: 999;
	  padding: 0px 5px;
	  background-color: white;
	  color: #562900;
  }
  .kakao_login{
	  position: relative;
	  width: 100%;
	  height: 50px;
	  background-color: #FFEB3B;
	  border-radius: 8px;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  margin-top: 30px;
  }
  .kakao_login>a{
	  display: block;
	  width: 100%;
	  height: 100%;
	  display: flex;
	  justify-content: center;
	  align-items: center;
  }
  .kakao_login>a>div{
	  display: flex;
	  align-items: center;
  }
  .kakao_login>a>div>img{
	  margin-right: 5px;
	  width: 25px;
  }
  .kakao_login>a>div>p{
	  color: #422816;
	  font-weight: 600;
  }
  .logo_area{
	  position: relative;
	  width: 100%;
	  height: 30%;
	  display: flex;
	  justify-content: center;
	  align-items: center;
  }
	</style>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="manifest" href="manifest.json">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>어쩌다 제주</title>

    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="../css/bootstrap.css" />
    <link rel="stylesheet" media="all" href="../css/animate.css" />
    <link rel="stylesheet" media="all" href="../css/font-awesome.css" />
    <link rel="stylesheet" media="all" href="../css/linear-icons.css" />
    <link rel="stylesheet" media="all" href="../css/hotel-icons.css" />
    <link rel="stylesheet" media="all" href="../css/magnific-popup.css" />
    <link rel="stylesheet" media="all" href="../css/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="../css/datepicker.css" />
    <link rel="stylesheet" media="all" href="../css/theme.css" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=latin-ext" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <script type="module">
        import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';
        const el = document.createElement('pwa-update');
        document.body.appendChild(el);
    </script>
    <script>
  if (typeof navigator.serviceWorker !== 'undefined') {
    navigator.serviceWorker.register('sw.js')
  }
</script> -->
</head>
<link rel="stylesheet" href="css\style.css">
<body>
	<div class="page-loader"></div>
	<section class="login_section">
		<div class="login_wrap">
			<div class="logo_area">
				<span><img src="../images/logo.svg"></span>
			</div>
            <div class="login_area">
				<div class="login_title">
					<p>회원가입</p>
				</div>
			<form class="login_box" action="join_process.php" method="POST">
				<ul class="login_top join_top">
					<li>
						<input type="text" name="name" placeholder="이름" required class="login_input">
					</li>
					<li>
						<input type="text" name="id" placeholder="아이디" required class="login_input">
					</li>
					<li>
						<input type="email" name="email" placeholder="이메일" required class="login_input">
					</li>
					<li>
						<input type="password" name="pass" placeholder="비밀번호" required class="login_input">
					</li>
					<li>
						<input type="password" name="" placeholder="비밀번호 확인" required class="login_input">
					</li>
				</ul> <br>
				<div class="login_bottom">
					<div class="login_keep">
						<div style="float: left;"><input type="checkbox" id="myCheck"><label for="myCheck"></label></div>
						<div><label for="myCheck">&nbsp;서비스에 대한 소식을 이메일로 받아봅니다.</label></div>
					</div>
					<div class="login_keep">
						<div style="float: left;"><input type="checkbox" id="myCheck2"><label for="myCheck2"></label></div>
						<div><label for="myCheck2">&nbsp;서비스 약관에 동의합니다.</label></div>
					</div> <br>
					<li>
						<input type="submit" name="" value="회원가입" class="login_btn">
                    </li>
					<div class="login_footer">
						<p align="right"><a href="#">이용약관 | 개인정보처리방침</a></p>
					</div>
				</div>
			</form>
		</div>
	</section>
	<script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/jquery.bootstrap.js"></script>
    <script src="../js/jquery.magnific-popup.js"></script>
    <script src="../js/jquery.owl.carousel.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
