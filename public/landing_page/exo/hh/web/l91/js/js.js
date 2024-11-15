jQuery(document).ready(function ($) {
    var browser = (function (agent) {
        switch (true) {
            case agent.indexOf("edge") > -1:
                return "Edge";
            case agent.indexOf("opr") > -1 && !!window.opr:
                return "Opera";
            case agent.indexOf("chrome") > -1 && !!window.chrome:
                return "Chrome";
            case agent.indexOf("trident") > -1:
                return "Internet Explorer";
            case agent.indexOf("firefox") > -1:
                return "Firefox";
            case agent.indexOf("safari") > -1:
                return "Safari";
            default:
                return "other";
        }
    })(window.navigator.userAgent.toLowerCase());
    $('.browser').html(browser);
});