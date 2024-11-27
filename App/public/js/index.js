
import gsap from "https://cdn.skypack.dev/gsap"
import { ScrollTrigger } from "https://cdn.skypack.dev/gsap/ScrollTrigger";


gsap.registerPlugin(ScrollTrigger);

console.log(window.innerWidth)
gsap.to(".box",{
    x:`${window.outerWidth - 78}`,
    duration:3,
    scrollTrigger:{
        trigger:".box",
        start:"top center",
        end:"bottom bottom",
        markers:true,
        scrub: true
    }
})
