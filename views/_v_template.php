<!DOCTYPE html>
<html>
<head>
        <title><?php if(isset($title)) echo $title; ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        
                                        
        <!-- CSS File we want on every page -->
        
        <link rel="stylesheet" href="/css/sample-app.css" type="text/css">
        <link rel="stylesheet" href="/css/main.css" type="text/css">
                                      
                                                                                
        <!-- Controller Specific JS -->
        
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>     
        
		<?php if(isset($client_files_head)) echo $client_files_head; ?>
                
</head>

<body> 

<header>

 <nav>
       <menu>
       		<li><a href='/'>Home</a></li>
                                
             <?php if($user): ?>
             	<li><a href='/form/add'>Form</a></li>
             	<li><a href='/form/'>View Form</a></li>
             	<li><a href='/users/logout'>Logout</a></li>
             	<?php else: ?>
             	<li><a href='/users/signup'>Sign Up</a></li>
             	<li><a href='/users/login'>Log In</a></li>
             <?php endif; ?>
        </menu>
  </nav>
        
 </header>       

<div class="container" style="text-align:center">
        
        <?php if($user): ?>
                <p>You are logged in as <?=$user->first_name?> <?=$user->last_name?><br></p>
        <?php endif; ?>
        
        <br><br>
        
        <?php if(isset($content)) echo $content; ?>

        <?php if(isset($client_files_body)) echo $client_files_body; ?>
        
        </div>
</body>
</html>