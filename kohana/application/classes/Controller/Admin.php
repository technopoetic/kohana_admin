 <?php defined('SYSPATH') or die('No direct script access.');
  
  class Controller_Admin extends Controller_Template 
  {
  
      public $template = 'admin_template';
  
      /**
       * The before() method is called before your controller action.
       * In our template controller we override this method so that we can
       * set up default values. These variables are then available to our
       * controllers if they need to be modified.
       */
      public function before()
      {
          parent::before();
	  // Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			HTTP::redirect('user/login');
		}
  
  	    if ($this->auto_render)
  	    {
  	    	// Initialize empty values
  	    	$this->template->title   = '';
  	    	$this->template->content = '';
		$this->template->user = $user;
  			
  		$this->template->styles = array();
  		$this->template->scripts = array();
          			
          }
      }
  	
      /**
       * The after() method is called after your controller action.
       * In our template controller we override this method so that we can
       * make any last minute modifications to the template before anything
       * is rendered.
       */
      public function after()
      {
	if ($this->auto_render)
	{
		$styles = array(
			'/assets/css/transdmin.css' => 'screen, projection'
		);
  
		$scripts = array(
			'/assets/js/jquery.js',
			'/assets/js/jNice.js'
		);
		
		$this->template->styles = array_merge( $this->template->styles, $styles );
		$this->template->scripts = array_merge( $this->template->scripts, $scripts );
	}
	parent::after();
      }
  }