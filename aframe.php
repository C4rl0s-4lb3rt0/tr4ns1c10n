<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>A-frame</title>
	</head>
	<style>
		/*.marco{
			height: 400px;
			width: auto;
		}*/
	</style>
		<script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
	<body>
		<!-- <h1>A-Frame</h1> -->
		<!-- primer  -->
			<!--<a-scene>
		      <a-box position="-1 0.5 -3" rotation="0 45 45" color="#4CC3D9"></a-box>
		      <a-sky color="#ECECEC"></a-sky>
		    </a-scene> -->
		
		<!-- Segundo  -->
		<!-- <a-scene>
	    	<a-torus-knot height="2" width="2"></a-torus-knot>
	    	<a-camera position="0 0 3" user-height="0" ></a-camera>
	    	<a-light type="directional" color="blue" position="-1 1 0"></a-light>
			<a-light type="point" color="magento" position="0 2 0"></a-light>
	    </a-scene> -->
	    
	    <!-- Tercero -->
	    <!-- <div class="marco"> -->
             	<!-- <a-animation attribute="position" from="1 1 1" to="2 4 -8" dur="20000" repeat="indefinite"></a-animation> -->
		    <a-scene>
				<a-camera position='0 0 3' user-height='0'></a-camera>
			    <a-sphere src="./assets/img/sun.jpg" radius="1" segments-height="53" position="0 0 0" height="0.2" width="0.2">
						<a-animation attribute="rotation"
				              dur="20000"
				              from= "0 0 0"
				              to="0 360 0"
				              easing= "linear"     
				              repeat="indefinite">
	          			</a-animation>
		    	</a-sphere>
			    <a-sphere src="./assets/img/earth.jpg" radius="1" segments-height="53" position="0 1 -10" height="0.2" width="0.2">
						<a-animation attribute="rotation"
				              dur="20000"
				              from= "0 0 0"
				              to="0 360 0"
				              easing= "linear"     
				              repeat="indefinite">
	          			</a-animation>
			     </a-sphere>
			     <a-sphere src="./assets/img/mars.jpg" radius="1" segments-height="53" position="1 1 -15">
						<a-animation attribute="rotation"
				              dur="20000"
				              from= "0 0 0"
				              to="0 360 0"
				              easing= "linear"     
				              repeat="indefinite">
	          			</a-animation>
			     </a-sphere>
			     <a-sphere src="./assets/img/mercury.jpg" radius="1" segments-height="53" position="-1 -1 -22" >
						<a-animation attribute="rotation"
				              dur="20000"
				              from= "0 0 0"
				              to="0 360 0"
				              easing= "linear"     
				              repeat="indefinite">
	          			</a-animation>
			     </a-sphere>
			    <a-sky color="black" rotation="0 -90 0"></a-sky>
			</a-scene>
	    	
	    <!-- </div> -->
		<!-- Cuarto -->
		<!-- <a-scene>
			<a-assets>
		    	<img id="reflection" src="./assets/img/galaxy.jpg">
	    		<img id="sky" src="./assets/img/galaxy.jpg">
			</a-assets>
		 	<a-torus-knot material="src:#reflection" color="white" depth=".5" height="0.1" width=".1">
		   	<a-animation attribute="rotation"
		              dur="5000"
		              from= "0 0 0"
		              to="0 360 0"
		              easing= "linear"     
		              repeat="indefinite"></a-animation>
		  	</a-torus-knot>
		  
		  	<a-sky src="#sky"></a-sky>		 
		</a-scene> -->
	</body>
</html>