
$f("player", "js/flowplayer-3.2.2.swf", {
	clip: {
		autoPlay: true,
		autoBuffering: true,
		baseUrl: '/belajar2/',
		onFinish: function() {
			setTimeout('player_next()',1);
			
		}
		
	},
	onLoad: function() {
		refresh_playlist();
	},
	plugins: {
		audio: {
			url: 'js/flowplayer.audio-3.2.0.swf'
		},
		controls: {
		fullscreen: true,
		height: 20,
		autoHide: false
		}
	}
	
	
});

var playlist = [];
var playlist_clip = 0;
var playlist_shuffle = false;
var playlist_repeat = false;
var pointer=0;
function add_clip(id)
{    $.ajax({
	    type: 'GET',
	    url: 'playlist.php',
	    dataType: "html",
	    success: function(response) {
			old_len = playlist.length;
			playlist.push ({		
				url: $("song[id="+id+"] > url", response).text() ,
				title: $("song[id="+id+"] > title", response).text(),
				filesize: $("song[id="+id+"] > filesize", response).text(),
				length: $("song[id="+id+"] > length", response).text(),	
				lirik: $("song[id="+id+"] > lirik", response).text(),
				images: $("song[id="+id+"] > images", response).text()
			});
			if (old_len == 0) {
				play_clip(0);
			}
			refresh_playlist();
	    }
	});
}

function play_clip(id)
{
	$("#playlist_clip_" + playlist_clip).removeClass('playlist_active');
	$f().play( playlist[id]);
	playlist_clip = id;
	$("#playlist_clip_" + playlist_clip).addClass('playlist_active');
	$("#gambar").html('<img  src="'+ playlist[id].images +'" width="70" height="60">');
   document.form1.hemh.value=playlist[id].lirik;
}

function refresh_playlist()
{
	html = '<table>'
		+ '<tr>'
			+ '<th style="width:36px;">&nbsp;</th>'
			+ '<th>Title</th>'
			+ '<th style="width:24px;">&nbsp;</th>'
		+ '</tr>';
	for(var i=0;i<playlist.length;i++){
		html = html
		 + '<tr id="playlist_clip_' + i + '">'
		 	 + '<td style="text-align:center;white-space:nowrap;">'
				 	 + '<a onClick="playlist_move(' + i + ',\'up\')"><img src="images/icons/arrow_up.png" width="16" height="16"/></a>'
				 	 + '<a onClick="playlist_move(' + i + ',\'down\')"><img src="images/icons/arrow_down.png" width="16" height="16"/></a>'
		 	 + '</td>'
		 	 + '<td><a onClick="play_clip(' + i + ')">' + playlist[i].title + '</a></td>'
		 	 + '<td style="text-align:center;"><a onClick="delete_clip(' + i + ')"><img src="images/icons/delete.png" width="16" height="16"/></a></td>'
		 + '</tr>';
	}
	html = html
		 + '</table>';
	$("#playlist").html(html);
	$("#playlist_clip_" + playlist_clip).addClass('playlist_active');	
	//$('#lirik').html(playlist[id].lirik);
	//document.form1.hemh.value=playlist[pointer].lirik;
}

function delete_clip(id)
{
	playlist.splice(id,1);
	if (playlist_clip == id) {
		playlist_clip = playlist_clip - 1;
	}
	refresh_playlist();
	
}

Array.prototype.move = function(index, delta)
{
	var index2, temp_item;
	if (index < 0 || index >= this.length) {
		return false;
	}
	index2 = index + delta;
	if (index2 < 0 || index2 >= this.length || index2 == index) {
		return false;
	}
	temp_item = this[index2];
	this[index2] = this[index];
	this[index] = temp_item;
	return true;

}

function playlist_move(id, delta)
{
	if (delta == 'up' && id != 0) {
		playlist.move(id, -1);
		if (id == playlist_clip) {
			playlist_clip = id - 1;
		} else if (playlist_clip == id - 1) {
			playlist_clip = id;
		}
		refresh_playlist();
	} else if (delta == 'down' && id != (playlist.length - 1)) {
		playlist.move(id, 1);
		if (playlist_clip == id) {
			playlist_clip = id + 1;
		} else if (playlist_clip == id + 1) {
			playlist_clip = id;
		}
		refresh_playlist();
	}
}

function playlist_randomize()
{
	oldpl = playlist;
	newpl = [];
	while (oldpl.length > 0) {
		rand = Math.floor(Math.random() * oldpl.length);
		newpl.push(oldpl[rand]);
		oldpl.splice(rand,1);
	}
	playlist = newpl;
	play_clip(playlist_clip);
	refresh_playlist();
}

function playlist_clear()
{
	playlist = [];
	refresh_playlist();
	$("#gambar").html("Album cover");
   document.form1.hemh.value="No lyryc founds !";
}

function player_next()
{
	if (playlist_shuffle == true) {
		rand = Math.floor(Math.random() * playlist.length);
		play_clip(rand);
	} else {
		if (playlist_clip != (playlist.length - 1)) {
			play_clip(playlist_clip + 1);
		} else if (playlist_clip==(playlist.length-1) && playlist_repeat==true) {
			play_clip(0);
		}
	}
}

function player_previous()
{
	if (playlist_shuffle == true) {
		rand = Math.floor(Math.random() * playlist.length);
		play_clip(rand);
	} else {
		if (playlist_clip != 0) {
			play_clip(playlist_clip - 1);
		} else if (playlist_clip == 0 && playlist_repeat == true) {
			play_clip(playlist.length - 1);
		}
	}
}

function player_repeat()
{
	if (playlist_repeat == false) {
		playlist_repeat = true;
		$("#repeat").html('<img src="images/player/repeat_on.gif" width="20" height="20"/>');
		if (playlist_shuffle == true) {
			playlist_shuffle = false;
			$("#shuffle").html('<img src="images/player/shuffle.gif" width="20" height="20"/>');
		}
	} else {
		playlist_repeat = false;
		$("#repeat").html('<img src="images/player/repeat.gif" width="20" height="20"/>');
	}
}

function player_shuffle()
{
	if (playlist_shuffle == false) {
		playlist_shuffle = true;
		$("#shuffle").html('<img src="images/player/shuffle_on.gif" width="20" height="20"/>');
		if (playlist_repeat == true) {
			playlist_repeat = false;
			$("#repeat").html('<img src="images/player/repeat.gif" width="20" height="20"/>');
		}
	} else {
		playlist_shuffle = false;
		$("#shuffle").html('<img src="images/player/shuffle.gif" width="20" height="20"/>');
	}
}



