<html>

  <head>

    <link rel="stylesheet" type="text/css" href="wine-quiz.css"/>
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.jpg'/>

    <header>
      <ul class="header-list">
      </ul>
    </header>

    <footer>
      <ul class="footer-list">
      </ul>
    </footer>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <title>Whine Free Wine | What wine are you?</title>
    <link rel="stylesheet" type="text/css" href="wine-quiz.css"/>
  </head>

  <body>

    <div class="container">

      <section class="content">
        <h1>What wine are you?</h1>

        <?php
          $pinot_grigio = 0;
          $sauvignon_blanc = 0;
          $chardonnay = 0;
          $pinot_noir = 0;
          $rioja = 0;
          $cabernet_sauvignon_merlot = 0;
        ?>

        <!-- Question 1 -->
        <?php
          if (isset($_POST["florida"]))
            $pinot_grigio++;
          elseif (isset($_POST["new_york"]))
            $sauvignon_blanc++;
          elseif (isset($_POST["milan"]))
            $chardonnay++;
          elseif (isset($_POST["london"]))
            $pinot_noir++;
          elseif (isset($_POST["madrid"]))
            $rioja++;
          elseif (isset($_POST["edinburgh"]))
            $cabernet_sauvignon_merlot++;
        ?>

        <!-- Question 2 -->
        <?php
          if (isset($_POST["disneyland"]))
            $pinot_grigio++;
          elseif (isset($_POST["beach"]))
            $sauvignon_blanc++;
          elseif (isset($_POST["cruise_ship"]))
            $chardonnay++;
          elseif (isset($_POST["australia"]))
            $pinot_noir++;
          elseif (isset($_POST["rafting"]))
            $rioja++;
          elseif (isset($_POST["hotel"]))
            $cabernet_sauvignon_merlot++;
        ?>

        <!-- Question 3 -->
        <?php
          if (isset($_POST["nightclub"]))
            $pinot_grigio++;
          elseif (isset($_POST["house_party"]))
            $sauvignon_blanc++;
          elseif (isset($_POST["bed"]))
            $chardonnay++;
          elseif (isset($_POST["dinner"]))
            $pinot_noir++;
          elseif (isset($_POST["bar"]))
            $rioja++;
          elseif (isset($_POST["drinking_port"]))
            $cabernet_sauvignon_merlot++;
        ?>

        <!-- Question 4 -->
        <?php
          if (isset($_POST["chicken_nuggets"]))
            $pinot_grigio++;
          elseif (isset($_POST["pizza"]))
            $sauvignon_blanc++;
          elseif (isset($_POST["lasagne"]))
            $chardonnay++;
          elseif (isset($_POST["coq_au_vin"]))
            $pinot_noir++;
          elseif (isset($_POST["roast_dinner"]))
            $rioja++;
          elseif (isset($_POST["turducken"]))
            $cabernet_sauvignon_merlot++;
        ?>

        <!-- Question 5 -->
        <?php
          if (isset($_POST["nandos"]))
            $pinot_grigio++;
          elseif (isset($_POST["wetherspoons"]))
            $sauvignon_blanc++;
          elseif (isset($_POST["local_italian"]))
            $chardonnay++;
          elseif (isset($_POST["cafe_rouge"]))
            $pinot_noir++;
          elseif (isset($_POST["wagamama"]))
            $rioja++;
          elseif (isset($_POST["savoy"]))
            $cabernet_sauvignon_merlot++;
        ?>

        <!-- Question 6 -->
        <?php
          if (isset($_POST["friends"]))
            $pinot_grigio++;
          elseif (isset($_POST["gavin_and_stacey"]))
            $sauvignon_blanc++;
          elseif (isset($_POST["downton_abbey"]))
            $chardonnay++;
          elseif (isset($_POST["breaking_bad"]))
            $pinot_noir++;
          elseif (isset($_POST["game_of_thrones"]))
            $rioja++;
          elseif (isset($_POST["book"]))
            $cabernet_sauvignon_merlot++;
        ?>

        <!-- Question 7 -->
        <?php
          if (isset($_POST["haribos"]))
            $pinot_grigio++;
          elseif (isset($_POST["ice_cream"]))
            $sauvignon_blanc++;
          elseif (isset($_POST["popcorn"]))
            $chardonnay++;
          elseif (isset($_POST["crisps"]))
            $pinot_noir++;
          elseif (isset($_POST["maltesers"]))
            $rioja++;
          elseif (isset($_POST["after_eights"]))
            $cabernet_sauvignon_merlot++;
        ?>

        <!-- Question 8 -->
        <?php
          if (isset($_POST["gorgeous"]))
            $pinot_grigio++;
          elseif (isset($_POST["loyal"]))
            $sauvignon_blanc++;
          elseif (isset($_POST["gossip"]))
            $chardonnay++;
          elseif (isset($_POST["sophisticated"]))
            $pinot_noir++;
          elseif (isset($_POST["european"]))
            $rioja++;
          elseif (isset($_POST["a_good_chap"]))
            $cabernet_sauvignon_merlot++;
        ?>

        <!-- Question 9 -->
        <?php
          if (isset($_POST["champagne_brunch"]))
            $pinot_grigio++;
          elseif (isset($_POST["netflix"]))
            $sauvignon_blanc++;
          elseif (isset($_POST["spa"]))
            $chardonnay++;
          elseif (isset($_POST["long_lunch"]))
            $pinot_noir++;
          elseif (isset($_POST["bar_crawl"]))
            $rioja++;
          elseif (isset($_POST["hunting"]))
            $cabernet_sauvignon_merlot++;
        ?>

        <!-- Question 10 -->
        <?php
          if (isset($_POST["white"]))
            $pinot_grigio++;
          elseif (isset($_POST["legs"]))
            $sauvignon_blanc++;
          elseif (isset($_POST["mlf"]))
            $chardonnay++;
          elseif (isset($_POST["lees"]))
            $pinot_noir++;
          elseif (isset($_POST["rancio"]))
            $rioja++;
          elseif (isset($_POST["forest_floor"]))
            $cabernet_sauvignon_merlot++;
        ?>

        <!--The calculation-->

        <?php

        $max = 0;
        $wine = "";

        if ($pinot_grigio > $max)
        {
          $max = $pinot_grigio;
          $wine = "Pinot Grigio";
        }

        if ($sauvignon_blanc > $max)
        {
          $max = $sauvignon_blanc;
          $wine = "Sauvignon Blanc";
        }

        if ($chardonnay > $max)
        {
          $max = $chardonnay;
          $wine = "Chardonnay";
        }

        if ($pinot_noir > $max)
        {
          $max = $pinot_noir;
          $wine = "Pinot Noir";
        }

        if ($rioja > $max)
        {
          $max = $rioja;
          $wine = "Rioja";
        }

        if ($cabernet_sauvignon_merlot > $max)
        {
          $max = $cabernet_sauvignon_merlot;
          $wine = "Cabernet Sauvignon/Merlot";
        }

        ?>

        <!--Announcing the result-->

        <?php

        if($wine === "Pinot Grigio")
          {
            echo "<div class='wine_result_header'>";
            echo "Congratulations, you are Pinot Grigio!";
            echo "</div>";
            echo "<div class='wine_result_body'>";
            echo "\nYou're clearly a very basic bitch. You like to keep things simple, although that doesn't mean you necessarily go for quality. Whatever's cheapest, and has the highest alcohol content, is what you generally go for. Always up for a good night out, you're popular with your friends, although secretly you feel they wouldn't have anywhere near as much fun if you weren't there (there's a reason you're found in every nightclub). Keep being basic, Pinot Grigio.";
            echo "</div>";
          }

        if($wine === "Sauvignon Blanc")
          {
            echo "<div class='wine_result_header'>";
            echo "Congratulations, you are Sauvignon Blanc!";
            echo "</div>";
            echo "<div class='wine_result_body'>";
            echo "\nWhile more substantial than a Pinot Grigio, you're still a basic bitch. Your tastes are specific, and you know what you want, although you rarely venture outside your comfort zone. You've been to a vineyard once, and you never let anyone forget it. Malborough is like water to you, and you're willing to spend to get it. Stand back, guys, this Sauvingnon Blanc's on a (very specific) mission.";
            echo "</div>";
          }

        if($wine === "Chardonnay")
          {
            echo "<div class='wine_result_header'>";
            echo "Congratulations, you are Chardonnay!";
            echo "</div>";
            echo "<div class='wine_result_body'>";
            echo "\nYou're well on your way to being a proper adult, if you weren't already. You've spent your days in the trenches drinking Pinot Grigio and Sauvignon Blanc, and now you're ready to try new and exciting things (although only if they're oaked). The world's your oyster, and you're not afraid to pursue new opportunities on your quest to experience everything.";
            echo "</div>";
          }

        if($wine === "Pinot Noir")
          {
            echo "<div class='wine_result_header'>";
            echo "Congratulations, you are Pinot Noir!";
            echo "</div>";
            echo "<div class='wine_result_body'>";
            echo "\nPinot Noir keeps it light. You're a funny person, and get along well with most people. You're capable of incredible complexity, and can hold your own in almost any conversation or debate. However, you don't take yourself too seriously, and aren't afraid to make fun of yourself or be wrong. Well done, Pinot Noir, the world needs more people like you.";
            echo "</div>";
          }

        if($wine === "Rioja")
          {
            echo "<div class='wine_result_header'>";
            echo "Congratulations, you are Rioja!";
            echo "</div>";
            echo "<div class='wine_result_body'>";
            echo "\nAh, Rioja. You don't mess around, and aren't afraid to get stuck into difficult tasks. People respect you, and take your advice. You're invited to every party, although you normally find yourself caring for the drunk people. You would much rather just have some friends over for dinner as you are one excellent cook. Your friends don't deserve you.";
            echo "</div>";
          }

        if($wine === "Cabernet Sauvignon/Merlot")
          {
            echo "<div class='wine_result_header'>";
            echo "Congratulations, you are Cabernet Sauvignon/Merlot!";
            echo "</div>";
            echo "<div class='wine_result_body'>";
            echo "\nYou're either a genuinely sophisticated individual or, more likely, living of daddy's money. You're probably posh, and prefer the finer things in life. You actually find a turducken to be somewhat lacking in volume, and much prefer the stuff whipped up by the maid at home. That said, your tastes are correct, and it's only a shame that other people haven't seen them yet. With age, others will come round to your way of things, and by then you'll be the genuine expert. Hang in there, Cabernet Sauvignon/Merlot, it's only going to get better.";
            echo "</div>";
          }

        ?>

        <br><br><br>
        <a href="./wine-quiz.php" class="go_again_button">Go again</a>
        <br><br><br>

        <?php
          //echo "\nPinot Grigio = ${pinot_grigio}";
          //echo "\nSauvignoc Blanc = ${sauvignon_blanc}";
          //echo "\nChardonnay = ${chardonnay}";
          //echo "\nPinot Noir = ${pinot_noir}";
          //echo "\nRioja = ${rioja}";
          //echo "\nCabernet Sauvignon/Merlot = ${cabernet_sauvignon_merlot}";
        ?>

        <!--Facebook share button-->
          <div class="fb-share-button"
            data-href="./wine-quiz.php"
            data-layout="button_count">
          </div>

      </section>

    </div>

  </body>
</html>
