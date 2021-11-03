<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lagrif Tour est une agence de voyage : visitez le monde grâce à nos tarifs attractifs et nos destinations variées.">
    <title>LAGRIF TOUR</title>
    <link rel="icon" type="image/svg+xml" href="assets/images/img1.svg" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<link rel="stylesheet" media="screen" href="style.css" type="text/css" />
</head>
<body>
    <!-- début header -->

<header>
    <div id="menu-bar" class="fas fa-bars"></div>
        
        <a href="#home" class="logo"> <span>La</span>grif Tour</a>
        
    <nav class="navbar">
            <a href="#home">Accueil</a>
            <a href="#region">Reservation</a>
            <a href="#packages">Villes</a>
            <a href="#services">Découverte</a>
            <a href="#galery">Galeries</a>
            <a href="#review">A propos</a>
            <a href="#contact">Contact</a>
            
    </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="Recherche...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
        
</header>




<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>
        <form action="">
            <h3>Utilisateur</h3>
            <input type="email" class="box" placeholder="Entrez votre email" >
            <input type="password" class="box" placeholder="Entrez votre mot de passe">
            <input type="submit" class="btn" value ="Envoyez">
            <input type="checkbox" id="Se souvenir de moi">
            <label for="remember">Se souvenir de moi</label>
            <p>Mot de passe oublié <a href="#">Cliquez ici</a></p>
            <p>Pas encore de compte? <a href="#">Créez un compte</a></p>
 
        </form>
</div>

<!-- fin header -->

<!--début section d'accueil-->

<section class="home" id="home">
    <div class="content">
        <h3>Le monde à travers moi</h3>
        <p>Vivez l'aventure</p>
        <a href="#" class="btn">Découvrir d'avantage</a>
    </div>
    <div class="controls">
        <span class="vid-btn active" data-src="assets/images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="assets/images/vid-7.mp4"></span>
        <span class="vid-btn" data-src="assets/images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="assets/images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="assets/images/vid-5.mp4"></span>
        <span class="vid-btn" data-src="assets/images/vid-6.mp4"></span>
    </div>
    <div class="video-container">
        <video src="assets/images/vid-2.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!--fin section d'accueil-->

<!--début section region -->

<section class="region" id="region">
    <h1 class="heading">
        <span>R</span>
        <span>E</span>
        <span>S</span>
        <span>E</span>
        <span>R</span>
        <span>V</span>
        <span>A</span>
        <span>T</span>
        <span>I</span>
        <span>O</span>
        <span>N</span>
        
      
        
    </h1>

    <div class="row">
        <div class="image">
            <img src="assets/images/img1.svg" alt="">
            <h4><p>Voyager à travers le monde n'est pas toujours aisé et donné mais ça vaut le coup de se faire plaisir au moins une fois dans la vie.</p></h>
        </div>

    <form action="">

        <div class="inputBox">
            <h3>Où allons nous</h3>
            <input type="text" placeholder="Lieux">
        </div>

        <div class="inputBox">
            <h3>Nombre de visiteurs</h3>
            <input type="number" placeholder="Nombre de visiteurs">
        </div>

        <div class="inputBox">
            <h3>Départ</h3>
            <input type="date">
        </div>

        <div class="inputBox">
            <h3>Arrivées</h3>
            <input type="date">
        </div>

        <input type="submit" class="btn" value="Reservez">
    </div>
    </form>
</section>
<!--fin section region -->

<!-- début section culture -->

<section class="packages" id="packages">


