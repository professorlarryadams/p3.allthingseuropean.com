<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php if(isset($title)) echo $title; ?></title>

		<!-- CSS File we want on every page -->
        <link rel="stylesheet" href="/css/main.css" type="text/css">
        <link rel="stylesheet" href="/css/box.css" type="text/css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
          
        
                                                                                                                 
        <!-- Controller Specific JS -->
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type='text/javascript' src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
		<script type='text/javascript' src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
        <script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>
        
		<?php if(isset($client_files_head)) echo $client_files_head; ?>
</head>

<body>

<div class="container_12">

	<div class="header"><img src="/images/header-1.png"  alt="image">
    
    </div>
  
  <div class="menu">
      
       		<li><a href='/'>Home |</a></li>
                                
             <?php if($user): ?>
             	<li><a href='/posts/add'>Form |</a></li>
                <li><a href='/posts/uploads'>Upload Files |</a></li>
             	<li><a href='/users/profile'>Profile |</a></li>
             	<li><a href='/users/logout'>Logout |</a></li>
             	<?php else: ?>
             	<li><a href='/users/signup'>Sign Up |</a></li>
             	<li><a href='/users/login'>Log In |</a></li>
             <?php endif; ?>
  </div>
  
  <div class="content" style="text-align:center">
  <h1>Secure Online Forms</h1>
  <h2>Project 3 online forms that validates through Javascript and jquery to a database.</h2>
    
   		<!-- Page Content -->
        <?php if($user): ?>
        <h3>You are logged in as <?=$user->first_name?> <?=$user->last_name?></h3><br>
        <?php endif; ?>
        
        <?php if(isset($content)) echo $content; ?>

    	<?php if(isset($client_files_body)) echo $client_files_body; ?>
        <br />
  </div>
  
  <!-- end .container -->
  
  </div>
</body>
</html>
