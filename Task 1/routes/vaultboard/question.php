<!DOCTYPE html>
<html>
<head>
<link href="bootstrap.css" rel="stylesheet" type="text/css">


  <style>
  /* change player background color */
  #myAudio {
      background-color: #9FD6BA;
  }
  </style>

</head>
<body>
<div class = "container">
<?php
	include 'connect.php';
	$id = $_POST['id'];
	$sql2 = "select * from screeningquestion where Jobid = '$id'";
	$result2 = $conn->query($sql2);
	
	while($row = $result2->fetch_assoc()) {
	if($row['question_type'] == 'Audio'){
		echo "<h2>".$row['question']."</h2>";
		$time = $row['timeduration'];
		echo "
		<link href='css/video-js.min.css' rel='stylesheet'>
  <link href='css/videojs.record.css' rel='stylesheet'>

  <script src='js/video.min.js'></script>
  <script src='js/RecordRTC.js'></script>
  <script src='js/adapter.js'></script>
  <script src='js/wavesurfer.min.js'></script>
  <script src='js/wavesurfer.microphone.min.js'></script>
  <script src='js/videojs.wavesurfer.min.js'></script>

  <script src='js/videojs.record.js'></script>
		<audio id='myAudio' class='video-js vjs-default-skin'></audio>

<script>
var player = videojs('myAudio', {
    controls: true,
    width: 600,
    height: 300,
    fluid: false,
    plugins: {
        wavesurfer: {
            src: 'live',
            waveColor: '#36393b',
            progressColor: 'black',
            debug: true,
            cursorWidth: 1,
            msDisplayMax: 20,
            hideScrollbar: true
        },
        record: {
            audio: true,
            video: false,
            maxLength: 3,
            debug: true
        }
    }
}, function() {
    // print version information at startup
    var msg = 'Using video.js ' + videojs.VERSION +
        ' with videojs-record ' + videojs.getPluginVersion('record') +
        ', videojs-wavesurfer ' + videojs.getPluginVersion('wavesurfer') +
        ', wavesurfer.js ' + WaveSurfer.VERSION + ' and recordrtc ' +
        RecordRTC.version;
    videojs.log(msg);
});
// error handling
player.on('deviceError', function() {
    console.log('device error:', player.deviceErrorCode);
});
player.on('error', function(error) {
    console.log('error:', error);
});
// user clicked the record button and started recording
player.on('startRecord', function() {
    console.log('started recording!');
});
// user completed recording and stream is available
player.on('finishRecord', function() {
    // the blob object contains the recorded data that
    // can be downloaded by the user, stored on server etc.
    console.log('finished recording: ', player.recordedData);

    var formData = new FormData();
    formData.append('audio', player.recordedData);
    
    // Execute the ajax request, in this case we have a very simple PHP script
    // that accepts and save the uploaded 'video' file
    xhr('servers/upload-audio.php', formData, function (fName) {
        console.log('Video succesfully uploaded !',fName);
    });

    // Helper function to send 
    function xhr(url, data, callback) {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                callback(location.href + request.responseText);
            }
        };
        request.open('POST', url);
        request.send(data);
    }

});
</script>";
	}
}
	$id = $_POST['id'];
	$sql = "select * from screeningquestion where Jobid = '$id'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		if($row['question_type'] == 'Text'){
			echo "<h2>".$row['question']."</h2>";
			echo "<textarea class='form-control' name='Text' style='width: 100%; height: 120px;'></textarea>";
	}
	}
	$id = $_POST['id'];
	$sql1 = "select * from screeningquestion where Jobid = '$id'";
	$result1 = $conn->query($sql1);
	
	while($row = $result1->fetch_assoc()) {
	 if($row['question_type'] == 'Video'){
		echo "<h2>".$row['question']."</h2>";
		$time = $row['timeduration'];
		echo "
		<link href='css1/video-js.min.css' rel='stylesheet'>
  <link href='css1/videojs.record.css' rel='stylesheet'>

  <link href='css1/video-js.min.css' rel='stylesheet'>
  <link href='css1/videojs.record.css' rel='stylesheet'>

  <script src='js1/video.min.js'></script>
  <script src='js1/RecordRTC.js'></script>
  <script src='js1/adapter.js'></script>

  <script src='js1/videojs.record.js'></script>
		<video id='myVideo' class='video-js vjs-default-skin'></video>

<script>
var player = videojs('myVideo', {
    controls: true,
    width: 320,
    height: 240,
    fluid: false,
    plugins: {
        record: {
            audio: true,
            video: true,
            maxLength: 10,
            debug: true
        }
    }
}, function(){
    // print version information at startup
    var msg = 'Using video.js ' + videojs.VERSION +
        ' with videojs-record ' + videojs.getPluginVersion('record') +
        ' and recordrtc ' + RecordRTC.version;
    videojs.log(msg);
});
// error handling
player.on('deviceError', function() {
    console.log('device error:', player.deviceErrorCode);
});
player.on('error', function(error) {
    console.log('error:', error);
});
// user clicked the record button and started recording
player.on('startRecord', function() {
    console.log('started recording!');
});
// user completed recording and stream is available
player.on('finishRecord', function() {
    // the blob object contains the recorded data that
    // can be downloaded by the user, stored on server etc.
    console.log('finished recording: ', player.recordedData);

    var formData = new FormData();
    formData.append('audiovideo', player.recordedData.video);
    
    // Execute the ajax request, in this case we have a very simple PHP script
    // that accepts and save the uploaded 'video' file
    xhr('servers/upload-audio.php', formData, function (fName) {
        console.log('Video succesfully uploaded !');
    });

    // Helper function to send 
    function xhr(url, data, callback) {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                callback(location.href + request.responseText);
            }
        };
        request.open('POST', url);
        request.send(data);
    }
});
</script>";
	}
	}
	
	
?>
<br>
<form method="post" action="servers/upload-audio.php">
        <input type="hidden" name="id" value="<?php echo $row['job_id'];?>"/><button type = "submit" class = "btn btn-primary">Submit</button></form>
</div>
</body>
</html>