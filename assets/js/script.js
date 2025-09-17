const swiper1 = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      320: { slidesPerView: 2 },
      768: { slidesPerView: 3 },
      992: { slidesPerView: 4 },
      1200: { slidesPerView: 5 },
    },
  });

  const swiper2 = new Swiper(".blogSwiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".custom-next",
      prevEl: ".custom-prev",
    },
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 2 },
    },
  });

  
  const feedbackCarousel = new Swiper(".feedbackSwiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    autoplay:{
        delay:4000,
        disableOnInteraction:true
    },
    navigation: {
      nextEl: ".custom-next",
      prevEl: ".custom-prev",
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    breakpoints: {
      320: { slidesPerView: 1 },
      992: { slidesPerView: 2 },
    },
  });

  const postCarousel = new Swiper(".postSwiper", {
  slidesPerView: 4,
  spaceBetween: 10,
  autoplay:{
        delay:4000,
        disableOnInteraction:true
    },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: { slidesPerView: 1 },
    576: { slidesPerView: 2 },
    768: { slidesPerView: 3 },
    1200: { slidesPerView: 4 }
  }
});





// window.addEventListener("load",()=>{
//   const form = document.querySelector(".form-modal")
//   const btn = document.querySelectorAll(".custom-btn")
//   const body = document.querySelector("body")
//   const closeBtn = document.getElementById("formModalClose")


//   Array.from(btn).forEach( (element)=>{element.addEventListener('click',(event)=>{
//     form.classList.add("active")
//     body.style.overflow="hidden"
//   })

//   closeBtn.addEventListener("click", (event)=>{
//     form.classList.remove("active")
//     body.style.overflow="scroll"
//   })

// })}
// )


window.addEventListener("load", () => {
    const form = document.querySelector(".form-modal");
    const btn = document.querySelectorAll(".form-btn");
    const body = document.querySelector("body");
    const closeBtn = document.getElementById("formModalClose");

    Array.from(btn).forEach((element) => {
        element.addEventListener('click', (event) => {
            form.classList.add("active");
            body.style.overflow = "hidden";
        });
        
    });

    closeBtn.addEventListener("click", (event) => {
        form.classList.remove("active");
        body.style.overflow = "scroll";
    });
});



window.addEventListener("load",()=>{

  const range = document.getElementById('amountRange');
  const shortValue = document.getElementById('shortValue');
  const fmtIN = new Intl.NumberFormat('en-IN');

  function toShort(n) {
    if (n >= 10000000) return (n/10000000).toFixed(1).replace(/\.0$/,'') + ' Cr';
    if (n >= 100000)  return (n/100000).toFixed(1).replace(/\.0$/,'') + ' Lakh';
    if (n >= 1000)    return (n/1000).toFixed(0) + 'K';
    return String(n);
  }
  function updateDisplay(val) {
    shortValue.textContent = toShort(val);
  }
  range.addEventListener('input', e => updateDisplay(e.target.value));
  updateDisplay(range.value);
})

