

window.onload = function () {

    // hide logo
    gsap.to('.preloader-logo', {
        scale: 0
    })

    // Controls the "blinder" elmnts
    gsap.to('.blinder', {
        scaleY: 0,
        stagger: .4,
        ease: 'power3.out'
    })
}