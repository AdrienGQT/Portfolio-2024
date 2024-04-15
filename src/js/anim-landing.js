const appearTimeline = gsap.timeline()

appearTimeline.fromTo('.anim-appear',{
    y:-15,
    opacity:0
},
{
    y:0,
    opacity:1,
    duration:0.3,
    delay:0.30,
    stagger:{
        each:0.1,
        from:0,
    }
}).fromTo('.anim-appear-header',{
    y:-15,
    opacity:0
},
{
    y:0,
    opacity:1,
    duration:0.3,
    stagger:0.2
})
