<?php
/*
 * FUNÇÕES PRINCIPAIS DO SISTEMA PARA CAREGAR CSS, JS, E MODULOS NECESSARIOS
 * PARA A FUNCIONALIDADE DO SISTEMA - 22/10/2014 - V 0.1.1
 */
init();

function init(){
    
    if (file_exists(dirname(__FILE__).'/config.php')){
        require_once (dirname(__FILE__).'/config.php');
    }else{
        die(utf8_decode('Arquivo de configuração não foi localizado, contate o suporte técnico!'));
    }
    
    $constantes = array('BASEPATH','BASEURL','ADMURL','CLASSPATH','MODPATH','CSSPATH','JSPATH','DBHOST','DBUSER','DBPASS','DBNAME');
    foreach ($constantes as $value) {
        if (!defined($value)){
            die(utf8_decode('Sistema não foi instalado corretamente, contate o suporte técnico!'));
            
        }
    }
    
    /*require_once (BASEPATH.CLASSPATH.'autoload.php');
    
    if (isset($_GET['logout'])){
        $user = new user();
        $user->doLogout();
        exit;
    }*/
    
}//init

function loadCSS($file=NULL,$media='screen',$import=FALSE){
    $file = ($file.'.css');
    if ($file!=NULL){
        if ($import){
            echo ('<style type="text/css">@import url("'.BASEURL.CSSPATH.$file.'");</style>'."\n");
        }else{
            echo ('<link media="'.$media.'" href="'.CSSPATH.$file.'" type="text/css" rel="stylesheet" />'."\n");
        }
    }
}//loadCss

function loadJS ($file=NULL,$remote=FALSE){
    if ($file!=NULL){
        if (!$remote){
            $file = (JSPATH.$file.'.js');
        }
        echo ('<script src="'.$file.'"type=" text/javascript" ></script>'."\n");
    }
}//loadJS

function loadMODULE ($module=NULL,$screen=NULL){
    if ($module==NULL || $screen==NULL){
        echo '<p>erro ao carregar <strong>'.__FUNCTION__.'</strong>: parametros insulficiente!</p>';
    }else{
        $module = ($module.'.php');
        if (file_exists(MODPATH.$module)){
            include_once (MODPATH.$module);
        }else{
            echo '<p>Modulo <strong>'.BASEURL.MODPATH.$module.'</strong> inexistente.</p>';
        }
    }
}//loadMODULE


function redirACCESS($url=NULL){
    header("location:".BASEURL.$url);
}//redirACCESS

function codPasswd($passwd=NULL){
    return md5($passwd);
}//codPasswd

function doLogIn($login, $passwd) {
    //criar a função para executar o login    
    redirACCESS('painel.php');
}//doLogin

function doLogOut() {
        $sessao = new session();
        $sessao->destroy(TRUE);
        redirACCESS('?error=1');
}//doLogOut

function conLogin() {
    $session = new session();
    if (!$session->getVar('logado')){
        redirACCESS('?error=3');
    }
}//conLogin

