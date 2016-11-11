
<!-- Mirrored from www.samutz.com/flowplayer/video-demo.html by HTTrack Website Copier/3.x [XR&CO'2007], Thu, 17 Jun 2010 08:30:06 GMT --><head>
	<title>FlowPlayer Video Playlist Demo</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type='text/javascript' src="js/flowplayer-3.1.4.min.js"></script>
	<script type="text/javascript" src="js/playlist-video.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/style-video.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 269px;
	top: 23px;
}
-->
</style>
</head>
<center>

<div id="wrapper">

	<div id="playerwrapper">
    <div id="lirik">
      <form id="form1" name="form1" method="post" action="">
        <label>
          <textarea name="hemh" cols="80" rows="5" readonly="readonly" id="lirikText">No Lyryc Found !</textarea>
        </label>
      </form></div>
	  <div id="player"></div>
		<div id="controls">
			<a onClick="player_previous()"><img src="images/player/previous.gif" width="20" height="20"/></a>
			<a onClick="player_repeat()" id="repeat"><img src="images/player/repeat.gif" width="20" height="20"/></a>
			<a onClick="player_shuffle()" id="shuffle"><img src="images/player/shuffle.gif" width="20" height="20"/></a>
			<a onClick="player_next()"><img src="images/player/next.gif" width="20" height="20"/></a>
		</div>
		
		<div id="controls2">
			<p><a onClick="playlist_clear()">Clear Playlist</a><br/>
			  <a onClick="playlist_randomize()">Randomize Playlist</a></p>
        </div>
		<div id="playlist"></div>
	</div>
	
  
	<div>
	<table width="500" border="0" align="left">
		<tr>
			<th width="34" bgcolor="#FFFFFF">&nbsp;</th>
			<th width="301" bgcolor="#FFFFFF">Title</th>
			<th width="82" bgcolor="#FFFFFF">Length</th>
			<th width="65" bgcolor="#FFFFFF">Size</th>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"><a onClick="add_clip('1')"><img src="images/icons/add.png" width="16" height="16"/></a></td>
			<td bgcolor="#FFFFFF">The Beatles: Rock Band - Office Commercial</td>
			<td bgcolor="#FFFFFF">3:56</td>
			<td bgcolor="#FFFFFF">12.2 MB</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"><a onClick="add_clip('2')"><img src="images/icons/add.png" width="16" height="16"/></a></td>
			<td bgcolor="#FFFFFF">GTA IV - Swing Glitch: Ambulance</td>
			<td bgcolor="#FFFFFF">0:30</td>
			<td bgcolor="#FFFFFF">1.51 MB</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"><a onClick="add_clip('3')"><img src="images/icons/add.png" width="16" height="16"/></a></td>
			<td bgcolor="#FFFFFF">GTA IV - Swing Glitch: Truck</td>
			<td bgcolor="#FFFFFF">0:14</td>
			<td bgcolor="#FFFFFF">721 KB</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"><a onClick="add_clip('4')"><img src="images/icons/add.png" width="16" height="16"/></a></td>
			<td bgcolor="#FFFFFF">Halo 3 - Lagman Goes AFK</td>
			<td bgcolor="#FFFFFF">4:43</td>
			<td bgcolor="#FFFFFF">14.3 MB</td>
		</tr>
		<tr>
			<td height="20" bgcolor="#FFFFFF"><a onClick="add_clip('5')"><img src="images/icons/add.png" width="16" height="16"/></a></td>
		  <td bgcolor="#FFFFFF">Mass Effect - Invisible Gun</td>
			<td bgcolor="#FFFFFF">0:39</td>
			<td bgcolor="#FFFFFF">1.85 MB</td>
		</tr>
	</table>
	<div id="apDiv1">
	  <div id="gambar">Album Cover</div></div>
    </div>
</div>
</center>