<?php
 class Rotas{

     public static $pag;
     private static $pasta_controller = 'controller';
     private static $pasta_view = 'view';
     private static $pasta_ADM = 'adm';

     static function get_SiteHOME(){
         return Config::SITE_URL . '/' .Config::SITE_PASTA;
     }

     static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' .config::SITE_PASTA;
    }

    static function get_SiteTEMA(){
        return self::get_SiteHOME() . '/' .self::$pasta_view;
    }

    static function pag_Carrinho(){
        return self::get_SiteHOME() . '/carrinho';
    }

    static function pag_Produto(){
        return self::get_SiteHOME() . '/produto';
    }

    static function pag_ProdutoInfo(){
        return self::get_SiteHOME() . '/produto_info';
    }

    static function pag_Contato(){
        return self::get_SiteHOME() . '/contato';
    }

    static function pag_MinhaConta(){
        return self::get_SiteHOME() . '/minhaconta';
    }

    static function get_ImagePasta(){
        return 'media/images/';
    }

    static function get_ImageURL(){
		return self::get_SiteHOME() .'/' .self::get_ImagePasta();
	}

    //Rotas Administrativas
    static function get_SiteADM(){
        return self::get_SiteHOME() .'/' .self::$pasta_ADM;
    }

    static function pag_PAG_ADM_CUSTOMATERIAL(){
        return self::get_SiteADM() .'/adm_customaterial';
    }

    static function ImageLink($img, $largura, $altura){
		$imagem = self::get_ImageURL() ."thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
		return $imagem;
	}

    static function pag_Home(){
        return self::get_SiteHOME() . '/home';
    }

     static function get_Pagina(){
         if(isset($_GET['pag'])){

             $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);

             $pagina = 'controller/' .self::$pag[0] . '.php';
            
             if(file_exists($pagina)){
                include $pagina;
            }else{
                include 'erro.php';
            }
        }
    }
} 
?>