var site_lib = {
    "mmofreegames.online": "b8f169f7-f48e-486f-84cd-1f2261627d72",
    "mmoframes.com": "a2d52e67-f28f-460b-b433-ef1f8046763e",
    "vrfuckdolls.com": "8cc42d2f-9730-4cff-b6b7-3d47fb168bf5",
    "3dfuckdoll.com": "8d95713c-4aed-4040-886c-504e3e44b271",
    "adultmmogame.com": "819098de-f9b0-4393-a6d8-5f2fb6c968d8",
    "rpgmasterleague.com": "0963af4a-1c51-4aef-a1df-600aadd52f6b",
    "easygamepromo.com": "668a63b2-2715-4929-9dc2-f44fb38d9f0d",
    "xxxheroes.com": "392fb996-31fc-4fc6-8501-5c66ccef641b",
    "adultheroes.com": "c8889390-70e0-45d7-b27b-25eb838da3bb",
    "freeadultrpg.com": "032ca04b-6df6-4c6f-94a0-8858d4f50a7c",
    "freepornrpg.com": "f852dc94-2940-4fa1-8cac-7909b82c9e50",
    "futurheroes.com": "0aa3647d-6777-4d05-b569-4d7df55860b1",
    "fameheroes.com": "d601090e-b9b3-4403-addd-42a3dc7b0bb7",
    "heroesofrpg.com": "1c342a5a-f240-4192-81f7-95827843d568"

};

var site_lib_safari = {
    "mmofreegames.online": "web.onesignal.auto.14c30330-c4fb-483f-9c66-942ad147f917",
    "mmoframes.com": "web.onesignal.auto.3a869b75-1942-4792-8237-9de8041a4c17",
    "vrfuckdolls.com": "web.onesignal.auto.02091d44-51df-4a38-967b-45e7d1e7feaf",
    "3dfuckdoll.com": "web.onesignal.auto.5f8d50ad-7ec3-4f1c-a2de-134e8949294e",
    "adultmmogame.com": "web.onesignal.auto.45e32f52-047f-48ea-8b6f-5a9d2fcde2db",
    "rpgmasterleague.com": "web.onesignal.auto.0bc7de6a-1858-40cb-a30f-b71482b7a86d",
    "easygamepromo.com": "web.onesignal.auto.30826c80-9a56-405a-b53d-a917475ecc5b",
    "xxxheroes.com": "web.onesignal.auto.6a162863-2269-421e-a6d3-46e81aa6d2f4",
    "adultheroes.com": "web.onesignal.auto.5136aa20-d33c-4de6-8d7f-c3f8c4b264dc",
    "freeadultrpg.com": "web.onesignal.auto.5c56364e-78e6-4c38-97c1-5b5f4d3e0076",
    "freepornrpg.com": "web.onesignal.auto.6a2e4cfc-4f7f-4e0a-b787-2d0bd3e78806",
    "futurheroes.com": "web.onesignal.auto.06522562-c4bd-4797-b0b8-e15944eb45af",
    "fameheroes.com": "web.onesignal.auto.44e6ca0d-bbca-461f-908e-69d9a6be2a2a",
    "heroesofrpg.com": "web.onesignal.auto.2358eea7-3e97-4fb7-b492-b25c712616ac"
};
var SITE_DOMAIN_NAME = window.location.hostname;
var APP_ID = site_lib[SITE_DOMAIN_NAME];
var SAFARI_APP_ID = site_lib_safari[SITE_DOMAIN_NAME];

if (push && APP_ID !== undefined) {
    var OneSignal = window.OneSignal || [];
    OneSignal.push(function () {
        OneSignal.init({
            appId: APP_ID,
            safari_web_id: SAFARI_APP_ID,
            autoRegister: true,
            notifyButton: {
                enable: false,
            },
        });
        OneSignal.showSlidedownPrompt();
    });
}




