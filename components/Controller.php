<?php
    
    
    require_once(ROOT . '/libs/Smarty/libs/Smarty.class.php');
    include(ROOT . '/config/config.php');
    
    abstract class Controller
    {
        
        protected $smarty;
        
        public function __construct()
        {
            // Connect Smarty
            $this->smarty = new Smarty;
            $this->smarty->setTemplateDir(TemplatePrefix);
            $this->smarty->setCompileDir(ROOT . '/tmp/smarty/templates_c');
            $this->smarty->setCacheDir(ROOT . '/tmp/smarty/cache');
            $this->smarty->setConfigDir(ROOT . '/libs/Smarty/configs');
    
            $this->smarty->assign('TemplateWebPath', TemplateWebPath);
        }
    
        /**
         * Load view
         * @param $smarty
         * @param bool $parameters
         */
        public function view($smarty, $parameters = false)
        {
            if ($parameters) {
                $this->smarty->assign($parameters);
            }
            $this->smarty->display($smarty);
        }
        
    }