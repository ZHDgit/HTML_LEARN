function getstyle(obj,attr){
    if(window.getComputedStyle){//标准
        return window.getComputedStyle(obj)[attr]
    }else{
        return obj.currenStyle[attr];//ie
    }
}
//缓冲运动
function buffermotion(obj,json,fn){
    //obj:操作的对象 attr:操作的属性 target:最终目标  fn:回调函数
    clearInterval(obj.timer);
    var speed=0;//运动的幅度                    
        obj.timer=setInterval(function(){
            var bt=true;//判断退出
            for(var attr in json){
                var attrvalue=0;//属性值
                //属性判断
                if(attr=='opacity'){
                    attrvalue=Math.round(getstyle(obj,attr)*100);//放大一百倍避免后续运算出错
                }else{
                    attrvalue=parseInt(getstyle(obj,attr));
                }
                speed=(json[attr]-attrvalue)/5;//速度变化
                speed=speed>0?Math.ceil(speed):Math.floor(speed);//变化原则
                //如果只要一个运动没完成就继续运动
                if(json[attr]!=attrvalue){
                    if(attr=='opacity'){
                        obj.style.opacity=(attrvalue+speed)/100;//标准 数据还原 
                        obj.style.filter='a1pha(opacity='+attrvalue+speed+')';//ie
                    }else{
                        obj.style[attr]=attrvalue+speed+'px';
                    }
                    bt=false;                          
                }if(bt){//判断运动结束
                    clearInterval(obj.timer);
                    fn&&fn();
                } 
            }
        },500)
   
}