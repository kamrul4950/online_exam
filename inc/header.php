<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php');
Session::init();
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
	
	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});
	$db = new Database();
	$fm = new Format();
	$usr = new User();
	$exm = new Exam();
	$pro = new Process();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html>
<head>
	<title>Online Exam System</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
<script src="js/jssor.slider-22.2.16.min.js" type="text/javascript"></script>
<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 960);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
	
<?php
		if(isset($_GET['action']) && $_GET['action'] == 'logout'){
			Session::destroy();
			header("Location:index.php");
			exit();
		}
	
?>

<div class="phpcoding">
	
		<section class="headeroption">
			<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:960px;height:300px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/02.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/04.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/05.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/09.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
			
		</section>
		<div>
			<marquee><h1 style="color:#3933FF;">Welcome To City University Online Exam System.</h1></marquee>
		</div>

		<section class="maincontent">
		<div class="menu">
		
			
		
		<ul>
			<?php
				$login = Session::get("login");
				if($login == true){
					
			?>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="exam.php">Exam</a></li>
			<li><a href="?action=logout">Logout</a></li>
				<?php } else{ ?>
			<li><a href="register.php">Register</a></li>
			<li><a href="index.php">Login</a></li>
				<?php }?>
		</ul>
		<?php
				$login = Session::get("login");
				if($login == true){
					
		?>
		<span style="float:right;color:#888">
			Welcome <strong><?php echo Session::get("name"); ?></strong>
		</span>
		<?php }?>
		</div>
	