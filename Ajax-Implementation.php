<!DOCTYPE html>
<html>
<head>
<style>
img { width: 400px;
height: 300px;
}
</style>
<script>
function ajax_check(x)
{
var h=new XMLHttpRequest();
var url="ajax.php";
var link=x;
var a=x-1;
var b=x+1;
var vars="value="+link;
h.open("POST",url,true);
h.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
h.onreadystatechange=function(){
if(h.readyState == 4 && h.status == 200) 
{
 var return_data = h.responseText; 

document.getElementById(x).src="http://cslab.cs.siu.edu/~matluri/lab5/"+return_data+".jpg";
document.getElementById(x).style.display="";

if(a>0 && b<=20)
{  
 document.getElementById(a).src="http://cslab.cs.siu.edu/~matluri/lab5/"+a+".jpg";
 document.getElementById(b).src="http://cslab.cs.siu.edu/~matluri/lab5/"+b+".jpg";
}
 for( i=1;i<=20;i++)
{ 
if(x!=i)
{
document.getElementById(i).style.display='none';
}  
}
} }

h.send(vars); 
document.getElementById(x).style.display="";
document.getElementById(x).src="http://cslab.cs.siu.edu/~matluri/lab5/loading.gif";
}
</script>
</head>
<body>



<center>
<h1>  SIUC SNOW 2015 </h1>
<p> I had my first snow experience in this January and I have never seen snow until that time in my life. 
 Everyone who knows my little fun fact always seems shocked and excited for me to have my first experience.
 But after the horror stories from friends and co-workers of 6 inches of snow, driving in sleet and freezing rain (which was a term I had never heard of) I had mixed emotions of excitement and terror.
 There were many false predictions of snow so each time I got disappointed.
 One day morning, I got ready quickly and rushed to the parking lot. When I came down, there was a surprise waiting for me. The whole night it had snowed like crazy. It was fun to watch almost EVERYTHING covered with snow. Then we all played like crazy in the snow.
 My first time experience with snow is great.</p>
 <div id="msg"></div>
<a href="javascript:;" onclick="ajax_check(1)" >SNOW MAN which took 5 hours</a><br>
<img id="1" src="" alt=" SNOW MAN which took 5 hours" style="display:none"/><br><br>
<a href="javascript:;" onclick="ajax_check(2);" >All neighbours with my SNOWMAN</a><br>
<img id="2" src="" alt="All neighbours with our SNOWMAN" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(3);" > My parking lot completely covered by snow</a><br>
<img id="3" src="" alt=" My parking lot completely covered by snow" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(4);" >Completely fascinating to watch</a><br>
<img id="4" src="" alt="Completely fascinating to watch" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(5);" >On the way to pulliam hall</a><br>
<img id="5" src="" alt="On the way to pulliam hall" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(6);" >Completely frozen campus lake</a><br>
<img id="6" src="" alt="Completely frozen campus lake" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(7);" >View from the morris library</a><br>
<img id="7" src="" alt="View from the morris library" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(8);" >Heavy snow so cool to see</a><br>
<img id="8" src="" alt="Heavy snow so cool to see" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(9);" >Can watch it for hours  </a><br>
<img id="9" src="" alt="Can watch it for hours" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(10);" >In the woods not scary tough </a><br>
<img id="10" src="" alt="In the woods not scary tough" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(11);" >Near campus lake </a><br>
<img id="11" src="" alt="Near campus lake" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(12);" >Before water got completely frozen</a><br>
<img id="12" src="" alt="Before water got completely frozen" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(13);" >Lot of snow to play</a><br>
<img id="13" src="" alt="Lot of snow to play" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(14);" >Photography can change the view</a><br>
<img id="14" src="" alt="Photography can change the view" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(15);" >Nice view from the nice place</a><br>
<img id="15" src="" alt="Nice view from the nice place" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(16);" >Scary but fascinating</a><br>
<img id="16" src="" alt="Scary but fascinating" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(17);" >Difficult to guess but nice view</a><br>
<img id="17" src="" alt="Difficult to guess but nice view" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(18);" >From the student center </a><br>
<img id="18" src="" alt="From the student center" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(19);" >Frozen tree in campus</a><br>
<img id="19" src="" alt="Frozen tree in campus" style="display:none"/><br><br>
 <a href="javascript:;" onclick="ajax_check(20);" >Evening view in front of Fanner</a><br>
<img id="20" src="" alt="Evening view in front of Fanner" style="display:none"/><br><br>
  </body>
 </html>
 
