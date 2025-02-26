<?php include '../../html/head.php'; ?>
<?php include '../../html/header.php'; ?>
<div class="content-wrapper content-wrapper--article">
    <div class="article-title">
        <h3 class="article-title__main">Gliss N Chill</h3>
        <p class="article-title__second">
            Gliss'N'Chill is an interactive and immersive experiment developed by Ahmed Kabbej and me, with design
            contributions from Nathan Limbos, Baptiste Gaudron, and Sofiane Hedaji.
        </p>
    </div>
    <ol class="article-sections-list">

        <li class="article-section">
            <h5 class="article-section__title">Project Background</h5>
            <p class="article-section__para">
                Gliss'N'Chill was developed during a workshop titled "Movement and Sounds." The project aimed to create
                an immersive experience that responds to movement and sound.
            </p>
        </li>

        <li class="article-section">
            <h5 class="article-section__title">Interactive Experience</h5>
            <p class="article-section__para">
                Gliss'N'Chill transports you to a serene forest environment surrounded by seven wisteria flowers. By
                moving your body, you can interact with these flowers to create music. Moving your right hand triggers
                different notes, with each flower representing a note in a Pentatonic scale, allowing you to compose
                unique melodies through movement.
            </p>
        </li>

        <div class="article-media">
            <div class="article-media__alt-container">
                <p>Demonstration</p>
            </div>
            <video autoplay muted loop class="article-media__video"
                src="\client-data\images\pages-content\gliss-n-chill\demo.webm"
                alt="Video of Gliss'N'Chill Demonstration"></video>
        </div>

        <li class="article-section">
            <h5 class="article-section__title">Movement Tracking</h5>
            <p class="article-section__para">
                To create this project, we needed to track the user's hand position in real-time. We achieved this using
                the user's webcam video feed combined with the <a
                    href="https://ai.google.dev/edge/mediapipe/solutions/guide?hl=en" target="_blank">Google MediaPipe
                    API</a>. This part of the code captures the position of the user's right hand in every frame.
            </p>
        </li>

        <li class="article-section">
            <h5 class="article-section__title">Physics Simulation</h5>
            <p class="article-section__para">
                Another crucial aspect of the development was the physics simulation of the flowers. We used the <a
                    href="https://brm.io/matter-js/" target="_blank">Matter.js library</a> to create and simulate
                complex objects with constraints and realistic physical behavior. This part of the code retrieves the
                user's hand position from the tracker, moves the circle, and calculates interactions with the flowers,
                considering speed and direction to create a sensation of gently touching the flowers.
            </p>
        </li>

        <li class="article-section">
            <h5 class="article-section__title">Note Generation</h5>
            <p class="article-section__para">
                We then needed to detect collisions between the circle and the flowers. When a flower is touched, a
                corresponding note is emitted, allowing the user to create melodies.
            </p>
        </li>

        <li class="article-section">
            <h5 class="article-section__title">Sound Environment</h5>
            <p class="article-section__para">
                To fully immerse the user, we created a complex sound environment. We mixed forest sounds, including
                wind and nature noises. Additionally, we composed a calm and relaxing musical background in the same
                scale as the flower notes to complement the user's melody.
            </p>
        </li>

        <li class="article-section">
            <h5 class="article-section__title">Try it now</h5>
            <p class="article-section__para">
                Our project is available online ! You can try it on desktop right now by clicking <a
                    href="https://glisse-n-chill.vercel.app/" target="_blank">here</a>
            </p>
        </li>

        <div class="bottom-buttons">
            <a class="button button--c-2" href="/index.php">
                <div class="button__icon button__icon--home"></div>
                <p class="button__text">Return home</p>
            </a>
            <a class="button button--c-1" href="/src/pages/design/wiki-challenge.php">
                <div class="button__icon button__icon--arrow-next"></div>
                <p class="button__text">See next project</p>
            </a>
        </div>

    </ol>
</div>
<?php include '../../html/footer.php'; ?>