<?php
header("Content-type: text/xml");
echo "<?"; ?>xml version="1.0" encoding="UTF-8"<?php echo "?>"; ?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>

<channel>
	<title>Liberty Bell Edizioni</title>
	<atom:link href="http://www.libertybell.it/feed/" rel="self" type="application/rss+xml" />
	<link>http://www.libertybell.it</link>
	<description></description>
	<lastBuildDate>Wed, 04 Apr 2018 10:30:00 +0000</lastBuildDate>
	<language>it-IT</language>
	<sy:updatePeriod>weekly</sy:updatePeriod>
	<sy:updateFrequency>1</sy:updateFrequency>

<image>
	<url>http://www.libertybell.it/logo-square.png</url>
	<title>Liberty Bell Edizioni</title>
	<link>http://www.libertybell.it</link>
	<width>32</width>
	<height>32</height>
</image>
<?php
$articles = array(
	array(
        "title" => "Woodrow Wilson in Italia",
        "link" => "blog/woodrow-wilson-in-italia/",
        "pubDate" => "Thu, 03 Jan 2019 12:30:00 +0000",
        "author" => "Liberty Bell",
        "desc" => "Con l’armistizio dell’11 novembre 1918 la Grande Guerra finisce. Circa due mesi dopo Wilson arriva in Europa per partecipare alle trattative di pace di Versailles e per pro­muo­ve­re la sua Lega delle Nazioni e i suoi Quattordici Punti. Nel Vecchio Continente viene generalmente accolto da folle festanti. Dopo Pa­ri­gi e Londra è il turno dell’Italia, dove per quattro giorni - dal 3 al 6 gennaio 1919 - il presidente si destreggia nella fitta agenda di eventi in suo onore e celebrazioni ufficiali di vario tipo. [&#8230;]",
        "file" => "wilson_in_italia.html"
	),
	array(
        "title" => "Sergente Stubby",
        "link" => "blog/sergente-stubby/",
        "pubDate" => "Sun, 11 Nov 2018 10:30:00 +0000",
        "author" => "Liberty Bell",
        "desc" => "In occasione dell’uscita del nostro ultimo libro, Americani nella Grande Guerra, e del centenario dalla fine della Prima Guerra Mondiale, dedichiamo questo articolo a un soldato un po’ particolare che ha preso parte ai combattimenti in Francia fra il 1917 e il 1918 insieme al contingente americano: il sergente Stubby. Uscito da Yale, Stubby sarà impegnato in alcune azioni di salvataggio, si distinguerà per gesti coraggiosi, e dopo la guerra incontrerà addirittura tre presidenti (Wilson, Harding e Coolidge) oltre a John J. Pershing, il generale a capo del corpo di spedizione americano. Ciò che contraddistingue Stubby dai quasi tre milioni di soldati americani inviati in Francia durante la Grande Guerra è che, bè, è un cane. [&#8230;]",
        "file" => "stubby.html"
	),
	array(
        "title" => "Un percorso a 10 tappe per la bandiera americana",
        "link" => "blog/la-bandiera-americana/",
        "pubDate" => "Wed, 04 Apr 2018 10:30:00 +0000",
        "author" => "Liberty Bell",
        "desc" => "Stars and Stripes, Old Glory, Star-Spangled Banner… diversi sono i nomi attribuiti alla bandiera degli Stati Uniti, e numerose sono le tappe che ne descrivono la storia. Per ricordare il 4 aprile, bicentenario dal 3° e ultimo Flag Act, abbiamo selezionato 10 punti, un brevissimo percorso tra importanti fatti storici e piccole curiosità. [&#8230;]",
        "file" => "flag.html"
	),
    array(
        "title" => "La Grande Gara sul Mississippi",
        "link" => "blog/la-grande-gara-sul-mississippi/",
        "pubDate" => "Sun, 05 Nov 2017 07:30:00 +0000",
        "author" => "Liberty Bell",
        "desc" => "La sera del 30 giugno 1870 due piroscafi si preparano a partire dalle banchine di New Orleans. Un evento fin troppo comune, per la capitale della Louisiana, eppure comuni cittadini e giornalisti si accalcano sulla riva per assistere alla partenza. I due piroscafi pronti a risalire la corrente del grande Mississippi sono il Robert E. Lee e il Natchez. Praticamente l’unico argomento [&#8230;]",
        "file" => "lee_natchez.html"
	),
	array(
        "title" => "L’affascinante storia della linea Mason-Dixon",
        "link" => "blog/affascinante-storia-della-linea-mason-dixon/",
        "pubDate" => "Sun, 24 Sep 2017 07:30:00 +0000",
        "author" => "Liberty Bell",
        "desc" => "I confini che separano i vari stati degli USA sono spesso delle linee rette. Wyoming e Colorado sono ad esempio dei veri e propri quadrilateri. Eppure, quelle linee non sono state tracciate “a caso”, ogni confine ha la sua storia. Inauguriamo una serie di articoli dedicati alle curiose vicende che hanno conferito ai singoli stati [&#8230;]",
        "file" => "mason_dixon.html"
	)
);


foreach ($articles as $article) {
	echo "<item>\n";
	echo "<title>{$article['title']}</title>\n";
	echo "<link>http://www.libertybell.it/{$article['link']}</link>\n";
	echo "<pubDate>{$article['pubDate']}</pubDate>\n";
	echo "<dc:creator>{$article['author']}</dc:creator>\n";
	echo "<description><![CDATA[<p>{$article['desc']}</p>]]></description>\n";
	echo "<content:encoded><![CDATA[" . file_get_contents("../assets/html/blog/" . $article["file"]) . "]]></content:encoded>\n";
	echo "</item>\n";
}
?>
	</channel>
</rss>