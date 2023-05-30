<!DOCTYPE html>
<html>
<head>
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
			<div class="logo">
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
