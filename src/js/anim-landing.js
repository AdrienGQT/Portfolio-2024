const appearTimeline = gsap.timeline();
gsap.registerPlugin(SplitText);

const onLoad = () => {
  setAppearTimeline();

  // setTimeout(() => {
  //   setTitleEffect()
  // }, 2000);
};

const setAppearTimeline = () => {
  appearTimeline
    .fromTo(
      ".anim-appear",
      {
        y: -15,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 0.3,
        delay: 0.3,
        stagger: {
          each: 0.1,
          from: 0,
        },
      }
    )
    .fromTo(
      ".anim-appear-header",
      {
        y: -15,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 0.3,
        stagger: 0.2,
      }
    );
};

const setTitleEffect = () => {
  const mainTitles = document.querySelectorAll(".main-title__text");
  mainTitles.forEach((element) => {
    const text = element.querySelector(".main-title__text-child");
    const textClone = text.cloneNode(true);
    element.appendChild(textClone);
    // gsap.set(text, { yPercent: -100 });
    // gsap.set(textClone, { yPercent: -100 });
    console.log(text);
  });
};

window.addEventListener("DOMContentLoaded", onLoad);
