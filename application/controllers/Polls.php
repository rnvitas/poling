<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polls extends CI_Controller
{

    public function index()
    {
        $this->load->model('Model', 'poling');
        $data['capres']   = $this->poling->get_capres();

        $data['cawapres']   = $this->poling->get_cawapres();
        $data['content']     = 'webview/poling/poling_view';
        $data['content_js'] = 'webview/poling/poling_js';
        $this->load->view('webview/_parts/wrapper', $data);
    }

    public function save()
    {
        $date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
        $this->poling->save(
            array(

                'created'           => $date->format('Y-m-d H:i:s'),
                'id_capres'      => $this->input->post('capres'),
                'id_cawapres'      => $this->input->post('cawapres'),
            ),
            array('id' => $this->input->post('id_add'))
        );
        echo json_encode(array("status" => TRUE));
    }
}
