<?php defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('webview/_parts/head');
// $this->load->view('_parts/top_nav');
// $this->load->view('_parts/side_nav_db');
$this->load->view($content);
// $this->load->view('layouts/_parts/nav_bottom');
// $this->load->view('_parts/footer');
// $this->load->view('_parts/js');
if (isset($content_js)) $this->load->view($content_js);
