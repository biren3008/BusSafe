<?php

	include 'connection.php';
	
	$queryData = mysql_query("SELECT * FROM showeasycabs") or die(mysql_error());
	
	include 'delete_easycabs.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Hire | Biren Patel</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
<script src="jquery.jclock-1.2.0.js.txt" type="text/javascript"></script>
<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script type="text/javascript">
$(function($) {
    $('.jclock').jclock();
});
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<div id="main_container">

		<?php
			include('header1.php');
		?>
    
    <div class="main_content">
    
        <?php
			include('menu1.php');
		?>
	
    <div class="left_content">
 	</div>
    <div class="">
    <div class="center_content">    
    <h1></h1>
    <br />
	<div align="center">
        <?php if (mysql_num_rows($queryData) > 0): ?>
	    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" class="niceform">
	    <table width="979" id="rounded-corner" summary="2007 Major IT Companies' Profit">
            <thead>
                <tr>
                    <th class="rounded-company" scope="col"></th>
                    <th align="center" class="rounded" scope="col">Name</th>
                    <th align="center" class="rounded" scope="col">Email ID</th>
                    <th align="center" class="rounded" scope="col">Mobile Number</th>
                    <th align="center" class="rounded" scope="col">Pick Up Date</th>
                    <th align="center" class="rounded" scope="col">Pick Up City</th>
                    <th align="center" class="rounded" scope="col">Address</th>
                    <th align="center" class="rounded-q4" scope="col">Drop Location</th>
                </tr>
            </thead>
        
            <tbody>
            <?php while ($row = mysql_fetch_assoc($queryData)){ ?>
                <tr>
                    <td><input type="checkbox" name="multiple[]" value="<?php echo $row['ID']; ?>"></td>
                    <td align="center"><?php echo $row['Name'] ?></td>
                    <td align="center"><?php echo $row['Email'] ?></td>
                    <td align="center"><?php echo $row['Mobile Number'] ?></td>
                    <td align="center"><?php echo $row['Pick Up Date'] ?></td>
                    <td align="center"><?php echo $row['Pick Up City'] ?></td>
                    <td align="center"><?php echo $row['Pick Up Address'] ?></td>                    
                    <td align="center"><?php echo $row['Drop Location'] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        
		<form action="" method="post" class="niceform">
			<fieldset> 
				<dl class="submit">
                    <input type="submit" name="delete" id="submit" value="Booking Cancle" />
				</dl>
			</fieldset>
		</form>
    </form>
	<?php else: ?>
	<h2>No Data to Display</h2>
    <?php endif; ?>        
        
    </div>
    </div>
    </div>    <!-- end of right content-->

        <div class="clear"></div>
    
    </div> <!--end of main content-->
	
    
   <?php
		include('footer.php');
	?>

</div>
    <script type="text/javascript">
		var toggle = document.getElementById('toggle');
		
		toggle.onclick = function (){
			
			var multiple = document.getElementsByName('multiple[]');
			
			for (i = 0; i < multiple.length; i ++) {
				
				multiple[i].checked = this.checked;	
			}
		}
	</script>
</body>
</html>