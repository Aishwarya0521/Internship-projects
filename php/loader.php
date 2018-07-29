<?php
include 'config.php';


?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.loader {
  position: absolute;

  left: 50%;
  top: 50%;
  z-index: 1;
  width: 50px;
  height: 50px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  border-bottom: 16px solid #3498db;
  width: 20px;
  height: 20px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}
.logo {
            width: 300px;
            height: 70px;
            margin: 150px auto 50px auto;
            font-size: 50px;
            text-shadow: -1px 2px 2px #000;
            text-align: center;
            color: azure;
            background-color:black;
            font-family:sherif;
        }

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}


.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s;
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

.myDiv {
  display: none;


}
</style>
</head>
<body onload="myFunction()" style="background-color:black">
<div class="logo">
 <span>Home Heaven</span>
</div>
    
<div style="display:none;" class="myDiv" class="animate-bottom"></div>
<div class="loader"></div>
<script> 
(function () {
        var preload = document.getElementById("preload");
        var loading = 0;
        var id = setInterval(frame, 15);

        function frame() {
            if (loading == 100) {
                clearInterval(id);
                window.open("dashboard.php","_self");
            }
            else {
                loading = loading + 1;
                if (loading == 90) {
                    preload.style.animation = "fadeout is ease";
                }
            }

        }
    })();
</script>
</body>
</html>
