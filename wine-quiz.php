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

    <script>
      $('#option input:checkbox').addClass('input_hidden');
      $('#option label').click(function(){
      $(this).addClass('selected').siblings().removeClass('selected');
      });
    </script>

    <!--<style>
      input[type="checkbox"]:checked+label
        {border: 3px solid red;}
    </style>-->

    <title>Whine Free Wine | What wine are you?</title>
    <link rel="stylesheet" type="text/css" href="wine-quiz.css"/>
  </head>

  <body>

    <div class="container">

      <section class="content">
        <h1>What wine are you?</h1>

          <form method="post" id="myform" action="./wine-quiz-result.php">

          <!-- Question 1 -->

          <div id="question_title">First, choose a city.</div>
            <div id="question_content">
              <table align="center">
                <tbody>
                  <tr id="option">
                    <td>
                      <input type="checkbox" name="florida" id="florida">
                      <label for="florida">
                        <img src="./images/what-wine-are-you/question-1/florida.jpg" class="question_image" alt="florida">
                      </label>
                      <p class="image_caption">Florida (wait is that even a city?)</p>
                    </td>
                    <td>
                      <input type="checkbox" name="new_york" id="new_york" class="input_hidden">
                      <label for="new_york">
                        <img src="./images/what-wine-are-you/question-1/new-york.jpg" class="question_image" alt="new_york">
                      </label>
                      <p class="image_caption">New York</p>
                    </td>
                    <td>
                      <input type="checkbox" name="milan" id="milan" class="input_hidden">
                      <label for="milan">
                        <img src="./images/what-wine-are-you/question-1/milan.jpg" class="question_image" alt="milan">
                      </label>
                      <p class="image_caption">Milan</p>
                    </td>
                  </tr>
                  <tr id="option">
                    <td>
                      <input type="checkbox" name="london" id="london" class="input_hidden">
                      <label for="london">
                        <img src="./images/what-wine-are-you/question-1/london.jpg" class="question_image" alt="london">
                      </label>
                      <p class="image_caption">London</p>
                    </td>
                    <td>
                      <input type="checkbox" name="madrid" id="madrid" class="input_hidden">
                      <label for="madrid">
                        <img src="./images/what-wine-are-you/question-1/madrid.jpg" class="question_image" alt="madrid">
                      </label>
                      <p class="image_caption">Madrid</p>
                    </td>
                    <td>
                      <input type="checkbox" name="edinburgh" id="edinburgh" class="input_hidden">
                      <label for="edinburgh">
                        <img src="./images/what-wine-are-you/question-1/edinburgh.jpg" class="question_image" alt="edinburgh">
                      </label>
                      <p class="image_caption">Edinburgh</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          <br><!-- Question 2 -->

          <div id="question_title">Now, choose a holiday.</div>
              <div id="question_content">
                <table align="center">
                  <tbody>
                    <tr id="option">
                      <td>
                        <input type="checkbox" name="disneyland" id="disneyland">
                        <label for="disneyland">
                          <img src="./images/what-wine-are-you/question-2/disneyland.jpg" class="question_image" alt="disneyland">
                        </label>
                        <p class="image_caption">Disneyland, all expenses paid</p>
                      </td>
                      <td>
                        <input type="checkbox" name="beach" id="beach">
                        <label for="beach">
                          <img src="./images/what-wine-are-you/question-2/beach.jpg" class="question_image" alt="beach">
                        </label>
                        <p class="image_caption">Beach holiday in the Bahamas</p>
                      </td>
                      <td>
                        <input type="checkbox" name="cruise_ship" id="cruise_ship">
                        <label for="cruise_ship">
                          <img src="./images/what-wine-are-you/question-2/cruise_ship.jpg" class="question_image" alt="cruise_ship">
                        </label>
                        <p class="image_caption">Luxury cruise ship</p>
                      </td>
                    </tr>
                    <tr id="option">
                      <td>
                        <input type="checkbox" name="safari" id="safari">
                        <label for="safari">
                          <img src="./images/what-wine-are-you/question-2/safari.jpg" class="question_image" alt="safari">
                        </label>
                        <p class="image_caption">Safari</p>
                      </td>
                      <td>
                        <input type="checkbox" name="rafting" id="rafting">
                        <label for="rafting">
                          <img src="./images/what-wine-are-you/question-2/rafting.jpg" class="question_image" alt="rafting">
                        </label>
                        <p class="image_caption">White water rafting</p>
                      </td>
                      <td>
                        <input type="checkbox" name="hotel" id="hotel">
                        <label for="hotel">
                          <img src="./images/what-wine-are-you/question-2/hotel.jpg" class="question_image" alt="hotel">
                        </label>
                        <p class="image_caption">Luxury hotel</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

          <br><!-- Question 3 -->

          <div id="question_title">It's 11pm on a Saturday. Where are you?</div>
              <div id="question_content">
                <table align="center">
                  <tbody>
                    <tr id="option">
                      <td>
                        <input type="checkbox" name="nightclub" id="nightclub">
                        <label for="nightclub">
                          <img src="./images/what-wine-are-you/question-3/nightclub.jpg" class="question_image" alt="nightclub">
                        </label>
                        <p class="image_caption">In a nightclub</p>
                      </td>
                      <td>
                        <input type="checkbox" name="house_party" id="house_party">
                        <label for="house_party">
                          <img src="./images/what-wine-are-you/question-3/house_party.jpg" class="question_image" alt="house_party">
                        </label>
                        <p class="image_caption">At a house party</p>
                      </td>
                      <td>
                        <input type="checkbox" name="bed" id="bed">
                        <label for="bed">
                          <img src="./images/what-wine-are-you/question-3/bed.jpg" class="question_image" alt="bed">
                        </label>
                        <p class="image_caption">In bed</p>
                      </td>
                    </tr>
                    <tr id="option">
                      <td>
                        <input type="checkbox" name="trendy_bar" id="trendy_bar">
                        <label for="trendy_bar">
                          <img src="./images/what-wine-are-you/question-3/trendy_bar.jpg" class="question_image" alt="trendy_bar">
                        </label>
                        <p class="image_caption">At a trendy bar</p>
                      </td>
                      <td>
                        <input type="checkbox" name="dinner" id="dinner">
                        <label for="dinner">
                          <img src="./images/what-wine-are-you/question-3/dinner.jpg" class="question_image" alt="dinner">
                        </label>
                        <p class="image_caption">Dinner with friends</p>
                      </td>
                      <td>
                        <input type="checkbox" name="drinking_port" id="drinking_port">
                        <label for="drinking_port">
                          <img src="./images/what-wine-are-you/question-3/drinking_port.jpg" class="question_image" alt="drinking_port">
                        </label>
                        <p class="image_caption">Drinking port</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

          <br><!-- Question 4 -->

          <div id="question_title">You're having friends over for dinner. What do you cook?</div>
                <div id="question_content">
                  <table align="center">
                    <tbody>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="chicken_nuggets" id="chicken_nuggets">
                          <label for="chicken_nuggets">
                            <img src="./images/what-wine-are-you/question-4/chicken_nuggets.jpg" class="question_image" alt="chicken_nuggets">
                          </label>
                          <p class="image_caption">Chicken nuggets</p>
                        </td>
                        <td>
                          <input type="checkbox" name="pizza" id="pizza">
                          <label for="pizza">
                            <img src="./images/what-wine-are-you/question-4/pizza.jpg" class="question_image" alt="pizza">
                          </label>
                          <p class="image_caption">Pizza</p>
                        </td>
                        <td>
                          <input type="checkbox" name="lasagne" id="lasagne">
                          <label for="lasagne">
                            <img src="./images/what-wine-are-you/question-4/lasagne.jpg" class="question_image" alt="lasagne">
                          </label>
                          <p class="image_caption">Lasagne</p>
                        </td>
                      </tr>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="coq_au_vin" id="coq_au_vin">
                          <label for="coq_au_vin">
                            <img src="./images/what-wine-are-you/question-4/coq_au_vin.jpg" class="question_image" alt="coq_au_vin">
                          </label>
                          <p class="image_caption">Coq au vin</p>
                        </td>
                        <td>
                          <input type="checkbox" name="roast_dinner" id="roast_dinner">
                          <label for="roast_dinner">
                            <img src="./images/what-wine-are-you/question-4/roast_dinner.jpg" class="question_image" alt="roast_dinner">
                          </label>
                          <p class="image_caption">Roast dinner</p>
                        </td>
                        <td>
                          <input type="checkbox" name="turducken" id="turducken">
                          <label for="turducken">
                            <img src="./images/what-wine-are-you/question-4/turducken.jpg" class="question_image" alt="turducken">
                          </label>
                          <p class="image_caption">Turducken</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

          <br><!-- Question 5 -->

          <div id="question_title">Perhaps cooking is too much hassle. Choose a restaurant just in case.</div>
                <div id="question_content">
                  <table align="center">
                    <tbody>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="nandos" id="nandos">
                          <label for="nandos">
                            <img src="./images/what-wine-are-you/question-5/nandos.jpg" class="question_image" alt="nandos">
                          </label>
                          <p class="image_caption">Nandos</p>
                        </td>
                        <td>
                          <input type="checkbox" name="wetherspoons" id="wetherspoons">
                          <label for="wetherspoons">
                            <img src="./images/what-wine-are-you/question-5/wetherspoons.jpg" class="question_image" alt="wetherspoons">
                          </label>
                          <p class="image_caption">Wetherspoons</p>
                        </td>
                        <td>
                          <input type="checkbox" name="local_italian" id="local_italian">
                          <label for="local_italian">
                            <img src="./images/what-wine-are-you/question-5/local_italian.jpg" class="question_image" alt="local_italian">
                          </label>
                          <p class="image_caption">The local Italian</p>
                        </td>
                      </tr>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="cafe_rouge" id="cafe_rouge">
                          <label for="cafe_rouge">
                            <img src="./images/what-wine-are-you/question-5/cafe_rouge.jpg" class="question_image" alt="cafe_rouge">
                          </label>
                          <p class="image_caption">Cafe Rouge</p>
                        </td>
                        <td>
                          <input type="checkbox" name="wagamama" id="wagamama">
                          <label for="wagamama">
                            <img src="./images/what-wine-are-you/question-5/wagamama.jpg" class="question_image" alt="wagamama">
                          </label>
                          <p class="image_caption">Wagamama</p>
                        </td>
                        <td>
                          <input type="checkbox" name="savoy" id="savoy">
                          <label for="savoy">
                            <img src="./images/what-wine-are-you/question-5/savoy.jpg" class="question_image" alt="savoy">
                          </label>
                          <p class="image_caption">The Savoy</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

          <br><!-- Question 6 -->

          <div id="question_title">Choose a TV show to binge.</div>
                <div id="question_content">
                  <table align="center">
                    <tbody>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="friends" id="friends">
                          <label for="friends">
                            <img src="./images/what-wine-are-you/question-6/friends.jpg" class="question_image" alt="friends">
                          </label>
                          <p class="image_caption">Friends</p>
                        </td>
                        <td>
                          <input type="checkbox" name="gavin_and_stacey" id="gavin_and_stacey">
                          <label for="gavin_and_stacey">
                            <img src="./images/what-wine-are-you/question-6/gavin_and_stacey.jpg" class="question_image" alt="gavin_and_stacey">
                          </label>
                          <p class="image_caption">Gavin and Stacey</p>
                        </td>
                        <td>
                          <input type="checkbox" name="downton_abbey" id="downton_abbey">
                          <label for="downton_abbey">
                            <img src="./images/what-wine-are-you/question-6/downton_abbey.jpg" class="question_image" alt="downton_abbey">
                          </label>
                          <p class="image_caption">Downton Abbey</p>
                        </td>
                      </tr>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="breaking_bad" id="breaking_bad">
                          <label for="breaking_bad">
                            <img src="./images/what-wine-are-you/question-6/breaking_bad.jpg" class="question_image" alt="breaking_bad">
                          </label>
                          <p class="image_caption">Breaking Bad</p>
                        </td>
                        <td>
                          <input type="checkbox" name="game_of_thrones" id="game_of_thrones">
                          <label for="game_of_thrones">
                            <img src="./images/what-wine-are-you/question-6/game_of_thrones.jpg" class="question_image" alt="game_of_thrones">
                          </label>
                          <p class="image_caption">Game of Thrones</p>
                        </td>
                        <td>
                          <input type="checkbox" name="book" id="book">
                          <label for="book">
                            <img src="./images/what-wine-are-you/question-6/book.jpg" class="question_image" alt="book">
                          </label>
                          <p class="image_caption">I'd rather read a good book</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

          <br><!-- Question 7 -->

          <div id="question_title">What do you eat while binging?</div>
                <div id="question_content">
                  <table align="center">
                    <tbody>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="haribos" id="haribos">
                          <label for="haribos">
                            <img src="./images/what-wine-are-you/question-7/haribos.jpg" class="question_image" alt="haribos">
                          </label>
                          <p class="image_caption">Haribos</p>
                        </td>
                        <td>
                          <input type="checkbox" name="ice_cream" id="ice_cream">
                          <label for="ice_cream">
                            <img src="./images/what-wine-are-you/question-7/ice_cream.jpg" class="question_image" alt="ice_cream">
                          </label>
                          <p class="image_caption">Vanilla ice cream</p>
                        </td>
                        <td>
                          <input type="checkbox" name="popcorn" id="popcorn">
                          <label for="popcorn">
                            <img src="./images/what-wine-are-you/question-7/popcorn.jpg" class="question_image" alt="popcorn">
                          </label>
                          <p class="image_caption">Toffee popcorn</p>
                        </td>
                      </tr>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="crisps" id="crisps">
                          <label for="crisps">
                            <img src="./images/what-wine-are-you/question-7/crisps.jpg" class="question_image" alt="crisps">
                          </label>
                          <p class="image_caption">Cheese and onion crisps</p>
                        </td>
                        <td>
                          <input type="checkbox" name="maltesers" id="maltesers">
                          <label for="maltesers">
                            <img src="./images/what-wine-are-you/question-7/maltesers.jpg" class="question_image" alt="bmaltesersar">
                          </label>
                          <p class="image_caption">Maltesers</p>
                        </td>
                        <td>
                          <input type="checkbox" name="after_eights" id="after_eights">
                          <label for="after_eights">
                            <img src="./images/what-wine-are-you/question-7/after_eights.jpg" class="question_image" alt="after_eights">
                          </label>
                          <p class="image_caption">After Eights</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

          <br><!-- Question 8 -->

          <div id="question_title">Describe your best friend.</div>
                <div id="question_content">
                  <table align="center">
                    <tbody>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="gorgeous" id="gorgeous">
                          <label for="gorgeous">
                            <img src="./images/what-wine-are-you/question-8/gorgeous.jpg" class="question_image" alt="gorgeous">
                          </label>
                          <p class="image_caption">Gorgeous</p>
                        </td>
                        <td>
                          <input type="checkbox" name="loyal" id="loyal">
                          <label for="loyal">
                            <img src="./images/what-wine-are-you/question-8/loyal.jpg" class="question_image" alt="loyal">
                          </label>
                          <p class="image_caption">Loyal</p>
                        </td>
                        <td>
                          <input type="checkbox" name="gossip" id="gossip">
                          <label for="gossip">
                            <img src="./images/what-wine-are-you/question-8/gossip.jpg" class="question_image" alt="gossip">
                          </label>
                          <p class="image_caption">Massive gossip</p>
                        </td>
                      </tr>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="sophisticated" id="sophisticated">
                          <label for="sophisticated">
                            <img src="./images/what-wine-are-you/question-8/sophisticated.jpg" class="question_image" alt="sophisticated">
                          </label>
                          <p class="image_caption">Sophisticated</p>
                        </td>
                        <td>
                          <input type="checkbox" name="european" id="european">
                          <label for="european">
                            <img src="./images/what-wine-are-you/question-8/european.jpg" class="question_image" alt="european">
                          </label>
                          <p class="image_caption">European</p>
                        </td>
                        <td>
                          <input type="checkbox" name="a_good_chap" id="a_good_chap">
                          <label for="a_good_chap">
                            <img src="./images/what-wine-are-you/question-8/a_good_chap.jpg" class="question_image" alt="a_good_chap">
                          </label>
                          <p class="image_caption">A good chap</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

          <br><!-- Question 9 -->

          <div id="question_title">Now choose how to spend the perfect day with them.</div>
                <div id="question_content">
                  <table align="center">
                    <tbody>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="champagne_brunch" id="champagne_brunch">
                          <label for="champagne_brunch">
                            <img src="./images/what-wine-are-you/question-9/champagne_brunch.jpg" class="question_image" alt="champagne_brunch">
                          </label>
                          <p class="image_caption">Champagne brunch</p>
                        </td>
                        <td>
                          <input type="checkbox" name="netflix" id="netflix">
                          <label for="netflix">
                            <img src="./images/what-wine-are-you/question-9/netflix.jpg" class="question_image" alt="netflix">
                          </label>
                          <p class="image_caption">Netflix binge</p>
                        </td>
                        <td>
                          <input type="checkbox" name="spa" id="spa">
                          <label for="spa">
                            <img src="./images/what-wine-are-you/question-9/spa.jpg" class="question_image" alt="spa">
                          </label>
                          <p class="image_caption">In a spa</p>
                        </td>
                      </tr>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="long_lunch" id="long_lunch">
                          <label for="long_lunch">
                            <img src="./images/what-wine-are-you/question-9/long_lunch.jpg" class="question_image" alt="long_lunch">
                          </label>
                          <p class="image_caption">Long lunch</p>
                        </td>
                        <td>
                          <input type="checkbox" name="bar_crawl" id="bar_crawl">
                          <label for="bar_crawl">
                            <img src="./images/what-wine-are-you/question-9/bar_crawl.jpg" class="question_image" alt="bar_crawl">
                          </label>
                          <p class="image_caption">Bar crawl</p>
                        </td>
                        <td>
                          <input type="checkbox" name="hunting" id="hunting">
                          <label for="hunting">
                            <img src="./images/what-wine-are-you/question-9/hunting.jpg" class="question_image" alt="hunting">
                          </label>
                          <p class="image_caption">A good old hunt</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

          <!-- Question 10 -->

          <div id="question_title">Finally, choose your favourite random wine term.</div>
                <div id="question_content">
                  <table align="center">
                    <tbody>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="white" id="white">
                          <label for="white">
                            <img src="./images/what-wine-are-you/question-10/white.jpg" class="question_image" alt="white">
                          </label>
                          <p class="image_caption">Uh...white?</p>
                        </td>
                        <td>
                          <input type="checkbox" name="legs" id="legs">
                          <label for="legs">
                            <img src="./images/what-wine-are-you/question-10/legs.jpg" class="question_image" alt="legs">
                          </label>
                          <p class="image_caption">Good legs</p>
                        </td>
                        <td>
                          <input type="checkbox" name="mlf" id="mlf">
                          <label for="mlf">
                            <img src="./images/what-wine-are-you/question-10/mlf.jpg" class="question_image" alt="mlf">
                          </label>
                          <p class="image_caption">Malolactic fermentation</p>
                        </td>
                      </tr>
                      <tr id="option">
                        <td>
                          <input type="checkbox" name="lees" id="lees">
                          <label for="lees">
                            <img src="./images/what-wine-are-you/question-10/lees.jpg" class="question_image" alt="lees">
                          </label>
                          <p class="image_caption">Lees</p>
                        </td>
                        <td>
                          <input type="checkbox" name="rancio" id="rancio">
                          <label for="rancio">
                            <img src="./images/what-wine-are-you/question-10/rancio.jpg" class="question_image" alt="rancio">
                          </label>
                          <p class="image_caption">Rancio</p>
                        </td>
                        <td>
                          <input type="checkbox" name="forest_floor" id="forest_floor">
                          <label for="forest_floor">
                            <img src="./images/what-wine-are-you/question-10/forest_floor.jpg" class="question_image" alt="forest_floor">
                          </label>
                          <p class="image_caption">Forest floor</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

          <br>
          <input type="submit" value="Submit" id="submit_button">

        </form>

        <?php
          //echo "\nPinot Grigio = ${pinot_grigio}";
          //echo "\nSauvignoc Blanc = ${sauvignon_blanc}";
          //echo "\nChardonnay = ${chardonnay}";
          //echo "\nPinot Noir = ${pinot_noir}";
          //echo "\nRioja = ${rioja}";
          //echo "\nCabernet Sauvignon/Merlot = ${cabernet_sauvignon_merlot}";
        ?>

      </section>

    </div>

  </body>
</html>
