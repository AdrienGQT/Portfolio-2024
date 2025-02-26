<?php include 'src/html/head.php'; ?>
<?php include 'src/html/header.php'; ?>

<div class="content-wrapper">

    <div id="transition"></div>

    <!-- Landing -->
    <div id="landingMain" class="landing">
        <div id="landingTop" class="landing__top">
            <h2 class="landing__text">
                <span id="landingHello" class="anim-appear">Hello,</span>
                <span id="landingName" class="anim-appear">I'm Adrien Gasquet</span>
            </h2>
            <div class="main-title">
                <div class="main-title__top">
                    <h1 id="landingJob1" class="main-title__text anim-appear">UI/UX Designer</h1>
                    <div id="landingBar" class="main-title__bar anim-appear"></div>
                </div>
                <div class="main-title__bottom">
                    <div id="landingPortrait" class="portrait anim-appear">
                        <div class="portrait__mask">
                            <img id="landingPhoto" class="portrait__img" src="client-data/images/portrait-2.webp"
                                alt="">

                        </div>
                    </div>
                    <div id="landingBarContainer" class="anim-appear main-title__bar"></div>
                    <h1 id="landingJob2" class="main-title__text anim-appear">& Web Developer</h1>
                </div>
            </div>
        </div>
        <div id="landingBottom" class="landing__bottom">
            <h2 id="landingPara1" class="landing__text anim-appear">UX/UI Designer in training at Gobelins Paris with a
                passion for crafting the best visual experiences.</h2>
            <h2 id="landingPara2" class="landing__text anim-appear">Because I love it when my projects come to life, I'm
                also learning web development, and I'm passionate about the latest web technologies.</h2>

        </div>
        <a class="button button--c-1 anim-appear" style="z-index: 100;" href="#selector-container">
            <div class="button__icon button__icon--arrow-down"></div>
            <p id="landingButton" class="button__text"></p>
            <div class="button__icon button__icon--arrow-down"></div>
        </a>
    </div>

    <div id="background"></div>
    <div id="background-loading"></div>

    <div id="selector-container" style="height:0px; width:100%">
        <div class="selector-container__divider" style="height:0px"></div>
    </div>

    <!-- Projects -->

    <ol id="project-list" class="project-list">

        <li class="project project--design">
            <h3 class="project__title">Gobelins anniversary Timeline</h3>
            <div class="project__bottom">
                <ul class="tags">
                    <li class="tags__item">
                        <p class="psmall">Web development</p>
                    </li>
                    <li class="tags__item">
                        <p class="psmall">UI/UX Design</p>
                    </li>
                </ul>
                <a href="src/pages/design/timeline-gobelins.php" aria-label="Button to WikiChallenge section">
                    <img class="project__overview" src="client-data/images/overviews/gobelins-timeline.webp" alt="">
                </a>
                <a class="button button--c-1" href="src/pages/design/timeline-gobelins.php">
                    <p class="button__text projectListButton"></p>
                    <div class="button__icon button__icon--double-arrow"></div>
                </a>
            </div>
        </li>

        <li class="project project--design">
            <h3 class="project__title">Gliss N Chill</h3>
            <div class="project__bottom">
                <ul class="tags">
                    <li class="tags__item">
                        <p class="psmall">Web development</p>
                    </li>
                </ul>
                <a href="src/pages/design/gliss-n-chill.php" aria-label="Button to WikiChallenge section">
                    <img class="project__overview" src="client-data/images/overviews/gliss-n-chill.webp" alt="">
                </a>
                <a class="button button--c-2" href="src/pages/design/gliss-n-chill.php">
                    <p class="button__text projectListButton"></p>
                    <div class="button__icon button__icon--double-arrow"></div>
                </a>
            </div>
        </li>

        <li class="project project--design">
            <h3 class="project__title">WikiChallenge</h3>
            <div class="project__bottom">
                <ul class="tags">
                    <li class="tags__item">
                        <p class="psmall">UI/UX Design</p>
                    </li>
                    <li class="tags__item">
                        <p class="psmall">Branding</p>
                    </li>
                    <li class="tags__item">
                        <p class="psmall">Illustration</p>
                    </li>
                </ul>
                <a href="src/pages/design/wiki-challenge.php" aria-label="Button to WikiChallenge section">
                    <img class="project__overview" src="client-data/images/overviews/wiki-challenge.webp" alt="">
                </a>
                <a class="button button--c-1" href="src/pages/design/wiki-challenge.php">
                    <p class="button__text projectListButton"></p>
                    <div class="button__icon button__icon--double-arrow"></div>
                </a>
            </div>
        </li>

        <li class="project project--design">
            <h3 id="beatriceGasquetTitle" class="project__title">Beatrice Gasquet's website redesign</h3>
            <div class="project__bottom">
                <ul class="tags">
                    <li class="tags__item">
                        <p class="psmall">UI/UX Design</p>
                    </li>
                    <li class="tags__item">
                        <p class="psmall">Branding</p>
                    </li>
                    <li class="tags__item">
                        <p class="psmall">Web development</p>
                    </li>
                </ul>
                <a href="src/pages/design/beatrice-gasquet.php"
                    aria-label="Button to Beatrice Gasquet's website section">
                    <img class="project__overview" src="client-data/images/overviews/beatrice-gasquet.webp" alt="">
                </a>
                <a class="button button--c-2" href="src/pages/design/beatrice-gasquet.php">
                    <p class="button__text projectListButton"></p>
                    <div class="button__icon button__icon--double-arrow"></div>
                </a>
            </div>
        </li>

        <li class="project project--design">
            <h3 id="liftoffrocketsTitle" class="project__title">Space news Instagram thread</h3>
            <div class="project__bottom">
                <ul class="tags">
                    <li class="tags__item">
                        <p class="psmall">Illustration</p>
                    </li>
                    <li class="tags__item">
                        <p class="psmall">Infographic design</p>
                    </li>
                </ul>
                <a href="src/pages/design/liftoffrockets.php" aria-label="Button to Liftoffrockets section">
                    <img class="project__overview" src="client-data/images/overviews/liftoffrockets.webp" alt="">
                </a>
                <a class="button button--c-1" href="src/pages/design/liftoffrockets.php">
                    <p class="button__text projectListButton"></p>
                    <div class="button__icon button__icon--double-arrow"></div>
                </a>
            </div>
        </li>

        <li class="project project--design">
            <h3 id="duoTitle" class="project__title">DUO - Fictional GUI</h3>
            <div class="project__bottom">
                <ul class="tags">
                    <li class="tags__item">
                        <p class="psmall">UI/UX Design</p>
                    </li>
                    <li class="tags__item">
                        <p class="psmall">Branding</p>
                    </li>
                </ul>
                <a href="src/pages/design/duo.php" aria-label="Button to DUO section">
                    <img class="project__overview" src="client-data/images/overviews/duo.webp" alt="">
                </a>
                <a class="button button--c-2" href="src/pages/design/duo.php">
                    <p class="button__text projectListButton"></p>
                    <div class="button__icon button__icon--double-arrow"></div>
                </a>
            </div>
        </li>

</div>

<?php include 'src/html/footer.php'; ?>