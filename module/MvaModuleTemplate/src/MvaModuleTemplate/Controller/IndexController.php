<?php

namespace MvaModuleTemplate\Controller;

class IndexController extends \MvaCrud\Controller\CrudIndexController {
    
    public function __construct($I_service, $I_form, $as_config) {
        parent::__construct('Cane', $I_service, $I_form, $as_config);
        
        /*
        // Override __NAMESPACE__ configuration
        $this->s_indexTitle = 'Controller index custom title';
        $this->s_indexTemplate = 'mva-module-template/index/index';
        
        $this->s_newTitle     = 'Crea un nuovo cane';
        $this->s_newTemplate    = 'mva-module-template/index/dog-form';

        $this->s_editTitle    = 'Modifica i dati del cane';
        $this->s_editTemplate   = 'mva-module-template/index/dog-form';
        
        $this->s_processErrorTitle = 'Errore';
        $this->s_processErrorTemplate  = 'mva-module-template/index/dog-form';

        $this->s_processRouteRedirect = 'mva-module-template';
        $this->s_deleteRouteRedirect = 'mva-module-template';
        //*/
    }
    
    // Demostrate how to set a custom view with custom variables
    public function CustomIndexAction(){
        $this->s_indexTitle     = 'Controller index custom title';
        $this->s_indexTemplate  = 'mva-module-template/index/index';
        $base = parent::indexAction();
        $base->setVariable('foo', 'bar');
        $base->setVariable('cippa', 'lippa');
        return $base;
    }
}
