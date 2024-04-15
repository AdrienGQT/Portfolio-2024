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
            <h2 id="landingPara1" class="landing__text anim-appear">UX/UI Designer in training at Gobelins Paris with a passion for crafting the best visual experiences.</h2>
            <h2 id="landingPara2" class="landing__text anim-appear">Because I love it when my projects come to life, I'm also learning web development, and I'm passionate about the latest web technologies.</h2>

        </div>
        <a class="button button--c-1 anim-appear" style="z-index: 100;"
            href="#selector-container">
            <div class="button__icon button__icon--arrow-down"></div>
            <p id="landingButton" class="button__text"></p>
            <div class="button__icon button__icon--arrow-down"></div>
        </a>
    </div>

    <div id="background"></div>
    <div id="background-loading"></div>



    <!-- <div id="selector-container" class="selector-container anim-appear-up">
        <div class="selector-container__top">
            <p id="selectorTop" class="selector-container__choose">Choose category</p>
        </div>
        <div class="selector-container__bottom">
            <div class="selector-container__divider"></div>
            <div id="selector" class="selector">
                <div id="selector-design" class="selector__item selector__item--on" onclick="selectorClick('design')">
                    <p id="selectorDesign">Design</p>
                </div>
                <div id="selector-photography" class="selector__item selector__item--off"
                    onclick="selectorClick('photography')">
                    <p id="selectorPhoto">Photography</p>
                </div>
            </div>
            <div class="selector-container__divider"></div>
        </div>
    </div> -->

    <div id="selector-container" style="height:0px; width:100%"><div class="selector-container__divider" style="height:0px"></div></div>

    <!-- Projects -->

    <ol id="project-list" class="project-list">

        <li class="project project--design">
            <h3 class="project__title">WikiChallenge</h3>
            <div class="project__bottom">
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
                <a href="src/pages/design/beatrice-gasquet.php" aria-label="Button to Beatrice Gasquet's website section">
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
                <a href="src/pages/design/duo.php" aria-label="Button to DUO section">
                    <img class="project__overview" src="client-data/images/overviews/duo.webp" alt="">
                </a>
                <a class="button button--c-2" href="src/pages/design/duo.php">
                    <p class="button__text projectListButton"></p>
                    <div class="button__icon button__icon--double-arrow"></div>
                </a>
            </div>
        </li>

        <!-- PHOTOS -->

        <h3 id="warning" class="warning">⚠️ This part of the website is under construction, some elements may not be
            fully functional ! ⚠️</h3>

        <li class="project project--photo">
            <h3 id="casahTitle" class="project__title">Shooting CASAH events</h3>
            <div class="project__bottom">
                <a href="src/pages/photo/casah.php" aria-label="Button to CASAH section">
                    <img class="project__overview" src="client-data/images/overviews/casah.webp" alt="">
                </a>
                <a class="button button--c-1" href="src/pages/photo/casah.php">
                    <p class="button__text projectListButton"></p>
                    <div class="button__icon button__icon--double-arrow"></div>
                </a>
            </div>
        </li>
    </ol>

</div>

<?php include 'src/html/footer.php'; ?>