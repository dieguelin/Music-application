function selectchord()
{
var userinput = document.getElementById("chord").value;
switch (userinput) {

case "a":
document.write("holas");
	break;
}
}

function PlaySound(path) {
  var audioElement = document.createElement('audio');
  audioElement.setAttribute('src', path);
  audioElement.play();
}
