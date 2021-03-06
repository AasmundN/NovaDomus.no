<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">

    <?php

    if (isset($_GET["blogg_id"])) {
      $blogg_id = $_GET["blogg_id"];
    }

    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "Blogg";

    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

    if ($kobling->connect_error) {
      die("KVARG ER DETTE?!: " . $kobling->connect_error);
    }

    $kobling->set_charset("utf8");

    $sql = "SELECT Blogg_tittel FROM Blogginnlegg WHERE Blogg_id = $blogg_id";
    $resultat = $kobling->query($sql);

    while($rad = $resultat->fetch_assoc()) {
      $tittel = $rad["Blogg_tittel"];

      echo "<title> Team NovaDomus | $tittel </title>";
    }

    ?>

    <link rel="stylesheet" href="/stilark.css">
    <link rel="stylesheet" href="blogg_innlegg.css">
    <link rel="icon" href="/Bilder/logo.png">


  </head>

  <body>

    <script src="script.js">  </script>

    <div class="header">
      <img id="logo" src="/Bilder/logo.png" onclick="location.href = '/'"> <h1 onclick="location.href = '/'"> Team NovaDomus </h1>
    </div>

    <div class="menu">

      <a class="option" href="/"> Home </a>

      <div class="dropdown_container" onclick="checkDropdown_1()">
          <div class="option" id="dropdownbtn">
            <a id="dropdownbtn"> About </a> <div id="drop_arrow_1"> &#10095; </div>
          </div>
          <div class="menu_1" id="menu_1">
            <a class="drop_option" id="drop_option1" href="/About"> About the team </a>
            <a class="drop_option" id="drop_option2" href="/Members"> Members </a>
          </div>
      </div>

      <a class="option" href="/Documents"> Documents </a>
      <a class="option" id="active" href="/Blog"> Blog </a>
      <a class="option" href="/Sponsors"> Sponsors </a>

      <div class="dropdown_container" onclick="checkDropdown_2()">
          <div class="option" id="dropdownbtn">
            <a id="dropdownbtn"> Links </a> <div id="drop_arrow_2"> &#10095; </div>
          </div>
          <div class="menu_2" id="menu_2">
            <a class="drop_option" id="drop_option1" href="https://web.trondelagfylke.no/thora-storm-videregaende-skole" target="_blank"> Thora Storm </a>
            <a class="drop_option" id="drop_optionMiddle" href="https://www.ntnu.no/" target="_blank"> NTNU </a>
            <a class="drop_option" id="drop_optionMiddle" href="https://www.narom.no/" target="_blank"> NAROM </a>
            <a class="drop_option" id="drop_optionMiddle" href="https://www.esa.int/ESA" target="_blank"> ESA </a>
            <a class="drop_option" id="drop_option2" href="https://www.nasa.gov/" target="_blank"> NASA </a>
          </div>
      </div>

      <div class="kvarg"> </div>

    </div>

    <div class="bakgrunn">

      <div class="blogg_innlegg">

        <?php

        $sql = "SELECT *, Innlegg_forfatter.Fornavn, Innlegg_forfatter.Etternavn FROM Blogginnlegg JOIN Innlegg_forfatter ON
        Blogginnlegg.Inn_forfatter_id = Innlegg_forfatter.Inn_forfatter_id WHERE Blogg_id = $blogg_id ORDER BY Dato DESC";

        $resultat = $kobling->query($sql);

        while($rad = $resultat->fetch_assoc()) {
          $tittel = $rad["Blogg_tittel"];
          $intro = $rad["Blogg_intro"];
          $tekst = $rad["Blogg_tekst"];
          $image_1 = $rad["Image_1"];
          $image_2 = $rad["Image_2"];
          $image_3 = $rad["Image_3"];
          $image_4 = $rad["Image_4"];
          $dato = $rad["Dato"];
          $fornavn = $rad["Fornavn"];
          $etternavn = $rad["Etternavn"];

          echo "<div class='blog_container'>";

          echo "<div id='blog_tekst'";

          echo "<br> <br>";
          echo "<h7> $tittel </h7>";
          echo "<br> <br> <br> <br>";

          echo "<div class='blog_avsnitt'> $intro </div>";

          echo "<div class='blog_avsnitt'> $tekst </div>";

          echo "</div>";

          echo "<div id='blog_img_container'>";
          echo "<br> <br>";

          echo "<div id='blog_img_frame'> <img id='blog_img' src='$image_1'> </div>";
          echo "<br>";

          if ($image_2){
            echo "<div id='blog_img_frame'> <img id='blog_img' src='$image_2'> </div>";
            echo "<br>";
          }

          if ($image_3){
            echo "<div id='blog_img_frame'> <img id='blog_img' src='$image_3'> </div>";
            echo "<br>";
          }

          if ($image_4){
            echo "<div id='blog_img_frame'> <img id='blog_img' src='$image_4'> </div>";
            echo "<br>";
          }

          echo "</div>";

          echo "</div>";

          echo "<br> <br> <br>";
          echo "<p class='blogg_info'> Written $dato by $fornavn $etternavn </p> ";
          echo "<br> <br> <br>";
        }

        ?>

        <a id="tilbake" href="/Blog"> &#10094; Go back </a>

      </div>

      <br> <br> <br>

    </div>

    <div class="footer">

      <div class="foot1">
          <h2> About </h2>
          <p> Team NovaDomus is the CanSat team representing Thora Storm VGS in NAROM's annual CanSat competition 2019. The team is sponsored by NTNU and Thora Storm VGS. </p>
      </div>

      <div class="foot2">
          <h2> Contact </h2>

          <div id="links">
          <a class="kontakt" href="https://www.instagram.com/teamnovadomus/" target="_blank"> <img class="insta" src="/Bilder/insta.png" alt="insta"> </a>
          <a class="kontakt" href="https://discord.gg/pwGcZJ3"> <img class="twitter" src="/Bilder/discord.png" alt="twitter"> </a>
          <a class="kontakt" href="https://www.youtube.com/channel/UCpR4UZgsC1166SOaRYKC_8g" target="_blank"> <img class="tube" src="/Bilder/tube.png" alt="tube"> </a>
          <a class="kontakt" href="#"> <img class="face" src="/Bilder/face.png" alt="face"> </a>
          </div>


          <br> <br> <br> <br>
          <div id="mail_container"> <mail> E-mail: </mail> <a id="mail" href="mailto:adriahey@stud.ntnu.no"> adriahey@stud.ntnu.no </a> </div>

      </div>

      <div class="foot3">
          <p class="copyright"> This website was developed by members of Team NovaDomus. </p>
      </div>

    </div>

  </body>

</html>
