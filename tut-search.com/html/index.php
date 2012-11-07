<?php include 'includes/header.php'; ?>
    	<script>
	  (function() {
	    var cx = '000007888682219820246:hbkskoyvnlg';
	    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
	    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
	        '//www.google.com/cse/cse.js?cx=' + cx;
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
	  })();
	</script>
  </head>

  <body class="ts_home">
  <?php include 'includes/nav.php'; ?>
  
    <div class="container">
    		<div class="row hero">
    			<a href="index.php">
    			<h1><img src="assets/img/1350056640_Search_white.png" width="80" height="80"><span class="ts_tut">Tut-</span>Search</h1>
    			</a>
    			<h4>A custom search engine to find tutorials for web developers and web designers. It searches only <a href="sites.html" title="List of tutorial sites">trusted sites</a> that have been hand-picked by me. </h4>
    			
    		</div>
	    <div class="row ts_search">
       <!-- Place this tag where you want both of the search box and the search results to render -->
<gcse:search></gcse:search>
	    </div>
    </div> <!-- /container -->

<?php include 'includes/footer.php'; ?>

