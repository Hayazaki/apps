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

		function alpha_numeric_space($serial_number){
		if (! preg_match('/^[0-9A-Za-z\s]+$/', $serial_number)) {
				return FALSE;
		} else {
				return TRUE;
			}
		}

		$this->form_validation->set_rules('serial_number', 'Serial Number', 'trim|required|min_length[11]|alpha_numeric|alpha_numeric_space',
																			array('required' => '%s tidak boleh kosong.',
																						'alpha_numeric' => '%s harus berisi huruf dan angka saja.',
																						'min_length' => '%s harus berisi minimal 11 karakter huruf dan angka.',
																						'alpha_numeric_space' => '%s harus berisi huruf dan angka tanpa dipisah spasi atau karakter symbolic.'
																						)
																			);
		$this->form_validation->set_rules('mac_address','Mac Address','trim|required',
																			array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		if($this->form_validation->run() === TRUE)
    {
        $params = array(
			'tanggal_masuk' => $this->input->post('tanggal_masuk'),
			'serial_number' => strtoupper($this->input->post('serial_number')),
			'mac_address' => strtoupper($this->input->post('mac_address')),
			'jenis_ap' => strtoupper($this->input->post('jenis_ap')),
			'kondisi' => $this->input->post('kondisi'),
			'keterangan' => $this->input->post('keterangan'),
        );
			$apmasuk_id = $this->Apmasuk_model->add_apmasuk($params);
			$this->session->set_flashdata('success_input', ' berhasil diinput kedalam database.');
			redirect('ap/masuk/tambah');
		}else{
			$this->template->display('access_point/masuk/tambah', $this->data);
			$this->session->set_flashdata('gagal_input', 'Mohon periksa kembali data yang akan diinput.');
		}
	}

  public function edit($id)
  {
      $data['apmasuk'] = $this->Apmasuk_model->get_apmasuk($id);

			$this->form_validation->set_rules('serial_number','Serial Number','trim|required|alpha_numeric|min_length[11]',
																				array('required' => '%s tidak boleh kosong.',
																							'alpha_numeric' => '%s harus berisi huruf dan angka saja.',
																							'min_length' => '%s harus berisi minimal 11 karakter huruf dan angka.',
																							)
																				);
			$this->form_validation->set_rules('mac_address','Mac Address','trim|required',
																				array('required' => '%s tidak boleh kosong.')
																				);

      if(isset($data['apmasuk']['id']))
      {

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

          $this->Apmasuk_model->update_apmasuk($id,$params);
					$this->session->set_flashdata('success_edit', 'Data berhasil diupdate.');
          redirect('ap/masuk/index');
		    }
		    else{
	          $this->session->set_flashdata('gagal_edit', 'Data tidak berhasil diupdate, mohon cek kembali.');
	  				}
      }
  }

	public function remove($id)
	{
		$this->Apmasuk_model->delete_apmasuk($id);
		$this->session->set_flashdata('success_hapus', 'Data telah dihapus dari tabel Access Point Masuk');
    redirect('ap/masuk/index');
  }
}
