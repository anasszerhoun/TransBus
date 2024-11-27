import gsap from "https://cdn.skypack.dev/gsap";
import { ScrollTrigger } from "https://cdn.skypack.dev/gsap/ScrollTrigger";
import $ from "https://cdn.skypack.dev/jquery";

function redirectToPage(event) {
    event.preventDefault();
    window.location.href = "ajout";
}

// let myButton = document.getElementById("Rechercher");
// console.log(myButton);
// myButton.onclick = function (){
//     let myDate = document.getElementById("dateDepart");
//     console.log(myDate)
// }



gsap.set(".form-control, .btn", {
    opacity: 0,
});

let tl = gsap.timeline();
let tl2 = gsap.timeline();
let tl3 = gsap.timeline();
let tl4 = gsap.timeline();
let tl5 = gsap.timeline();

gsap.set(".nav-item", {
    opacity: 0,
    y: 50,
});
gsap.set(".navbar-brand", {
    opacity: 0,
    y: 50,
});
// gsap.set(".center", {
//     opacity: 0,
//     x: -200,
//     scale: 0.5,
// });

tl.to(".navbar-brand", {
    opacity: 1,
    y: 0,
    duration: 0.5,
}).to(".nav-item", {
    opacity: 1,
    y: 0,
    duration: 2,
    stagger: {
        amount: 1,
    },
});

// tl2.to(".center", {
//     opacity: 1,
//     x: 0,
//     scale: 1,
//     duration: 1,
// })
    tl2.to(".form-control", {
        opacity: 1,
        y: 0,
        duration: 0.5,
        stagger: {
            amount: 1,
        },
    })
    .to(".btn", {
        opacity: 1,
        y: 0,
        duration: 0.5,
    });

gsap.to(".fas",{
    y:-20,
    duration:1.5,
    yoyo:true,
    repeat:-1
})
gsap.fromTo(".fas",{
    y:-10,
    duration:2,
},{
    y:10,
    duration:2,
    yoyo:true,
    repeat:-1
})
gsap.to(".fas", {
    y: 10,
    duration: 1,
    stagger: {
        amount: 1,
        yoyo: true,
        repeat: -1,
    },
});

gsap.set("#form , #data", {
    opacity: 0,
});
// gsap.set(".formulaire , .buses", {
// //     opacity: 0,
// //     scale: 0.3,
// // });
// tl3.to(".formulaire", {
//     opacity: 1,
//     duration: 0.8,
//     scale: 1,
//     ease: "elastic.in",
// })
tl3.to("#form", {
    opacity: 1,
    duration: 0.8,
    stagger: {
        amount: 1.5,
    },
});
tl4.to(".buses", {
    opacity: 1,
    duration: 0.8,
    scale: 1,
}).to("#data", {
    opacity: 1,
    duration: 0.8,
    stagger: {
        amount: 1.2,
    },
});

gsap.set(".first span img", {
    x: -200,
    scale: 0.3,
});
tl5.to(".first span img", {
    x: 70,
    duration: 1,
    scale: 1,
});

gsap.set(".propos", {
    opacity: 0,
    scale: 1.2,
});
gsap.to(".propos", {
    opacity: 1,
    duration: 3,
    scale: 1,
});
gsap.set(".title", {
    x: -300,
});
gsap.to(".title", {
    x: 0,
    duration: 2,
});

let myBtn = document.getElementById("next");
let myBtn2 = document.getElementById("next2");
let myFirstData = document.querySelectorAll(".first-info");
let mySecondData = document.querySelectorAll(".second-info");
let seats = document.querySelectorAll(".set");
let myForm = document.getElementById("formulaire");
let myTitle = document.querySelector(".form h3");
let myBtnPrevious = document.getElementById("previous");
let myBtnPrevious2 = document.getElementById("previous2");
let mySecondProg = document.getElementById("center");
let myThirdProg = document.getElementById("right");
let myFirstProg = document.getElementById("left");
let myThirdData = document.querySelectorAll(".third-info");

