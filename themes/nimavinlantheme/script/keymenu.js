
var KPAry=new Array();

function KeyPress(e){
 for (i=0;i<KPAry.length;i++){
  if (e==KPAry[i]){
   return;
  }
 }
 if (e!=17&&e!=18&&e!=82){
  KPAry=new Array();
 }
 KPAry[KPAry.length]=e;
 if (KPAry.length==3){
  if (KPAry[0]==17&&KPAry[1]==18&&KPAry[2]==82){
   alert('Keys Pressed\nctrl+alt+R ');
  }
  KPAry=new Array();

 }
}

 document.onkeydown=function(evt){ KeyPress(evt?evt.keyCode:event.keyCode); }

