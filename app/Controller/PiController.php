<?php
App::uses('AppController', 'Controller');
class PiController extends AppController {
	public $uses = array('PiBreathes');
	
	public function breathe(){
		$r = $this->PiBreathes->save(array(
			'pi_name'	=> empty($this->request->query['pi_name']) ? '' : $this->request->query['pi_name'],
			'action'	=> empty($this->request->query['action']) ? '' : $this->request->query['action'],
			'timer'		=> date('Y-m-d H:i:s'),
			'ip'		=> empty($_SERVER['REMOTE_ADDR']) ? '' : $_SERVER['REMOTE_ADDR'],
			'ua'		=> empty($_SERVER['HTTP_USER_AGENT']) ? '' : $_SERVER['HTTP_USER_AGENT'],
			'remark'	=> empty($this->request->query['remark']) ? '' : $this->request->query['remark'],
		));
// 		print_r($r);
		echo 1;
		exit;
	}
}

