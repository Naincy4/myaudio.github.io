<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="flaticon.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.4.0/wavesurfer.min.js"></script>
    <title>Audio track</title>
</head>
<body>

<div id="waveform"></div>


<script>
   var wavesurfer = WaveSurfer.create({
 // Use the id or class-name of the element you created, as a selector
 container: '#waveform',
 // The color can be either a simple CSS color or a Canvas gradient
 waveColor: 'lightgrey',
 progressColor: 'navy',
 cursorColor: '#fff',
 // This parameter makes the waveform look like SoundCloud's player
 barWidth: 5,
 barHeight: 1,
 responsive: true
});
wavesurfer.load("audio_file.mp3/1.mp3");



</script>
<div class="button">
<button onclick="wavesurfer.skipBackward()">
<img src="image/1.png" alt="logo">
</button>

<button onclick="wavesurfer.playPause()">
<img src="image/3.png" alt="logo"> 
</button>

<button onclick="wavesurfer.skipForward()">
<img src="image/2.png" alt="logo"> 
</button>
</div>



    
</body>
</html>