<h1 class="heading">
        <span>V</span>
        <span>I</span>
        <span>L</span>
        <span>L</span>
        <span>E</span>
        <span>S</span>
       
    </h1>

    <div class="box-container">

    <div class="box">
            <img src="assets/images/img-1.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"><span>
                    Paris </span></i></h3>
                <p>Paris est la commune la plus peuplée et la capitale de la France.
                <p> Elle se situe au cœur d'un vaste bassin sédimentaire aux sols fertiles et au climat tempéré, le bassin parisien, sur une boucle de la Seine, entre les confluents de celle-ci avec la Marne et l'Oise. Paris est également le chef-lieu de la région Île-de-France et le centre de la métropole du Grand Paris, créée en 2016. Elle est divisée en arrondissements, comme les villes de Lyon et de Marseille, au nombre de vingt. Administrativement, la ville constitue depuis le 1er janvier 2019 une collectivité à statut particulier nommée « Ville de Paris » (auparavant, elle était à la fois une commune et un département).
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 90.00€ <span>150.00€</span></div>
                <a href="#" class="btn">Visitons ensemble</a>

            </div>
        </div>

        <div class="box">
            <img src="assets/images/img-2.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"><span>
                    Egypte</span></i></h3>
                <p>La république arabe d'Égypte est un pays se trouvant en Afrique du Nord-Est et, pour la péninsule du Sinaï, en Asie de l'Ouest. Située sur la côte sud de la Méditerranée orientale, le bassin Levantin, l'actuelle Égypte occupe l'espace géographique qui fut autrefois celui de l'Égypte antique.
                <p>Avec plus de 102 millions d'habitants en 2020, l'Égypte est le troisième pays le plus peuplé d'Afrique derrière le Nigeria et l'Éthiopie. En très forte croissance, sa population a été multipliée par quatre en soixante ans. Sa capitale est Le Caire et sa monnaie la livre égyptienne. La langue officielle du pays est l'arabe, utilisé dans tous les documents et dans l'éducation. 

                
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 90.00€ <span>150.00€</span></div>
                <a href="#" class="btn">Visitons ensemble</a>

            </div>
        </div>
    
        <div class="box">
            <img src="assets/images/img-3.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"><span>
                    Tokyo</span></i></h3>
                <p>Tokyo: Capitale de l'est, anciennement Edo, officiellement Métropole de Tokyo, est de facto la capitale actuelle du Japon. Elle est la plus peuplée des préfectures du Japon, avec plus de 13 831 421 habitants en 2018 et 42 794 714 dans l'agglomération, la plus peuplée au monde. Située sur la côte est de l'île principale de l'archipel japonais, Honshū, Tokyo est l'une des quarante-sept préfectures du Japon. Principal centre politique de l'archipel depuis le xviie siècle, la ville accueille la plupart des institutions du pays: la résidence principale de l'empereur du Japon, du Premier ministre, le siège de la Diète (le parlement japonais), du Cabinet, les ministères qui le constituent ainsi que toutes les ambassades étrangères.

                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 90.00€ <span>150.00€</span></div>
                <a href="#" class="btn">Visitons ensemble</a>

            </div>
        </div>

        <div class="box">
            <img src="assets/images/img-4.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"><span>
                    Hawaï</span></i></h3>
                <p>Hawaï ou Hawaii (/a.waj/ ; en hawaïen : Hawai‘i, prononcé /ha.ˈvaj.ʔi/ ; en anglais : Hawaii, prononcé /hə.ˈwaɪ.(j)i/) est un État des États-Unis. Constitué d'un archipel de 137 îles, il s'agit du seul État américain situé en dehors du continent nord-américain, puisqu'il est situé en Océanie, et de l'un des deux États américains non contigus, avec l'Alaska. Les huit principales îles sont Niihau, Kauai, Molokai, Lanai, Kahoolawe, Maui, l'île d'Hawaï et Oahu, où se trouve la capitale Honolulu. L'archipel fait partie de la Polynésie et se situe dans le centre de l'océan Pacifique nord, à 3 718 kilomètres au sud. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 90.00€ <span>150.00€</span></div>
                <a href="#" class="btn">Visitons ensemble</a>

            </div>
        </div>

        <div class="box">
            <img src="assets/images/img-5.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"><span>
                    Sydney</span></i></h3>
                <p>Sydney (prononcé en français /sid.nɛ/ ; en anglais /ˈsɪd.ni/ Écouter) est la ville la plus peuplée d'Australie et du continent océanien, ainsi que la capitale de l'État de Nouvelle-Galles du Sud. Elle est située dans le Sud-Est du pays, sur les rives de la mer de Tasman. Avec une aire urbaine comprenant, en 2016, une population de 4 823 991 sur près de 12 300 km2, Sydney se place devant Melbourne et Brisbane pour ce qui est du nombre d'habitants. Ses habitants s'appellent les Sydneyites ou Sydneysiders en anglais et les Sydnéens en français.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 90.00€ <span>150.00€</span></div>
                <a href="#" class="btn">Visitons ensemble</a>

            </div>
        </div>

        <div class="box">
            <img src="assets/images/img-6.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"><span>
                    Bombay</span></i></h3>
                <p>Bombay ou Mumbai (en marathi : मुंबई, Mumbaī) est la capitale de l'État indien du Maharashtra. La métropole compte 12 478 447 habitants en 2011. Ville d'Inde la plus peuplée, elle forme avec ses villes satellites de Navi Mumbai, Bhiwandi, Kalyan, Ulhasnagar et Thane, une agglomération de 18 414 288 habitants, soit la dixième plus peuplée au monde.

                <p>Bombay est la capitale commerciale de l'Inde. Elle produit 5 % du PIB et son activité représente 25 % de la production industrielle, 40 % du commerce maritime et 70 % des transactions de capitaux de l'économie indienne. 
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 90.00€ <span>150.00€</span></div>
                <a href="#" class="btn">Visitons ensemble</a>

            </div>
        </div>

    </div>

