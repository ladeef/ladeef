function buildWindowFeaturesString(
    left,
    top,
    screenX,
    screenY,
    height,
    width,
    menubar,
    scrollbars,
    titlebar,
    directories,
    fullscreen,
    status,
    toolbar,
    location,
    resizable) {

    var windowFeatures =
      "left=" + left + "," +
      "top=" + top + "," +
      "screenX=" + screenX + "," +
      "screenY=" + screenY + "," +
      "height=" + height + "," +
      "width=" + width + "," +
      "menubar=" + menubar + "," +
      "scrollbars=" + scrollbars + "," +
      "titlebar=" + titlebar + "," +
      "directories=" + directories + "," +
      "fullscreen=" + fullscreen + "," +
      "status=" + status + "," +
      "toolbar=" + toolbar + "," +
      "location=" + location + "," +
      "resizable=" + resizable;

    return windowFeatures;
}

function popupDynamic(windowURL, windowWidth, windowHeight) {
    var left = 0;
    var top = 0;
    var screenX = 0;
    var screenY = 0;
    var height = windowHeight;
    var width = windowWidth;
    var menubar = 0;
    var scrollbars = 0;
    var titlebar = 0;
    var directories = 0;
    var fullscreen = 0;
    var status = 1;
    var toolbar = 0;
    var location = 0;
    var resizable = 0;

    var windowFeatures = buildWindowFeaturesString(
      left,
      top,
      screenX,
      screenY,
      height,
      width,
      menubar,
      scrollbars,
      titlebar,
      directories,
      fullscreen,
      status,
      toolbar,
      location,
      resizable);

    popup(windowURL, "popup_dynamic", windowFeatures);
}

function popupFixed(windowURL) {
    var left = 0;
    var top = 0;
    var screenX = 0;
    var screenY = 0;
    var height = 500;
    var width = 720;
    var menubar = 0;
    var scrollbars = 0;
    var titlebar = 0;
    var directories = 0;
    var fullscreen = 0;
    var status = 1;
    var toolbar = 0;
    var location = 0;
    var resizable = 0;

    var windowFeatures = buildWindowFeaturesString(
      left,
      top,
      screenX,
      screenY,
      height,
      width,
      menubar,
      scrollbars,
      titlebar,
      directories,
      fullscreen,
      status,
      toolbar,
      location,
      resizable);

    popup(windowURL, "popup_fixed", windowFeatures);
}

function popupOptimum(windowURL) {

    var left = 0;
    var top = 0;
    var screenX = 0;
    var screenY = 0;
    var height = (screen.availHeight - 50);
    var width = (screen.availWidth - 10);
    var menubar = 0;
    var scrollbars = 0;
    var titlebar = 0;
    var directories = 0;
    var fullscreen = 0;
    var status = 1;
    var toolbar = 0;
    var location = 0;
    var resizable = 1;


    var windowFeatures = buildWindowFeaturesString(
      left,
      top,
      screenX,
      screenY,
      height,
      width,
      menubar,
      scrollbars,
      titlebar,
      directories,
      fullscreen,
      status,
      toolbar,
      location,
      resizable);

    popup(windowURL, "popup_optimum", windowFeatures);

}

function popup(windowURL, windowName, windowFeatures) {

    var popupWindow = window.open(windowURL, windowName, windowFeatures);
    popupWindow.focus();

}

function popupTest() {

    var left = 5000;
    var top = 5000;
    var screenX = 5000;
    var screenY = 5000;
    var height = 1;
    var width = 1;
    var menubar = 0;
    var scrollbars = 0;
    var titlebar = 0;
    var directories = 0;
    var fullscreen = 0;
    var status = 0;
    var toolbar = 0;
    var location = 0;
    var resizable = 1;


    var windowFeatures = buildWindowFeaturesString(
      left,
      top,
      screenX,
      screenY,
      height,
      width,
      menubar,
      scrollbars,
      titlebar,
      directories,
      fullscreen,
      status,
      toolbar,
      location,
      resizable);

    var popupTest = window.open("", "popup_test", windowFeatures);
    if (!popupTest && document.location.href.indexOf("popup_blocked") == -1) {
        var querystring = "popup_blocked=true";
        if (document.location.href.indexOf("?") == -1) {
            querystring = "?" + querystring;
        } else {
            querystring = "&" + querystring;
        }
        document.location.href = document.location.href + querystring;
    } else {
        if (popupTest != null) {
            popupTest.close();
        }
    }

}