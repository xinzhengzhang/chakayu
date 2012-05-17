<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Square extends CI_Controller {

	/**
	 * The square controller which manages the room-relative action.
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('room');
		$session = $this->session->all_userdata();
		if (! $session['userId']) {
			redirect('login');
		}	
	}

	public function index()
	{
		$data['words'] = ':)';
		$this->twig->display('square.html', $data);
	}
}

/* End of file square.php */
/* Location: ./application/controllers/square.php */
