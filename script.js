const cursorDot = document.querySelector(".cursor-dot");
const cursorRing = document.querySelector(".cursor-ring");

if (cursorDot && cursorRing) {
  window.addEventListener("mousemove", (e) => {
    const x = e.clientX;
    const y = e.clientY;

    cursorDot.style.left = `${x}px`;
    cursorDot.style.top = `${y}px`;

    cursorRing.style.left = `${x}px`;
    cursorRing.style.top = `${y}px`;
  });

  const hoverItems = document.querySelectorAll("a, button, .btn, .link, .project-card, .hero-card, .nav-link");

  hoverItems.forEach((item) => {
    item.addEventListener("mouseenter", () => {
      cursorRing.classList.add("is-hover");
    });

    item.addEventListener("mouseleave", () => {
      cursorRing.classList.remove("is-hover");
    });
  });
}