<html>
<script>
var video = document.getElementById('video');
video.addEventListener('click',function(){
  video.play();
},false);
</script>
<body bgcolor=#252830>
<center>
<video id="video" width=1280 height=720 controls>
<source src=<?php echo "'source.php?video=$_GET[video]'"?> type="video/mp4">
</video>
<p>Video Stream URL (VLC/Chrome):<a href='http://localhost/oc/source.php?video=<?php echo "$_GET[video]";?>'> http://localhost/oc/source.php?video=<?php echo "$_GET[video]";?></a><p>
<p>Share Stream URL (Any Browser):<a href=' http://localhost/oc/stream.php?video=<?php echo "$_GET[video]";?>'> http://localhost/oc/stream.php?video=<?php echo "$_GET[video]";?></a><p>
</center>
</body>
</html>