<?php

/**
 * AdminController
 * Main page in the admin panel
 */
class AdminController extends AdminBase
{
    /**
     * Action for the start page "Admin Panel"
     */
    public function indexAction()
    {
        // Access check
        self::checkAdmin();

        // Connect the view
        $this->view('header_admin.tpl');
        $this->view('index.tpl');
        $this->view('footer_admin.tpl');
    
        return true;
    }

}
