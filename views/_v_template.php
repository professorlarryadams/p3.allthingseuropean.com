<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php if(isset($title)) echo $title; ?></title>

		<!-- CSS File we want on every page -->
        <link rel="stylesheet" href="../css/style.css" type="text/css">
                                                                                                                 
        <!-- Controller Specific JS -->
        
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        
		<?php if(isset($client_files_head)) echo $client_files_head; ?>
</head>

<body>

<div class="container">

<div class="header">
  <img src="../images/header-1.png" width="960" height="202" alt="image"></div>
  
  <div class="menu">
  	<nav>
       <menu>
       		<li><a href='/'>Home</a></li>
                                
             <?php if($user): ?>
             	<li><a href='/posts/add'>Form</a></li>
             	<li><a href='/profile'>View Form</a></li>
             	<li><a href='/users/logout'>Logout</a></li>
             	<?php else: ?>
             	<li><a href='/users/signup'>Sign Up</a></li>
             	<li><a href='/users/login'>Log In</a></li>
             <?php endif; ?>
      </menu>
  </nav>
  </div>
  
  <div class="content" style="text-align:center">
  <h3>Secure Online Forms</h3>
    
   		<?php if($user): ?>
                <p>You are logged in as 
                <?=$user->first_name?> <?=$user->last_name?>
    			</p>
        <?php endif; ?>
        
        <br />
        
        <?php if(isset($content)) echo $content; ?>

        <?php if(isset($client_files_body)) echo $client_files_body; ?><br />
  </div>
  
  <!-- end .container --></div>
</body>
</html>
