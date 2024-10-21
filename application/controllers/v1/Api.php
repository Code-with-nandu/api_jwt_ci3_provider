<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('Authorization_Token');
    }

    public function user_get() {
        $array = array('status' => 'ok', 'data' => 1);
        $this->response($array);
    }

    public function record_post() {
        $array = array('status' => 'ok', 'data' => 'post api');
        $this->response($array);
    }

    // Simple test endpoint
    public function test_get() {
        $this->response(['status' => 'ok', 'data' => 'test endpoint']);
    }
}
