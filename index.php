<?php
function endsWith($haystack, $needle) {
    $length = strlen($needle);
    return $length === 0 || (substr($haystack, -$length) === $needle);
}

$http = "http";
if(isset($_SERVER["HTTPS"])){
    $http .= "s";
}
$addr = strtolower(htmlentities($_SERVER["SERVER_NAME"]));

if ($addr == "libertybell.it" || $addr == "www.libertybell.it") {
    $google = <<<GOOGLE
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
        ga('create', 'UA-75047184-1', 'auto');
        ga('send', 'pageview');
GOOGLE;
}
else {
    $google = "var i;";
}

// # Page structures
$pages = array(
    // # PAGINE
    "about" => array(
        "title" => "About - Liberty Bell Edizioni",
        "desc" => "Liberty Bell è una piccola casa editrice. Il nostro obiettivo è pubblicare libri sulla storia degli Stati Uniti e del Nord America in generale.",
        "keywords" => "casa editrice, Liberty Bell, Stati Uniti, libri Stati Uniti, Stati Uniti d America, storia americana, ebook, ebook storia americana, Nord America",
        "google" => $google,
        "cover" => "logo-square.png",
        "sidebar" => true,
        "file" => "about.html",
        "css" => array()
    ),
    "contatti" => array(
        "title" => "Contatti - Liberty Bell Edizioni",
        "desc" => "Per qualsiasi informazione, curiosità o suggerimento non esitare a contattarci! info@libertybell.it o su Twitter a @LibertyBellEd",
        "keywords" => "casa editrice, editore, storia, storia americana, stati uniti, usa, storia degli usa, storia degli stati uniti, guerra civile, libri, guerra indipendenza, ebook, editoria digitale, cultura americana, libri americani",
        "google" => $google,
        "cover" => "logo-square.png",
        "sidebar" => false,
        "file" => "contatti.html",
        "css" => array()
    ),
    "cookie-policy" => array(
        "title" => "Cookie Policy - Liberty Bell Edizioni",
        "desc" => "",
        "keywords" => "",
        "google" => "var i;",
        "cover" => "logo-square.png",
        "sidebar" => false,
        "file" => "cookies.html",
        "css" => array()
    ),
    "blog" => array(
        "title" => "Blog - Liberty Bell Edizioni",
        "desc" => "Articoli, curiosità e altro su storia e cultura americana",
        "keywords" => "casa editrice, editore, storia, storia americana, stati uniti, usa, storia degli usa, storia degli stati uniti, guerra civile, libri, guerra indipendenza, ebook, editoria digitale, cultura americana, libri americani",
        "google" => $google,
        "cover" => "logo-square.png",
        "sidebar" => false,
        "file" => "blog.html",
        "css" => array()
    ),
    // # LIBRI
    "libri_del-49-cercatori-doro-altri-pionieri-california" => array(
        "title" => "Noi del ‘49 - Cercatori d’oro e altri pionieri in California - Liberty Bell Edizioni",
        "desc" => "",
        "keywords" => "California, oro, cercatori d&#039;oro, west, storia, storia americana",
        "google" => $google,
        "cover" => "tw-all-Luzena.jpg",
        "sidebar" => false,
        "file" => "noi_del_49.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Arizonia|Diplomata"
        )
    ),
    "libri_incantevole-estate-in-montana" => array(
        "title" => "Un’incantevole estate in Montana - Liberty Bell Edizioni",
        "desc" => "",
        "keywords" => "romanzo, storia d amore, Montana, Bower, West",
        "google" => $google,
        "cover" => "tw-all-Bower.jpg",
        "sidebar" => false,
        "file" => "estate_in_montana.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Berkshire+Swash|Lovers+Quarrel|Rouge+Script"
        )
    ),
    "libri_un-cowboy-del-texas-quindici-anni-di-avventure-cavallo" => array(
        "title" => "Un cowboy del Texas - Quindici anni di avventure a cavallo - Liberty Bell Edizioni",
        "desc" => "Charles A. Siringo - cowboy texano di origine italiana per parte di padre - vive i momenti d’oro del selvaggio West, l’era dei cowboy.",
        "keywords" => "Far West, cowboy, Billy the Kid, Texas, libro western, western, West",
        "google" => $google,
        "cover" => "tw-all-Siringo.jpg",
        "sidebar" => false,
        "file" => "un_cowboy_del_texas.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Luckiest+Guy"
        )
    ),
    "libri_la-guerra-civile-americana-nelle-memorie-un-soldato-comune" => array(
        "title" => "Liberty Bell Edizioni - Storia e cultura degli Stati Uniti",
        "desc" => "La Guerra Civile americana nelle memorie di un soldato comune è il resoconto delle esperienze vissute in prima persona da Leander Stillwell. Sollecitato dal figlio più giovane, Stillwell scrive le proprie memorie nel 1916, a più di cinquant’anni dalla fine della guerra tra Nord e Sud",
        "keywords" => "battaglia di shiloh, stillwell, guerra di secessione, guerra civile americana, storia americana",
        "google" => $google,
        "cover" => "tw-all-Stillwell.jpg",
        "sidebar" => false,
        "file" => "guerra_civile_americana.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Buenard"
        )
    ),
    // # BLOG
    "blog_affascinante-storia-della-linea-mason-dixon" => array(
        "title" => "L’affascinante storia della linea Mason-Dixon - Liberty Bell Edizioni",
        "desc" => "Come si è arrivati a tracciare i confini di Maryland, Pennsylvania e Delaware, la famosa linea Mason-Dixon. Nobili e scienziati nel Nuovo Mondo.",
        "keywords" => "confini, stati, maryland, delaware, pennsylvania, stati uniti, tredici colonie",
        "google" => $google,
        "cover" => "blog/MasonDixon_cover.png",
        "sidebar" => true,
        "file" => "blog/mason_dixon.html",
        "css" => array()
    ),
    "blog_la-grande-gara-sul-mississippi" => array(
        "title" => "La Grande Gara sul Mississippi - Liberty Bell Edizioni",
        "desc" => "Il 30 giugno 1870 due piroscafi, il Robert E. Lee e il Natchez, si sfidano in un&#039;epica gara di velocità sul fiume Mississippi.",
        "keywords" => "",
        "google" => $google,
        "cover" => "blog/LeeNatchez_cover.jpg",
        "sidebar" => true,
        "file" => "blog/lee_natchez.html",
        "css" => array()
    ),
    // # HOME E 404
    "default" => array(
        "title" => "Liberty Bell Edizioni - Storia e cultura degli Stati Uniti",
        "desc" => "Liberty Bell è una piccola casa editrice indipendente che si propone di contribuire a rendere più ricca l’offerta riguardante la storia degli Stati Uniti",
        "keywords" => "casa editrice indipendente, casa editrice, editore, storia, storia americana, stati uniti, usa, storia degli usa, storia degli stati uniti, guerra civile, libri, guerra indipendenza, ebook, editoria digitale, cultura americana, libri americani",
        "google" => $google,
        "cover" => "logo-square.png",
        "sidebar" => true,
        "file" => "home.html",
        "css" => array()
    ),
    "404" => array(
        "title" => "Liberty Bell Edizioni - Pagina non trovata",
        "desc" => "",
        "keywords" => "",
        "google" => "var i;",
        "cover" => "",
        "sidebar" => true,
        "file" => "404.html",
        "css" => array()
    )
);

