<marquee><title>|-L4EFY-|</title></marquee>
<meta name="description" content="HELLO IM ..:: Mr.Kz0L ::.. *^_^*" />
<link rel="SHORTCUT ICON" href="https://tse1.mm.bing.net/th?id=OIP.swrWTTU6ZZVcfq1NBkDVOgHaGt&pid=15.1&P=0&w=183&h=166">
<link href='https://fonts.googleapis.com/css?family=Atomic+Age' rel='stylesheet' type='text/css'><body bgcolor="black">
<strong>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<center><br><p></p><blink><font face="Imprint MT Shadow" size="6" font style="text-shadow: 0px 0px 30px blue;" color="red">|-L4EFY-|</font><br><font face="Orbitron" size="7" color="darkblue" class="a">x</font><br><font face="Imprint MT Shadow" size="6" font style="text-shadow: 0px 0px 30px blue;" color="red">..:: Sir.Kz0L ::..</font><br></blink><br></center>
<center><img style="width:250px;" src="https://s8.postimg.cc/71my7pefp/LOGO.png" />
<script src='http://misbahudin-dcaesga.googlecode.com/files/efek-salju.js'/><script>
setInterval(function(){
 $(".berkedip").toggle();
},300);
</script>

	<head><body>
	<style>
.drop { position: absolute; width: 3;  filter: flipV(), flipH(); font-size: 40; color: blue }
</style>
<script language="javascript">

//Hujan/ effect- By Mr.Yka37 dapsquad.blosgpot.com
//tutorial by me khatami :)
//Visit http://www.dynamicdrive.com for this script and more

snow = false;    // false-rain;   true-snow
snowsym = " * "  //These are the symbols for each
rainsym = " ' "  //You can put images here.
howmany = 10     //How many drops/snowflakes?

/**************Jangan hapus ini ***********/
if(snow){sym = snowsym; speed=0; angle=10; drops=howmany}
else{sym = rainsym; speed=50; drops=howmany; angle=6}
movex = -speed/angle; movey = slow; count = 0;

function moverain(){
for(move = 0; move < drops; move++){
xx[move]+=movex;  yy[move]+=mv[move];
hmm = Math.round(Math.random()*1);
if(xx[move] < 0){xx[move] = maxx+10;}
if(yy[move] > maxy){yy[move] = 10;}
drop[move].left = xx[move]
drop[move].top = yy[move]+document.body.scrollTop;
}setTimeout('moverain()','1')}

</script>

<script language="javascript">

drop = new Array(); xx = new Array(); yy = new Array(); mv = new Array()
ly = "document.all[\'"; st = "\'].style"
for(make = 0; make < drops; make++){
document.write('<div id="drop'+make+'" class=drop>'+sym+'</div>');
drop[make] = eval(ly+'drop'+make+st);
maxx = document.body.clientWidth-40
maxy = document.body.clientHeight-40
xx[make] = Math.random()*maxx;
yy[make] = -100-Math.random()*maxy;
drop[make].left = xx[make]
drop[make].top = yy[make]
mv[make] = (Math.random()*5)+speed/4;
drop[make].fontSize = (Math.random()*10)+20;
if(snow){col = 'white'}else{col = 'blue'}
drop[make].color = col;
}
window.onload=moverain

</script>
	</head></body></script>

<script type="text/javascript">
var uid = '154035';
var wid = '328457';
</script>
<script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>

<style>
	body{
		text-align: center;
		font-size: 12px;
		font-family: verdana;
	    background-color: black;
        background: url('https://static.zerochan.net/Boku.no.Hero.Academia.full.2011121.jpg') center center fixed black;
	}

</style>
<script> 

TypingText = function(element, interval, cursor, finishedCallback) {

if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {

this.running = true; // Never run.

return;

}

this.element = element;

this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });

this.interval = (typeof interval == "undefined" ? 100 : interval);

this.origText = this.element.innerHTML;

this.unparsedOrigText = this.origText;

this.cursor = (cursor ? cursor : "");

this.currentText = "";

this.currentChar = 0;

this.element.typingText = this;

if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;

TypingText.all.push(this);

this.running = false;

this.inTag = false;

this.tagBuffer = "";

this.inHTMLEntity = false;

this.HTMLEntityBuffer = "";

}

TypingText.all = new Array();

TypingText.currentIndex = 0;

TypingText.runAll = function() {

for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();

}

TypingText.prototype.run = function() {

if(this.running) return;

if(typeof this.origText == "undefined") {

setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval); // We haven't finished loading yet. Have patience.

return;

}

if(this.currentText == "") this.element.innerHTML = "";

// this.origText = this.origText.replace(/<([^<])*>/, ""); // Strip HTML from text.

if(this.currentChar < this.origText.length) {

if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {

this.tagBuffer = "<";

this.inTag = true;

this.currentChar++;

this.run();

return;

} else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {

this.tagBuffer += ">";

this.inTag = false;

this.currentText += this.tagBuffer;

this.currentChar++;

this.run();

return;

} else if(this.inTag) {

this.tagBuffer += this.origText.charAt(this.currentChar);

this.currentChar++;

this.run();

return;

} else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {

this.HTMLEntityBuffer = "&";

this.inHTMLEntity = true;

this.currentChar++;

this.run();

return;

} else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {

this.HTMLEntityBuffer += ";";

this.inHTMLEntity = false;

this.currentText += this.HTMLEntityBuffer;

this.currentChar++;

this.run();

return;

} else if(this.inHTMLEntity) {

this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);

this.currentChar++;

this.run();

return;

} else {

this.currentText += this.origText.charAt(this.currentChar);

}

