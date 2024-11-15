var site_domain_name = window.location.hostname;
var site_domain = "";
var app_id = ""
var safari_app_id = "";

var sitelib = {
    "mmofreegames.online": "b8f169f7-f48e-486f-84cd-1f2261627d72",
    "mmoframes.com": "a2d52e67-f28f-460b-b433-ef1f8046763e",
    "vrfuckdolls.com": "8cc42d2f-9730-4cff-b6b7-3d47fb168bf5",
    "3dfuckdoll.com": "8d95713c-4aed-4040-886c-504e3e44b271",
    "adultmmogame.com": "819098de-f9b0-4393-a6d8-5f2fb6c968d8",
    "rpgmasterleague.com": "0963af4a-1c51-4aef-a1df-600aadd52f6b",
    "easygamepromo.com": "668a63b2-2715-4929-9dc2-f44fb38d9f0d",
    "www.mediagameland.com": "c26f561b-8649-4554-93aa-ca4cb2532fa9",
    "www.marketgameland.com": "ee11a49b-ae8c-4e97-b16a-33a659554e73",
    "www.mediagamebo.com": "cb269077-df06-474e-8c23-c4953dade8ee",
    "www.marketgamebo.com": "33528594-24e2-4a14-82ad-b68ed650aea8"





};

var sitelib_safari = {
    "mmofreegames.online": "web.onesignal.auto.14c30330-c4fb-483f-9c66-942ad147f917",
    "mmoframes.com": "web.onesignal.auto.3a869b75-1942-4792-8237-9de8041a4c17",
    "vrfuckdolls.com": "web.onesignal.auto.02091d44-51df-4a38-967b-45e7d1e7feaf",
    "3dfuckdoll.com": "web.onesignal.auto.5f8d50ad-7ec3-4f1c-a2de-134e8949294e",
    "adultmmogame.com": "web.onesignal.auto.45e32f52-047f-48ea-8b6f-5a9d2fcde2db",
    "rpgmasterleague.com": "web.onesignal.auto.0bc7de6a-1858-40cb-a30f-b71482b7a86d",
    "easygamepromo.com": "web.onesignal.auto.30826c80-9a56-405a-b53d-a917475ecc5b",
    "www.mediagameland.com": "web.onesignal.auto.3cbb98e8-d926-4cfe-89ae-1bc86ff7cf70",
    "www.marketgameland.com": "ee11a49b-ae8c-4e97-b16a-33a659554e73",
    "www.mediagamebo.com": "web.onesignal.auto.13169687-b109-4155-bbf4-37fb1a1576f8",
    "www.marketgamebo.com": "web.onesignal.auto.1de7b938-6047-48aa-bcdd-0245aac21a82"




};

app_id = sitelib[site_domain_name];
safari_app_id = sitelib_safari[site_domain_name];

function getURLParameter(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var push = getURLParameter('push');
if(!push) {
    if (site_domain_name === "www.marketgameland.com"){
        push = "on";
    }else{
        push = 'off'
    }
};


if (push === "on" && app_id != undefined){
    var OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
            appId: app_id,
            safari_web_id: safari_app_id,
            autoRegister: true,
            notifyButton: {
                enable: false,
            },
        });
    });
}
