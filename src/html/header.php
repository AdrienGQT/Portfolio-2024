

<div class="header">
    <div class="header__left">
        <a href="/index.php">
            <h3 class="header__title">
                <span class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php')echo('anim-appear-header')?>">Adrien</span>
                <span class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php')echo('anim-appear-header')?>">Gasquet</span>
            </h3>
        </a>

    </div>
    <div class="header__right">
        <a class="button button--c-1 <?php if(basename($_SERVER['PHP_SELF'])=='index.php')echo('anim-appear-header')?>" href="/client-data/pdf/CV - Adrien Gasquet.pdf" download="CV - Adrien Gasquet" href="src/pages/design/liftoffrockets.php">
            <div class="button__icon button__icon--download"></div>
            <p class="button__text">CV</p>
        </a>
        <div class="language-selector <?php if(basename($_SERVER['PHP_SELF'])=='index.php')echo('anim-appear-header')?>">
            <div id="en" class="language-selector__item language-selector__item--on"
                onclick="languageSelectorClick('en')">
                <p>EN</p>
            </div>
            <div id="fr" class="language-selector__item language-selector__item--off"
                onclick="languageSelectorClick('fr')">
                <p>FR</p>
            </div>
            <script src="/src/js/languages.js"></script>
        </div>
    </div>
</div>