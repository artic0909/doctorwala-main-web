const scrollingWrapper = document.querySelector(".scrolling-wrapper");
const scrollingWrapper2 = document.querySelector(".scrolling-wrapper2");
const scrollingWrapper3 = document.querySelector(".scrolling-wrapper3");


const btnPrev = document.querySelector(".btn-prev");
const btnPrev2 = document.querySelector(".btn-prev2");
const btnPrev3 = document.querySelector(".btn-prev3");


const btnNext = document.querySelector(".btn-next");
const btnNext2 = document.querySelector(".btn-next2");
const btnNext3 = document.querySelector(".btn-next3");




btnNext.addEventListener("click", () => {
  scrollingWrapper.scrollBy({ left: 300, behavior: "smooth" });
});

btnPrev.addEventListener("click", () => {
  scrollingWrapper.scrollBy({ left: -300, behavior: "smooth" });
});





btnNext2.addEventListener("click", () => {
  scrollingWrapper2.scrollBy({ left: 300, behavior: "smooth" });
});

btnPrev2.addEventListener("click", () => {
  scrollingWrapper2.scrollBy({ left: -300, behavior: "smooth" });
});





btnNext3.addEventListener("click", () => {
  scrollingWrapper3.scrollBy({ left: 300, behavior: "smooth" });
});

btnPrev3.addEventListener("click", () => {
  scrollingWrapper3.scrollBy({ left: -300, behavior: "smooth" });
});
