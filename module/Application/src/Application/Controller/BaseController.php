<?php
namespace Application\Controller;

use Zend\Mvc\MvcEvent;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * BaseController
 *
 * All Application Controllers will inherit from this class.
 * Takes care of common tasks.
 */
class BaseController extends AbstractActionController
{   
    protected $__user;
    protected $logger;


    /**
     * Check the session variables to see if the user is currently logged in or not.
     * @return boolean
     */
    public function checkLoggedOut() {
        if ( is_user_logged_in() ) {
            return $this->redirect()->toRoute('home');
        } 
    }

    /**
     * Check the session variables to see if the user is currently logged in or not.
     * @return boolean
     */
    public function checkLoggedIn() {
        if ( !is_user_logged_in() ) {
            return $this->redirect()->toRoute('login');
        }
    }

    /**
     * Set view model variables that need to be available for all actions.
     * @param  MvcEvent $event [description]
     * @return [type]          [description]
     */
    public function onDispatch(MvcEvent $event)
    {      

        $username = $this->getEvent()->getRouteMatch()->getParam('username');  

        return parent::onDispatch($event);
    }

    /**
     * Get current user
     * @return [type] [description]
     */
    protected function getCurrentUser() {

        return $this->_user;
    }

}
