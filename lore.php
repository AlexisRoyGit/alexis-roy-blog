<?php 
    if(isset($_COOKIE['PHPSESSID'])){
        session_start();
    }  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le lore</title>
    <meta name="description" content="Apprenez ici tout ce qu'il y a à savoir sur le lore de l'univers Warhammer. Des premiers balbutiements de l'humanité en passant par l'hérésie d'Horus jusqu'au 40ème millénaire!">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/lore.css">
</head>
<body>
    <nav class="nav">
        <a href="index.php" class="logo-place center-flex">
            <img src="Médias/Warhammer.png" alt="Logo du site" class="logo">
        </a>
        <div id="side-nav" class="side-nav">
            <a href="#" id="close" class="close">x</a>
            <ul>
                <?php  
                        require_once 'Back/controller-session.php';
                        $session->linkSessionSideNav();  
                ?>
            </ul>
        </div>
        <div class="burger center-flex" id="burger-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
        <?php  $session->linkSessionNav() ?>
    </nav>
    <main>
        <h1 class="title">Le lore Warhammer à travers le temps</h1>
        <section>
            <h2 class="title">Le commencement</h2>
            <img src="Médias/600px-HistoireDeImperium.jpg" alt="Début de Warhammer" class="image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mi orci, placerat sit amet magna a, feugiat faucibus nibh. Cras congue congue ligula at rutrum. Ut ullamcorper id libero quis aliquet. Aenean ultricies velit in nunc consequat tincidunt. Vestibulum pretium quis metus non elementum. Donec vel semper nunc, nec porta risus. Aenean iaculis hendrerit nisl, sed lacinia ipsum interdum interdum. Phasellus imperdiet erat vitae efficitur consequat</p>
            <p>Etiam finibus, ligula at hendrerit gravida, metus risus ullamcorper lacus, non dapibus orci neque et magna. Aenean pretium dolor lacus, vitae posuere mauris sagittis eu. Etiam mollis sit amet enim sed tincidunt. Sed nec nulla ut libero elementum pharetra molestie eu felis. Nam egestas eleifend lorem, quis maximus libero tempor non. Duis vulputate mauris ac lacus hendrerit, vulputate tempus nulla euismod.</p>
            <p>Maecenas ut volutpat risus. Nam non posuere nibh. Proin bibendum pellentesque ligula. Cras eget dictum diam. Phasellus vitae mi a ipsum pharetra pretium. Maecenas pretium sed dui eget luctus. Proin metus velit, porttitor sit amet suscipit non, facilisis vel nunc.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec est tempus, pulvinar lorem et, porta ligula. Etiam dictum lectus vehicula dui congue ultrices. Sed maximus ex id ultrices pellentesque. Morbi bibendum quis nibh vel tincidunt. Donec ornare sagittis neque, ac ornare augue convallis ac. Pellentesque nec imperdiet ligula, interdum convallis nisi.</p>
        </section>
        <section>
            <h2 class="title">Le début de la grande croisade</h2>
            <img src="Médias/700px-DébutGrandeCroisade.jpg" alt="La Grande Croisade" class="image">
            <p>Proin nec nisi eu enim ultricies aliquet a et velit. Nunc porttitor mauris nulla, in congue justo euismod dignissim. Vestibulum fringilla eros at suscipit pharetra. Aliquam feugiat vestibulum sapien, sed tempor nunc tincidunt ac. Ut eget velit sit amet neque egestas elementum ut laoreet nibh. Suspendisse lectus diam, semper sit amet lectus molestie, bibendum rutrum nunc.</p>
            <p>Proin luctus lectus rutrum pellentesque posuere. In hac habitasse platea dictumst. Mauris pharetra ex a pellentesque congue. Phasellus laoreet, nulla a consequat elementum, risus mi malesuada risus, sit amet cursus turpis orci sit amet diam. Integer risus elit, dignissim egestas interdum sed, faucibus id libero. Nulla mollis mauris et orci convallis blandit. Duis vel semper tortor. Aliquam ut urna nec felis faucibus fringilla.</p>
            <p>Nam sollicitudin massa non lobortis sagittis. Mauris ornare lacus sed luctus consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum porta justo ex, vel tempor diam bibendum a. Donec iaculis gravida felis, vel imperdiet mi facilisis eget. Etiam convallis nisl bibendum massa convallis, quis elementum erat auctor. Donec facilisis nulla magna, quis luctus metus rhoncus eget. Vestibulum mattis faucibus orci, et fermentum arcu tincidunt eget</p>
            <p> Duis rutrum risus et tellus laoreet placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris tempus mi at mauris fringilla, at vulputate libero ornare. Fusce id lacus ac lectus porta suscipit vel eget libero. Phasellus vitae magna non metus fermentum euismod.</p>
            <p>Sed cursus dapibus mollis. Ut faucibus, est scelerisque faucibus placerat, felis ex vehicula mauris, quis varius lorem metus sit amet diam. Duis finibus molestie lorem, sed placerat odio</p>
        </section>
        <section>
            <h2 class="title">L'hérésie d'Horus</h2>
            <img src="Médias/heresy.jpg" alt="Hérésie d'Horus" class="image">
            <p>Donec tristique tempus elit, quis rhoncus dolor maximus ac. Curabitur eu mollis sapien, ultricies sollicitudin tortor. Etiam ac commodo sem. Pellentesque a commodo augue. Quisque id urna pellentesque, ultricies turpis ut, placerat quam. Morbi vulputate dignissim mauris, a tincidunt velit gravida vitae. Nam fermentum pretium velit, id vulputate dolor pellentesque ac. Nam rutrum lectus eros, eget lacinia nulla condimentum ac. Nunc elementum volutpat purus id sodales. </p>
            <p>Praesent pretium bibendum dui, non volutpat enim pulvinar vitae. Mauris ac quam ac lectus aliquet lobortis. Donec venenatis dui non eros auctor pellentesque ac sed nulla. Mauris egestas mi nisi. Pellentesque eu arcu magna. Aliquam at accumsan lectus, sit amet congue est. Pellentesque eget finibus augue. Nam sed sodales est, id lacinia lectus. Donec sed velit magna. Integer sapien quam, ornare quis accumsan eget, blandit non lorem. Nulla eget sapien ornare, efficitur lacus in, consectetur purus.</p>
            <p>Fusce malesuada convallis quam, quis accumsan lorem suscipit non. Proin nec porta urna. In purus orci, fermentum sed vehicula ut, ultricies at turpis. Nulla non nisl lacinia, varius enim laoreet, consequat velit.</p>
            <p>Etiam sed facilisis massa. Nullam non semper neque. Sed porttitor est feugiat urna faucibus, nec imperdiet odio semper. Donec fermentum, nisi id laoreet rutrum, mauris est efficitur risus, vel fermentum libero neque pretium dolor. Curabitur id libero id urna blandit pharetra. Duis a est sodales, venenatis ligula vel, finibus quam.</p>
            <p>Nam euismod vehicula accumsan. Nullam consequat enim sed turpis efficitur elementum. Ut odio augue, ullamcorper nec orci vitae, varius convallis nulla. Fusce suscipit leo ut semper pretium. Maecenas egestas nulla dui, luctus fermentum felis ultrices eu. Aliquam venenatis vitae nisi a sollicitudin. Pellentesque in nisi vel libero condimentum fermentum vitae nec neque. Aliquam cursus pellentesque magna quis porttitor.</p>
        </section>
        <section>
            <h2 class="title">Le 40ème millénaire</h2>
            <img src="Médias/40k.jpg" alt="Warhammer 40k" class="image">
            <p>Quisque ullamcorper volutpat erat, vitae blandit risus laoreet at. Cras et dui sed nulla imperdiet vestibulum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin maximus risus a consectetur euismod. Vivamus ultrices ligula ac dolor facilisis, molestie interdum augue convallis. Nulla id diam leo. Nullam accumsan massa ligula, at accumsan metus rhoncus quis.</p>
            <p>Phasellus luctus ipsum quis risus porta cursus. Sed cursus, lorem sit amet eleifend vestibulum, augue arcu fermentum magna, non lacinia tortor felis vel urna. Nunc ut venenatis ligula. Nulla in sollicitudin mauris, id ornare turpis. Praesent felis nisi, rhoncus nec ipsum ut, luctus viverra eros. Duis vel libero a magna facilisis mattis. Morbi eu mauris quis tellus fringilla venenatis et bibendum purus.</p>
            <p>Proin tincidunt vestibulum metus, at scelerisque sem pharetra eget. Integer sodales id quam sit amet mattis. In hac habitasse platea dictumst. Curabitur dapibus a turpis in blandit. Aenean lobortis ut erat non semper. Aenean egestas lacus ac purus posuere sodales. Aenean id mattis ligula, at hendrerit urna. Maecenas quis pellentesque risus. Pellentesque est mauris, malesuada cursus odio eu, ultrices ornare est. In rhoncus dolor nulla. Mauris eleifend sed quam non consequat. Vivamus aliquet eros orci, congue tincidunt dolor faucibus non. Duis pretium libero enim, sollicitudin sollicitudin ligula consectetur et. In consectetur dignissim arcu sed dictum. Duis euismod metus id tellus cursus, ac facilisis elit semper. Aliquam vitae turpis et elit congue fermentum.</p>
            <p>Fusce a elit tellus. Donec vehicula nisi non ipsum rhoncus, et porta ante rhoncus. Curabitur dictum nisi et dolor lobortis porta. Quisque semper euismod mauris non dapibus. Mauris placerat tincidunt justo. Vivamus molestie varius dolor at condimentum. Sed volutpat augue velit, a accumsan dui placerat vel. Aliquam sit amet nunc vel metus molestie tempor ac at lectus. Duis consectetur molestie accumsan. Duis ultrices sapien vitae nunc cursus, ac laoreet odio commodo.</p>
        </section>
    </main>
    <footer class="footer">
        <p class="title-left center-flex">Nous contacter</p>
        <ul class="list-left">
            <li>Notre téléphone : <a href="tel:0123456789">0123456789</a></li>
            <li>Notre mail : <a href="mailto:mail@example.com">mail@example.com</a></li>
        </ul>
        <p class="title-right center-flex">Pour en savoir plus</p>
        <ul class="list-right">
            <li>Notre <a href="politiqueconf.html">Politique de confidentialité</a></li>
            <li>Nos partenaires : <a href="#">Liste des partenaires</a></li>
        </ul>
    </footer>
    <script src="JS/side-nav.js"></script>
</body>
</html>