window.addEventListener("load", () => {
    const body = document.body;
    const services = document.querySelectorAll(".service");
    const modals = document.querySelectorAll(".modal");
    const btnClose = document.querySelectorAll(".modal-close");
  
    let activeModal;
  
    // Open modal
    services.forEach((service) => {
      service.addEventListener("click", () => {
        const target = service.getAttribute("data-target");
        activeModal = Array.from(modals).find((m) => m.id === target);
        if (activeModal) {
          activeModal.classList.add("active");
          body.classList.add("body-cover");
        }
      });
    });
  
    // Close modal
    Array.from(btnClose).forEach(element=>{
      element.addEventListener("click", () => {
        closeModal();
      });
    })
  
    // Click outside modal closes it
    window.addEventListener("click", (e) => {
      if (e.target === activeModal) {
        closeModal();
      }
    });
  
    function closeModal() {
      if (activeModal) {
        activeModal.classList.remove("active");
        body.classList.remove("body-cover");
      }
    }
  
    // Auto-scroll function
    // function startAutoScroll() {
    //   stopAutoScroll(); // clear if running
    //   autoScrollInterval = setInterval(() => {
    //     if (!scrollPaused) {
    //       modalContent.scrollTop += 1;
    //       if (modalContent.scrollTop + modalContent.clientHeight >= modalContent.scrollHeight) {
    //         modalContent.scrollTop = 0; // loop to top
    //       }
    //     }
    //   },30); // scroll speed
    // }
  
    // function stopAutoScroll() {
    //   clearInterval(autoScrollInterval);
    // }
  
    // // Pause on hover
    // console.log(modalContent.children)
    // Array.from(modalContent.children).forEach(element=>element.addEventListener("mouseenter", () => {
    //   scrollPaused = true;
    // }))
    // Array.from(modalContent.children).forEach(element=>element.addEventListener("mouseleave", () => {
    //     scrollPaused = false;
    //     // setTimeout(() => (scrollPaused = false), 7000); // pause for 10s
    //   }))

    var swiper = new Swiper(".mySwiper-web", {
      loop: true, // infinite loop
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      slidesPerView: 1,
      spaceBetween: 20,
      centeredSlides: true,
      
    });
  });
  