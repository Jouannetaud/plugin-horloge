var date = new Date()
var gmtLocal;
 
function temps(){
    date = new Date();
    var outputs = document.getElementsByClassName("hours");
    for(var i=0;i<outputs.length;i++){
        outputs[i].innerHTML = getFormatedDate(outputs[i].id);
    }
}
 
gmtLocal = -date.getTimezoneOffset() / 60;
if(document.getElementById("gmtlocal")){
    document.getElementById("gmtlocal").innerHTML = "GMT " + ((gmtLocal < 0) ? "-" : "+") + gmtLocal;
}
if(document.getElementById("local")){
    document.getElementById("local").id = gmtLocal;
}
 
setInterval(temps, 1000);
 
function getFormatedDate(gmt){
    var dateTmp = new Date(date.getTime() + ((gmt - gmtLocal) * 3600 * 1000));
    var str = "";
    str += padTo2(dateTmp.getHours()) + ":" + padTo2(dateTmp.getMinutes());
     
    return str;
}
 
function padTo2(num){
    if(num < 10){
        return "0" + num;
    }
    else{
        return num + "";
    }
}

