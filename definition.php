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

error_reporting(E_ERROR);

include_once("LarousseEnLigneUtil.php");

$word = $argv[1];
$larousse_url = LAROUSSE_PATH.$word."/";

$word_html_tree = file_get_contents(LAROUSSE_ROOT.$larousse_url);

$doc = new DOMDocument();
@$doc->loadHTML($word_html_tree);
$definitions = $doc->getElementById("definition");
$definitions = $definitions->getElementsByTagName('li'); // get all links/<li> tags in definition section
foreach ($definitions as $def){
    foreach ($def->childNodes as $cn) {
        print_r($cn);
        // echo'\n';
    }
    // echo'END DEF\n';
    // var_dump($def->childNodes);
    $new_def = new DefinitionItem($def->textContent);
    // print_r($new_def);
    // echo($def->textContent)."\n";
}

// <div id="locution">
// <div id="synonyme">
// <div id="homonyme">
// <div id="citation">
// connotations <section class="words-nearby">...</section>
?>