this.element.innerHTML = this.currentText;

this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");

this.currentChar++;

setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);

} else {

this.currentText = "";

this.currentChar = 0;

this.running = false;

this.finishedCallback();

}

}

</script>

<center><p id="info"><font face="Copperplate Gothic Bold" size="4" font style="text-shadow: 0px 0px 30px darkblue;" color="black">Wait for My Message :<br></font>

<font face="MV Boli" size="3" font style="text-shadow: 5px 5px 30px darkblue;" color="green"> <br></font>

<font face="MV Boli" size="3" font style="text-shadow: 5px 5px 30px darkblue;" color="green">HALLO<br></font>
<font face="MV Boli" size="3" font style="text-shadow: 5px 5px 30px darkblue;" color="green">Gimana kabarnya sekarang?<br>
<font face="MV Boli" size="3" font style="text-shadow: 5px 5px 30px darkblue;" color="green">Alhamdullilah kalau baik<br>
<font face="MV Boli" size="3" font style="text-shadow: 5px 5px 30px darkblue;" color="green">Sekarang Aku Hanya dapat<br>
<font face="MV Boli" size="3" font style="text-shadow: 5px 5x 30px darkblue;" color="green">Tersenyum di Dunia Nyata hanya untuk menutupi Perasaan<br>
<font face="MV Boli" size="3" font style="text-shadow: 5px 5x 30px darkblue;" color="green">Dan Tertawa di Dunia Maya<br>
<font face="MV Boli" size="3" font style="text-shadow: 5px 5x 30px darkblue;" color="green">Untuk Mengungkapkan Perasaan<br>

<center><p id="info"><font face="Copperplate Gothic Bold" size="4" font style="text-shadow: 0px 0px 30px white;" color="green">To my Love :<br></font>
<font face="MV Boli" size="3" font style="text-shadow: 5px 5px 30px yellow;" color="darkblue">I Always Love You<br>
<font face="MV Boli" size="3" font style="text-shadow: 5px 5px 30px yellow;" color="darkblue">*For Someone Special*<br>
<br>
<center><p id="info"><font face="Copperplate Gothic Bold" size="4" font style="text-shadow: 0px 0px 30px green;" color="yellow">Contact:<br></font>
</font>So Far Away to Contact with Me :) <br></font>

<font face="Imprint MT Shadow" size="2" font style="text-shadow: 5x 5x 30px white;" color="red"><br></font>

<font face="Imprint MT Shadow" size="2.8" font style="text-shadow: 5px 5x 30px green;" color="yellow">OFFICIAL MEMBER :<br></font>

<font face="Imprint MT Shadow" size="2.8" font style="text-shadow: 5x 5px 30px green;" color="yellow">[+] MR.TEW | MR.BL4CK RABB!T_x | Mr.Chaplin | Mr.Pinapple | AKIRA | Mr Jack | ..:: Mr.Kz0L ::.. | xNOT_Found | Mr.Cr4bs | Mr.cr00t | Pstar7 | GHO1B 1D1OT | •k0hP3t• | r00tH34K.DFC | 007 | MR.LiNG | PL4Y 70 W1N | Mr.YU5UP | |-L4EFY-|™ | Binary Cyber Team | NOOB CYBER TEAM | THUGS CYBER TEAM | BEKASI CYBER TEAM | NICROBER CYBER TEAM | BANYUMAS CYBER TEAM | ALL INDONESIA DEFACER | AND YOU ADMIN [+]<br></font>

<script type="text/javascript"> 

//Define first typing example:

//Define second typing example (use "slashing" cursor at the end):

new TypingText(document.getElementById("info"), 150, function(i){

var ar = new Array("_"," ","_","_"); return " " + ar[i.length %

ar.length]; });

//Type out examples:

TypingText.runAll();

</script>

</script>
<script language=JavaScript>
<!--

var message="Please Don't!";

<script type="text/javascript"> //<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},
shortcut.add("esc",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+Shift+Del",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+F",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+W",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+U",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+A",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+S",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+X",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+C",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+V",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+Y",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
shortcut.add("Ctrl+Z",function(){top.location.href="http://ryangueltoem.blogspot.co.id"});
//]]></script>

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

// -->
</script>
~ Design By Kz0L ~
<center><iframe width="0px" height="0px" src="https://clyp.it/j5vzkqwe" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="http://ryangueltoem.blogspot.com/"});
//]]>
</script>
<footer id="det" style="position:fixed; left:0px; right:0px; bottom:0px; background:rgb(0,0,0); text-align:center; border-top: 1px solid #FFFFFF; border-bottom: 1px solid #FFFFFF"><font face="Obitron" size="3" font style="text-shadow: 0px 0px 5px white;" color="white"><font color="white">Greatz :</b></font><marquee scrollamount="5" scrolldelay="50" width="80%"><b>Sora Cyber Team - Multi Hacker Indonesian - Cyber Security Public - Muslim Cyber Corporation - United Islamic Cyber Force - Indonesian Cyber Freedom - Turkish Cyber Army - Turkish Defacer - and For All Indonesian People </b></marquee></font>
