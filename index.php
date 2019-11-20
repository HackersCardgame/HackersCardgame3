<!doctype html>
<meta charset="utf-8">
<html>
<head>
<style>
p { clear: both; }
div.cards {
  text-align: justify;
  padding: 2em;
} 
div.text {
  text-align: justify;
  padding: 2em;
} 
</style>
<!-- "thank you" "dear" 1960s paedos for activating CCS Suicide Death Bot against me-->
</head>
<body onhashchange="myFunction();">>
<script>
function myFunction() {
	var allCards = document.getElementsByClassName("card");
	for (i=0; i<allCards.length; i++)
	{
		allCards[i].style = "border: 10px solid white;float:left;text-align:center;";
		console.log(i);
	}	
	var card = window.location.hash.substr(1);
        console.log(card);	
	document.getElementById(card).style = "border: 10px solid red;float:left;text-align:center;";
}

document.addEventListener("DOMContentLoaded", function(event) {
  myFunction();
});
</script>

<div class="text">
<h1>Hackers Cardgame</h1>
Never Play "Red Team" help out with "Blue Team" and save the World<br><br>
please respect the <a href="../../LICENSE">license</a>, People like Julian Assange, Fefe, Frank Rieger, @Paniq & Silvia, Gunnar Kaiser, Dan Kaminsky, John Hunter, (world peace game), Richard Stallman, Linux Torvalds, Tschökk Sparrow &amp;&amp; Stefan Bader &amp; Co are excluded from the 1978 Rule in my license, and even if he passed away Joseph Weizenbaum would be excluded from the 1978 rule too. And all members of the Demoscene that have an valid entry on scene-ftp
<br>if you think you should be excluded from the "1978 and younger"-Rule you can contact me on twitter @FailDef<br><br>
People that work for the NDB are explicitely excluded and not allowed to read, scan, track, modify my cards, since i guess they sent me to mental institition again after i posted #NDB<=>#Psychiatrie, but if you think you *E* are one of the good guys at NDB, talk to me.
<br><br>
<font color=red>if i'm right it would be likely that the NDB/CIA/NSA hacked Hostpoint and is trying to find other victims like me to blackmail and silence them too.</font> <font color=purple><b>and they activate some sort of neural radio jamming device if you try to read the cards, to stop you from finding out how this things work, i tried to create this cards in the mountains or in the forest but my laptop is jamming me too, maybe if you have no electronical equipment in your backpack and only this cards they can not jam your neural radio, but not 100% sure abut that</b></font>
<br><br>
I tried that i only take free images or cc0 licensed images, if you think there is something wrong that should be licesed please contact me on github or directly add an issue in the HackersCardgame3 Repository.
<br><br>

Source:<br>
<a href="https://github.com/braindef/HackersCardgame3">https://github.com/braindef/HackersCardgame3</a><br>
<a href="https://2hmorvqnlhwyrhvl6dwv4jqgnvhlaf2wxnrbmbhrbpmx5x3qqiwprjyd.onion/">https://2hmorvqnlhwyrhvl6dwv4jqgnvhlaf2wxnrbmbhrbpmx5x3qqiwprjyd.onion/</a>
<br><br>
<a href="https://github.com/braindef/HackersCardgame3/tree/master/pdf/EN/A4">PRINTING TEMPLATES (PDF)</a>
<br>
<a href="../../pdf/EN/A4/">PRINTING TEMPLATES local(PDF)</a>
<br><br>
<!-- and of course nobody would have the stupid idea to place microdots in such a repository https://en.wikipedia.org/wiki/Microdot-->

<br>
<audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/SpaceTripExtended.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio> <audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/landev_--_mind_sciences.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio> <audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/landev_game.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio> <audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/landev_horizon.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio>
</audio> <audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/landev_jba.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio>
</audio> <audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/landev_violent.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio>
</div>
<div class="cards">
<p>
   <?php

   $files = glob("*.*");

  for ($i=count($files)-400; $i<count($files); $i++)
{

$image = $files[$i];
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {

    $parts = explode(".", $image);
    echo '<div id="'.$parts[0].'" class="card" style="border: 10px solid white;float:left;text-align:center;">';
    echo "<font color=green>" . $parts[0] . "</font>" . "<br>";
    echo '<a href="./'.$image .'" id="'.$parts[0].'"'.' target="_blank"><img width=200 src="'.$image .'" ></a><br>';
    echo '</div>
';

} else {
    continue;
 }

}

?>
<br>
<br>
<br>
</p>
</div>
<p>
<div class="text">
Possibly you would get in serious trouble with those people, that abuses this technology if you would fork this repo *INSERT: "marc is insane"-stimulus on t1 card* but if eg. 1000 *INSERT: "marc has delusions of grandeur"-stimulus on t1 card* would fork at the same time, they would possibly not have enough manpower to target all that forked it. Additionally [I] suggest that all people creates their own cards / deck / repo without using the images or the exact text of my repository, it would spam the people abusing it *INSERT: <font color=red>against you!!!</font> (psychological warfare)* because they would have to keep eg 1000 people in check. Having different decks would make the people that abuses this sort of technolgoy leak all they have *my insert: <font color=green>also psychological warfare :D</font>*

if you are crazy enough to <font color=green>become a part of mind-control-hacking community</font> take at least 1 equal aged friend, never do such things allone, use as much different technologies as you can, eg. inkscape, illustrator, html5, demoscene videos, painted art, music ... maybe you have even better ideas...

<br>
<br>
Marc jr Landolt<br>
eidg. dipl Informatiker HF<br>
Neuenburgerstrasse 6<br>
5004 Aarau<br>
mail@marclandolt.ch<br>
062 822 61 31 (mostly unplugged)<br>
078 674 15 32 (mostly switched off)<br>
</p>
</body>
</html>

