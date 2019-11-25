<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
?>
<style>
.starttest {
 width: 590px;
 padding: 20px;
 margin: 0 auto;
 border: 1px solid #DCB;
}
.starttest a{
    background: #F4F4E9;
    text-align: center;
    display: block;
    margin-top: 10px;
    padding: 6px 10px;
    text-decoration: none;
</style>

<div class="main">
	<h1>You Are Done ..!!</h1>
		<div class="starttest">
		<p>Congrats ! You have just completed the test.</p>
		<p>Final Score: 
			<?php
				if(isset($_SESSION['score'])){
					echo $_SESSION['score'];
					unset($_SESSION['score']);
				}
			?>
		</p>
		
		<a href="viewans.php">View Answer</a>
		<a href="starttest.php">Start Again</a>
		
	</div>
	
 </div>
<?php include 'inc/footer.php'; ?>