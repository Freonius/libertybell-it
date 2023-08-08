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
    var trackOutboundLink = function(url) {
        ga('send', 'event', 'outbound', 'click', url, {
            'transport': 'beacon',
            'hitCallback': function(){window.open(url, "_blank");}
        });
    }
GOOGLE;
}
else {
    $google = "var i; var trackOutboundLink = function(url) {window.open(url, \"_blank\");}";
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
    "servizi-editoriali" => array(
        "title" => "Servizi editoriali - Liberty Bell Edizioni",
        "desc" => "Dal 2019 forniamo anche servizi editoriali a self-publishers e ad altre case editrici",
        "keywords" => "servizi editoriali, self publishing, self publisher, copertine, editing, editing libro, impaginazione, copertine libro",
        "google" => $google,
        "cover" => "logo-square.png",
        "sidebar" => false,
        "file" => "servizi.html",
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
    "libri_amequohi" => array(
        // TODO: Amequohi
        "title" => "Amequohi - Liberty Bell Edizioni",
        "desc" => "Una raccolta di cinque racconti di grandi autori - Henry James, Mark Twain, Louisa May Alcott, Willa Cather, Charles W. Chesnutt - che offre uno spunto di riflessione sull’evento storico più tragico e determinante della storia americana: la Guerra Civile",
        "keywords" => "racconti, guerra civile americana, classici, short stories, henry james, mark twain, louisa may alcott, willa cather, charles w chesnutt",
        "google" => $google,
        "cover" => "tw-all-Una_casa_divisa.jpg",
        "sidebar" => false,
        "file" => "amequohi.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Alegreya+SC:500|Diplomata+SC&display=swap"
        )
    ),
    "libri_una-casa-divisa" => array(
        "title" => "Una casa divisa - Cinque racconti sulla Guerra Civile americana - Liberty Bell Edizioni",
        "desc" => "Una raccolta di cinque racconti di grandi autori - Henry James, Mark Twain, Louisa May Alcott, Willa Cather, Charles W. Chesnutt - che offre uno spunto di riflessione sull’evento storico più tragico e determinante della storia americana: la Guerra Civile",
        "keywords" => "racconti, guerra civile americana, classici, short stories, henry james, mark twain, louisa may alcott, willa cather, charles w chesnutt",
        "google" => $google,
        "cover" => "tw-all-Una_casa_divisa.jpg",
        "sidebar" => false,
        "file" => "una_casa_divisa.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Alegreya+SC:500|Diplomata+SC&display=swap"
        )
    ),
    "libri_del-49-cercatori-doro-altri-pionieri-california" => array(
        "title" => "Noi del ‘49 - Cercatori d’oro e altri pionieri in California - Liberty Bell Edizioni",
        "desc" => "Luzena S. Wilson ci racconta del suo viaggio in California in occasione della corsa all’oro del 1849 e dei suoi primi anni da pioniera.",
        "keywords" => "California, oro, cercatori d oro, west, storia, storia americana, viaggio in California, libro di memorie, oro della California",
        "google" => $google,
        "cover" => "tw-all-Luzena.jpg",
        "sidebar" => false,
        "file" => "noi_del_49.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Arizonia|Diplomata&display=swap"
        )
    ),
    "libri_incantevole-estate-in-montana" => array(
        "title" => "Un’incantevole estate in Montana - Liberty Bell Edizioni",
        "desc" => "Miss Beatrice Lansell, una ragazza dell’alta società di New York, va a trascorrere l’estate presso il ranch del fratello in Montana. Una storia romantica del vecchio West.",
        "keywords" => "una storia romantica, romanzo, storia d amore, Montana, Bower, West, vecchio West, Montana ranch, Amazon Kindle, vita di pascoli, la ragazza del West",
        "google" => $google,
        "cover" => "tw-all-Bower.jpg",
        "sidebar" => false,
        "file" => "estate_in_montana.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Berkshire+Swash|Lovers+Quarrel|Rouge+Script&display=swap"
        )
    ),
    "libri_americani-nella-grande-guerra" => array(
        "title" => "Americani nella Grande Guerra - Liberty Bell Edizioni",
        "desc" => "Dopo un iniziale periodo di neutralità, il 6 aprile 1917 gli Stati Uniti si uniscono al conflitto che già da tre anni affliggeva l’Europa. “Il mondo deve essere reso sicuro ai fini della democrazia” invoca il presidente Woodrow Wilson, e così – non senza grandi divergenze all’interno della società e dell’ambiente politico – gli Stati Uniti scendono formalmente in guerra al fianco degli alleati.",
        "keywords" => "grande guerra, prima guerra mondiale, roosevelt, americani nella prima guerra mondiale, america nella prima guerra mondiale, fronte occidentale, grande uno rosso, francia 1918",
        "google" => $google,
        "cover" => "tw-all-GrandeGuerra.jpg",
        "sidebar" => false,
        "file" => "grande_guerra.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Anton&display=swap"
        )
    ),
    "libri_un-cowboy-del-texas-quindici-anni-di-avventure-cavallo" => array(
        "title" => "Un cowboy del Texas - Quindici anni di avventure a cavallo - Liberty Bell Edizioni",
        "desc" => "Charles A. Siringo - cowboy texano di origine italiana per parte di padre - vive i momenti d’oro del selvaggio West, l’era dei cowboy.",
        "keywords" => "Far West, cowboy, Billy the Kid, Texas, libro western, western, West, storia del Texas, il selvaggio West, racconto di avventura, cowboy West",
        "google" => $google,
        "cover" => "tw-all-Siringo.jpg",
        "sidebar" => false,
        "file" => "un_cowboy_del_texas.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap"
        )
    ),
    "libri_la-guerra-civile-americana-nelle-memorie-un-soldato-comune" => array(
        "title" => "La Guerra Civile americana nelle memorie di un soldato comune - Liberty Bell Edizioni",
        "desc" => "La Guerra Civile americana nelle memorie di un soldato comune è il resoconto delle esperienze vissute in prima persona da Leander Stillwell. Sollecitato dal figlio più giovane, Stillwell scrive le proprie memorie nel 1916, a più di cinquant’anni dalla fine della guerra tra Nord e Sud",
        "keywords" => "battaglia di shiloh, stillwell, guerra di secessione, guerra civile americana, storia americana, la guerra civile americana, libri di guerra",
        "google" => $google,
        "cover" => "tw-all-Stillwell.jpg",
        "sidebar" => false,
        "file" => "guerra_civile_americana.html",
        "css" => array(
            "https://fonts.googleapis.com/css?family=Buenard&display=swap"
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
        "keywords" => "piroscafi, Mississippi, gara, battelli a vapore, reconstruction, fiume Mississippi, piroscafi del Mississippi",
        "google" => $google,
        "cover" => "blog/LeeNatchez_cover.jpg",
        "sidebar" => true,
        "file" => "blog/lee_natchez.html",
        "css" => array()
    ),
    "blog_la-bandiera-americana" => array(
        "title" => "Un percorso a 10 tappe per la bandiera americana - Liberty Bell Edizioni",
        "desc" => "Per festeggiare il bicentenario del terzo Flag Act, promulgato il 4 aprile 1818, ripercorriamo in 10 tappe la storia della bandiera a Stelle e Strisce",
        "keywords" => "bandiera americana, stelle e strisce, Iwo Jima, bandiera stelle, bandiera Stati Uniti, Betsy Ross, bandiera USA",
        "google" => $google,
        "cover" => "blog/Flag_cover.png",
        "sidebar" => true,
        "file" => "blog/flag.html",
        "css" => array()
    ),
    "blog_sergente-stubby" => array(
        "title" => "Sergente Stubby - Liberty Bell Edizioni",
        "desc" => "In occasione del centenario dall&#039;armistizio della Grande Guerra e dell&#039;uscita del nostro ultimo libro Americani nella Grande Guerra, vogliamo dedicare questo articolo a un eroe un po&#039; particolare della Grande Guerra, il sergente Stubby",
        "keywords" => "sergente stubby, eroe grande guerra, eroe prima guerra mondiale, corpo di spedizione americano, cani in guerra, cani famosi",
        "google" => $google,
        "cover" => "blog/Stubby_cover.jpg",
        "sidebar" => true,
        "file" => "blog/stubby.html",
        "css" => array()
    ),
    "blog_woodrow-wilson-in-italia" => array(
        "title" => "Woodrow Wilson in Italia - Liberty Bell Edizioni",
        "desc" => "Fra il 3 e il 6 gennaio 1919, dopo la fine della Grande Guerra, il presidente americano Woodrow Wilson, visita l&#039;Italia, a Roma, Genova, Milano e Torino.",
        "keywords" => "woodrow wilson, documentario, italia, visita in italia, relazioni internazionali, fascismo, avvento del fascismo",
        "google" => $google,
        "cover" => "blog/wilson_cover.jpg",
        "sidebar" => true,
        "file" => "blog/wilson_in_italia.html",
        "css" => array()
    ),
    "blog_la-mia-fuga-dalla-schiavitu" => array(
        "title" => "La mia fuga dalla schiavitù, di Frederick Douglass - Liberty Bell Edizioni",
        "desc" => "Nato schiavo in Maryland nel 1818, Frederick Douglass si guadagna la libertà nel modo descritto in questo articolo, pubblicato - per i motivi che spiega lui stesso - nel 1881, ben quarantatré anni dopo gli avvenimenti narrati.",
        "keywords" => "douglass, frederick douglass, schiavitù, emancipazione",
        "google" => $google,
        "cover" => "blog/Douglass_cover.jpg",
        "sidebar" => true,
        "file" => "blog/douglass.html",
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
$bcks = array("bck1", "bck2", "bck4", "bck5", "bck6", "bck7", "bck10", "bck11", "bck12");
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
// if ($array["sidebar"]) {
//     $top = str_replace("{SIDEBARCLASS}", "content-area col-lg-8 col-md-8 col-sm-8 col-xs-12", $top);
// }
// else {
$top = str_replace("{SIDEBARCLASS}", "content-area", $top);
// }
echo $top;
// # Top End

$twitter_follow = <<<TWITTERFOLLOW
<div class="textwidget"><a class="twitter-follow-button" href="https://twitter.com/LibertyBellEd" data-show-count="false" data-size="large">Follow @LibertyBellEd</a></div>
TWITTERFOLLOW;

$timeline_h = 380;

$twitter_timeline = <<<TWITTERTIMELINE
<a class="twitter-timeline" data-lang="it" data-height="{$timeline_h}" href="https://twitter.com/LibertyBellEd?ref_src=twsrc%5Etfw">Tweets by LibertyBellEd</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
TWITTERTIMELINE;

$facebook = <<<FACEBOOK
<div class="fb-page" data-href="https://www.facebook.com/LibertyBellEd/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/LibertyBellEd/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/LibertyBellEd/">Liberty Bell Edizioni</a></blockquote></div>
FACEBOOK;

$mailchimp = <<<MAILCHIMP
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://libertybell.us16.list-manage.com/subscribe/post?u=38186b011274b1926b7d7cc5c&amp;id=72defa407f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Iscriviti alla nostra newsletter</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Indirizzo email" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_38186b011274b1926b7d7cc5c_72defa407f" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Iscriviti" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
MAILCHIMP;

$mailerlite_h = 250;

$mailerlite = <<<MAILERLITE
<iframe src="" data-src="https://landing.mailerlite.com/webforms/landing/b9a9z2" style="border: none; width: 100%; height: {$mailerlite_h}px;"></iframe>
MAILERLITE;

include_once __DIR__ . "/assets/html/" . $array["file"];
echo "</div><footer class=\"entry-footer\"></footer></article></main></div>";
// if ($array["sidebar"]) {
//     echo <<<SIDEBAR
//     <div id="secondary" class="widget-area col-lg-4 col-md-4 col-sm-4 col-xs-12" role="complementary">
//     <aside id="text-3" class="widget widget_text">
//     {$twitter_timeline}
//     {$mailerlite}
//     </aside></div><!-- #secondary -->
// SIDEBAR;
// }
$additional_css = "";
foreach ($array["css"] as $css) {
    $additional_css .= "<link href=\"" . str_replace("|", "%7C", $css) . "\" rel=\"stylesheet\">";
}
$bottom = file_get_contents("assets/common/bottom.html");

$bottom = str_replace("{ADDITIONAL_IMPORTS}", $additional_css, $bottom);
echo $bottom;
//include_once("bottom.html");
?>