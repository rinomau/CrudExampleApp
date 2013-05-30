<?php
/**
 * MvaCrud Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */
$settings = array(
    
    /**
     * Index page title
     *
     * Specify the title of index page
     *
     * Default value: "ModuleName list"
     * Accepted values: string
     */
    'indexPageTitle' => 'Index page globale',
    
    
    /**
     * Index page template
     *
     * Allow to specify an alternative template to index page
     *
     * Default value: 'mva-module-template/index/index'
     * Accepted values: string
     */
    //'indexPageTemplate' => 'mva-module-template/index/index',
    
    
    
    );

/**
 * You do not need to edit below this line
 */
return array(
    'mvacrud' => $settings,
);