</section>
<!-- fin section culture -->

<!--début section évasion -->

<section class="services" id="services">
<h1 class="heading">
        
        <span>D</span>
        <span>E</span>
        <span>C</span>
        <span>O</span>
        <span>U</span>
        <span>V</span>
        <span>E</span>  
        <span>R</span>  
        <span>T</span>  
        <span>E</span>  
    </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Nos hotêls</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Mets et traditions</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>Guide touristique</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>A travers le monde</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>Voyagez rapidement</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Aventures</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

    </div>

</section>


<!--fin section évasion -->

<!-- début section galeries -->

<section class="galery" id="galery">

<h1 class="heading">
        
        <span>G</span>
        <span>A</span>
        <span>L</span>
        <span>E</span>
        <span>R</span>
        <span>I</span>  
        <span>E</span>  
        <span>S</span>  
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="assets/images/p-4.jpg" alt="">
            <div class="content">
                <h3>Quelques lieux d'attractions</h3>
                <p>Paris</p>
                <a href="#" class="btn">Regardez davantage</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/p-1.jpg" alt="">
            <div class="content">
                <h3>Quelques lieux d'attractions</h3>
                
                <p> Mumbai </p>
                <a href="#" class="btn">Regardez davantage</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/p-2.jpg" alt="">
            <div class="content">
                <h3>Quelques lieux d'attractions</h3>
                <p>Hawaii</p>
                <a href="#" class="btn">Regardez davantage</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/p-3.jpg" alt="">
            <div class="content">
                <h3>Quelques lieux d'attractions</h3>
                <p>Sydney </p>
                <a href="#" class="btn">Regardez davantage</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/p-5.jpg" alt="">
            <div class="content">
                <h3>Quelques lieux d'attractions</h3>
                
                <p>Tokyo</p>
                <p></p>
                <a href="#" class="btn">Regardez davantage</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/p-6.jpg" alt="">
            <div class="content">
                <h3>Quelques lieux d'attractions</h3>
              
                <p>Egypte</p>
                <a href="#" class="btn">Regardez davantage</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/p-7.jpg" alt="">
            <div class="content">
                <h3>Quelques lieux d'attractions</h3>
              
                <p>Madrid</p>
                <a href="#" class="btn">Regardez davantage</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/p-8.jpg" alt="">
            <div class="content">
                <h3>Quelques lieux d'attractions</h3>
              
                <p>New York</p>
                <a href="#" class="btn">Regardez davantage</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/p-9.jpg" alt="">
            <div class="content">
                <h3>Quelques lieux d'attractions</h3>
              
                <p>Brasilia</p>
                <a href="#" class="btn">Regardez davantage</a>
            </div>
        </div>
       
       

    </div>
