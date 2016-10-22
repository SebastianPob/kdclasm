$(function(){

  var colors = [];
  var shadows = [];


  function extractColors(mSrc, mImg) {
        var elements = document.querySelectorAll(".path-frontpage .image-style-thumbnail, .path-taxonomy .image-style-thumbnail");
        Array.prototype.forEach.call(elements, function(el, i) {
            el.addEventListener('load', function() {
                var vibrant = new Vibrant(el,128,2);
                var swatches = vibrant.swatches()
                h = swatches["DarkVibrant"].getHex();
                colors.push(h);
                convertHex(h, 0.2, 0.2);
                //console.log("Color")
            })
        });
  }



  function convertHex(hex, opacity, opacity2) {
      hex = hex.replace('#', '');
      r = parseInt(hex.substring(0, 2), 16);
      g = parseInt(hex.substring(2, 4), 16);
      b = parseInt(hex.substring(4, 6), 16);
      shadowColor = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity + ')';
      shadowColor2 = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity2 + ')';
      s = "0 2px 2px " + shadowColor + ", 0 4px 4px " + shadowColor + ", 0 8px 8px " + shadowColor + ", 0 16px 16px " + shadowColor + ", 0 32px 32px " + shadowColor2 + ", 0 64px 64px " + shadowColor2
      shadows.push(s);
      colorShadow();
  }


});
