
var i = setInterval(function () {
  clearInterval(i);
  document.getElementById("loading").classList.add('hide');
}, 2000);


const scrollTop = window.scrollY || document.documentElement.scrollTop;

// jump scrolling page
function handleMouseWheel(event) {
  var Scrollbar = document.querySelector('.scrollbar');
  var elemento = Scrollbar.querySelector('a.active');
  var scrollTop = window.scrollY || document.documentElement.scrollTop;
  if(elemento !== null) {
    if (event.deltaY > 0 && currentSection.id != 'section5') {
      if (scrollTop <= 0) {
        elemento.nextElementSibling.click()
      }
    }else if (event.deltaY < 0){
      if(currentSection.id !== 'section1'){
        if (scrollTop <= 0) {
          elemento.previousElementSibling.click()
        }
      }
    }
  } 
}

function handleTouch(event) {
  var Scrollbar = document.querySelector('.scrollbar');
  var elemento = Scrollbar.querySelector('a.active');
   var currentY = event.touches[0].clientY;
   var deltaY = currentY - startY;
   var scrollTop = window.scrollY || document.documentElement.scrollTop;
   var windowHeight = window.innerHeight || document.documentElement.clientHeight;
   if(elemento !== null) {
    if (deltaY > 0) {
      if(currentSection.id !== 'section1'){
        if (scrollTop <= 0) {
          elemento.previousElementSibling.click()
        }
      }
     } else if (deltaY < windowHeight && currentSection.id != 'section5') {
       if (scrollTop >= 0) {
         elemento.nextElementSibling.click()
      }
    } 
  }
}

function scrollBarActivate() {
  let elementoPorDataTarget = document.querySelector('[data-target="' + currentSection.id + '"]');
  if(currentSection.id === 'section1'){
    let arrow = document.querySelector('#scrollArrow')
    arrow.style.display = 'none'
  }
  elementoPorDataTarget.classList.add('active')
}

const currentSection = document.querySelector('section')

if (currentSection && currentSection.classList.contains('index-pages')) {
  document.addEventListener('wheel', handleMouseWheel);
  document.addEventListener('touchmove', handleTouch);
  document.addEventListener('touchstart', function(event) {
    startY = event.touches[0].clientY;
  });
  document.addEventListener("DOMContentLoaded", function () {
    var startY;
    scrollBarActivate()
  })
}


// mobile menu
function sidebarToggle() {
  const list = document.getElementById('sidebar')
  // list.style.right = 0;
  list.classList.add('active')
  if(list.classList.contains('inactive')){
    list.classList.remove('inactive')
  }
}

function backsidebar() {
  const list = document.getElementById('sidebar')
  // list.style.right = '-280px';
  list.classList.add('inactive')
  list.classList.remove('active')
}





// changing style of navbar on scroll
$(document).ready(function () {
  

  $(window).scroll(function () {
    var scrollHeight = $(this).scrollTop();

    // Check if scroll height is 666 or more
    if (scrollHeight >= 666) {
      // Add a class to the navbar to apply styles
      $(".main-navbar").addClass("scroll-666");
    } else {
      // Remove the class if scroll height is less than 666
      $(".main-navbar").removeClass("scroll-666");
    }

    // Check if scroll height is 1533 or more
    if (scrollHeight >= 1533) {
      // Add a class to the navbar to apply styles
      $(".main-navbar").addClass("scroll-1533");
    } else {
      // Remove the class if scroll height is less than 1533
      $(".main-navbar").removeClass("scroll-1533");
    }
    // Check if scroll height is 2304 or more
    if (scrollHeight >= 2252) {
      // Add a class to the navbar to apply styles
      $(".main-navbar").addClass("scroll-2304");
    } else {
      // Remove the class if scroll height is less than 2304
      $(".main-navbar").removeClass("scroll-2304");
    }
    // Check if scroll height is 3240 or more
    if (scrollHeight >= 3240) {
      // Add a class to the navbar to apply styles
      $(".main-navbar").addClass("scroll-3240");
    } else {
      // Remove the class if scroll height is less than 2304
      $(".main-navbar").removeClass("scroll-3240");
    }
  });
});
// nav toggle
$(document).ready(function () {
  checkScreenWidth();

  $(window).resize(function () {
    checkScreenWidth();
  });

  // Button click to toggle navigation
  $(".icon-active").click(function () {
    $("#nav-routes").slideToggle();
    $(".icon-active, .icon-inactive").toggleClass("hidden");
  });

  function checkScreenWidth() {
    var screenWidth = $(window).width();

    if (screenWidth > 984) {
      $("#nav-routes").show();
    } else {
      $("#nav-routes").hide();
    }
  }
});

