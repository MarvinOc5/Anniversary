<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CIndex extends CI_Controller
{
	
	public function index()
	{
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$this->load->view('index', $data);
	}

}

/* End of file cindex.php */
/* Location: ./application/controllers/cindex.php */