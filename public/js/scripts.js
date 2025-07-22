/** Shopify CDN: Minification failed

Line 50:2 Transforming const to the configured target environment ("es5") is not supported yet
Line 94:4 Transforming const to the configured target environment ("es5") is not supported yet

**/
(function() {
  var __sections__ = {};
  (function() {
    for(var i = 0, s = document.getElementById('sections-script').getAttribute('data-sections').split(','); i < s.length; i++)
      __sections__[s[i]] = true;
  })();
  (function() {
  if (!__sections__["product-recommendations"]) return;
  try {

var loadProductRecommendationsIntoSection = function() {
  // Look for an element with class 'product-recommendations'
  var productRecommendationsSection = document.querySelector(".product-recommendations");
  if (productRecommendationsSection === null) { return; }
  // Create request and submit it using Ajax
  var request = new XMLHttpRequest();
  request.open("GET", productRecommendationsSection.dataset.url);
  request.onload = function() {
    if (request.status >= 200 && request.status < 300) {
      var container = document.createElement("div");
      container.innerHTML = request.response;
      productRecommendationsSection.innerHTML = container.querySelector(".product-recommendations").innerHTML;
      theme.initAnimateOnScroll();
    }
  };
  request.send();
};
// fetch when section reloads in editor
document.addEventListener("shopify:section:load", function(event) {
  if (document.querySelector('[data-section-id="' + event.detail.sectionId + '"].product-recommendations')) {
    loadProductRecommendationsIntoSection();
  }
});
// Fetching the recommendations on page load
loadProductRecommendationsIntoSection();

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["spec-highlights"] && !window.DesignMode) return;
  try {

  const $textLists = $(".P1_P4_sticky_wrapper .ScrollText .text-list"),
        $units = $(".P1_P4_sticky_wrapper .units .unit"),
        $specMessage = $(".P1_P4_sticky_wrapper .spec-message"),
        $desMessage = $(".P1_P4_sticky_wrapper .spec-des"),
        $scrollNumbers = $(".P1_P4_sticky_wrapper .scroll-number"),
        $comma = $(".P1_P4_sticky_wrapper .text-comma");
  var prevSpecID = 0;
  function setNumbers(nextSpec, specID) {
    var spec = window.specData[nextSpec], characters = spec.unit, numbers = spec.count.replace(/[a-zA-Z]+/g, "").trim(), numberCounter = numbers.toString().length;
    if(specID != prevSpecID) {
      $textLists.removeAttr("style")
      $comma.removeAttr("style")
      if (numberCounter > 3) {
        $comma.css({ width:"auto" })
      }
      $textLists.each(function(i) {
        if(numbers[i]) {
          var translateY = $textLists.find("li").height() * numbers[i];
          $(this).css("transform", "translateY(-" + translateY + "px)").css({ width:"auto" });
        }
      });
      $units.each(function(i) {
        var translateY = 0, unitText = $(this).data("unit");
        if (unitText == characters) {
          $(".P1_P4_sticky_wrapper .text-units").width($(this).find("span").width() + "px");
          translateY = $(this).height() * i;
          $(".P1_P4_sticky_wrapper .units").css("transform", "translateY(-" + translateY + "px)");
        }
      });
      if ($specMessage.html() !== spec.message) {
        $specMessage.html(spec.message);
        $('.text-animation-wrapper').get(0).style.setProperty("--spec-background-image", "url('"+spec.bgImage+"')");
      }
      if ($desMessage.html() !== spec.des) {
        $desMessage.html(spec.des);
      }
      prevSpecID = specID;
    }
  }

  function desktop(){
    gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

    setNumbers("spec1", 1);

    gsap.set(".P1_P4_sticky_wrapper .card", { position: "sticky" });
    gsap.set(".P1_P4_sticky_wrapper .image-card", { scale: 0.8 });
    const textAnimationTimeline1 = gsap.timeline({
      scrollTrigger: {
        trigger: ".P1_P4_sticky_wrapper",
        start: "top top",
        end: "bottom bottom",
        scrub: 0.3
      }
    });
    textAnimationTimeline1.to(".P1_P4_sticky_wrapper .image-card", { scale: 1, opacity: 0, direction: 0.33 });
    textAnimationTimeline1.to(".P1_P4_sticky_wrapper .card-2", { direction: 0.33, onUpdate: function () { setNumbers("spec1", 1); }}, 0);
    textAnimationTimeline1.to(".P1_P4_sticky_wrapper .card-2", { direction: 0.33, onUpdate: function () { setNumbers("spec2", 2); }}, 1);
    textAnimationTimeline1.to(".P1_P4_sticky_wrapper .card-2", { direction: 0.33, onUpdate: function () { setNumbers("spec3", 3); }}, 2);
    textAnimationTimeline1.to(".P1_P4_sticky_wrapper .card-2", { direction: 0.33, onUpdate: function () { setNumbers("spec4", 4); }}, 3);
  }

  var w = window.innerWidth;
  var size = w > 1024 ? "big" : "small";
  if (size === "big") {
    desktop();
  }


  } catch(e) { console.error(e); }
})();

})();