//custom scroller behaviour style
// $(document).ready(function () {
//   var buffer = 10; // Adjust this buffer value as needed

//   $(document).scroll(function () {
//     var scrollPosition = $(document).scrollTop();

//     $(".section").each(function () {
//       var target = $(this);
//       var sectionId = target.attr("id");
//       var dot = $('.dot[data-target="' + sectionId + '"]');

//       // Calculate the top and bottom boundaries with the buffer
//       var topBoundary = target.offset().top - buffer;
//       var bottomBoundary = topBoundary + target.outerHeight() + buffer;

//       if (scrollPosition >= topBoundary && scrollPosition < bottomBoundary) {
//         dot.addClass("active");
//       } else {
//         dot.removeClass("active");
//       }
//     });
//   });

//   $(".dot").click(function () {
//     var targetSection = $(this).data("target");
//     var targetOffset = $("#" + targetSection).offset().top;

//     $("html, body").animate(
//       {
//         scrollTop: targetOffset,
//       },
//       500
//     );
//   });
// });

// Porgress bar on Carousel Routes (Document From Splide) *this according to the Request*
document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide(".splide", {
    type: "fade", // Use fade effect
    loop: true,
    pagination: false,
    arrows: false,
    autoplay: true,
    interval: 3000,
  });

  splide.mount();

  var progressContainer = document.querySelector(".my-slider-progress");
  var paginationButtons = document.querySelectorAll(
    ".custom-pagination button"
  );

  if (progressContainer) {
    splide.on("mounted move", function () {
      var end = splide.length;
      var rate = Math.min((splide.index + 1) / end, 1);
      progressContainer.style.width = String(70 * rate) + "%";
    });
  } else {
    console.error("Progress container element not found");
  }

  paginationButtons.forEach(function (button, index) {
    button.addEventListener("click", function () {
      splide.go(index);

      updateImageStyles(index);
    });
  });

  updateImageStyles(0);

  splide.on("moved", function () {
    var activeIndex = splide.index;
    setActivePaginationButton(activeIndex);
  });

  function setActivePaginationButton(index) {
    paginationButtons.forEach(function (button, buttonIndex) {
      button.classList.toggle("active", buttonIndex === index);
      button.classList.toggle("business-inactive-icon", buttonIndex !== index);
    });

    updateImageStyles(index);
  }

  function updateImageStyles(index) {
    var images = document.querySelectorAll(".custom-pagination button img");
    var borderIcon = document.getElementById("business-icon-index");
    images.forEach(function (image, imageIndex) {
      image.classList.toggle("active", imageIndex === index);
    });
    // borderIcon.classList.toggle(
    //   "active",
    //   images[index].classList.contains("active")
    // );
  }
});
// End of splide Slider Functions
// Gsap animations
// Your GSAP animation function
function animateOpacity() {
  const elementToAnimate = $("#intro-frame");
  const elementToAnimateV2 = $("#intro-frame-v2");

  gsap.to([elementToAnimate, elementToAnimateV2], {
    opacity: 1,
    duration: 0.4,
    delay: 0.5,
    ease: "power4.inout",
    onComplete: function () {
      gsap.to([elementToAnimate, elementToAnimateV2], {
        y: "-80",
        delay: 1,
      });
    },
  });
}

gsap.to([".fram-intro-text", "#fram-button"], {
  opacity: 1,
  y: "-50",
  duration: 0.4,
  delay: 2,
  ease: "power4.inout",
});
// third-frame

gsap.to(".third-frame", {
  x: "640",
  duration: 0.4,
  delay: 1.5,
  ease: "power4.inout",
});
// icons freams
//first icon
gsap.to("#top-left-rectangle", {
  y: "-300",
  x: "-140",
  duration: 0.4,
  delay: 1.4,
  ease: "power4.inout",
  opacity: 1,
  onComplete: function () {
    gsap.to("#top-left-rectangle", {
      filter: "blur(5px)",
      repeat: -1,
      yoyo: true,
      duration: 4,
      delay: 5,
      ease: "power4.inOut",
    });
    gsap.to("#top-left-rectangle", {
      y: "+=7",
      repeat: -1,
      yoyo: true,
      duration: 4,
      ease: "power2.inOut",
    });
  },
});