</section>
<!-- fin section galleries -->

<!-- début section review -->
<section class="review" id="review">

<h1 class="heading">
        
        <span>A</span>
        <span class="space"></span>
        <span>P</span>
        <span>R</span>
        <span>O</span>
        <span>P</span>
        <span>O</span>
        <span>S</span>
          
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="slider">

                <div class="box">

                    <img src="assets/images/moi-2.jpg" alt="">
                    <h3>Paule OMBIONO</h3>
                    <p>Stagiaire à l'ACS de Dijon en reconversion professionnelle. Parcours pas très glorieux car très souvent absente, mais par ma volonté d'apprendre, ma motivation et ma tenacité je suis arrivée au bout de cette formation.</p>
                    <p>Merci à mon formateur, mon maitre de stage et à mes collègue de m'avoir accepté et encouragé malgré tout. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- fin section review -->



<!-- début section contact -->


<section class="contact" id="contact">

<h1 class="heading">
        
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>A</span>
        <span>C</span>
        <span>T</span>
          
    </h1>
    <div class="row">

        <div class="image">
            <img src="assets/images/contact.svg" alt="">
        </div>

        <form action="handler.php" method="POST">

            <div class="inputBox">
                <input type="text" placeholder="Nom" name="user_name">
                <input type="email" placeholder="Email" name="user_mail">
            </div>

            <div class="inputBox">
                <input type="text" placeholder="Sujet"  name='message_topic'>
                <input type="number" placeholder="Numero" name="user_number">
            </div>
           
            <textarea placeholder="message" name='user_message' id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="Envoyez votre message">

        </form>

    </div>
    
</section>
<!-- fin section contact -->


<!-- début section brand -->

<section class="brand-container">

    <div class="swiper-container brand-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide"><img src="assets/images/logo1.png" alt="" width="250" heigth="200"></div>
            <div class="swiper-slide"><img src="assets/images/pole-emploi.png" alt="" width="250" heigth="200"></div>
            <div class="swiper-slide"><img src="assets/images/online.png" alt="" width="250" heigth="200"></div>
            <div class="swiper-slide"><img src="assets/images/logo-acs-black.png" alt="" width="250" heigth="200"></div>
            

        </div>

    </div>

</section>
<!-- fin section brand -->


<!-- début section footer -->

<section class="footer">

    <div class="box-container">

        <div class="box">

            <h3>Credit</h3>

            <a href="https://fr.wikipedia.org/">Wikipédia</a>
            <a href="#">Youtube</a>
            <a href="#">Freepik</a>
            <a href="#">Google</a>
            <a href="mentions-legales.php">Mentions Légales</a>

        </div>

        <div class="box">

            <h3>Liens rapides</h3>

            <a href="#home">Accueil</a>
            <a href="#region">Reservation</a>
            <a href="#packages">Villes</a>
            <a href="#services">Découverte</a>
            <a href="#galery">Galeries</a>
            <a href="#review">A propos</a>
            <a href="#contact">Contact</a>
            
        </div>

        <div class="box">

            <h3>Nous suivre</h3>

            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">snap</a>
            <a href="https://github.com/paule29/">Github</a>
            <a href="https://twitter.com/home">Twitter</a>
            <a href="https://www.linkedin.com/in/paule-ombiono/">Linkedin</a>
            
            
        </div>

    </div>
    <h1 class="credit">Réalisé par <span> Paule OMBIONO </span> |  tous droits reservés !</h1>
    
    
</section>
<!-- fin section footer -->



<!-- début bouton retour -->
    <div id="scrollUp">
    <a href="#top"><img src="assets/images/to_top.png"/></a>
    </div>

<!-- fin bouton retour -->




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="main.js"></script>

</body>
</html>