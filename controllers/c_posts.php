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
	
	public function add2() {

        # Setup view
		$this->template->content = View::instance('v_posts_form_2');
		
        $this->template->title   = "Application";

        # Render template
        echo $this->template;

    }

    public function p_add2() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

		
		unset($_POST['submit']);

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('719B', $_POST);

        # Redirect to second page
        Router::redirect('/posts/uploads');

    }
	
	 public function upload() {

        # Setup view
        $this->template->content = View::instance('v_posts_uploads');
        $this->template->title   = "Profile";

        # Render template
        echo $this->template;

   }
   
   	public function p_upload() {
    
		if ($_FILES['upload']['error'] == 0)
        {
            # upload an image
            $uploads = Upload::upload($_FILES, "/uploads/", array("JPG", "JPEG", "jpg", "jpeg", "gif", "GIF", "png", "PNG", "doc", "pdf", "docx"), $this->user->user_id);

            if($uploads == 'Invalid file type.') {
            
			# return an error
                Router::redirect("/posts/uploads/error"); 
            }
            else {
            
			# process the upload
                $data = Array("upload" => $uploads);
                DB::instance(DB_NAME)->update("users", $data, "WHERE user_id = ".$this->user->user_id);

                # resize the image
                $imgObj = new Image($_SERVER["DOCUMENT_ROOT"] . '/uploads/' . $uploads);
                $imgObj->resize(100,100, "crop");
                $imgObj->save_image($_SERVER["DOCUMENT_ROOT"] . '/uploads/' . $uploads); 
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