<?php
    /**
     * Settings file
     *
     */
    
   
    //> template used
    $template = 'home';
    $templateAdmin = 'admin';
    
    // paths to template files (* tpl)
    define('TemplatePrefix', ROOT . "/views/$template/");
    define('TemplateAdminPrefix', ROOT . "/views/$templateAdmin/");
    define('TemplatePostfix', '.tpl');
    
    // paths to template files in web space
    define ('TemplateWebPath', "/templates/$template/");
    define ('TemplateAdminWebPath', "/templates/$templateAdmin/");
    //<