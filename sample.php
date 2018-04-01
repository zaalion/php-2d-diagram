<?php
	set_time_limit(600);
	include("parametric_diagram.class.php");
	//new function_diagram(horizental dimention, vertical dimention, background color_red_, background color_green_, 
	//						background color_blue_,  arc color_red_, arc color_green_, arc color_blue_, function_x, function_y , 
	//						calculation step, parameter to determine grid drawing);
	//---- a test, gets these parameters from index.html as a form . 
	$show=new parametric_diagram($_POST["t_start"],$_POST["t_end"],$_POST["x"],$_POST["y"],$_POST["br"],$_POST["bg"],$_POST["bb"],$_POST["ar"],$_POST["ag"],$_POST["ab"],$_POST["eqx"],$_POST["eqy"],$_POST["step"],$_POST["hasgrid"]);
	//---- call draw mwthod of created object to get the diagram as a jbg file.
	$show->draw();	
?>