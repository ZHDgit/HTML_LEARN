function objtostring(object){
	var arr=[];
	for(var i in object){
		arr.push(i+'='+object[i]);
	}
	return arr.join('&');
}

function ajax(obj){
	var ajax=new XMLHttpRequest();
	obj.type=obj.type||'get';
	if(obj.url==''){
		throw new Error('接口路径不能为空！');
	}
	if(obj.data&&typeof obj.data=='object'&&!Array.isArray(obj.data)){
		obj.data=objtostring(obj.data);
	}
	if(obj.data&&obj.type=='get'&&Array.isArray(obj.data)){
		obj.url+='?data='+obj.data
	}else if(obj.data&&obj.type=='get'){
		obj.url+='?'+obj.data;
	}
	if(obj.async===false){
		obj.async==false;
	}else{
		obj.async=true;
	}
	ajax.open(obj.type, obj.url, obj.async);
	if(obj.data&&obj.type=='post'){
		ajax.setRequestHeader('content-type','application/x-www-form-urlencoded');
		ajax.send(obj.data);
	}else{
		ajax.send();
	}
	if(obj.async===false){
		obj.cgfn&&obj.cgfn(ajax.responseText);
	}else{
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			if(ajax.status==200){
				obj.cgfn&&obj.cgfn(ajax.responseText);
			}else{
				obj.sbfn&&obj.sbfn('接口地址错误'+ajax.status);
			}
		}
	}
}

}