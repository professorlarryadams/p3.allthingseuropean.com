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
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('719B', $_POST);

        # Redirect to second page
        Router::redirect('/posts/add2');

    	}
	
	public function add2($record_id) {

       # Passing the arguement to the view
       $this->template->content->record_id = $record_id;
	
		$this->template->title   = "Application page 2";

        # Render template
        echo $this->template;

    	}

    public function p_add2($record_id) {
		
		$record_id = $_POST['record_id'];
		unset($_POST['record_id']); 

        # Update record with page 2 content
       	DB::instance(DB_NAME)->update('719B', $_POST, 'WHERE 719b_id = '.$record_id);

        # Redirect to second page
        Router::redirect('/posts/uploads');		

    	}
	
	 public function upload() {

        # Setup view
        $this->template->content = View::instance('v_posts_uploads');
        $this->template->title   = "Upload Documents";

        # Render template
        echo $this->template;

   		}
   
   	public function p_upload() {
    
		if ($_FILES['upload']['error'] == 0) {
            
		# upload an image
        $upload = Upload::upload($_FILES, "/uploads/", array("JPG", "JPEG", "jpg", "jpeg", "gif", "GIF", "png", "PNG", "doc", "pdf", "docx"), $this->user->user_id);

          if($upload == 'Invalid file type.') {
            
		# return an error
        Router::redirect("/posts/uploads/error"); 
            }
        else {
            
		# process the upload
        $data = Array("upload" => $upload);
        DB::instance(DB_NAME)->update("users", $data, "WHERE user_id = ".$this->user->user_id);

        # resize the image
        $imgObj = new Image($_SERVER["DOCUMENT_ROOT"] . '/uploads/' . $upload);
        $imgObj->resize(125,125, "crop");
        $imgObj->save_image($_SERVER["DOCUMENT_ROOT"] . '/uploads/' . $upload); 
            }
        }
        else
        {
        # return an error
        Router::redirect("/posts/uploads/error");  
        }

        # Redirect back to the profile page
        router::redirect('/users/posts/completed'); 
    	}  
}