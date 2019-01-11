<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

    protected $CI;

    public function __construct()
    {
		$this->CI =& get_instance();
    }


    public function display($content, $data = NULL)
    {
        if ( ! $content)
        {
            return NULL;
        }
        else
        {
            $this->template['meta']          = $this->CI->load->view('_partials/meta', $data, TRUE);
            $this->template['main_header']     = $this->CI->load->view('_partials/main_header', $data, TRUE);
            $this->template['main_sidebar']    = $this->CI->load->view('_partials/main_sidebar', $data, TRUE);
            $this->template['content']         = $this->CI->load->view($content, $data, TRUE);
            $this->template['footer']          = $this->CI->load->view('_partials/footer', $data, TRUE);
            $this->template['control_sidebar'] = $this->CI->load->view('_partials/control_sidebar', $data, TRUE);
            $this->template['js']              = $this->CI->load->view('_partials/js', $data, TRUE);


            return $this->CI->load->view('_partials/template', $this->template);
        }
	}


  /*  public function auth_render($content, $data = NULL)
    {
        if ( ! $content)
        {
            return NULL;
        }
        else
        {
            $this->template['header']  = $this->CI->load->view('auth/_templates/header', $data, TRUE);
            $this->template['content'] = $this->CI->load->view($content, $data, TRUE);
            $this->template['footer']  = $this->CI->load->view('auth/_templates/footer', $data, TRUE);

            return $this->CI->load->view('auth/_templates/template', $this->template);
        }
	   } */

}
