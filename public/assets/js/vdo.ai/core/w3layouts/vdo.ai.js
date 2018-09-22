var w_vdo = (top == self) ? window : window.top,
d_vdo = w_vdo.document;
(function (window, document, deps, publisher) {
  var protocol = window.location.protocol;

  function loadStyleSheet(src, id) {
    var s = document.createElement('link');
    s.id = id;
    s.rel = "stylesheet";
    s.href = protocol + src;
    document.head.appendChild(s);
  }

  function loadPlayerDiv(id) {
    var s = document.createElement('div');
    s.id = id;
    document.body.appendChild(s);
  }

  function loadScriptSync(src, id) {
    var s = document.createElement('script');
    s.id = id;
    s.async = false;
    s.src = protocol + src;
    document.body.appendChild(s);
  }

  loadPlayerDiv('_vdo_ads_player_ai_');


  //#region full_dependencies
  //#endregion

})(w_vdo, d_vdo, '//vdo.ai/core/', 'w3layouts/');