$canon = "";

// # Clean input
if (isset($_GET["p"])) {
    $p = trim(strtolower($_GET["p"]));
    $canon = $p;
}
else {
    $p = "default";
}

if (endsWith($p, "/") && strlen($p) > 0) {
    $p = substr($p, 0, -1);
}

$p = str_replace("/", "_", $p);

if (strlen($p) == 0) {
    $p = "default";
}
if (!array_key_exists($p, $pages)) {
    $p = "404";
    $canon = "404/";
}

// # Arrays
$array = $pages[$p];
if ($p == "cookie-policy" || $p == "404") {
    $array["robots"] = "noindex,nofollow";
}
else {
    $array["robots"] = "follow,index,noodp";
}
$christmas = false;
$bcks = array("bck1", "bck2", "bck3", "bck4", "bck5", "bck6", "bck7", "bck8");
if ($christmas) {
    $bcks = array("bck10");
}
$quotes = array(
    array("Mark Twain", "History doesn’t repeat itself, but it does rhyme."),
    array("John Adams", "Facciamo dunque tesoro, con tenerezza e affetto, degli strumenti della conoscenza. Osiamo leggere, pensare, parlare e scrivere."),
    array("Condoleezza Rice", "L’essenza dell’America &mdash; ciò che ci unisce davvero &mdash; non è l’appartenenza etnica, o la nazionalità o la religione... è un’idea, e che idea: che puoi venire da un ambiente umile e fare grandi cose. Che importa non da dove vieni, ma dove stai andando."),
    array("Ronald Reagan", "Gli Stati Uniti hanno una Costituzione, dissi, che è diversa dalle altre... Le sue tre parole più importanti sono <em>We the people</em>, il suo principio più importante, la libertà."),
    array("Rosa Parks", "Ricordi delle nostre vite, del nostro lavoro e delle nostre azioni si tramanderanno negli altri."),
    array("Marchese de Lafayette", "L’umanità ha vinto la propria battaglia. La libertà ha ora una nazione.")
);
$qr = rand(0, count($quotes) - 1);
$br = rand(0, count($bcks) - 1);

