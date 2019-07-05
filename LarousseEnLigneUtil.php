<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version >=5.*
 *
 * @author     Michel Buhendwa <kastazy@gmail.com>
 * @link       https://github.com/eltazy/larousse-scrapper
 * @copyright  2019 ElUstazy?
 */

define("LAROUSSE_ROOT", "https://www.larousse.fr");
define("LAROUSSE_PATH", "/dictionnaires/francais/");

class DefinitionItem {
    protected   $definition,
                $contexte = NULL,
                $exemple;
    
    public function __construct($str){
        $t = explode(':', $str);
        $this->definition = trim($t[0]);
        $this->exemple = trim($t[1]);
    }
    public function definition(){
        return $this->definition;
    }
    public function contexte(){
        return $this->contexte;
    }
    public function exemple(){
        return $this->exemple;
    }
}

class LarousseEnLigneUtil {
    protected   $mot,
                $synonymes = NULL,
                $homonymes = NULL,
                $connotations = NULL;

    public function __construct($word){
        $this->mot = $word;
    }
    public function mot(){
        return $this->mot;
    }
    public function synonymes(){
        return $this->synonymes();
    }
    public function homonymes(){
        return $this->homonymes();
    }
    public function connotations(){
        return $this->connotations();
    }
    public static function recherche_mot($mon_mot){

    }
}