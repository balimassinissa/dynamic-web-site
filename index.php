<?php include("nav.php");?>

  <section>
    <div class="gallerie">
      <!-- Carousel wrapper -->
      <div id="carouselExampleDark" style="height :500px;" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="./photo/slide1.jpg" class="d-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block">
              <h5>Gallerie Tazmalt</h5>
              </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./photo/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Gallerie Tazmalt</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./photo/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Gallerie Tazmalt</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div>
        <div id="actualite">
          <h2><span>Actualite</span></h2>
          <div class="actualite">
          <?php
           include('interrog_db.php');
                           
           $reponse = $bdd->query('SELECT * FROM infos ORDER BY date_add DESC');
           
           while ($donnees = $reponse->fetch())
           {
           echo' <div class="container">';
             echo' <img src="'.$donnees['photo'].'" alt="Avatar" class="image">';
             echo' <div class="overlay">';
               echo'<a href="actu.php"> <div class="text">'.$donnees['titre'].'</div></a>';
              echo'</div>';
           echo' </div>'; }?>
            
          </div>
        </div>
        <!-- widget meteo -->
        <div style="margin-top: 50px;margin-left: 30px; ">
          <div id="widget_d176d8d2f625860367cf563f79f11920">
            <span id="l_d176d8d2f625860367cf563f79f11920"><a
                href="http://www.mymeteo.info/r/accueil_lz">My-Meteo</a></span>
            <script type="text/javascript">
              (function () {
                var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
                my.src = "https://services.my-meteo.com/widget/js_design?ville=12&format=grand-rectangle&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=1&masque=3&x=300&y=250&d=0&id=d176d8d2f625860367cf563f79f11920";
                var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
              })();
            </script>
          </div>
        </div>
        <!-- widget meteo -->
      </div>


    </div>
    <!-- Carousel wrapper -->
    <div class="histoire_comerce">


      <div class="fashion" style="margin-right:10px ;">
        <div class="single_post_content">
          <h2><span>Histoire ancienne</span></h2>
          <ul class="business_catgnav wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <li>
              <figure class="bsbig_fig">

                <img width="100%" alt="img" src="./photo/image2.jpeg">
                <span class="overlay"></span>
                </a>

                <p>
                  <font-color="white">Tavlast est un site archéologique vierge.Beaucoup de gens de la
                    région de Tazmalt ignorent l'existence ce site archéologique à quelques
                    encablures de leurs portes, dans les environs de Tazmalt. Cette appellation est
                    dérivée du romain "Tablastensis" qui signifie « casernement ». Mais,Thavlast
                    n'est pas l'emplacement de casernements romains mais d'une petite ville
                    bérbero-romaine, ce qui est plus intéressant. Selon certaines références,
                    Thavlast sont des ruines romaines situées sur un mamelon voisin de la ferme
                    Bataille près de deux sources. Elles se situent sur la rive gauche de l'Oued
                    Sahel, en face de l'ancien Bordj de Tazmalt.
                </p>
              </figure>
            </li>
          </ul>
        </div>
      </div>




      <div class="fashion" style="margin-right: 10px;">
        <div class="single_post_content" >
          <h2><span>Comerce</span></h2>
          <ul class=" business_catgnav wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown;">
          <li>
            <figure class="bsbig_fig">

              <img width="100%" alt="img" src="./photo/image2.jpeg">
              <span class="overlay"></span>
              </a>

              <p>
                <font-color="white">Tavlast est un site archéologique vierge.Beaucoup de gens de
                  la région de Tazmalt ignorent l'existence ce site archéologique à quelques
                  encablures de leurs portes, dans les environs de Tazmalt. Cette appellation
                  est dérivée du romain "Tablastensis" qui signifie « casernement ».
                  Mais,Thavlast n'est pas l'emplacement de casernements romains mais d'une
                  petite ville bérbero-romaine, ce qui est plus intéressant. Selon certaines
                  références, Thavlast sont des ruines romaines situées sur un mamelon voisin
                  de la ferme Bataille près de deux sources. Elles se situent sur la rive
                  gauche de l'Oued Sahel, en face de l'ancien Bordj de Tazmalt.
              </p>
            </figure>
          </li>
          </ul>
        </div>
      </div>
      <div style="flex: 20%; margin-left: 10px;">
        
          <div style="height: 600px;margin-top:0px">
            <h2><span>Seervice utile</span></h2>
            <div class="actualite">
              <div class="container">
                <img src="./photo/acte-naissance.png" alt="Avatar" class="image">
                <div class="overlay">
                 <a href="https://etatcivil.interieur.gov.dz/ActeNaissance/"> <div class="text">Acte de naissance</div></a>
                </div>
              </div>
              <div class="container">
                <img src="./photo/identite-voyage.png" alt="Avatar" class="image">
                <div class="overlay">
                  <a href="https://passeport.interieur.gov.dz/fr/demandecnibe_fr/demande

                  "> <div class="text">Passeport</div></a>
                </div>
              </div>
              <div class="container">
                <img src="./photo/carte-identite.png" alt="Avatar" class="image" >
                <div class="overlay">
                 <a href="https://www.interieur.gov.dz/index.php/fr/mes-d%C3%A9marches-administratives/construction,-urbanisme-et-am%C3%A9nagement-urbain.html"> <div class="text">Carte d'identite biometrique</div></a>
                </div>
              </div>
                        </div>
          </div>

        
      </div>
    </div>
      <div class="anuaire_map ">
        <div style="flex: 70%;margin-right: 10px;margin-top:15px;">
          <h2><span>Annuairre de Tazmalt</span></h2>
          <table>
            <tr>
              <th>Service/Societe/Entreprise</th>
              <th>Numero De Telephone</th>

            </tr>
            <?php
                         include('interrog_db.php');
                           
                           $reponse = $bdd->query('SELECT * FROM contact');
                           
                           while ($donnees = $reponse->fetch())
                           {
                           
                           echo" <tr>";
                                echo '<td>'.$donnees['nom'].'</td>';
                                echo '<td>'.$donnees['numero'].'</td>';
                             
                           echo" </tr>";
                           }
                            ?>
                                     </table>

        </div>
        <iframe style="flex: 20%; margin-right: 10px; margin-top: 20px;"
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25689.031538523795!2d4.271467779846101!3d36.40607550871647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sdz!4v1621218532860!5m2!1sfr!2sdz"
          height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      </div>


  </section>
  <?php include("footer.php");?>