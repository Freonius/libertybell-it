<?php
require_once "./common_functions.php";  // The server uses an old version of PHP

class PageMaker {
    private $page;

    private $url;

    private $production = true;

    private $addr;

    private $google;

    private $twitter_follow;

    private $twitter_timeline;

    private $facebook;

    private $mailerlite;

    public function __construct($url, $page, $production = true) {
        $this->page = $page;
        $this->production = $production;
        $this->url = get_clean_pagename($url);
        $addr = $production ? "libertybell.it" : "libertybell-it.herokuapp.com";

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

        $this->addr = $addr;
        $this->google = $google;

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

        $mailerlite_h = 250;

        $mailerlite = <<<MAILERLITE
        <iframe src="" data-src="https://landing.mailerlite.com/webforms/landing/b9a9z2" style="border: none; width: 100%; height: {$mailerlite_h}px;"></iframe>
        MAILERLITE;

        $this->twitter_follow = $twitter_follow;
        $this->twitter_timeline = $twitter_timeline;
        $this->facebook = $facebook;
        $this->mailerlite = $this->mailerlite;
    } 

    public function get_top() {
        $robots = "";
        $canon = "";
        if ($this->url == "cookie-policy" || $this->url == "404") {
            $robots = "noindex,nofollow";
        }
        else {
            $robots = "follow,index,noodp";
        }
        if ($this->url == "404") {
            $canon = "404/";
        }
        else {
            $canon = $this->url;
        }

        $bcks = array("bck1", "bck2", "bck4", "bck5", "bck6", "bck7", "bck10", "bck11", "bck12");
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
        
        // # Top Begin
        $top = file_get_contents("./assets/common/top.html");
        $top = str_replace("{TITLE}", $this->page["title"], $top);
        $top = str_replace("{DESCRIPTION}", $this->page["desc"], $top);
        $top = str_replace("{KEYWORDS}", $this->page["keywords"], $top);
        if ($this->page["google"]) {
            $top = str_replace("{GOOGLE}", $this->google, $top);
        }
        else {
            $top = str_replace("{GOOGLE}", "let i;", $top);
        }
        $top = str_replace("{COVER}", $this->page["cover"], $top);
        $top = str_replace("{ROBOTS}", $robots, $top);
        $top = str_replace("{CANON}", $canon, $top);
        $top = str_replace("{BCK}", $bcks[$br], $top);
        $top = str_replace("{QUOTE}", $quotes[$qr][1], $top);
        $top = str_replace("{QUOTEBY}", $quotes[$qr][0], $top);
        $top = str_replace("{REALADDR}", "https://" . $this->addr, $top);
        if ($this->page["sidebar"]) {
            $top = str_replace("{SIDEBARCLASS}", "content-area col-lg-8 col-md-8 col-sm-8 col-xs-12", $top);
        }
        else {
            $top = str_replace("{SIDEBARCLASS}", "content-area", $top);
        }
        return $top;
    }

    public function get_content() {
        $content = file_get_contents("./assets/html/" . $this->page["file"]);
        $content .= "</div><footer class=\"entry-footer\"></footer></article></main></div>";
        return $content;
    }

    public function get_sidebar() {
        if ($this->page["sidebar"]) {
            return <<<SIDEBAR
            <div id="secondary" class="widget-area col-lg-4 col-md-4 col-sm-4 col-xs-12" role="complementary">
            <aside id="text-3" class="widget widget_text">
            {$this->twitter_timeline}
            {$this->mailerlite}
            </aside></div><!-- #secondary -->
            SIDEBAR;
        }
        return "";
    }

    public function get_bottom() {
        $additional_css = "";
        foreach ($this->page["css"] as $css) {
            $additional_css .= "<link href=\"" . str_replace("|", "%7C", $css) . "\" rel=\"stylesheet\">";
        }
        $bottom = file_get_contents("assets/common/bottom.html");

        $bottom = str_replace("{ADDITIONAL_IMPORTS}", $additional_css, $bottom);
        return $bottom;
    }

    public function get_page() {
        return $this->get_top() . $this->get_content() . $this->get_sidebar() . $this->get_bottom();
    }
}