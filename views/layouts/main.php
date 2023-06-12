<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
<!-- 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Katen - Minimal Blog & Magazine HTML Theme</title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png"> -->

	<!-- STYLES -->
	<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/simple-line-icons.css" type="text/css" media="all">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"> -->
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>

    <!-- header -->
	<header class="header-default">
		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">
				<!-- site logo -->
				<a class="navbar-brand" href="/"><img src="/images/logo.svg" alt="logo" /></a> 

				<div class="collapse navbar-collapse">
					<!-- menus -->
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link" href="/">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/category">Lifestyle</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/category">Inspiration</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="/#">Pages</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="/mahasiswa">Mahasiswa</a></li>
								<li><a class="dropdown-item" href="/pendidikan">Pendidikan</a></li>
								<li><a class="dropdown-item" href="/category">Category</a></li>
								<li><a class="dropdown-item" href="/blog-single">Blog Single</a></li>
								<li><a class="dropdown-item" href="/blog-single-alt">Blog Single Alt</a></li>
								<li><a class="dropdown-item" href="/about">About</a></li>
								<li><a class="dropdown-item" href="/contact">Contact</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact">Contact</a>
						</li>
					</ul>
				</div>

				<!-- header right section -->
				<div class="header-right"> -->
					<!-- header buttons -->
					<div class="header-buttons">
						<button class="search icon-button">
							<i class="icon-magnifier"></i>
						</button>
						<button class="burger-menu icon-button">
							<span class="burger-icon"></span>
						</button>
					</div>
				</div>
			</div>
		</nav>
	</header>

    <!-- section main content -->
	<section class="main-content">
		<div class="container-xl">
			<div class="row gy-4">
                <?= $content ?>
			</div>
		</div>
	</section>

    <!-- footer -->
	<footer>
		<div class="container-xl">
			<div class="footer-inner">
				<div class="row d-flex align-items-center gy-4">
					<!-- copyright text -->
					<div class="col-md-4">
						<span class="copyright">© 2021 Katen. Template by ThemeGer.</span>
					</div>

					<!-- social icons -->
					<div class="col-md-4 text-center">
						<ul class="social-icons list-unstyled list-inline mb-0">
							<li class="list-inline-item"><a href="#"><i class="fab fa-facebook icon-social-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter icon-social-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-instagram icon-social-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest icon-social-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-youtube icon-social-youtube"></i></a></li>
						</ul>
					</div>

					<!-- go to top button -->
					<div class="col-md-4">
						<a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!-- JAVA SCRIPTS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery.sticky-sidebar.min.js"></script>
    <script src="/js/custom.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
