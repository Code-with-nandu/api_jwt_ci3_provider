<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;


class Api extends REST_Controller {
    public $benchmark; // Declare the property
    public $hooks;     // Declare the property
	public function __construct() {
		parent::__construct();
         $this->load->library('Authorization_Token');
		// $this->load->model('user_model');
	}
	public function user_get()
	{
		$array = array('status' => 'ok' ,'data'=>1 );
		$this ->response($array);
	}
	public function record_post()
	{
		$array = array('status' =>'ok' ,'data' => 'post api');
		$this ->response($array);

	}
	public function register_post()
	{

		$array = array('status' =>'ok' ,'data' => 'post api');

		$token_data['user_id']=1212;
		$tokeb_data['fullname']='code';
		$token_data['username'] ='improve';
		$token_data['email']='code@gmail.com';

		$tokenData = $this ->authorization_token ->generateToken($token_data);

		$final = array();
		$final ['token'] = $tokenData;
		$final ['status']= 'ok';

		$this ->response($final);


	}
	public function verify_post()
	{
		$headers = $this ->input ->request_headers();
		$decodeToken = $this ->authorization_token ->validateToken($headers['authorization']);

		$this ->response($decodeToken);
	}
}
