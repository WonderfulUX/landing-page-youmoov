<?php 
// echo '<pre>'.print_r($_POST, true).'</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Youmoov est une application mobile visant le développement du covoiturage en Guyane.">
    <title>Youmoov, expérimentez le covoiturage comme jamais auparavant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <header>
        <img loading="eager" src="./assets/logo/youmoov_green.svg" alt="Youmoov logo green">
        <div class="header-right">
            <ul id="menu">
                <li id="menu-title"><img loading="eager" src="./assets/logo/youmoov_green_short.svg" alt=""></li>
                <!-- FR -->
                <li class="menu-link fr"><a href="#boost">Boostez vos revenus</a></li>
                <li class="menu-link fr"><a href="#nextride">Votre prochain covoiturage</a></li>
                <li class="menu-link fr"><a href="#onboarding">Comment ça marche</a></li>
                <li class="menu-link fr"><a href="#contact">Contact</a></li>
                <!-- EN -->
                <li class="menu-link en dn"><a href="#boost">Start earning</a></li>
                <li class="menu-link en dn"><a href="#nextride">Plan your next ride</a></li>
                <li class="menu-link en dn"><a href="#onboarding">How it works</a></li>
                <li class="menu-link en dn"><a href="#contact">Contact</a></li>
                <!-- PT -->
                <li class="menu-link pt dn"><a href="#boost">Aumente sua renda</a></li>
                <li class="menu-link pt dn"><a href="#nextride">Sua próxima carona</a></li>
                <li class="menu-link pt dn"><a href="#onboarding">Como funciona</a></li>
                <li class="menu-link pt dn"><a href="#contact">Contato</a></li>
                <!--  -->
            </ul>
            <button id="language" onclick="changeLanguage()">
                <!-- FR -->
                <img loading="eager" class="fr" src="./assets/svg/fra.svg" alt="Page en français">
                <span id="language-txt" class="fr">fr</span>
                <!-- EN -->
                <img loading="eager" class="en dn" src="./assets/svg/eng.svg" alt="Page in English">
                <span id="language-txt" class="en dn">en</span>
                <!-- PT -->
                <img loading="eager" class="pt dn" src="./assets/svg/bra.svg" alt="página em português">
                <span id="language-txt" class="pt dn">PT</span>
                <!--  -->
            </button>
            <button id="mobile-menu-button" onclick="togglemenu()">
                <img loading="eager" src="./assets/svg/mobile-menu.svg" alt="">
            </button>
        </div>
    </header>
    <section class="banner">
        <div class="ellipsis"></div>
        <img loading="eager" src="./assets/svg/decoration.svg" alt="" class="banner-decoration">
        <div class="container">
            <img loading="eager" src="./assets/img/banner-car.png" alt="" id="banner-car">
            <div class="banner-content">
                <div class="top">
                    <img loading="eager" src="./assets/logo/youmoov_white.svg" alt="" id="banner-logo">
                    <h1>
                        <!-- FR -->
                        <span class="fr">Expérimentez le covoiturage comme jamais auparavant !</span>
                        <!-- EN -->
                        <span class="en dn">Expérimentez le covoiturage comme jamais auparavant !</span>
                        <!-- PT -->
                       <span class="pt dn">Experimente a carona como nunca antes!</span>
                       <!--  -->
                    </h1>
                </div>
                <div class="bottom">
                    <!-- FR -->                    
                    <p class="download-message fr">Téléchargez sur votre mobile</p>
                    <!-- EN -->
                    <p class="download-message en dn">Download on your mobile</p>
                    <!-- PT -->
                    <p class="download-message pt dn">Baixe no seu celular</p>
                    <!--  -->
                    <div class="download-links-container">
                        <a href="" class="download">
                            <img loading="eager" src="./assets/img/app-store-download.png" alt="">
                        </a>
                        <a href="" class="download">
                            <img loading="eager" src="./assets/img/google-store-download.png" alt="">
                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section id="app-presentation">
            <div class="ellipsis"></div>
            <div class="container">
                <!-- FR -->
                <h2 class="fr">Transformez vos trajets en voiture</h2>
                <p class="subline fr">Ne voyagez plus jamais seul.e</p>
                <!-- EN -->
                <h2 class="en dn">Make your next ride fun</h2>
                <p class="subline en dn">You don't need to travel alone anymore</p>
                <!--  -->
                <!-- PT -->
                <h2 class="pt dn">Você não precisa mais viajar sozinho</h2>
                <p class="subline pt dn"></p>
                <!--  -->
                <div class="user-description" id="boost">
                    <div class="left-block fr">
                        <h3 class="title">Vous conduisez</h3>
                        <div class="description-block">
                            <span class="step">1</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Publier votre trajet</h4>
                                </div>
                                <div class="description">Précisez : <br><br>
                                    <ul class="dots">
                                        <li>Votre destination et les stops programmés dans votre parcours.</li>
                                        <li>Le nombre de passagers que vous acceptez ainsi que le prix par passager.</li>
                                        <li>Le jour et la date de votre départ pour rendre votre trajet visible par les utilisateurs de l'application.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">2</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Recevez des demandes</h4>
                                </div>
                                <div class="description">Une fois votre trajet publié, vous allez recevoir des demandes de passagers
                                    souhaitant fraire le trajet avec vous. <br><br>
                                    Vous avez le choix de sélectionner les passagers que vous souhaitez.
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">3</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Gagnez de l'argent</h4>
                                </div>
                                <div class="description">C'est le jour de votre départ ! <br><br>
                                    Vous êtes prêt à partir, et vos passagers vous attendent.<br>
                                    Il ne vous reste plus qu'à profitez de leur compagnie en augmentant vos revenus.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- EN -->
                    <div class="left-block en dn">
                        <h3 class="title">You're a driver</h3>
                        <div class="description-block">
                            <span class="step">1</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Publish you ride </h4>
                                </div>
                                <div class="description">Set : <br><br>
                                    <ul class="dots">
                                        <li>your destination and the stops you will be making.</li>
                                        <li>the number of passengers and the price per seat.</li>
                                        <li>your time and date of departure to make your ride visible.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">2</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Wait for ride requests</h4>
                                </div>
                                <div class="description">You are going to receive requests from passengers that want to take the ride with you.<br><br>
                                    Select only the request you need for your ride and see your expected earnings.
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">3</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Start earning money</h4>
                                </div>
                                <div class="description">It’s time ! <br><br>
                                    You are all set ready to go and to pick up your passengers. Make sure you enjoy the ride while cashing.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PT -->
                    <div class="left-block pt dn">
                        <h3 class="title">Você é um motorista</h3>
                        <div class="description-block">
                            <span class="step">1</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Publique seu passeio</h4>
                                </div>
                                <div class="description">Especificamos : <br><br>
                                    <ul class="dots">
                                        <li>seu destino e as paradas que você fará.</li>
                                        <li>o número de passageiros e o preço por assento.</li>
                                        <li>sua hora e data de partida para tornar seu passeio visível.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">2</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Aguarde pedidos de carona</h4>
                                </div>
                                <div class="description">Você receberá solicitações de passageiros que desejam viajar com você.<br><br>
                                    Selecione apenas a solicitação necessária para sua viagem e veja seus ganhos esperados.
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">3</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Comece a ganhar dinheiro</h4>
                                </div>
                                <div class="description">Está na hora !<br><br>
                                    Você está pronto para ir e pegar seus passageiros. Certifique-se de aproveitar o passeio enquanto saca.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="right-block">
                        <img loading="eager" src="./assets/img/destination-driver.jpg" alt="Interface Youmoov de destination du conducteur" class="presentation-images left">
                        <img loading="eager" src="./assets/img/ride-requests.jpg" alt="Interface Youmoov de demande de réservation passagers" class="presentation-images middle">
                        <img loading="eager" src="./assets/img/start-ride.jpg" alt="Interface Youmoov de démarrage du covoiturage" class="presentation-images right">
                    </div>
                    <div class="signup-btn-container">
                        <!-- FR -->
                        <button class="signup fr">
                            <img loading="eager" src="./assets/svg/driver-icon.svg" alt="" class="btn-icon">
                            Créer un compte <strong>conducteur</strong>
                        </button>
                        <!-- EN -->
                        <button class="signup en dn">
                            <img loading="eager" src="./assets/svg/driver-icon.svg" alt="" class="btn-icon">
                            Sign up as a <strong>driver</strong>
                        </button>
                        <!-- PT -->
                        <button class="signup pt dn">
                            <img loading="eager" src="./assets/svg/driver-icon.svg" alt="" class="btn-icon">
                            Inscreva-se como <strong>motorista</strong>
                        </button>
                        <!--  -->
                    </div>
                </div>
                <div class="user-description reverse" id="nextride">
                    <!-- FR -->
                    <div class="left-block fr">
                        <h3 class="title">Vous cherchez un covoiturage</h3>
                        <div class="description-block">
                            <span class="step">1</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Trouvez le meilleur trajet</h4>
                                </div>
                                <div class="description">Vous cherchez un conducteur confirmé afin de voyager dans les meilleures conditions ? <br>
                                    Vous pouvez filtrer votre recherche avant d'envoyer vos demandes de réservation.
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">2</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Réservez un siège</h4>
                                </div>
                                <div class="description">Une fois votre recherche paramétrée, vous n'avez plus qu'à envoyer vos demandes de réservation
                                    aux conducteurs de votre choix. 
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">3</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Suivez votre covoiturage </h4>
                                </div>
                                <div class="description">Vous avez reçu votre confirmation et c'est le jour de votre départ. <br>
                                    Suivez votre trajet en temps réel et contactez votre conducteur via la messagerie Youmoov ou en appel en cas de besoin. <br>
                                    Vous n'avez plus qu'à vous laisser conduire.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- EN -->
                    <div class="left-block en dn">
                        <h3 class="title">You need a ride</h3>
                        <div class="description-block">
                            <span class="step">1</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Check rides for your destination</h4>
                                </div>
                                <div class="description">Search for the place you need to go and check for the available rides.
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">2</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Send your seat requests</h4>
                                </div>
                                <div class="description">You need a safe ride with pro drivers with great rates ? <br>
                                    Before sending you request, you can filter rides at your convenience so you can the YOUMOOV experience at its best.
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">3</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Track your ride in real time</h4>
                                </div>
                                <div class="description">You had your confirmation, you are on your trip day, you can easily track your ride and communicate with your driver if anything comes up.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PT -->
                    <div class="left-block pt dn">
                        <h3 class="title">Procurando uma carona</h3>
                        <div class="description-block">
                            <span class="step">1</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Verifique as viagens para o seu destino</h4>
                                </div>
                                <div class="description">Pesquise o lugar que você precisa ir e verifique os passeios disponíveis.
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">2</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Envie suas solicitações de assento</h4>
                                </div>
                                <div class="description">Você precisa de um passeio seguro com motoristas profissionais com ótimas tarifas?<br>
                                    Antes de enviar sua solicitação, você pode filtrar as viagens de acordo com sua conveniência para que você tenha a melhor experiência YOUMOOV.
                                </div>
                            </div>
                        </div>
                        <div class="description-block">
                            <span class="step">3</span>
                            <div class="text">
                                <div class="h4container">
                                    <h4>Acompanhe sua viagem em tempo real</h4>
                                </div>
                                <div class="description">Você recebeu sua confirmação, está no dia da viagem, pode rastrear facilmente sua viagem e se comunicar com o motorista se algo acontecer.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="right-block">
                        <img loading="eager" src="./assets/img/destination-passenger.jpg" alt="Interface Youmoov de la destination du passager" class="presentation-images left">
                        <img loading="eager" src="./assets/img/live-ride.jpg" alt="Interface Youmoov du suivi en temps réel du covoiturage" class="presentation-images middle">
                        <img loading="eager" src="./assets/img/messages.jpg" alt="Interface de messagerie Youmoov" class="presentation-images right">
                    </div>
                    <div class="signup-btn-container">
                        <!-- FR -->
                        <button class="signup fr">
                            <img loading="eager" src="./assets/svg/passenger-icon.svg" alt="" class="btn-icon">
                            Créer un compte <strong>passager</strong>
                        </button>
                        <!-- FR -->
                        <button class="signup en dn">
                            <img loading="eager" src="./assets/svg/passenger-icon.svg" alt="" class="btn-icon">
                            Sign up as a <strong>passenger</strong>
                        </button>
                        <!-- PT -->
                        <button class="signup pt dn">
                            <img loading="eager" src="./assets/svg/passenger-icon.svg" alt="" class="btn-icon">
                            Inscreva-se como <strong>passageiro</strong>
                        </button>
                        <!--  -->
                    </div>
                </div>
            </div>
        </section>
        <section id="perks">
            <div class="container">
                <!-- FR -->
                <div class="perks-headline fr">
                    <img loading="eager" class="youmoovcan" src="./assets/logo/youmoov_green_shadow.svg" alt="Avec Youmoov">
                </div> 
                <!-- EN -->
                <div class="perks-headline en dn">
                    <img loading="eager" class="youmoovcan" src="./assets/logo/youmoov_green_shadow.svg" alt="Avec Youmoov">
                </div> 
                <!-- PT -->
                <div class="perks-headline pt dn">
                    <img loading="eager" class="youmoovcan" src="./assets/logo/youmoov_green_shadow.svg" alt="Avec Youmoov">
                </div> 
                <!--  -->
                <div class="perks-content">
                    <div class="perk">
                        <img loading="eager" src="./assets/svg/environment.svg" alt="Avec youmoov, ayez un impact sur l'environnement en privilégiant le covoiturage">
                        <!-- FR -->
                        <p class="fr">Avoir un impact sur l'environnement en privilégiant le covoiturage</p>
                        <!-- FR -->
                        <p class="en dn">Have an environmental impact sharing rides</p>
                        <!-- PT -->
                        <p class="pt dn">Tenha um impacto ambiental compartilhando passeios</p>
                        <!--  -->
                    </div>
                    <div class="perk">
                        <img loading="eager" src="./assets/svg/friends.svg" alt="Avec youmoov, faites de nouvelles rencontres et partagez des moments humains">
                        <!-- FR -->
                        <p class="fr">Faire de nouvelles rencontres et partagez des moments humains</p>
                        <!-- EN -->
                        <p class="en dn">Build connexions with people around the country</p>
                        <!-- PT -->
                        <p class="pt dn">Conheça novas pessoas e compartilhe momentos humanos
                        </p>
                        <!--  -->
                    </div>
                    <div class="perk">
                        <img loading="eager" src="./assets/svg/card.svg" alt="Avec youmoov, augmentez vos revenus chaque semaine en faisant de nouvelles connexions">
                        <!-- FR -->
                        <p class="fr">Augmenter vos revenus chaque semaine en faisant de nouvelles connexions</p>
                        <!-- EN -->
                        <p class="en dn">Get payed weekly, having fun and making friends</p>
                        <!-- PT -->
                        <p class="pt dn">Receba semanalmente, se divertindo e fazendo amigos</p>
                        <!--  -->
                    </div>
                </div>
                <div class="download-links">
                    <!-- FR -->
                    <p class="download-message fr">Téléchargez maintenant</p>
                    <!-- FR -->
                    <p class="download-message en dn">Download now</p>
                    <!-- PT -->
                    <p class="download-message pt dn">Baixe Agora</p>
                    <!--  -->
                    <div class="download-links-container">
                        <a href="" class="download">
                            <img loading="eager" src="./assets/img/app-store-download.png" alt="">
                        </a>
                        <a href="" class="download">
                            <img loading="eager" src="./assets/img/google-store-download.png" alt="">
                            
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="onboarding">
            <img src="./assets/svg/onboarding-mask.svg" alt="" class="mask">
            <div class="container">
                <!-- FR -->
                <h2 class="fr">Une souscription simple et rapide</h2>
                <h3 class="fr">Vous souhaiter trouver un covoiturage ?</h3>
                <!-- EN -->
                <h2 class="en dn">Fast and easy onboarding process</h2>
                <h3 class="en dn">You're a traveler ?</h3>
                <!-- PT -->
                <h2 class="pt dn">Processo de integração rápido e fácil</h2>
                <h3 class="pt dn">Você quer encontrar uma carona?</h3>
                <!--  -->
                <div class="onboading-process">
                    <!-- FR -->
                    <h4 class="fr">Complétez ces 2 étapes et planifiez votre prochain covoiturage.</h4>
                    <!-- EN -->
                    <h4 class="en dn">Complete those 2 steps and start planning your next ride.</h4>
                    <!-- EN -->
                    <h4 class="pt dn">Conclua essas 2 etapas e comece a planejar sua próxima viagem.</h4>
                    <!--  -->
                    <div>
                        <img loading="eager" class="onboarding-screen" src="./assets/img/passenger-basic-info.jpg" alt="Interface Youmoov pour les infos d'un passager">
                        <img loading="eager" class="onboarding-screen" src="./assets/img/passenger-picture.jpg" alt="Interface Youmoov pour le téléchargement de la phot de profil passager">
                    </div>
                    <!-- FR -->
                    <button class="signup fr">
                        <img loading="eager" src="./assets/svg/passenger-icon.svg" alt="" class="btn-icon">
                        Créer un compte <strong>passager</strong>
                    </button>
                    <!-- EN -->
                    <button class="signup en dn">
                        <img loading="eager" src="./assets/svg/passenger-icon.svg" alt="" class="btn-icon">
                        Sign up as a <strong>passenger</strong>
                    </button>
                    <!-- PT -->
                    <button class="signup pt dn">
                        <img loading="eager" src="./assets/svg/passenger-icon.svg" alt="" class="btn-icon">
                        Inscreva-se como <strong>passageiro</strong>
                    </button>
                    <!--  -->
                </div>
                <!-- FR -->
                <h3 class="fr">Vous êtes chauffeur ?</h3>
                <!-- EN -->
                <h3 class="en dn">You're a driver</h3>
                <!-- PT -->
                <h3 class="pt dn">Você é um motorista</h3>
                <!-- -->
                <div class="onboading-process">
                    <!-- FR -->
                    <h4 class="fr">Saisissez votre adresse, les informations de votre véhicule et une copie de votre permis, nous validons votre profil sous 24h.</h4>
                    <!-- EN -->
                    <h4 class="en dn">Provide us with your address, car details and your licenses, we'll get back to you within 24 hours.</h4>
                    <!-- PT -->
                    <h4 class="pt dn">Forneça-nos seu endereço, detalhes do carro e suas licenças, entraremos em contato em 24 horas.
                    </h4>
                    <!-- -->
                    <div>
                        <img loading="eager" class="onboarding-screen" src="./assets/img/driver-basic-info.jpg" alt="Interface Youmoov de saisie des informations du conducteur">
                        <img loading="eager" class="onboarding-screen" src="./assets/img/driver-address.jpg" alt="Interface Youmoov de saisie de l'adresse du conducteur">
                        <img loading="eager" class="onboarding-screen" src="./assets/img/driver-car.jpg" alt="Interface Youmoov de saisie des références du véhicule du conducteur">
                        <img loading="eager" class="onboarding-screen" src="./assets/img/driver-documents.jpg" alt="Interface Youmoov pour le téléchargement du permis et des documents du véhicule du conducteur">  
                    </div>
                    <!-- FR -->
                    <button class="signup fr">
                        <img loading="eager" src="./assets/svg/driver-icon.svg" alt="" class="btn-icon">
                        Créer un compte <strong>conducteur</strong>
                    </button>
                    <!-- EN -->
                    <button class="signup en dn">
                        <img loading="eager" src="./assets/svg/driver-icon.svg" alt="" class="btn-icon">
                        Sign up as a <strong>driver</strong>
                    </button>
                    <!-- PT -->
                    <button class="signup pt dn">
                        <img loading="eager" src="./assets/svg/driver-icon.svg" alt="" class="btn-icon">
                        Inscreva-se como <strong>motorista</strong>
                    </button>
                    <!-- -->
                </div>
            </div>
        </section>
        <section id="transactions">
            <div class="container">
                <div class="transactions-content">
                    <div class="transactions-headline">
                        <img loading="eager" src="./assets/logo/youmoov_green.svg" alt="Vos transaction sécurisées avec Youmoov">
                        <!-- FR -->
                        <span class="fr">s'assure de la sécurité de vos transactions</span>
                        <!-- EN -->
                        <span class="en dn">has your transactions secured</span>
                        <!-- EN -->
                        <span class="pt dn">tem suas transações protegidas</span>
                        <!-- -->
                    </div>
                    <div class="transactions-methods">
                        <div class="transactions-method">
                            <img loading="eager" src="./assets/svg/mastercard.svg" alt="Youmoov accepte les paiements avec la mastercard">
                            <span>Mastercard</span>
                        </div>
                        <div class="transactions-method">
                            <img loading="eager" src="./assets/svg/google-pay.svg" alt="Youmoov accepte les paiements avec Google Pay">
                            <span>Google Pay</span>
                        </div>
                        <div class="transactions-method">
                            <img loading="eager" src="./assets/svg/paypal.svg" alt="Youmoov accepte les paiements avec Paypal">
                            <span>Paypal</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="contact-content">
                    <!-- FR -->
                    <div class="contact-text fr">
                        <h2>Contactez-nous</h2>
                        <p>Vous êtes arrivez jusqu'ici et vous n'avez pas encore souscrit à Youmoov ? <br>
                            Nous sommes là pour vous accompagner, n'hésitez pas à nous contacter via ce formulaire, nous serions heureux
                            de pouvoir vous aider.
                        </p>
                    </div>
                    <!-- EN -->
                    <div class="contact-text en dn">
                        <h2>Contact us</h2>
                        <p>You did get here without subscribing ? <br>
                            Feel fee to reach out to us anytime via this form if you have any queries or concerns, we'll be very happy to hear from you.
                        </p>
                    </div>
                    <!-- PT -->
                    <div class="contact-text pt dn">
                        <h2>Contate-nos</h2>
                        <p>Você chegou aqui sem se inscrever?<br>
                            Sinta-se à vontade para entrar em contato conosco a qualquer momento por meio deste formulário se tiver alguma dúvida ou preocupação. Ficaremos muito felizes em ouvi-lo.
                        </p>
                    </div>
                    <!--  -->
                    <form action="/confirm.php" id="contact-form" method="post">
                        <div class="input-row">
                            <div class="input-box">
                                <!-- FR -->
                                <label class="fr" for="fname">Prénom</label>
                                <!-- EN -->
                                <label class="en dn" for="fname">First name</label>
                                <!-- PT -->
                                <label class="pt dn" for="fname">Primeiro nome</label>
                                <!-- -->
                                <input type="text" class="fname" id="fname" name="fname" pattern="[a-zA-Z]+" >
                            </div>
                            <div class="input-box">
                                <!-- FR -->
                                <label class="fr" for="lname">Nom</label>
                                <!-- EN -->
                                <label class="en dn" for="lname">Last name</label>
                                <!-- PT -->
                                <label class="pt dn" for="lname">Nome</label>
                                <!-- -->
                                <input type="text" class="lname" id="lname"  name="lname" pattern="[a-zA-Z]+">
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-box">
                                <label for="email">Email</label>
                                <input type="email" class="email" id="email" name="email" >
                            </div>
                            <div class="input-box">
                                <!-- FR -->
                                <label class="fr" for="phone">Numéro de téléphone</label>
                                <!-- EN -->
                                <label class="en dn" for="phone">Phone number</label>
                                <!-- PT -->
                                <label class="pt dn" for="phone">Número de telefone</label>
                                <!-- -->
                                <input type="tel" class="phone" id="phone" name="phone" pattern="[0-9]+" >
                            </div>
                        </div>
                        <div class="input-box message">
                            <!-- FR -->
                            <label class="fr" for="message">Message</label>
                            <!-- PT -->
                            <label class="en dn" for="message">Message</label>
                            <!-- PT -->
                            <label class="pt dn" for="message">Mensagem</label>
                            <!--  -->
                            <textarea name="message" id="message" rows="8"></textarea>
                        </div>
                        <p class="errorMessage dn">
                            <!-- FR -->
                            <span class="fr">Tous les champs sont obligatoires !</span> 
                            <!-- EN -->
                            <span class="en dn">All fields are required !</span>
                            <!-- PT -->
                            <span class="pt dn">Todos os campos são necessários !</span>
                            <!--  -->
                        </p>    
                        <button type="submit">
                            <!-- FR -->
                            <span class="fr">Envoyer</span>
                            <!-- EN -->
                            <span class="en dn">Send</span>
                            <!-- PT -->
                            <span class="pt dn">Enviar</span>
                            <!--  -->
                        </button>
                    </form>
                </div>
            </div>
        </section>
    <footer>
        <div class="container">
            <div class="footer-left">
                <img loading="eager" src="./assets/logo/youmoov_white.svg" alt="">
                <!-- FR -->
                <p class="fr">Depuis 2012, Youmoov est la plateforme la plus utilisée pour le covoiturage sur le territoire Guyanais. <br>
                    Cette nouvelle manière de se déplacer
                    est en plein développement et permet à tous et à toutes de réduire notre empreinte carbone en étant encouragés. Sans compter 
                    l'aspect social et bénéfique que peut apporter le covoiturage. 
                </p>
                <!-- EN -->
                <p class="en dn">Since 2012, Youmoov is the most popular car pooling platform in French Guyana. <br>
                    This new way of travaling is expanding and allow us to get payed to lessen our carbon print. No to mention the social impact it may have.
                </p>
                <!-- PT -->
                <p class="pt dn">Desde 2012, Youmoov é a plataforma de car pooling mais popular na Guiana Francesa.<br>
                    Essa nova maneira de trabalhar está se expandindo e nos permite ser pagos para diminuir nossa impressão de carbono. Sem falar no impacto social que pode ter.
                </p>
                <!--  -->
            </div>
            <div class="footer-right">
                <div class="footer-links">
                    <h2>Youmoov</h2>
                    <ul>
                        <li class="footer-link">
                            <a href="#contact">
                                <!-- FR -->
                                <span class="fr">Rejoignez-nous</span>
                                <!-- EN -->
                                <span class="en dn">Join the team</span>
                                <!-- PT -->
                                <span class="pt dn">Junte-se à equipe</span>
                                <!--  -->
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="https://www.facebook.com/youmoov/">
                                <svg class="sn-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 0C4.5 0 0 4.49 0 10.02C0 15.02 3.66 19.17 8.44 19.92V12.92H5.9V10.02H8.44V7.81C8.44 5.3 9.93 3.92 12.22 3.92C13.31 3.92 14.45 4.11 14.45 4.11V6.58H13.19C11.95 6.58 11.56 7.35 11.56 8.14V10.02H14.34L13.89 12.92H11.56V19.92C13.9164 19.5478 16.0622 18.3455 17.6099 16.5301C19.1576 14.7146 20.0054 12.4056 20 10.02C20 4.49 15.5 0 10 0Z"/>
                                </svg>
                                Facebook
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="https://www.instagram.com/youmoov.co/">
                                <svg class="sn-icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 7.91992C9.20435 7.91992 8.44141 8.23608 7.87866 8.79858C7.31616 9.36133 7 10.1243 7 10.9199C7 11.7156 7.31616 12.4785 7.87866 13.0413C8.44141 13.6038 9.20435 13.9199 10 13.9199C10.7957 13.9199 11.5586 13.6038 12.1213 13.0413C12.6838 12.4785 13 11.7156 13 10.9199C13 10.1243 12.6838 9.36133 12.1213 8.79858C11.5586 8.23608 10.7957 7.91992 10 7.91992Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2 0.919922H5.80005C4.26172 0.919922 2.78638 1.53101 1.69873 2.61865C0.611084 3.7063 0 5.18164 0 6.71997V15.1199C0 18.3198 2.6001 20.9199 5.80005 20.9199H14.2C15.7383 20.9199 17.2136 20.3088 18.3013 19.2212C19.3889 18.1335 20 16.6582 20 15.1199V6.71997C20 3.52002 17.3999 0.919922 14.2 0.919922ZM15.25 4.41992C15.5815 4.41992 15.8994 4.55151 16.1338 4.78613C16.2173 4.86963 16.2876 4.96362 16.3438 5.06494C16.3621 5.09814 16.3789 5.13232 16.3943 5.16699C16.4634 5.32397 16.5 5.49512 16.5 5.66992C16.5 6.00146 16.3684 6.31934 16.1338 6.55371C15.8994 6.78833 15.5815 6.91992 15.25 6.91992C14.9185 6.91992 14.6006 6.78833 14.3662 6.55371C14.1316 6.31934 14 6.00146 14 5.66992C14 5.6062 14.0049 5.54297 14.0144 5.48071C14.0215 5.43311 14.0315 5.38599 14.0442 5.33984C14.0681 5.25269 14.1013 5.16846 14.1433 5.08862C14.2014 4.97803 14.2761 4.87598 14.3662 4.78613C14.6006 4.55151 14.9185 4.41992 15.25 4.41992ZM10 5.91992C11.3262 5.91992 12.5979 6.44678 13.5356 7.38428C14.4731 8.32202 15 9.59375 15 10.9199C15 12.2461 14.4731 13.5178 13.5356 14.4556C12.5979 15.3931 11.3262 15.9199 10 15.9199C8.67383 15.9199 7.4021 15.3931 6.46436 14.4556C5.52686 13.5178 5 12.2461 5 10.9199C5 9.59375 5.52686 8.32202 6.46436 7.38428C7.4021 6.44678 8.67383 5.91992 10 5.91992Z"/>
                                </svg>
                                Instagram
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- FR -->
                <div class="footer-links fr">
                    <h2>Vie privée</h2>
                    <ul>
                        <li class="footer-link" onclick="openConfidentiality()">Politique de confidentialité</li>
                        <li class="footer-link" onclick="openTerms()">Conditions Générales de Vente</li>
                        <li class="footer-link" onclick="openLegalNotice()">Mentions Légales</li>
                    </ul>
                </div>
                <!-- EN -->
                <div class="footer-links en dn">
                    <h2>Privacy</h2>
                    <ul>
                        <li class="footer-link" onclick="openConfidentiality()">Privacy policy</li>
                        <li class="footer-link" onclick="openTerms()">Terms and conditions</li>
                        <li class="footer-link" onclick="openLegalNotice()">Legal Notice</li>
                    </ul>
                </div>
                <!-- PT -->
                <div class="footer-links pt dn">
                    <h2>Vida privada</h2>
                    <ul>
                        <li class="footer-link" onclick="openConfidentiality()">Política de Privacidade</li>
                        <li class="footer-link" onclick="openTerms()">Termos e Condições</li>
                        <li class="footer-link" onclick="openLegalNotice()">Notícia legal</li>
                    </ul>
                </div>
                <!--  -->
            </div>
        </div>
        <small>Coyright © <img loading="eager" style="height: 13.5px; vertical-align: middle; margin: 0 4px;" src="./assets/logo/youmoov_white.svg" alt=""> 2023.
            <!-- FR -->
            <span class="fr">Tous droits réservés.</span> 
            <!-- EN -->
            <span class="en dn">All rights reserved.</span> 
            <!-- PT -->
            <span class="pt dn">Todos os direitos reservados.</span> 
            <!--  -->
        </small>
    </footer>
    <div id="confidentiality" class="modal">
        <button class="close">
            <img loading="eager" src="./assets/svg/close.svg" alt="">
        </button>
        <div class="container modal-content">
            <div class="modal-content-container">
                <!-- FR -->
                <h3 class="fr">Politique de confidentialité</h3>
                <!-- EN -->
                <h3 class="en dn">Privacy policy</h3>
                <!-- EN -->
                <h3 class="pt dn">Política de Privacidade</h3>
                <!--  -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam maiores, minus repudiandae culpa eos saepe, eum dolore nesciunt et repellendus cupiditate velit cumque molestias praesentium veritatis? At omnis voluptas voluptates, neque perspiciatis fugit possimus totam eaque, iusto nulla molestias deleniti sapiente esse adipisci quis exercitationem iure! Expedita rem soluta laboriosam a provident repellat illo sequi inventore magnam alias optio ut, reprehenderit vel numquam obcaecati eligendi? Quidem nemo velit ea quo dolorem quam cumque repellendus, culpa aliquam voluptas dolores harum voluptate vitae placeat optio magni non commodi? Consequatur asperiores et quibusdam non ad optio possimus dolore. Ad doloribus deleniti quo quisquam modi, repellat voluptate consequuntur debitis enim ratione aspernatur nobis natus nam minus explicabo voluptatem praesentium nisi fuga? Recusandae voluptate voluptatibus itaque nam veniam exercitationem molestiae ut at animi optio doloremque reprehenderit fuga, quaerat neque labore hic modi libero inventore eaque, quibusdam, qui dignissimos unde? Reiciendis amet commodi, quam voluptates neque dolorem veniam dicta similique consectetur maxime maiores asperiores sint? Itaque animi quaerat aperiam illum, quisquam, nisi cupiditate iste nemo tenetur veniam sequi illo soluta error, odit eum ducimus! Optio ad labore blanditiis consequuntur recusandae saepe! Omnis esse, nesciunt perferendis temporibus exercitationem recusandae praesentium corporis aperiam. Quos, quasi voluptatum omnis dignissimos nulla ducimus est veniam eligendi recusandae! Quibusdam perferendis, doloribus aperiam pariatur praesentium voluptates ad quo quam amet cum et optio, voluptatibus quasi molestiae facere veritatis autem explicabo facilis impedit est. Et quidem modi possimus nulla corrupti impedit delectus dicta dolorem, nemo consectetur sequi iste eveniet veniam repudiandae voluptatibus molestias blanditiis exercitationem sit corporis, earum maiores fuga! Sint repudiandae dolore doloremque eos quae cumque nemo iure cum repellendus ipsa maxime inventore sapiente, rem, vitae incidunt, pariatur at vel nam expedita molestiae praesentium veritatis dolorem. Temporibus consectetur eaque perspiciatis cum excepturi veritatis quam libero ullam maiores explicabo at et, reprehenderit, ea laudantium saepe dolor rerum ducimus totam. Suscipit neque vitae aut similique vel quis quam veritatis. Vel, libero! Quaerat perspiciatis amet unde quas reiciendis consectetur id quidem explicabo autem repellat. Nesciunt esse reprehenderit adipisci quas ut mollitia inventore nostrum molestiae aut ullam, modi ad natus ab, soluta animi id aliquid? Vel incidunt reiciendis dolorum, voluptate ipsam tenetur libero quibusdam nesciunt sequi. Nulla, qui laudantium praesentium quos exercitationem reprehenderit nobis fugiat ipsam odio, provident quo modi tenetur velit ducimus accusantium? Eum saepe in sunt magni quidem incidunt vel sed quis deleniti? Corporis laborum quo odit quos excepturi, reprehenderit, incidunt, voluptate inventore veniam delectus provident iure voluptatem est harum nesciunt suscipit culpa cumque. Placeat temporibus neque, aut beatae est pariatur, officiis ullam commodi earum eligendi iure. Voluptates, in? Suscipit distinctio excepturi corporis quia rerum ipsam placeat magni similique itaque nisi debitis eos perspiciatis aliquid nostrum dignissimos, temporibus dolore accusamus adipisci eius beatae corrupti. Alias distinctio sunt sit vitae non accusamus velit doloribus nobis, obcaecati dolorum, aliquam quas quam. Dignissimos magnam et distinctio in rerum numquam nam illum atque hic sequi asperiores blanditiis dolor a nisi placeat quis minima, illo voluptate perspiciatis recusandae debitis voluptatibus ipsa! Beatae aliquam distinctio, totam dignissimos, tenetur sapiente pariatur, perspiciatis saepe est vel minima quis praesentium ullam ab perferendis officiis dolorum similique iste dolores deleniti reiciendis minus velit! Odit aliquam dolorem commodi maxime ipsa tempora cupiditate asperiores dolores soluta, suscipit eveniet voluptatibus obcaecati molestiae repudiandae. Quod aspernatur quis, consequatur necessitatibus enim similique, eaque esse ullam assumenda quasi possimus laboriosam consectetur autem. Incidunt praesentium facilis inventore tempora ipsam, optio odit quibusdam minima nesciunt magni, placeat odio ullam iste architecto dignissimos aliquid. Natus fugit est velit, ipsam eaque quisquam magni quaerat ex modi voluptatum labore, impedit explicabo dicta qui, libero obcaecati nemo! Hic ipsa, corrupti ipsum, a minus earum mollitia expedita consectetur nulla voluptatibus harum perferendis. Rerum est mollitia culpa a cumque maiores, quos provident similique sint, sunt qui cum ipsa assumenda debitis aliquid. Magnam est tempore quia quam ut ipsa corrupti rerum fugit recusandae quibusdam maiores reprehenderit quod, culpa quae vel animi voluptas explicabo. Quaerat natus, possimus officia, esse consectetur consequatur et recusandae, animi voluptatum ab repudiandae iusto voluptatibus? Iste maiores nesciunt, vitae nobis harum ipsum a provident ad sunt laudantium. Nam similique ut sit quam dolores dolorem ipsam amet voluptas nobis doloribus exercitationem facilis assumenda iusto optio, eligendi odio vel eum asperiores perferendis officiis nesciunt. Explicabo modi laboriosam nostrum debitis aliquam? Distinctio qui exercitationem, saepe facilis vel mollitia praesentium corporis doloribus libero architecto tempora cupiditate. Modi, repudiandae ad vero, praesentium eveniet nostrum ipsam aut quibusdam distinctio facilis vel non magnam magni doloribus reprehenderit sint asperiores sapiente quaerat delectus reiciendis! Mollitia ipsam autem repudiandae laborum ducimus voluptatibus quo fuga, natus non nemo laboriosam eaque! In ex aspernatur est nemo velit dignissimos quibusdam debitis sint quasi amet sunt tempore fugit laudantium ad, voluptas commodi. Deserunt ea cupiditate, modi, temporibus sequi mollitia quia veniam exercitationem aperiam voluptatem quaerat quisquam atque ducimus voluptate pariatur tempore itaque dolorem. Atque debitis tenetur iure ullam ex amet.</p>
            </div>
        </div>
    </div>
    <div id="terms" class="modal">
        <button class="close">
            <img loading="eager" src="./assets/svg/close.svg" alt="">
        </button>
        <div class="container modal-content">
            <div class="modal-content-container">
                <!-- FR -->
                <h3 class="fr">Conditions Générales de Ventes</h3>
                <!-- EN -->
                <h3 class="en dn">Terms and conditions</h3>
                <!-- PT -->
                <h3 class="pt dn">Termos e Condições</h3>
                <!--  -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam maiores, minus repudiandae culpa eos saepe, eum dolore nesciunt et repellendus cupiditate velit cumque molestias praesentium veritatis? At omnis voluptas voluptates, neque perspiciatis fugit possimus totam eaque, iusto nulla molestias deleniti sapiente esse adipisci quis exercitationem iure! Expedita rem soluta laboriosam a provident repellat illo sequi inventore magnam alias optio ut, reprehenderit vel numquam obcaecati eligendi? Quidem nemo velit ea quo dolorem quam cumque repellendus, culpa aliquam voluptas dolores harum voluptate vitae placeat optio magni non commodi? Consequatur asperiores et quibusdam non ad optio possimus dolore. Ad doloribus deleniti quo quisquam modi, repellat voluptate consequuntur debitis enim ratione aspernatur nobis natus nam minus explicabo voluptatem praesentium nisi fuga? Recusandae voluptate voluptatibus itaque nam veniam exercitationem molestiae ut at animi optio doloremque reprehenderit fuga, quaerat neque labore hic modi libero inventore eaque, quibusdam, qui dignissimos unde? Reiciendis amet commodi, quam voluptates neque dolorem veniam dicta similique consectetur maxime maiores asperiores sint? Itaque animi quaerat aperiam illum, quisquam, nisi cupiditate iste nemo tenetur veniam sequi illo soluta error, odit eum ducimus! Optio ad labore blanditiis consequuntur recusandae saepe! Omnis esse, nesciunt perferendis temporibus exercitationem recusandae praesentium corporis aperiam. Quos, quasi voluptatum omnis dignissimos nulla ducimus est veniam eligendi recusandae! Quibusdam perferendis, doloribus aperiam pariatur praesentium voluptates ad quo quam amet cum et optio, voluptatibus quasi molestiae facere veritatis autem explicabo facilis impedit est. Et quidem modi possimus nulla corrupti impedit delectus dicta dolorem, nemo consectetur sequi iste eveniet veniam repudiandae voluptatibus molestias blanditiis exercitationem sit corporis, earum maiores fuga! Sint repudiandae dolore doloremque eos quae cumque nemo iure cum repellendus ipsa maxime inventore sapiente, rem, vitae incidunt, pariatur at vel nam expedita molestiae praesentium veritatis dolorem. Temporibus consectetur eaque perspiciatis cum excepturi veritatis quam libero ullam maiores explicabo at et, reprehenderit, ea laudantium saepe dolor rerum ducimus totam. Suscipit neque vitae aut similique vel quis quam veritatis. Vel, libero! Quaerat perspiciatis amet unde quas reiciendis consectetur id quidem explicabo autem repellat. Nesciunt esse reprehenderit adipisci quas ut mollitia inventore nostrum molestiae aut ullam, modi ad natus ab, soluta animi id aliquid? Vel incidunt reiciendis dolorum, voluptate ipsam tenetur libero quibusdam nesciunt sequi. Nulla, qui laudantium praesentium quos exercitationem reprehenderit nobis fugiat ipsam odio, provident quo modi tenetur velit ducimus accusantium? Eum saepe in sunt magni quidem incidunt vel sed quis deleniti? Corporis laborum quo odit quos excepturi, reprehenderit, incidunt, voluptate inventore veniam delectus provident iure voluptatem est harum nesciunt suscipit culpa cumque. Placeat temporibus neque, aut beatae est pariatur, officiis ullam commodi earum eligendi iure. Voluptates, in? Suscipit distinctio excepturi corporis quia rerum ipsam placeat magni similique itaque nisi debitis eos perspiciatis aliquid nostrum dignissimos, temporibus dolore accusamus adipisci eius beatae corrupti. Alias distinctio sunt sit vitae non accusamus velit doloribus nobis, obcaecati dolorum, aliquam quas quam. Dignissimos magnam et distinctio in rerum numquam nam illum atque hic sequi asperiores blanditiis dolor a nisi placeat quis minima, illo voluptate perspiciatis recusandae debitis voluptatibus ipsa! Beatae aliquam distinctio, totam dignissimos, tenetur sapiente pariatur, perspiciatis saepe est vel minima quis praesentium ullam ab perferendis officiis dolorum similique iste dolores deleniti reiciendis minus velit! Odit aliquam dolorem commodi maxime ipsa tempora cupiditate asperiores dolores soluta, suscipit eveniet voluptatibus obcaecati molestiae repudiandae. Quod aspernatur quis, consequatur necessitatibus enim similique, eaque esse ullam assumenda quasi possimus laboriosam consectetur autem. Incidunt praesentium facilis inventore tempora ipsam, optio odit quibusdam minima nesciunt magni, placeat odio ullam iste architecto dignissimos aliquid. Natus fugit est velit, ipsam eaque quisquam magni quaerat ex modi voluptatum labore, impedit explicabo dicta qui, libero obcaecati nemo! Hic ipsa, corrupti ipsum, a minus earum mollitia expedita consectetur nulla voluptatibus harum perferendis. Rerum est mollitia culpa a cumque maiores, quos provident similique sint, sunt qui cum ipsa assumenda debitis aliquid. Magnam est tempore quia quam ut ipsa corrupti rerum fugit recusandae quibusdam maiores reprehenderit quod, culpa quae vel animi voluptas explicabo. Quaerat natus, possimus officia, esse consectetur consequatur et recusandae, animi voluptatum ab repudiandae iusto voluptatibus? Iste maiores nesciunt, vitae nobis harum ipsum a provident ad sunt laudantium. Nam similique ut sit quam dolores dolorem ipsam amet voluptas nobis doloribus exercitationem facilis assumenda iusto optio, eligendi odio vel eum asperiores perferendis officiis nesciunt. Explicabo modi laboriosam nostrum debitis aliquam? Distinctio qui exercitationem, saepe facilis vel mollitia praesentium corporis doloribus libero architecto tempora cupiditate. Modi, repudiandae ad vero, praesentium eveniet nostrum ipsam aut quibusdam distinctio facilis vel non magnam magni doloribus reprehenderit sint asperiores sapiente quaerat delectus reiciendis! Mollitia ipsam autem repudiandae laborum ducimus voluptatibus quo fuga, natus non nemo laboriosam eaque! In ex aspernatur est nemo velit dignissimos quibusdam debitis sint quasi amet sunt tempore fugit laudantium ad, voluptas commodi. Deserunt ea cupiditate, modi, temporibus sequi mollitia quia veniam exercitationem aperiam voluptatem quaerat quisquam atque ducimus voluptate pariatur tempore itaque dolorem. Atque debitis tenetur iure ullam ex amet.</p>
            </div>
        </div>
    </div>
    <div id="legal-notice" class="modal">
        <button class="close">
            <img loading="eager" src="./assets/svg/close.svg" alt="">
        </button>
        <div class="container modal-content">
            <div class="modal-content-container">
                <!-- FR -->
                <h3 class="fr">Mentions Légales</h3>
                <!-- EN -->
                <h3 class="en dn">Legal Notice</h3>
                <!-- PT -->
                <h3 class="pt dn">Notícia legal</h3>
                <!--  -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam maiores, minus repudiandae culpa eos saepe, eum dolore nesciunt et repellendus cupiditate velit cumque molestias praesentium veritatis? At omnis voluptas voluptates, neque perspiciatis fugit possimus totam eaque, iusto nulla molestias deleniti sapiente esse adipisci quis exercitationem iure! Expedita rem soluta laboriosam a provident repellat illo sequi inventore magnam alias optio ut, reprehenderit vel numquam obcaecati eligendi? Quidem nemo velit ea quo dolorem quam cumque repellendus, culpa aliquam voluptas dolores harum voluptate vitae placeat optio magni non commodi? Consequatur asperiores et quibusdam non ad optio possimus dolore. Ad doloribus deleniti quo quisquam modi, repellat voluptate consequuntur debitis enim ratione aspernatur nobis natus nam minus explicabo voluptatem praesentium nisi fuga? Recusandae voluptate voluptatibus itaque nam veniam exercitationem molestiae ut at animi optio doloremque reprehenderit fuga, quaerat neque labore hic modi libero inventore eaque, quibusdam, qui dignissimos unde? Reiciendis amet commodi, quam voluptates neque dolorem veniam dicta similique consectetur maxime maiores asperiores sint? Itaque animi quaerat aperiam illum, quisquam, nisi cupiditate iste nemo tenetur veniam sequi illo soluta error, odit eum ducimus! Optio ad labore blanditiis consequuntur recusandae saepe! Omnis esse, nesciunt perferendis temporibus exercitationem recusandae praesentium corporis aperiam. Quos, quasi voluptatum omnis dignissimos nulla ducimus est veniam eligendi recusandae! Quibusdam perferendis, doloribus aperiam pariatur praesentium voluptates ad quo quam amet cum et optio, voluptatibus quasi molestiae facere veritatis autem explicabo facilis impedit est. Et quidem modi possimus nulla corrupti impedit delectus dicta dolorem, nemo consectetur sequi iste eveniet veniam repudiandae voluptatibus molestias blanditiis exercitationem sit corporis, earum maiores fuga! Sint repudiandae dolore doloremque eos quae cumque nemo iure cum repellendus ipsa maxime inventore sapiente, rem, vitae incidunt, pariatur at vel nam expedita molestiae praesentium veritatis dolorem. Temporibus consectetur eaque perspiciatis cum excepturi veritatis quam libero ullam maiores explicabo at et, reprehenderit, ea laudantium saepe dolor rerum ducimus totam. Suscipit neque vitae aut similique vel quis quam veritatis. Vel, libero! Quaerat perspiciatis amet unde quas reiciendis consectetur id quidem explicabo autem repellat. Nesciunt esse reprehenderit adipisci quas ut mollitia inventore nostrum molestiae aut ullam, modi ad natus ab, soluta animi id aliquid? Vel incidunt reiciendis dolorum, voluptate ipsam tenetur libero quibusdam nesciunt sequi. Nulla, qui laudantium praesentium quos exercitationem reprehenderit nobis fugiat ipsam odio, provident quo modi tenetur velit ducimus accusantium? Eum saepe in sunt magni quidem incidunt vel sed quis deleniti? Corporis laborum quo odit quos excepturi, reprehenderit, incidunt, voluptate inventore veniam delectus provident iure voluptatem est harum nesciunt suscipit culpa cumque. Placeat temporibus neque, aut beatae est pariatur, officiis ullam commodi earum eligendi iure. Voluptates, in? Suscipit distinctio excepturi corporis quia rerum ipsam placeat magni similique itaque nisi debitis eos perspiciatis aliquid nostrum dignissimos, temporibus dolore accusamus adipisci eius beatae corrupti. Alias distinctio sunt sit vitae non accusamus velit doloribus nobis, obcaecati dolorum, aliquam quas quam. Dignissimos magnam et distinctio in rerum numquam nam illum atque hic sequi asperiores blanditiis dolor a nisi placeat quis minima, illo voluptate perspiciatis recusandae debitis voluptatibus ipsa! Beatae aliquam distinctio, totam dignissimos, tenetur sapiente pariatur, perspiciatis saepe est vel minima quis praesentium ullam ab perferendis officiis dolorum similique iste dolores deleniti reiciendis minus velit! Odit aliquam dolorem commodi maxime ipsa tempora cupiditate asperiores dolores soluta, suscipit eveniet voluptatibus obcaecati molestiae repudiandae. Quod aspernatur quis, consequatur necessitatibus enim similique, eaque esse ullam assumenda quasi possimus laboriosam consectetur autem. Incidunt praesentium facilis inventore tempora ipsam, optio odit quibusdam minima nesciunt magni, placeat odio ullam iste architecto dignissimos aliquid. Natus fugit est velit, ipsam eaque quisquam magni quaerat ex modi voluptatum labore, impedit explicabo dicta qui, libero obcaecati nemo! Hic ipsa, corrupti ipsum, a minus earum mollitia expedita consectetur nulla voluptatibus harum perferendis. Rerum est mollitia culpa a cumque maiores, quos provident similique sint, sunt qui cum ipsa assumenda debitis aliquid. Magnam est tempore quia quam ut ipsa corrupti rerum fugit recusandae quibusdam maiores reprehenderit quod, culpa quae vel animi voluptas explicabo. Quaerat natus, possimus officia, esse consectetur consequatur et recusandae, animi voluptatum ab repudiandae iusto voluptatibus? Iste maiores nesciunt, vitae nobis harum ipsum a provident ad sunt laudantium. Nam similique ut sit quam dolores dolorem ipsam amet voluptas nobis doloribus exercitationem facilis assumenda iusto optio, eligendi odio vel eum asperiores perferendis officiis nesciunt. Explicabo modi laboriosam nostrum debitis aliquam? Distinctio qui exercitationem, saepe facilis vel mollitia praesentium corporis doloribus libero architecto tempora cupiditate. Modi, repudiandae ad vero, praesentium eveniet nostrum ipsam aut quibusdam distinctio facilis vel non magnam magni doloribus reprehenderit sint asperiores sapiente quaerat delectus reiciendis! Mollitia ipsam autem repudiandae laborum ducimus voluptatibus quo fuga, natus non nemo laboriosam eaque! In ex aspernatur est nemo velit dignissimos quibusdam debitis sint quasi amet sunt tempore fugit laudantium ad, voluptas commodi. Deserunt ea cupiditate, modi, temporibus sequi mollitia quia veniam exercitationem aperiam voluptatem quaerat quisquam atque ducimus voluptate pariatur tempore itaque dolorem. Atque debitis tenetur iure ullam ex amet.</p>
            </div>
        </div>
    </div>
    <div id="language-modal" class="modal">
        <button class="close">
            <img loading="eager" src="./assets/svg/close.svg" alt="">
        </button>
        <div class="modal-content">
            <!-- FR -->
            <h3 class="fr">Langue</h3>
            <!-- EN -->
            <h3 class="en dn">Language</h3>
            <!-- PT -->
            <h3 class="pt dn">Linguagem</h3>
            <!--  -->
            <ul>
                <li onclick="switchTo(this)"><img loading="eager" class="flag" src="./assets/svg/fra.svg" alt=""><span class="language-label">Français</span></li>
                <li onclick="switchTo(this)"><img loading="eager" class="flag" src="./assets/svg/eng.svg" alt=""><span class="language-label">English</span></li>
                <li onclick="switchTo(this)"><img loading="eager" class="flag" src="./assets/svg/bra.svg" alt=""><span class="language-label">Português</span></li>
            </ul>
        </div>
    </div>
    <script src="./index.js"></script>
</body>
</html>