<style>
	#header
	{
		background-color: gray;
		padding: 5px;
		margin-bottom: 0px;
	}
	
	#logOut_btn
	{
		text-align: right;
		padding: 0;
		margin-right:20px;
	}
	
	#logout_lbl
	{
		text-decoration: none;
		color: white;
	}
</style>

<div id="header">
<img src="{{asset("image/mls_logo.png")}}">
	<?php 
		// if($_SESSION['currentPage'] != "LoginController")
		// {
		// 	echo "<div id=\"logOut_btn\"><a href=\"LoginController.php\"><label id=\"logout_lbl\">Log Out</label></a></div>";
		// }
	?>
</div>








