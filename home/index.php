<!DOCTYPE html> 
<html lang="pt-BR">   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">

	<!-- <link rel="shortcut icon" href="../includes/assets/img/LOGO-HOME-V1.png" type="image/x-icon"> -->
	<link rel="icon" href="../includes/assets/img/LOGO-HOME-REAL.png" type="image/png">

    <link rel="stylesheet" type="text/css" href="../includes/assets/css/home.css?<?=time() ?>">
    <link rel="stylesheet" type="text/css" href="../includes/assets/css/IpseityNavbarLargeStyle.css?<?=time() ?>">
    <link rel="stylesheet" type="text/css" href="../includes/assets/css/IpseityNavbarSmallStyle.css?<?=time() ?>">
    <link rel="stylesheet" type="text/css" href="../includes/assets/css/IpseitySlideStyle.css?<?=time() ?>">
    <link rel="stylesheet" type="text/css" href="../includes/assets/css/IpseityHeroStyle.css?<?=time() ?>">
    <link rel="stylesheet" type="text/css" href="../includes/assets/css/IpseityDropdownStyle.css?<?=time() ?>">
    <link rel="stylesheet" type="text/css" href="../includes/assets/css/IpseityFeatureStyle.css?<?=time() ?>">
    <link rel="stylesheet" type="text/css" href="../includes/assets/css/IpseityCardStyle.css?<?=time() ?>">
    <link rel="stylesheet" type="text/css" href="../includes/assets/css/IpseityAccordionStyle.css?<?=time() ?>">
    <link rel="stylesheet" type="text/css" href="../includes/assets/css/IpseityFooterStyle.css?<?=time() ?>">
    <link rel="stylesheet" type="text/css" href="../includes/assets/css/IpseityTowercardStyle.css?<?=time() ?>">
    <script type="text/javascript" src="../includes/assets/js/IpseityNavbarLargeScript.js?<?=time() ?>"></script>
    <script type="text/javascript" src="../includes/assets/js/IpseityNavbarSmallScript.js?<?=time() ?>"></script>
    <script type="text/javascript" src="../includes/assets/js/IpseitySlideScript.js?<?=time() ?>"></script>
    <script type="text/javascript" src="../includes/assets/js/IpseityAccordionScript.js?<?=time() ?>"></script>
    <script type="text/javascript" src="../includes/assets/js/IpseityCardScript.js?<?=time() ?>"></script>
    <script type="text/javascript" src="../includes/assets/js/IpseityTowercardScript.js?<?=time() ?>"></script>
    <title>Home</title>
</head>
<body>

	<div class="home">

		<div class="home__header">
			<?
				include 'widget/IpseityNavbarLargeWidget.php';
				include 'widget/IpseityNavbarSmallWidget.php';
			?>
		</div>
		<div class="home__body">
			<?
				include 'widget/IpseitySlideWidget.php';
				include 'widget/IpseityTowercardWidget.php';
				include 'widget/IpseityHeroWidget.php';
				include 'widget/IpseityDropdownWidget.php';
				include 'widget/IpseityDropdownWidget.php';
				include 'widget/IpseityFeatureWidget.php';
				include 'widget/IpseityCardWidget.php';
				include 'widget/IpseityAccordionWidget.php';
			?>
		</div>

		<div class="home__footer">
			<?
				include 'widget/IpseityFooterWidget.php';
			?>
		</div>
    </div>

</body>
</html>