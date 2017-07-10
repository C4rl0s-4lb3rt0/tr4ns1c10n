<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parallax</title>
	<link rel="stylesheet" href="assets/css/parallax.css">
</head>
<style>
	.container{
		height: 200vh;
		width: 800px;
		margin: 0 auto;
		text-align: center;
	}
	.iphone{
		display: inline-block;
		margin-top: 150px;
		position: relative;
		transition: .1s;
	}
	.shape{
		background-image: url(assets/img/mask.jpg);
		width: 128px;
		height: 128px;
		position: absolute;
		top:75px;
		right: 161px;
		background-position: -54px;
		-webkit-mask-image: url('assets/img/apple.png');
		mask-image: url('assets/img/apple.png');
	}
</style>
<body>
	<section class="container">
		<figure class="iphone" id="iphone">
			<img src="assets/img/iphone.jpg" height="424" width="738" alt="">
			<div class="shape" id="mask"></div>
			<!-- <img src="assets/img/pink-iPhone-6s.png" width="800" alt=""> -->
		</figure>
	</section>
	<script>
		const $iphone = document.getElementById('iphone');
		const $mask = document.getElementById('mask');
		window.addEventListener('scroll',function(e){
			console.log(window.scrollY);
			// $iphone.style.ba = window.scrollY +  'px';
			var position = 54 + window.scrollY;
			$mask.style.backgroundPosition = '-' + position + 'px';
			$iphone.style.transform = 'rotate(-'+ position*0.02+'deg)';
		});
	</script>
</body>
</html>