// Minify
ob_start(function($b){return preg_replace(['/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'],['>','<','\\1'],$b);});

// # Top Begin
$top = file_get_contents("./assets/common/top.html");
$top = str_replace("{TITLE}", $array["title"], $top);
$top = str_replace("{DESCRIPTION}", $array["desc"], $top);
$top = str_replace("{KEYWORDS}", $array["keywords"], $top);
$top = str_replace("{GOOGLE}", $array["google"], $top);
$top = str_replace("{COVER}", $array["cover"], $top);
$top = str_replace("{ROBOTS}", $array["robots"], $top);
$top = str_replace("{CANON}", $canon, $top);
$top = str_replace("{BCK}", $bcks[$br], $top);
$top = str_replace("{QUOTE}", $quotes[$qr][1], $top);
$top = str_replace("{QUOTEBY}", $quotes[$qr][0], $top);
$top = str_replace("{REALADDR}", $http . "://" . $addr, $top);
if ($array["sidebar"]) {
    $top = str_replace("{SIDEBARCLASS}", "content-area col-lg-8 col-md-8 col-sm-8 col-xs-12", $top);
}
else {
    $top = str_replace("{SIDEBARCLASS}", "content-area", $top);
}
echo $top;
// # Top End

include_once __DIR__ . "/assets/html/" . $array["file"];
echo "</div><footer class=\"entry-footer\"></footer></article></main></div>";
if ($array["sidebar"]) {
    echo <<<SIDEBAR
    <div id="secondary" class="widget-area col-lg-4 col-md-4 col-sm-4 col-xs-12" role="complementary">
	<aside id="text-2" class="widget widget_text"><div class="textwidget"><a class="twitter-follow-button" href="https://twitter.com/LibertyBellEd" data-show-count="false" data-size="large">Follow @LibertyBellEd</a></div>
		</aside><aside id="text-3" class="widget widget_text">			<div class="textwidget"><a class="twitter-timeline" href="https://twitter.com/LibertyBellEd" data-widget-id="727783934646472705">Tweet di @LibertyBellEd</a></div>
		</aside></div><!-- #secondary -->
SIDEBAR;
}
$additional_css = "";
foreach ($array["css"] as $css) {
    $additional_css .= "<link href=\"" . str_replace("|", "%7C", $css) . "\" rel=\"stylesheet\">";
}
$bottom = file_get_contents("assets/common/bottom.html");

$bottom = str_replace("{ADDITIONAL_IMPORTS}", $additional_css, $bottom);
echo $bottom;
//include_once("bottom.html");
 ?>