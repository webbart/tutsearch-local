<?php include 'includes/header.php'; ?>
 </head>

  <body class="ts_contact">
  <?php include 'includes/nav.php'; ?>
      <div class="container">
		    <h1>Contact</h1>
		    <p>A custom search engine for web designers and developers.</p>  
		    
		    <form method="post" action="contact-process.php">
		    		<table>
		    			<tr>
		    				<th>
			    				<label for="name">Name</label>
		    				</th>
		    				<td>
		    				<input type="text" name="name" id="name">
		    				</td>
		    			</tr>
		    			<tr>
		    				<th>
			    				<label for="email">Email</label>
		    				</th>
		    				<td>
			    				<input type="text" name="email" id="Email">
		    				</td>
		    			</tr>
		    			<tr>
		    				<th>
			    				<label for="message">Message</label>
		    				</th>
		    				<td>
		    				<textarea name="message" id="message">Your Message</textarea>
		    				</td>
		    			</tr>
		    		</table>
		    		<input type="submit" value="Send" class="btn">
		    </form>  
		</div> <!-- /container -->
		

  <?php include 'includes/footer.php'; ?>