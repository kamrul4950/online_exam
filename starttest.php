<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
	$question = $exm->getQuestion();
	$total = $exm->getTotalRows();
?>
<style>
.starttest {
    width: 590px;
    padding: 20px;
    margin: 0 auto;
    border: 1px solid #DCB;
}

.starttest h2{
	border-bottom:1px solid #ddd;
	font-size:25px
	margin-bottom:10px;
	padding-bottom:10px;
	text-align:center;
}
.starttest ul{margin:0;padding:0; list-style:none;}
.starttest ul li{margin-top:5px;}
.starttest a{
    background: #F4F4E9;
    text-align: center;
    display: block;
    margin-top: 10px;
    padding: 6px 10px;
    text-decoration: none;
}
</style>

<div class="main">
<h1>Welcome to Online Exam</h1>
	<div class="starttest">
		<h2>Test Your Knowledge</h2>
		<p>This is multiple choice quiz to test your knowledge</p>
		<ul>
			<li><strong>Number of Questions: </strong><?php echo $total; ?></li>
			<li><strong>Question Type: </strong>Multiple Choice</li>
			<a href="test.php?q=<?php echo $question['quesNo']; ?>">Start Test</a>
		</ul>
	</div>
	
</div>
<?php include 'inc/footer.php'; ?>