myBtn.onclick = function () {
    myFirstData.forEach((element) => (element.style.display = "none"));
    mySecondData.forEach((element) => (element.style.display = "block"));

    window.scrollTo(0, 0);

    // mySecondData.forEach((element) => {
    //     if (element.classList.contains("cd")) {
    //         element.style.display = "flex";
    //     } else {
    //         element.style.display = "block";
    //     }
    // });

    myFirstProg.classList.add("noActive");
    myFirstProg.classList.remove("active");
    mySecondProg.classList.add("active");
    mySecondProg.classList.remove("noActive");

    myForm.style.height = "160vh";
    myTitle.style.width = "60%";
    myTitle.textContent = "";
};

myBtnPrevious.onclick = function () {
    myFirstData.forEach((element) => (element.style.display = "block"));
    mySecondData.forEach((element) => (element.style.display = "none"));
    window.scrollTo(0, 0);
    myFirstProg.classList.add("active");
    myFirstProg.classList.remove("noActive");
    mySecondProg.classList.add("noActive");
    mySecondProg.classList.remove("active");
    myForm.style.height = "120vh";
    myTitle.textContent = "Personal Data ";
    myTitle.style.width = "60%";
};

myBtn2.onclick = function () {
    let i = 0;
    seats.forEach(function (element) {
        if (element.classList.contains("activeSet")) {
            i++;
        }
    });
    if (i === 0) {
        let myDiv = document.createElement("div")
        let text = document.createTextNode("Please select a seat!")
        if(document.querySelector(".redMessage")===null){
            myDiv.classList.add("redMessage")
            myDiv.appendChild(text);
            document.querySelector(".second-info").appendChild(myDiv)
        }
    }
    else {
        if(document.querySelector(".redMessage")!==null){
            document.querySelector(".redMessage").remove()
        }
        mySecondData.forEach((element) => (element.style.display = "none"));
        window.scrollTo(0, 0);

        myThirdData.forEach((element) => {
            if (element.classList.contains("cd")) {
                element.style.display = "flex";
            } else {
                element.style.display = "block";
            }
        });

        let myText = document.getElementById("seatNumber").textContent
        let numbers = myText.match(/\d+/g);
        console.log(numbers[0])
        document.getElementById("seat").value=numbers[0];

        myTitle.style.width = "60%";
        myTitle.style.display = "block";
        myTitle.textContent = "Payment Data:";

        myForm.style.height = "100vh";
        myFirstProg.classList.add("noActive");
        myFirstProg.classList.remove("active");
        mySecondProg.classList.add("noActive");
        mySecondProg.classList.remove("active");
        myThirdProg.classList.remove("noActive");
        myThirdProg.classList.add("active");
    }
};

myBtnPrevious2.onclick = function () {
    myThirdData.forEach((element) => (element.style.display = "none"));
    mySecondData.forEach((element) => (element.style.display = "block"));
    window.scrollTo(0, 0);
    document.querySelector(".bus").style.display = "none";
    myForm.style.height = "160vh";
    myTitle.style.display = "block";
    myTitle.style.width = "60%";
    myTitle.textContent = "";
    myFirstProg.classList.add("noActive");
    myFirstProg.classList.remove("active");
    mySecondProg.classList.add("active");
    mySecondProg.classList.remove("noActive");
    myThirdProg.classList.remove("active");
    myThirdProg.classList.add("noActive");
    mySecondData.forEach((element) => {
        if (element.classList.contains("cd")) {
            element.style.display = "flex";
        } else {
            element.style.display = "block";
        }
    });
};

//   gsap.registerPlugin(ScrollTrigger);
//   gsap.to(".center", {
//     scrollTrigger: {
//       trigger: ".center",
//       start: "top center",
//       end: "bottom 100px",
//       scrub: true,
//       markers: true
//     },
//     x: 500,
//     rotation: 360,
//     duration: 3
//   });
