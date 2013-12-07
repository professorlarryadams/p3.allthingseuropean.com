<?php

class posts_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("You must login. <a href='/users/login'>Login</a>");
        }
    }

    public function add() {

        # Setup view
        $this->template->content = View::instance('v_posts_form');
		
        $this->template->title   = "Application";

        # Render template
        echo $this->template;

    	}

    public function p_add() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();
		
		unset($_POST['submit']);

        # Insert
		$record_id = DB::instance(DB_NAME)->insert('719B', $_POST);

        # Redirect to second page
        Router::redirect('/posts/add2/'.$record_id);

    	}
	
	public function add2($record_id) {
	  
	   # Passing the arguement to the view
	   $this->template->content = View::instance('v_posts_form_2');
	   $this->template->content->record_id = $record_id;
	   $this->template->title = "Application page 2";

        # Render template
        echo $this->template;

    	}

    public function p_add2() {
		
			
		$record_id = $_POST['record_id'];
		unset($_POST['record_id']);
		
		DB::instance(DB_NAME)->update('719B', $_POST, 'WHERE 719b_id = '.$record_id); 
		
		# Send them back to uploads page
        Router::redirect("/posts/uploads"); 

    	}
		
		public function uploads($record_id) {
			
			$this->template->content = View::instance('v_posts_uploads');
			$this->template->content->record_id = $record_id;
			$this->template->title = "Uploading Files:";
			
			#Render this template
			echo $this->template;
			
		}
		
		public function p_uploads () {
			
			$record_id = $_POST['record_id'];
			unset($_POST['record_id']);
                
            # Upload files
            DB::instance(DB_NAME)->update('719B', $_POST, 'WHERE 719b_id = '.$record_id);
 
       		# Send to Homepage
        	Router::redirect('/'); 
    } 
			
}