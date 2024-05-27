// let buses = document.querySelector(".buses")
// for (let i = 0; i < 10; i++){
//     let div = document.createElement("div")
//     let div2 = document.createElement("div")
//     let div3 = document.createElement("div")
//     let div4 = document.createElement("div")
//     let div5 =document.createElement("div")
//     let img = document.createElement("img")
//     img.src = "H3.jpg"
//     img.style = "width: 200px; height: 150px;border-radius:10px 0px 0px 10px"
//     div3.appendChild(div4)
//     div3.appendChild(div5)
//     div2.appendChild(img)
//     div.appendChild(div2)
//     div.appendChild(div3)
//     div.className = "one"
//     buses.appendChild(div)
// }

function redirectToPage(event) {
    event.preventDefault();
    window.location.href = "destinations.html";
}