gsap.to("#icon-fram_1", {
  y: "-160",
  x: "-180",
  duration: 0.4,
  delay: 1.4,
  ease: "power4.inout",
  opacity: 1,
  onComplete: function () {
    gsap.to("#icon-fram_1", {
      filter: "blur(5px)",
      repeat: -1,
      yoyo: true,
      duration: 4,
      delay: 1.6,
      ease: "power4.inOut",
    });
    gsap.to("#icon-fram_1", {
      y: "+=7",
      repeat: -1,
      yoyo: true,
      duration: 4,
      ease: "power1.inOut",
    });
  },
});
gsap.to("#icon-fram_2", {
  y: "-210",
  x: "180",
  duration: 0.4,
  delay: 1.4,
  ease: "power4.inout",
  opacity: 1,
  onComplete: function () {
    gsap.to("#icon-fram_2", {
      filter: "blur(5px)",
      repeat: -1,
      yoyo: true,
      duration: 4,
      delay: 1.6,
      ease: "power4.inOut",
    });
    gsap.to("#icon-fram_2", {
      y: "+=7",
      repeat: -1,
      yoyo: true,
      duration: 4,
      ease: "power1.inOut",
    });
  },
});
gsap.to("#icon-fram_3", {
  y: "-80",
  x: "190",
  duration: 0.4,
  delay: 1.4,
  ease: "power4.inout",
  opacity: 1,
  onComplete: function () {
    gsap.to("#icon-fram_3", {
      filter: "blur(5px)",
      repeat: -1,
      yoyo: true,
      duration: 4,
      delay: 5,
      ease: "power4.inOut",
    });
    gsap.to("#icon-fram_3", {
      y: "+=7",
      repeat: -1,
      yoyo: true,
      duration: 4,
      ease: "power2.inOut",
    });
  },
});
gsap.to("#plane-frame", {
  x: "-300",
  opacity: 1,
  duration: 1,
  ease: "power2.inOut",
});
gsap.to("#plane-frame", {
  x: "-300",
  transform: "rotate(90deg)",
  duration: 1,
  ease: "power4.in",
  delay: 1,
});

//svg Gsap animations

$(document).ready(function () {
  // Select the SVG path
  var svgPath = $("#myPath path");

  // Calculate the total length of the path
  var pathLength = svgPath[0].getTotalLength();

  // Set initial styles for the path
  svgPath.css({
    "stroke-dasharray": pathLength,
    "stroke-dashoffset": pathLength,
  });

  // Create a master timeline
  var masterTimeline = gsap.timeline({
    repeat: -1,
  });

  // Use GSAP to animate the drawing of the path
  masterTimeline.to(svgPath, {
    duration: 4.8, // Adjust the duration as needed
    opacity: 1,
    strokeDasharray: 10,
    "stroke-dashoffset": -1600, // Animate to 0 to reveal the entire path
    ease: "linear", // Use linear easing for a consistent drawing effect
    repeat: -1,
    repeatDelay: 2.5,
  });

  // Add leading plans animation to the master timeline
  masterTimeline.to(
    ".leading-animation",
    {
      y: "120",
      ease: "Power1.inOut",
      transform: "rotate(360deg)",
    },
    0 // Start at the same time as the SVG path animation
  );

  masterTimeline.to(
    ".leading-animation",
    {
      y: "120",
      duration: 3.8,
      x: "-780",
    },
    "+=0.1"
  );

  masterTimeline.to(
    ".leading-animation",
    {
      y: "200",
      duration: 2,
      x: "-780",
      transform: "rotate(270deg)",
      opacity: 0,
    },
    "+=0.1"
  );

  //plan left
  masterTimeline.to(
    ".leading-animation-left",
    {
      y: "120",
      ease: "Power1.inOut",
      transform: "rotate(185deg)",
    },
    0 // Start at the same time as the SVG path animation
  );
  masterTimeline.to(
    ".leading-animation-left",
    {
      y: "120",
      duration: 3.8,
      x: "780",
    },
    "+=0.1"
  );

  masterTimeline.to(
    ".leading-animation-left",
    {
      y: "200",
      duration: 2,
      x: "780",
      transform: "rotate(264deg)",
      opacity: 0,
    },
    "+=0.1"
  );
});

//leading-animation-left
// Call the animation function when the document is ready
$(document).ready(function () {
  animateBackgroundColorSequence();
});

$(document).ready(function () {
  animateOpacity();
});

//toggles
$(document).ready(function () {
  $("tr").click(function () {
    $(".booking-inputs").toggle();
  });
});



