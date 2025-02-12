<?php include '../../html/head.php'; ?>
<?php include '../../html/header.php'; ?>
<div class="content-wrapper content-wrapper--article">
    <div class="article-title">
        <h3 class="article-title__main">Gobelins Timeline</h3>
        <p class="article-title__second">
            Gobelins Timeline is a project created for the early 2025 open days of Gobelins Paris.
            The goal was to design an original and interactive timeline showcasing the history of the school. (This project was co-created with Ahmed Kabbej, Dounia Bahzad, Yvan Telesinski and Inès Rahli)
        </p>
    </div>
    <ol class="article-sections-list">

        <div class="article-media">
            <div class="article-media__alt-container">
                <p>Landing page of the website</p>
            </div>
            <img class="article-media__image" src="/client-data/images/overviews/gobelins-timeline.webp"
                alt="Landing page of the website">
        </div>

        <li class="article-section">
            <h5 class="article-section__title">Experience</h5>
            <p class="article-section__para">
                This project provides a dynamic way to explore Gobelins' past.
                Using smooth animations and an engaging visual design, it brings key milestones of the school's history
                to life,
                making learning both interactive and enjoyable.
            </p>
        </li>

        <li class="article-section">
            <h5 class="article-section__title">Focal length illusion</h5>
            <p class="article-section__para">
                One challenging part of this project was creating a sense of depth using only CSS properties. To achieve
                this, we chose to simulate a camera’s behavior by mimicking a focal length. For this effect to work,
                each element in the scene needed a precise focus point relative to the 'camera.' Then, by calculating
                the element’s offset from its focus point, we applied a variable blur filter along with changes in
                opacity, making it appear and disappear smoothly. Check out the <a
                    href="https://github.com/AdrienGQT/timeline-gobelins" target="_blank">Github repo</a> to learn more
                about how I
                built this effect.
            </p>
        </li>

        <div class="article-media">
                <div class="article-media__alt-container">
                    <p>Demonstration</p>
                </div>
                <video autoplay muted loop class="article-media__video"
                    src="\client-data\images\pages-content\timeline-gobelins\demo.webm"
                    alt="Video of Gobelins Timeline"></video>
            </div>

        <li class="article-section">
            <h5 class="article-section__title">Handcrafted shapes</h5>
            <p class="article-section__para">
                For this project, we designed several custom shapes and gradients inspired by GSAP’s branding. We used
                Figma as our vector graphics editor, which made it easy to experiment with different shapes and colors
                until we found the best ones.
            </p>
        </li>

        <div class="article-media">
            <div class="article-media__alt-container">
                <p>SVG Shapes</p>
            </div>
            <img class="article-media__image" src="/client-data/images/pages-content/timeline-gobelins/shapes.webp"
                alt="SVG Shapes">
        </div>

        <li class="article-section">
            <h5 class="article-section__title">Technologies Used</h5>
            <p class="article-section__para">
                The project was built using TypeScript for structured development,
                GSAP for fluid animations, SCSS for styling, and HTML for the page structure.
            </p>
        </li>

        <li class="article-section">
            <h5 class="article-section__title">Try it now</h5>
            <p class="article-section__para">
                Our project is available online ! You can try it right now by clicking <a
                href="https://timeline-gobelins.vercel.app/" target="_blank">here</a>
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