<?php
/*
	$con = mysql_connect("internal-db.s80119.gridserver.com","db80119_admin","riggs333");
	if (!$con) die('Could not connect: ' . mysql_error());
	mysql_select_db("db80119_tutsearch_db", $con);
*/
	
	$con = mysql_connect("localhost","root","root");
	if (!$con) die('Could not connect: ' . mysql_error());
	mysql_select_db("_tutsearch_db", $con);
	
	$filter_val = $_GET["filter"];
	if($filter_val) $filter_sql = 'where site_category = "'.$filter_val.'"';
	
	$sql = '
			Select 		distinct site_category 
			From		site_list
			Order by	site_category asc
	';

	$result = mysql_query($sql);
	
	$filter = '<select name="filter" id="filter" onchange="javascript: window.location.href=\'?filter=\'+this.options[this.selectedIndex].value;+\'\'">';
	
	while($row = mysql_fetch_array($result)) {
		$i++;
		if($i==1) $filter .= '<option value="" '.$selected.'>All</option>';
		$selected = ($filter_val==$row["site_category"]) ? "selected" : "";
		$filter .= '<option value="'.$row["site_category"].'" '.$selected.'>'.$row["site_category"].'</option>';
	}
	$filter .= '</select>';
	
	include 'includes/header.php'; 
?>
    	<script type="text/javascript">
    	
    		$(document).ready(function( ) {
	    		$('a img') .animate ({
		    		opacity: .3
	    		});
	    		$('a img') .hover(function( ){
		    		$(this).stop( ) .animate ({opacity:1}, 'fast');
	    		}, function(){
		    		$(this).stop( ) .animate ({opacity:.3}, 'slow');		    		
	    		});
    		});
    
    	</script>

</head>

  <body class="ts_sites">
  <?php include 'includes/nav.php'; ?>
      <div class="container">
	    <h1>List of sites</h1>  
	    <div class="ts_filter">
	    <?php echo $filter; ?>
	    </div>
              <div id="" class="">
              		<?php
												
						$result = mysql_query("SELECT * FROM site_list ".$filter_sql." order by site_category");

						while($row = mysql_fetch_array($result)) {
						  $output .= '
						  <div class="span3 well ts_click" style="display:block">
		              				<a href="http://www.'.$row["site_name"].'" target="_blank">
			              			<img src="assets/img/'.$row["site_image"].'" alt="'.$row["site_title"].'" />
			              			<p class="ts_sitetitle">'.$row["site_title"].'</p>
			              			<p class="ts_description">'.$row["site_meta"].'</p>
			              			<p class="pull-right"><a href="'.$row["site_rss"].'" target="_blank">RSS Feed</a> | <a href="'.$row["site_twitter"].'" target="_blank">Twitter</a></p>
			              			<p class="ts_category">'.$row["site_category"].'</p>
			              			</a>
			              	</div>
			              	';
						  }
						  
						  echo $output;
						
						mysql_close($con);
				
						?>
              </div>


   <?php include 'includes/footer.php'; ?>