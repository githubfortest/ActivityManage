<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>校园活动管理系统</title>

    <!-- Bootstrap core CSS -->
    <link href="/ActivityManage/Public/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/ActivityManage/Public/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/ActivityManage/Public/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="/ActivityManage/Public/css/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/ActivityManage/index.php/Admin/Index/index">校园活动管理系统</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="/ActivityManage/index.php/Student/Activity/showActivity"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="/ActivityManage/index.php/Student/Activity/showActivity"><i class="fa fa-bar-chart-o"></i> 校园活动</a></li>
            <li><a href="/ActivityManage/index.php/Student/Activity/showJoin?id=<?php echo (session('id')); ?>"><i class="fa fa-bar-chart-o"></i> 已报名的活动</a></li>
            <li><a href="/ActivityManage/index.php/Student/Activity/applyActivity"><i class="fa fa-bar-chart-o"></i> 活动申请</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">

            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 欢迎您 , <?php echo (session('name')); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/ActivityManage/index.php/Student/Index/edit"><i class="fa fa-gear"></i> 修改密码</a></li>
                <li class="divider"></li>
                <li><a href="/ActivityManage/index.php/Student/Index/logout"><i class="fa fa-power-off"></i> 退出登录</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    <!-- JavaScript -->
    <script src="/ActivityManage/Public/js/jquery-1.10.2.js"></script>
    <script src="/ActivityManage/Public/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->    <script src="js/raphael-min.js"></script>
    <script src="/ActivityManage/Public/js/morris-0.4.3.min.js"></script>
    <script src="/ActivityManage/Public/js/morris/chart-data-morris.js"></script>
    <script src="/ActivityManage/Public/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/ActivityManage/Public/js/tablesorter/tables.js"></script>
      </body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
