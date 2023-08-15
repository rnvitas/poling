<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polls extends CI_Controller
{

    public function index()
    {
        $this->load->model('Model', 'model');
        $data['capres']   = $this->model->get_capres();

        $data['cawapres']   = $this->model->get_cawapres();
        $data['content']     = 'webview/poling/poling_view';
        $data['content_js'] = 'webview/poling/poling_js';
        $this->load->view('webview/_parts/wrapper', $data);
    }
}
