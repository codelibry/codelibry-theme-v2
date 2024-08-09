jQuery(function ($) {
  window.lenis = new Lenis({
    smooth: true,
    direction: "vertical",
    gestureDirection: "vertical",
    mouseMultiplier: 1,
    smoothTouch: true,
    touchMultiplier: 2,
    infinite: false,
  });

  const raf = (time) => {
    window.lenis.raf(time);
    requestAnimationFrame(raf);
  };

  requestAnimationFrame(raf);
});
