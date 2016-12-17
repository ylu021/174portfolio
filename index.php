<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Yichen Lu</title>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="main-menu">

        <ul>
            <li id="brand"><a href="#"><h1>Yichen Lu</h1></a></li>
            <li><a href="./">Home</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Top Section -->
    <section id="first">
        <div class="container">
               
            <div id="content-1" class="content">    
                <h1>Feature Work - Ichiran</h1> 
                <p>
                    I teamed up with Kelsey Li to create a modern remodification for Ichiran Ramen's website. This website included Z-pattern page, F-pattern page and colophon-like card page. We also wrote a style definition document, a comprehensie design document and a wireframe diagram for this website.
                </p>
                <a id="learn-more" href="#second">Learn More</a>
            </div><!-- .content -->
       </div><!-- .container -->

    </section>

    <!-- Second Section -->
    <section id="second">
        <div class="container">
            <h1>Accomplishments</h1>
            <div id="content-2" class="content">
                <article>
                    <div class="article-container">
                        <figure class="box">
                            <img src="http://urcsc170.org/mtam2/project1-team7/images/pokemon_logo.png" alt="Fig1. - Pokémon Generations">
                            <figcaption>Pokémon Generations</figcaption>
                        </figure>
                        <div class="article-content">   
                            <h2>Pokémon Generations</h2>
                            <p>This is a reference website for all Pokémon lovers; Advanced Front-end Web Design and Development team project 1.</p>
                        </div>
                    </div>
                    
                    <div class="article-container">
                        <figure class="box">
                            <img src="http://urcsc170.org/mtam2/project2-team7/images/logo.png" alt="Fig2. - Hero Central.">
                            <figcaption>Hero Central</figcaption>
                        </figure>
                        <div class="article-content">
                            <h2>Hero Central</h2>
                            <p>This is a reference website for all Super Hero lovers; Advanced Front-end Web Design and Development team project 2 (A modification on team 1's project 1). </p>
                        </div>
                    </div>
                    
                    <div class="article-container">
                        <figure class="box">
                            <img src="http://www.ichiran.co.jp/img/ichiran.gif" alt="Fig3. - Freshly Made Noodles.">
                            <figcaption>Ichiran Remodification</figcaption>
                        </figure>
                        <div class="article-content">
                            <h2>Ichiran Remodification</h2>
                            <p>This is a remodification of Ichiran's website. While the details are ignored, we propose the use of Z and F patterns to make the brand more modern.</p>
                        </div>
                    </div>

                </article>

                <aside>
                    <h2>My Contributions</h2>
                    <ul>
                        <li>Content Strategist</li>
                        <li>Designed the interaction and interface components</li>
                        <li>Programmed the website</li>
                    </ul>
                </aside>

            </div><!-- .content -->

       </div><!-- .container -->

    </section>
    <footer class="col-md-12">
        <p>Copyright 2016 © Yichen Lu. All rights reserved.</p>
    </footer>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

</body>

</html>