$(document).ready(function () {
    let path = window.location.pathname;
    let page = path.split("/").pop().replace(".php", "");

    checkCookie();
    let cookies = getCookie("lang");
    console.log("cookies" + cookies);
    trad(cookies, page, path);

    if (page === "contact" && getCookie("lang") === "en-EN") {
        document.getElementsByName('author')[0].placeholder = 'Your name';
        document.getElementsByName('email')[0].placeholder = 'Your mail';
        document.getElementsByName('phone')[0].placeholder = 'Your phone number';
        document.getElementsByName('title')[0].placeholder = 'Type the title here';
        document.getElementsByName('content')[0].placeholder = 'Type your message here';
    }

    let buttonFrench = document.getElementById('buttonFrenchChange');
    buttonFrench.addEventListener('click', function () {
        setCookie('lang', 'fr-FR', 365);
        trad(getCookie('lang'), path)
    });

    let buttonEnglish = document.getElementById('buttonEnglishChange');
    buttonEnglish.addEventListener('click', function () {
        setCookie('lang', 'en-EN', 365);
        trad(getCookie('lang'), path)
    })
});

function setCookie(cname, cvalue, exdays) {
    let d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    const name = cname + "=";
    const decodedCookie = decodeURIComponent(document.cookie);
    const ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    let lang = getCookie("lang");
    if (lang !== "") {
        return true;
    } else {
        setCookie("lang", "fr-FR", 365);
    }
}

function trad(cookies, page, path) {
    let lang;
    let footer;
    let menu;

    if (cookies === "en-EN") {
        if(path.toString() === '/') {
            lang = langEN['home'];
            footer = langEN['footer'];
            menu = langEN['menu'];
        } else {
            lang = langEN[page];
            footer = langEN['footer'];
            menu = langEN['menu'];
        }
    } else {
       console.log('On passe en fr')
    }

    for (let key in lang) {
        fillIn(key, lang[key]);
    }

    //Fill in for menu
    for (let key in menu) {
        fillIn(key, menu[key]);
    }

    //Fill in for footer
    for (let key in footer) {
        fillIn(key, footer[key]);
    }
}

function fillIn(key, value) {
    console.log("Key : " + key + " value : " + value);
    document.getElementById(key).innerHTML = value;
}
