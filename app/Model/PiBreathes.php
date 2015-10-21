<?php 
App::uses('NLog', 'Lib');
App::uses('AppModel', 'Model');
class PiBreathes extends AppModel {
	var $name 		= 'PiBreathes';
    var $useTable 	= 'pi_breathes';
}