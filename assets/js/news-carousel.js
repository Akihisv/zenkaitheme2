(function () {
  const track = document.querySelector(".news-carousel__track");
  const dotsContainer = document.querySelector(".news-carousel__dots");

  if (!track || !dotsContainer) {
    return; // pas de carrousel sur cette page
  }

  const items = Array.from(track.querySelectorAll(".news-carousel__item"));
  const dots = Array.from(
    dotsContainer.querySelectorAll(".news-carousel__dot"),
  );

  if (items.length === 0 || items.length !== dots.length) {
    // si le nombre de points ne correspond pas au nombre de
    // cartes (HTML pas synchronisé, ou contenu dynamique pas encore à jour),
    // on ne fait rien plutôt que de risquer un affichage incohérent.
    return;
  }

  const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
  ).matches;

  function setActiveDot(index) {
    dots.forEach((dot, i) => {
      const isActive = i === index;
      dot.classList.toggle("is-active", isActive);
      dot.setAttribute("aria-selected", isActive ? "true" : "false");
    });
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && entry.intersectionRatio > 0.6) {
          const index = items.indexOf(entry.target);
          if (index !== -1) {
            setActiveDot(index);
          }
        }
      });
    },
    { root: track, threshold: [0.6] },
  );

  items.forEach((item) => observer.observe(item));

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      items[index].scrollIntoView({
        behavior: prefersReducedMotion ? "auto" : "smooth",
        block: "nearest",
        inline: "center",
      });
    });
  });

  // État initial : première carte active au chargement
  setActiveDot(0);
})();
