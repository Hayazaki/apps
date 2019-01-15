<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
			$this->load->model('Apmasuk_model');
			$this->load->library('form_validation');
      $this->data['title'] = "Access Point";
	}

	public function index()
	{
		$this->data['subtitle'] = "Data Access Point Masuk";
		$this->data['apmasuk'] = $this->Apmasuk_model->getall_apmasuk();

		$this->template->display('access_point/masuk/index', $this->data);
	}

	public function tambah()
  {
			$this->data['subtitle']	= "Input Barang Masuk";

			$this->form_validation->set_rules('serial_number','Serial Number','required');
			$this->form_validation->set_rules('mac_address','Mac Address','required');

			if($this->form_validation->run() === TRUE)
        {
            $params = array(
				'tanggal_masuk' => $this->input->post('tanggal_masuk'),
				'serial_number' => $this->input->post('serial_number'),
				'mac_address' => $this->input->post('mac_address'),
				'jenis_ap' => $this->input->post('jenis_ap'),
				'kondisi' => $this->input->post('kondisi'),
				'keterangan' => $this->input->post('keterangan'),
            );
				$apmasuk_id = $this->Apmasuk_model->add_apmasuk($params);
				$this->session->set_flashdata('success_input', 'Data berhasil diinput kedalam database.');
				redirect('ap/masuk/tambah');
				}else {
					$this->template->display('access_point/masuk/tambah', $this->data);
					$this->session->set_flashdata('gagal_input', 'Gagal memasukan data kedalam database.');
				}
	}

	public function remove($id)
	{
					$this->Apmasuk_model->delete_apmasuk($id);
            redirect('ap/masuk/index');
  }
}
