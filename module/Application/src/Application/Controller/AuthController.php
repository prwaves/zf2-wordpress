<?php
namespace Application\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter;

use Application\Form\LoginForm;       

// see AbstractRestfulController
class AuthController extends BaseController
{
    protected $form;

    /**
     * Login Page
     */
    public function loginAction()
    {

        $this->checkLoggedOut();
        $form = $this->getForm();

        $viewModel = new ViewModel();
        //$this->layout('layout/home-layout');
        return $viewModel->setVariables(array('form'      => $form,
            'flashMessages' => $this->flashmessenger()->getMessages()));      

    }

    /**
     * Handle login submissions. Authenticate using AuthService.
     * @return 
     */
    public function authenticateAction()
    {
        $form = $this->getForm();
        $urlRedirect = false;
        $redirect = 'home';
        $params = array();

        $request = $this->getRequest();
        if ($request->isPost()){
            $form->setData($request->getPost());
            if ($form->isValid()){

                /* Handle Authentication */
                $username = $request->getPost('Username');
                $password = $request->getPost('Password');
                
                $WP_User = wp_authenticate($username, $password);

                if(is_wp_error($WP_User)) { 
                    $redirect = 'login';
                    $this->flashmessenger()->addErrorMessage("Invalid User Credentials");
                } else {
                    wp_set_auth_cookie( $WP_User->ID );
                    $this->flashmessenger()->addSuccessMessage("Login Successful");
                }

            } else {
                /* Form error messages */
                foreach($form->getMessages() as $message) {
                    $this->flashmessenger()->addErrorMessage(implode(",", $message));  
                }            
            }
        } 
          
        return $this->redirect()->toRoute($redirect);
        
    }    

    public function logoutAction()
    {
        //$this->getAuthService()->clearIdentity();
        unset($_SESSION['DoubleAcreUN']);

        $session = new Session('RedirectUri');
        $session->clear();
        
        $this->layout('layout/home-layout');

        $this->flashmessenger()->addSuccessMessage("You've been logged out");
        return $this->redirect()->toRoute('host/login');
    }  

   public function getForm()
    {
        if (!$this->form) {
            $this->form = new LoginForm();
        }
         
        return $this->form;
    }      

}