<title>HTML5 websocket 网页聊天室 javascript php</title>
<style type="text/css">
body,p{margin:0px; padding:0px; font-size:14px; color:#333; font-family:Arial, Helvetica, sans-serif;}
#ltian,.rin{width:98%; margin:5px auto;}
#ltian{border:1px #ccc solid;overflow-y:auto; overflow-x:hidden; position:relative;}
#ct{margin-right:111px; height:100%;overflow-y:auto;overflow-x: hidden;}
#us{width:110px; overflow-y:auto; overflow-x:hidden; float:right; border-left:1px #ccc solid; height:100%; background-color:#F1F1F1;}
#us p{padding:3px 5px; color:#08C; line-height:20px; height:20px; cursor:pointer; overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
#us p:hover,#us p:active,#us p.ck{background-color:#069; color:#FFF;}
#us p.my:hover,#us p.my:active,#us p.my{color:#333;background-color:transparent;}
button{float:right; width:80px; height:35px; font-size:18px;}
input{width:100%; height:30px; padding:2px; line-height:20px; outline:none; border:solid 1px #CCC;}
.rin p{margin-right:160px;}
.rin span{float:right; padding:6px 5px 0px 5px; position:relative;}
.rin span img{margin:0px 3px; cursor:pointer;}
.rin span form{position:absolute; width:25px; height:25px; overflow:hidden; opacity:0; top:5px; right:5px;}
.rin span input{width:180px; height:25px; margin-left:-160px; cursor:pointer}
 
#ct p{padding:5px; line-height:20px;}
#ct a{color:#069; cursor:pointer;}
#ct span{color:#999; margin-right:10px;}
.c2{color:#999;}
.c3{background-color:#DBE9EC; padding:5px;}
.qp{position:absolute; font-size:12px; color:#666; top:5px; right:130px; text-decoration:none; color:#069;}
#ems{position:absolute; z-index:5; display:none; top:0px; left:0px; max-width:230px; background-color:#F1F1F1; border:solid 1px #CCC; padding:5px;}
#ems img{width:44px; height:44px; border:solid 1px #FFF; cursor:pointer;}
#ems img:hover,#ems img:active{border-color:#A4B7E3;}
#ems a{color:#069; border-radius:2px; display:inline-block; margin:2px 5px; padding:1px 8px; text-decoration:none; background-color:#D5DFFD;}
#ems a:hover,#ems a:active,#ems a.ck{color:#FFF; background-color:#069;}
.tc{text-align:center; margin-top:5px;}
</style>
</head>
 
 
<body>
<h1>ssss</h1>
<h1>ssss</h1><h1>ssss</h1>
<h1>ssss</h1>
<h1>ssss</h1>
<h1>ssss</h1>
<h1>ssss</h1>

<div id="ltian">
 <div id="us" class="jb"></div>
 <div id="ct"></div>
 <a href="javascript:;" rel="external nofollow" rel="external nofollow" class="qp" onClick="this.parentNode.children[1].innerHTML=''">清屏</a>
</div>
<div class="rin">
 <button id="sd">发送</button>
 <span><img src="http://www.yxsss.com/ui/sk/t.png" title="表情" id="imgbq"><img src="http://www.yxsss.com/ui/sk/e.png" title="上传图片"><form><input type="file" title="上传图片" id="upimg"></form></span>
 <p><input id="nrong"></p>
</div>
<div id="ems"><p></p><p class="tc"></p></div>
<script>
if(typeof(WebSocket)=='undefined'){
 alert('你的浏览器不支持 WebSocket ，推荐使用Google Chrome 或者 Mozilla Firefox'); 
}
</script>
<script src="http://www.yxsss.com/ui/p/a.js" type="text/javascript"></script>
<script>
(function(){
 var key='all',mkey;
 var users={};
 var url='ws://127.0.0.1:8000';
 var so=false,n=false;
 var lus=A.$('us'),lct=A.$('ct');
 function st(){
  //var Arr1 = ["聪明的","狡猾的","可爱的","美丽的","狡猾的","善良的","帅气的","逗比的"];
  //var Arr2 = ["大灰狼","小白兔","外星人","皮卡丘","HelloKitty","吴亦凡","薛之谦"];
  //var ran1 = Math.floor(Math.random() * Arr1.length + 1)-1;
  //var ran2 = Math.floor(Math.random() * Arr2.length + 1)-1;
  //var n=Arr1[ran1]+Arr2[ran2];
  //以上五行是用来随机生成用户昵称的方法，参考一下 ，如果想自定义用户名可以将以上五行注释，然后以下两行取消注释
  //n=prompt('请给自己取一个霸气的名字：');
  //n=n.substr(0,16);
  n="";
  console.log(n);
  if(!n){
   return ; 
  }
  so=new WebSocket(url);
  so.onopen=function(){
   if(so.readyState==1){
    so.send('type=add&ming='+n);
   }
  }
   
  so.onclose=function(){
   so=false;
   lct.appendChild(A.$$('<p class="c2">退出聊天室</p>'));
  }
   
  so.onmessage=function(msg){
   eval('var da='+msg.data);
   var obj=false,c=false;
   if(da.type=='add'){
    var obj=A.$$('<p>'+da.name+'</p>');
    lus.appendChild(obj);
    cuser(obj,da.code);
    obj=A.$$('<p><span>['+da.time+']</span>欢迎<a>'+da.name+'</a>加入</p>');
    c=da.code;
   }else if(da.type=='madd'){
    mkey=da.code;
    da.users.unshift({'code':'all','name':'大家'});
    for(var i=0;i<da.users.length;i++){
     var obj=A.$$('<p>'+da.users[i].name+'</p>');
     lus.appendChild(obj);
     if(mkey!=da.users[i].code){
      cuser(obj,da.users[i].code);
     }else{
      obj.className='my';
      document.title=da.users[i].name;
     }
    }
    obj=A.$$('<p><span>['+da.time+']</span>欢迎'+da.name+'加入</p>');
    users.all.className='ck';
   }
    
   if(obj==false){
    if(da.type=='rmove'){
     var obj=A.$$('<p class="c2"><span>['+da.time+']</span>'+users[da.nrong].innerHTML+'退出聊天室</p>');
     lct.appendChild(obj);
     users[da.nrong].del();
     delete users[da.nrong];
    }else{
     da.nrong=da.nrong.replace(/{\(d+)}/g,function(a,b){
      return '<img src="sk/'+b+'.jpg">';
     }).replace(/^data\:image\/png;base64\,.{50,}$/i,function(a){
      return '<img src="'+a+'">';
     });
     //da.code 发信息人的code
     if(da.code1==mkey){
      obj=A.$$('<p class="c3"><span>['+da.time+']</span><a>'+users[da.code].innerHTML+'</a>对我说：'+da.nrong+'</p>');
      c=da.code;
     }else if(da.code==mkey){
      if(da.code1!='all')
      obj=A.$$('<p class="c3"><span>['+da.time+']</span>我对<a>'+users[da.code1].innerHTML+'</a>说：'+da.nrong+'</p>');
      else
      obj=A.$$('<p><span>['+da.time+']</span>我对<a>'+users[da.code1].innerHTML+'</a>说：'+da.nrong+'</p>');
      c=da.code1;
     }else if(da.code==false){
      obj=A.$$('<p><span>['+da.time+']</span>'+da.nrong+'</p>');
     }else if(da.code1){
      obj=A.$$('<p><span>['+da.time+']</span><a>'+users[da.code].innerHTML+'</a>对'+users[da.code1].innerHTML+'说：'+da.nrong+'</p>');
      c=da.code;
     }
    }
   }
   if(c){
     obj.children[1].onclick=function(){
      users[c].onclick();
     }
    }
   lct.appendChild(obj);
   lct.scrollTop=Math.max(0,lct.scrollHeight-lct.offsetHeight);
  }
 }
 A.$('sd').onclick=function(){
  if(!so){
    return st();
  }
  var da=A.$('nrong').value.trim();
  if(da==''){
   alert('内容不能为空');
   return false; 
  }
  A.$('nrong').value='';
  so.send('nr='+esc(da)+'&key='+key);
 }
 A.$('nrong').onkeydown=function(e){
  var e=e||event;
  if(e.keyCode==13){
   A.$('sd').onclick();
  }
 }
 function esc(da){
  da=da.replace(/</g,'<').replace(/>/g,'>').replace(/\"/g,'"');
  return encodeURIComponent(da);
 }
 function cuser(t,code){
  users[code]=t;
  t.onclick=function(){
   t.parentNode.children.rcss('ck','');
   t.rcss('','ck');
   key=code;
  }
 }
 A.$('ltian').style.height=(document.documentElement.clientHeight - 70)+'px';
 st();
  
 
 var bq=A.$('imgbq'),ems=A.$('ems');
 var l=80,r=4,c=5,s=0,p=Math.ceil(l/(r*c));
 var pt='sk/';
 bq.onclick=function(e){
  var e=e||event;
  if(!so){
    return st();
  }
  ems.style.display='block';
  document.onclick=function(){
   gb(); 
  }
  ct();
  try{e.stopPropagation();}catch(o){}
 }
  
 for(var i=0;i<p;i++){
  var a=A.$$('<a href="javascript:;" rel="external nofollow" rel="external nofollow" >'+(i+1)+'</a>');
  ems.children[1].appendChild(a);
  ef(a,i);
 }
 ems.children[1].children[0].className='ck';
  
 function ct(){
  var wz=bq.weiz();
  with(ems.style){
   top=wz.y-242+'px';
   left=wz.x+bq.offsetWidth-235+'px';
  }
 }
   
 function ef(t,i){
  t.onclick=function(e){
   var e=e||event;
   s=i*r*c;
   ems.children[0].innerHTML='';
   hh();
   this.parentNode.children.rcss('ck','');
   this.rcss('','ck');
   try{e.stopPropagation();}catch(o){}
  }
 }
  
 function hh(){
  var z=Math.min(l,s+r*c);
  for(var i=s;i<z;i++){
   var a=A.$$('<img src="'+pt+i+'.jpg">');
   hh1(a,i);
   ems.children[0].appendChild(a);
  }
  ct();
 }
  
 function hh1(t,i){
  t.onclick=function(e){
   var e=e||event;
   A.$('nrong').value+='{\'+i+'}';
   if(!e.ctrlKey){
    gb();
   }
   try{e.stopPropagation();}catch(o){}
  }
 }
  
 function gb(){
  ems.style.display='';
  A.$('nrong').focus();
  document.onclick='';
 }
 hh();
 A.on(window,'resize',function(){
  A.$('ltian').style.height=(document.documentElement.clientHeight - 70)+'px';
  ct();
 }) 
 
 var fimg=A.$('upimg');
 var img=new Image();
 var dw=400,dh=300;
 A.on(fimg,'change',function(ev){
  if(!so){
   st();
   return false;
  }
  if(key=='all'){
   alert('由于资源限制 发图只能私聊');
   return false; 
  }
  var f=ev.target.files[0];
  if(f.type.match('image.*')){
   var r = new FileReader();
   r.onload = function(e){
    img.setAttribute('src',e.target.result);
   };
   r.readAsDataURL(f);
  }
 });
 img.onload=function(){
  ih=img.height,iw=img.width;
  if(iw/ih > dw/dh && iw > dw){
   ih=ih/iw*dw;
   iw=dw;
  }else if(ih > dh){
   iw=iw/ih*dh;
   ih=dh;
  }
  var rc = A.$$('canvas');
  var ct = rc.getContext('2d');
  rc.width=iw;
  rc.height=ih;
  ct.drawImage(img,0,0,iw,ih);
  var da=rc.toDataURL();
  so.send('nr='+esc(da)+'&key='+key);
 }
  
})();
</script>
</body>
</html>