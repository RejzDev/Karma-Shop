<?php

/**
 * Абстрактный класс AdminBase содержит общую логику для контроллеров, которые 
 * используются в панели администратора
 */
    
    require_once(ROOT . '/libs/Smarty/libs/Smarty.class.php');
    include(ROOT . '/config/config.php');
    
abstract class AdminBase
{
    
    protected $smarty;
    
    public function __construct()
    {
        // Smarty connection
        $this->smarty = new Smarty;
        $this->smarty->setTemplateDir(TemplateAdminPrefix);
        $this->smarty->setCompileDir(ROOT . '/tmp/smarty/templates_c');
        $this->smarty->setCacheDir(ROOT . '/tmp/smarty/cache');
        $this->smarty->setConfigDir(ROOT . '/libs/Smarty/configs');
        
        $this->smarty->assign('TemplateAdminWebPath', TemplateAdminWebPath);
    }
    
    public function view($smarty, $parameters = false)
    {
        if ($parameters) {
            $this->smarty->assign($parameters);
        }
        $this->smarty->display($smarty);
    }

    /**
     * Метод, который проверяет пользователя на то, является ли он администратором
     * @return boolean
     */
    public static function checkAdmin()
    {
        // Check if the user is logged in. If not, it will be forwarded
        $userId = UserModel::checkLogged();
    
        // Get information about the current user
        $user = UserModel::getUserById($userId);
    
        // If the role of the current user is "admin", let him enter the admin panel
        if ($user['role'] == 'admin') {
            return true;
        }
    
        // Otherwise, exit with a message about private access
        die('Access denied');
    }

}
