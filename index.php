<?php
require_once "./PageMaker.php";

if ($argc == 1 || $argv[1] == "prod") {
    $production = true;
}
else {
    $production = false;
}

// # Page structures
$pages = array(
    // # PAGINE
    "about" => array(
        "title" => "About - Liberty Bell Edizioni",
        "desc" => "Liberty Bell è una piccola casa editrice. Il nostro obiettivo è pubblicare libri sulla storia degli Stati Uniti e del Nord America in generale.",
        "keywords" => "casa editrice, Liberty Bell, Stati Uniti, libri Stati Uniti, Stati Uniti d America, storia americana, ebook, ebook storia americana, Nord America",
        "google" => true,
        "cover" => "logo-square.png",
        "sidebar" => true,
        "file" => "about.html",
        "css" => array()
    ),
    "contatti" => array(
        "title" => "Contatti - Liberty Bell Edizioni",
        "desc" => "Per qualsiasi informazione, curiosità o suggerimento non esitare a contattarci! info@libertybell.it o su Twitter a @LibertyBellEd",
        "keywords" => "casa editrice, editore, storia, storia americana, stati uniti, usa, storia degli usa, storia degli stati uniti, guerra civile, libri, guerra indipendenza, ebook, editoria digitale, cultura americana, libri americani",
        "google" => true,
        "cover" => "logo-square.png",
        "sidebar" => false,
        "file" => "contatti.html",
        "css" => array()
    ),
    "cookie-policy" => array(
        "title" => "Cookie Policy - Liberty Bell Edizioni",
        "desc" => "",
        "keywords" => "",
        "google" => false,
        "cover" => "logo-square.png",
        "sidebar" => false,
        "file" => "cookies.html",
        "css" => array()
    ),
    "servizi-editoriali" => array(
        "title" => "Servizi editoriali - Liberty Bell Edizioni",
        "desc" => "Dal 2019 forniamo anche servizi editoriali a self-publishers e ad altre case editrici",
        "keywords" => "servizi editoriali, self publishing, self publisher, copertine, editing, editing libro, impaginazione, copertine libro",
        "google" => true,
        "cover" => "logo-square.png",
        "sidebar" => false,
        "file" => "servizi.html",
        "css" => array()
    ),
    "blog" => array(
        "title" => "Blog - Liberty Bell Edizioni",
        "desc" => "Articoli, curiosità e altro su storia e cultura americana",
        "keywords" => "casa editrice, editore, storia, storia americana, stati uniti, usa, storia degli usa, storia degli stati uniti, guerra civile, libri, guerra indipendenza, ebook, editoria digitale, cultura americana, libri americani",
        "google" => true,
        "cover" => "logo-square.png",
        "sidebar" => false,
        "file" => "blog.html",
        "css" => array()
    ),
    // # LIBRI
    "libri_una-casa-divisa" => array(
        "title" => "Una casa divisa - Cinque racconti sulla Guerra Civile americana - Liberty Bell Edizioni",
        "desc" => "Una raccolta di cinque racconti di grandi autori - Henry James, Mark Twain, Louisa May Alcott, Willa Cather, Charles W. Chesnutt - che offre uno spunto di riflessione sull’evento storico più tragico e determinante della storia americana: la Guerra Civile",
        "keywords" => "racconti, guerra civile americana, classici, short stories, henry james, mark twain, louisa may alcott, willa cather, charles w chesnutt",
        "google" => true,
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
        "google" => true,
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
        "google" => true,
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
        "google" => true,
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
        "google" => true,
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
        "google" => true,
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
        "google" => true,
        "cover" => "blog/MasonDixon_cover.png",
        "sidebar" => true,
        "file" => "blog/mason_dixon.html",
        "css" => array()
    ),
    "blog_la-grande-gara-sul-mississippi" => array(
        "title" => "La Grande Gara sul Mississippi - Liberty Bell Edizioni",
        "desc" => "Il 30 giugno 1870 due piroscafi, il Robert E. Lee e il Natchez, si sfidano in un&#039;epica gara di velocità sul fiume Mississippi.",
        "keywords" => "piroscafi, Mississippi, gara, battelli a vapore, reconstruction, fiume Mississippi, piroscafi del Mississippi",
        "google" => true,
        "cover" => "blog/LeeNatchez_cover.jpg",
        "sidebar" => true,
        "file" => "blog/lee_natchez.html",
        "css" => array()
    ),
    "blog_la-bandiera-americana" => array(
        "title" => "Un percorso a 10 tappe per la bandiera americana - Liberty Bell Edizioni",
        "desc" => "Per festeggiare il bicentenario del terzo Flag Act, promulgato il 4 aprile 1818, ripercorriamo in 10 tappe la storia della bandiera a Stelle e Strisce",
        "keywords" => "bandiera americana, stelle e strisce, Iwo Jima, bandiera stelle, bandiera Stati Uniti, Betsy Ross, bandiera USA",
        "google" => true,
        "cover" => "blog/Flag_cover.png",
        "sidebar" => true,
        "file" => "blog/flag.html",
        "css" => array()
    ),
    "blog_sergente-stubby" => array(
        "title" => "Sergente Stubby - Liberty Bell Edizioni",
        "desc" => "In occasione del centenario dall&#039;armistizio della Grande Guerra e dell&#039;uscita del nostro ultimo libro Americani nella Grande Guerra, vogliamo dedicare questo articolo a un eroe un po&#039; particolare della Grande Guerra, il sergente Stubby",
        "keywords" => "sergente stubby, eroe grande guerra, eroe prima guerra mondiale, corpo di spedizione americano, cani in guerra, cani famosi",
        "google" => true,
        "cover" => "blog/Stubby_cover.jpg",
        "sidebar" => true,
        "file" => "blog/stubby.html",
        "css" => array()
    ),
    "blog_woodrow-wilson-in-italia" => array(
        "title" => "Woodrow Wilson in Italia - Liberty Bell Edizioni",
        "desc" => "Fra il 3 e il 6 gennaio 1919, dopo la fine della Grande Guerra, il presidente americano Woodrow Wilson, visita l&#039;Italia, a Roma, Genova, Milano e Torino.",
        "keywords" => "woodrow wilson, documentario, italia, visita in italia, relazioni internazionali, fascismo, avvento del fascismo",
        "google" => true,
        "cover" => "blog/wilson_cover.jpg",
        "sidebar" => true,
        "file" => "blog/wilson_in_italia.html",
        "css" => array()
    ),
    // # HOME E 404
    "index" => array(
        "title" => "Liberty Bell Edizioni - Storia e cultura degli Stati Uniti",
        "desc" => "Liberty Bell è una piccola casa editrice indipendente che si propone di contribuire a rendere più ricca l’offerta riguardante la storia degli Stati Uniti",
        "keywords" => "casa editrice indipendente, casa editrice, editore, storia, storia americana, stati uniti, usa, storia degli usa, storia degli stati uniti, guerra civile, libri, guerra indipendenza, ebook, editoria digitale, cultura americana, libri americani",
        "google" => true,
        "cover" => "logo-square.png",
        "sidebar" => true,
        "file" => "home.html",
        "css" => array()
    ),
    "404" => array(
        "title" => "Liberty Bell Edizioni - Pagina non trovata",
        "desc" => "",
        "keywords" => "",
        "google" => false,
        "cover" => "",
        "sidebar" => true,
        "file" => "404.html",
        "css" => array()
    )
);

foreach ($pages as $url => $page) {
    $pagemaker = new PageMaker($url, $page, $production);
    $file = fopen("./src/html/{$url}.html", "w");
    fwrite($file, $pagemaker->get_page());
    fclose($file);
}
?>