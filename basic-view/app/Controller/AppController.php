<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
   var $helpers = array('Form', 'Time', 'Html', 'Session', 'Js', 'Authake.Authake','Ajax','Session','Paginator','Recaptcha.Recaptcha');
   var $components = array('Session','RequestHandler', 'Authake.Authake','Image','Filter.Filter','Email','Recaptcha.Recaptcha');
   var $counter = 0;
    function beforeFilter()
	{
        $this->auth();
    }
	       public $pageTitle;
            public function beforeRender()
            {
            $this->set('title_for_layout', $this->pageTitle);
            }
    private function auth(){
        Configure::write('Authake.useDefaultLayout', true);
        $this->Authake->beforeFilter($this);
    }
}