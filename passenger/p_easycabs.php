<?php
	include ('connection.php');
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
                    
    <div class="center_content">
      <div class="right_content" id="rounded-corner"> 
        
       
         <div class="form">
         <h2 align="left">Book Car</h2>
           <form action="create_easycabs.php" method="post" class="niceform">
         
                <fieldset> 
               	<dl>
                	<dt><label for="name">Name</label></dt>
                    <dd><input name="name" type="text" size="54" /></dd>
                </dl>
                
                <dl>
                    <dt><label for="email">Email Address</label></dt>
                    <dd><input type="text" name="email" id="" size="54" /></dd>
                </dl>

                <dl>
                	<dt><label for="email">Mobile Number</label></dt>
                    <dd><input type="text" name="mobile_number" id="" size="15" /></dd>
                </dl>
                
                <dl>
                	<dt><label for="name">Pick Up Date</label></dt>
                	<dd>
                   		<input type="date" name="pick_up_date" id="" size="" />
                    </dd>
                </dl>        
                                
                <dl>
                	<dt><label for="gender">Pick Up City</label></dt>
                	<dd>
                      <label>
                          <select name="pick_up_city" id="select">
                          <option>Select City</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Amritsar">Amritsar</option>
						<option value="Bangalore">Bangalore</option>
						<option value="Bhubaneswar">Bhubaneswar</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chennai">Chennai</option>
						<option value="Delhi">Delhi</option>
						<option value="Ghaziabad">Ghaziabad</option>
						<option value="Gurgaon">Gurgaon</option>
						<option value="Noida">Noida</option>
						<option value="Manesar">Manesar</option>
						<option value="Goa">Goa</option>
						<option value="Hyderabad">Hyderabad</option>
						<option value="Jaipur">Jaipur</option>
						<option value="Mangalore">Mangalore</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Mysore">Mysore</option>
						<option value="Pune">Pune</option>
						<option value="Udaipur">Udaipur</option>
						<option value="Visakhapatnam">Visakhapatnam</option>
                          </select>
                      </label>
                	</dd>
                </dl>            

                <dl>
                	<dt>
                	  <label for="email">Pick Up Location</label></dt>
                    <dd><input type="text" name="pick_up_location" id="" size="15" /></dd>
                </dl>    
                
                <dl>
   			    	<dt><label for="email">Pick Up Address</label></dt>
                	<dd><textarea name="pick_up_address" id="comments" rows="5" cols="36"></textarea></dd>
               	</dl>
                
               	<dl>
                	<dt><label for="name">Drop Location</label></dt>
                    <dd><input name="drop_location" type="text" size="54" /></dd>
                </dl>
                
                <dl class="submit">
               	  <input type="submit" name="submit" id="submit" value="Make Your Booking Now" />
                </dl>
                    
                </fieldset>
                
         </form>
       </div>  
      
     
     </div><!-- end of right content-->
            
                    
    </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
   <?php
		include('footer.php');
	?>

</div>		
</body>
</html>