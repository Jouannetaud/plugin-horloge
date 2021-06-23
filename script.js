var date = new Date()
var gmtLocal;

function temps() {
    
    var outputs = document.getElementsByClassName("hours");
    for (var i = 0; i < outputs.length; i++) {
        outputs[i].innerHTML = getFormatedDate(outputs[i].id);
    }
}

gmtLocal = -date.getTimezoneOffset() / 60;

setInterval(temps, 1000);

function getFormatedDate(gmt) {
    var dateTmp = new Date(date.getTime() + ((gmt - gmtLocal) * 3600 * 1000));
    var str = "";
    str += padTo2(dateTmp.getHours()) + ":" + padTo2(dateTmp.getMinutes());

    return str;
}

function padTo2(num) {
    if (num < 10) {
        return "0" + num;
    } else {
        return num + "";
    }
}

