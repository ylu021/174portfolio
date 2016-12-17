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
                <h1>Feature Work</h1> 
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet augue mollis, maximus quam non, pretium eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi eget leo aliquet, tincidunt leo vitae, lobortis ex. Mauris vel viverra turpis. In dapibus laoreet turpis ut rhoncus. Vestibulum consequat sem ac libero lacinia tincidunt. Phasellus venenatis interdum ante. Ut lobortis turpis at condimentum consectetur. In facilisis sem at ex lobortis elementum.</p>
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
                            <figcaption>Fig2. - Hero Central.</figcaption>
                        </figure>
                        <div class="article-content">
                            <h2>Hero Central</h2>
                            <p>This is a reference website for all Super Hero lovers; Advanced Front-end Web Design and Development team project 2 (A modification on team 1's project 1). </p>
                        </div>
                    </div>
                    
                    <div class="article-container">
                        <figure class="box">
                            <img src="https://s3-media2.fl.yelpcdn.com/bphoto/KPhwUYqgfEQ8huXs1lH-ew/ls.jpg" alt="Fig3. - Freshly Made Noodles.">
                            <figcaption>Fig3. - Freshly Made Noodles.</figcaption>
                        </figure>
                        <div class="article-content">
                            <h2>Our Freshly Made Noodles</h2>
                            <p>Prepared daily in-house, our noodles are made with the blend of the finest flours in carefully caliberated conditions of temperature and humidity giving our noodles textural superiority.</p>
                        </div>
                    </div>

                </article>

                <aside>
                    <h2>Original Goods</h2>
                    <p>For all who want to enjoy ICHIRAN's delicious flavor at home! Here we present ICHIRAN's Original Goods!</p>
                    <figure>
                    <img src="http://www.ichiran.co.jp/en/goods/kamadare_1.jpg" alt="Fig4. - Ichiran Product.">
                    <figcaption>Fig4. - Ichiran Product.</figcaption>
                    </figure>
                    <p>Since our foundation in 1960, our experts have dedicatedly research flavor. Our Original Goods are the result of all that experience and skills.They have made that professional deliciousness easy to make for everyone.</p>
                    <p>Enjoy ICHIRAN's flavor with your love ones, surprise that special person with a unique ICHIRAN's experience, or give yourself a treat ICHIRAN's style.</p>
                </aside>

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Third Section -->
    <section id="third">
        <h1>About Us</h1>
    <div class="container">
        <div id="content-3" class="content">
            <div class="card">
                <figure class="colophon">
                    <img src="http://www.005.tv/uploads/allimg/161018/2259251254-1.jpg" alt="YichenLu">
                </figure>
                <h2>Yichen Lu</h2>
                <p>
                    Content strategist
                </p>
            </div>
            <div class="card">
                <figure class="colophon">
                    <img src="http://www.005.tv/uploads/allimg/161018/2259254525-2.jpg" alt="YichenLu">
                </figure>
                <h2>Xingyi Li</h2>
                <p>
                    CSS artist
                </p>
            </div>
        </div><!-- .content -->
    </div><!-- .container -->
    </section>

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