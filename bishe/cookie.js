//封装cookie
//添加
function addcookie(name,value,day){
    var d=new Date();
    d.setDate(d.getDate()+day);
    document.cookie=name+'='+encodeURIComponent(value)+';expires='+d;
}
//删除
function delcookie(name){
    addcookie(name,'',-1);
}
//获取某个属性值
function getcookie(name){
    var cookiearr=decodeURIComponent(document.cookie).split(';');
    for(var i =0;i<cookiearr.length;i++){
        var newcookiearr=cookiearr[i].split('=');
        if(name==newcookiearr[0]){
            return newcookiearr[1];
        }
    }
}