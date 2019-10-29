 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller
{
    public function index(){

    	$data['title'] = 'Lantai 1 PTSI';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('map/index', $data);
		$this->load->view('templates/footer');

    }


}
