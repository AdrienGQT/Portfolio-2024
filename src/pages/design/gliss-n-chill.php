<?php include '../../html/head.php'; ?>
<?php include '../../html/header.php'; ?>
<div class="content-wrapper content-wrapper--article">
    <div class="article-title">
        <h3 class="article-title__main">Gliss N Chill</h3>
        <p class="article-title__second">
            Gliss N Chill is an interactive and immersive experiment developed by Ahmed Kabbej and me, and designed by
            Nathan Limbos, Baptiste Gaudron, and Sofiane Hedaji.
        </p>
    </div>
    <ol class="article-sections-list">

        <li class="article-section">
            <h5 class="article-section__title">Context</h5>
            <p class="article-section__para">
                Gliss n Chill was developed during a workshop called "Movement and Sounds."
                The goal of this project was to create an immersive experience that reacts to movement and sound.
            </p>
        </li>

        <li class="article-section">
            <h5 class="article-section__title">Experience</h5>
            <p class="article-section__para">
                Gliss n Chill places you in a serene forest environment surrounded by seven wisteria flowers.
                Using body movement, you can interact with these flowers to create music.
                Moving your right hand triggers different notes, with each flower representing a note in a Pentatonic
                scale,
                allowing you to compose unique melodies through movement.
            </p>
        </li>

        <div class="article-media">
            <div class="article-media__alt-container">
                <p>Demonstration</p>
            </div>
            <video autoplay muted loop class="article-media__video"
                src="\client-data\images\pages-content\gliss-n-chill\demo.webm"
                alt="Video of Gobelins Timeline"></video>
        </div>

        <li class="article-section">
            <h5 class="article-section__title">Technologies Used</h5>
            <p class="article-section__para">
                The project is built using Mediapipe for real-time hand tracking, Matter.js for realistic physics
                simulation,
                and Vite for fast development. The structure and styling are handled with JavaScript, CSS, and HTML.
            </p>
        </li>

        <li class="article-section">
            <h5 class="article-section__title">Development Notes</h5>
            <p class="article-section__para">
                This project is designed as a real-time interactive experience, blending movement and sound to create
                a calm and engaging atmosphere. By combining hand tracking and physics simulation,
                it delivers an immersive musical experience.
            </p>
        </li>

    </ol>
</div>
<?php include '../../html/footer.php'; ?>