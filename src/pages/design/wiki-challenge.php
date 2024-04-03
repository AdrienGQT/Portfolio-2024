<?php include '../../html/head.php'; ?>
<?php include '../../html/header.php'; ?>
<div class="content-wrapper content-wrapper--article">

    <div class="article-title">
        <h3 class="article-title__main">WikiChallenge</h3>
        <p class="article-title__second">WikiChallenge is an online game based on the Wikipedia Challenge concept that
            we are currently building with my friend and classmate <a href="https://valentin-lelievre.com/"
                target="_blank">Valentin Lelievre</a>.</p>
    </div>

    <ol class="article-sections-list">

        <div class="article-media">
            <img class="article-media__image" src="/client-data/images/overviews/wiki-challenge.webp"
                alt="Thumbnail of the WikiChallenge article.">
        </div>

        <li class="article-section">
            <h5 class="article-section__title">Context</h5>
            <p class="article-section__para">The Wikipedia Challenge concept is easy to understand: the player has to
                travel through Wikipedia from a page A to another page B using only hyperlinks.
                <br>
                This kind of game already exists online but only with a single-player mode. So, when we start this
                project in 2023, our goal is to create a Wikipedia Challenge that is playable in multiplayer.
                <br>
                For now, the game is only available on mobile.
            </p>
        </li>

        <li class="article-section">
            <h5 class="article-section__title">Identity and design system</h5>
            <p class="article-section__para">We wanted the identity to be playful and outstanding. I chose purple as
                main color because it gives a lot of energy and it's not a common color in web design. I choose all the
                components to have strongly rounded corners to have a smooth and sweet interface.
            </p>
        </li>

        <div class="article-media">
            <div class="article-media__alt-container">
                <p>identity elements</p>
            </div>
            <img class="article-media__image"
                src="\client-data\images\pages-content\wiki-challenge\wiki-challenge-identity.webp"
                alt="Identity elements">
        </div>

        <div class="article-media__double">
            <div class="article-media">
                <div class="article-media__alt-container">
                    <p>Switch</p>
                </div>
                <video autoplay muted loop class="article-media__video"
                    src="\client-data\images\pages-content\wiki-challenge\switch.webm"
                    alt="Video of the landing page"></video>
            </div>

            <div class="article-media">
                <div class="article-media__alt-container">
                    <p>Loader</p>
                </div>
                <video autoplay muted loop class="article-media__video"
                    src="\client-data\images\pages-content\wiki-challenge\loader.webm"
                    alt="Video of the landing page"></video>
            </div>

        </div>

        <li class="article-section">
            <h5 class="article-section__title">Avatars</h5>
            <p class="article-section__para">Our goal was to implements multiple avatars that players can choose to play
                multi-players. We were inspired by the work of the Onrizon Social Games studio on Gartic Phone. We aim
                for the avatars to be more customizable in the future.
            </p>
        </li>

        <div class="article-media">
            <div class="article-media__alt-container">
                <p>Every avatars</p>
            </div>
            <div class="article-media__image">
                <div class="avatars-animation">
                    <div class="avatars-animation__row avatars-animation__row--down">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column01.svg" alt="">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column01.svg" alt="">
                    </div>

                    <div class="avatars-animation__row avatars-animation__row--up">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column02.svg" alt="">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column02.svg" alt="">
                    </div>

                    <div class="avatars-animation__row avatars-animation__row--down">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column03.svg" alt="">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column03.svg" alt="">
                    </div>

                    <div class="avatars-animation__row avatars-animation__row--up">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column04.svg" alt="">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column04.svg" alt="">
                    </div>

                    <div class="avatars-animation__row avatars-animation__row--down">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column05.svg" alt="">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column05.svg" alt="">
                    </div>

                    <div class="avatars-animation__row avatars-animation__row--up">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column06.svg" alt="">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column06.svg" alt="">
                    </div>

                    <div class="avatars-animation__row avatars-animation__row--down">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column03.svg" alt="">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column03.svg" alt="">
                    </div>

                    <div class="avatars-animation__row avatars-animation__row--up">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column04.svg" alt="">
                        <img class="avatars-animation__subrow"
                            src="\client-data\images\pages-content\wiki-challenge\avatars-rows\column04.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <li class="article-section">
            <h5 class="article-section__title">In game UI</h5>
            <p class="article-section__para">It was a good challenge to design the in-game user interface. The interface
                has to be visible and accessible without disturbing the player during the game. These constraints
                resulted in a drop-down menu. The title of the target page is always displayed on top of the screen, but
                if needed, the user can open the menu to interact or see other information such as the elapsed time.
            </p>
        </li>

        <div class="article-media__triple">
            <div class="article-media article-media--vertical">
                <div class="article-media__alt-container">
                    <p>Navigation in home pages</p>
                </div>
                <video autoplay muted loop class="article-media__video article-media__video--vertical"
                    src="\client-data\images\pages-content\wiki-challenge\home-screen.webm"
                    alt="Navigation in home pages"></video>
            </div>

            <div class="article-media article-media--vertical">
                <div class="article-media__alt-container">
                    <p>In game UI</p>
                </div>
                <video autoplay muted loop class="article-media__video article-media__video--vertical"
                    src="\client-data\images\pages-content\wiki-challenge\game-ui.webm" alt="In game UI"></video>
            </div>

            <div class="article-media article-media--vertical">
                <div class="article-media__alt-container">
                    <p>Victory screen</p>
                </div>
                <video autoplay muted loop class="article-media__video article-media__video--vertical"
                    src="\client-data\images\pages-content\wiki-challenge\end-screen.webm" alt="Victory screen"></video>
            </div>

        </div>

        <div class="bottom-buttons">
        <a class="button button--c-2" href="/index.php">
            <div class="button__icon button__icon--home"></div>
            <p class="button__text">Return home</p>
        </a>
        <a class="button button--c-1" href="/src/pages/design/beatrice-gasquet.php">
            <div class="button__icon button__icon--arrow-next"></div>
            <p class="button__text">See next project</p>
        </a>
        </div>


    </ol>
</div>

<?php include '../../html/footer.php'; ?>