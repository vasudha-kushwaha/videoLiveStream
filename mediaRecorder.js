const videoElem = document.getElementById('stream-elem')
var startBtn = document.getElementById('start-stream')
var endBtn = document.getElementById('stop-media')
var cntMovedOut = 0;
var cntMovedIn = 0;
var blobContainer = [];
var recorder;

const settings = {
  audio: {
    echoCancellation: { exact: true },
  },
//   video: false,
  video: {
    width: 150,
    height: 100,
  },
}
startBtn.addEventListener('click', function (e) {
    startRecording();
})
window.onfocus = function (event) {
    cntMovedIn ++;
    // new video object will not initialised, new video data will be append to previous created object
    resumeRecording();
    console.log("gained focus resume recording");
};
window.onload = function (event) {
    getUserName();
    cntMovedOut = 0;
    cntMovedIn = 0;
    //on window load video object initialised new video recording starts
    startRecording();
    console.log("doc loaded");
};
// window.addEventListener("load", (event) => {
//     //on window load video object initialised new video recording starts
//     startRecording();
//     console.log("doc loaded");
//     //setIntervalTest();
// });

//stop recording on window focus lost, on unload
endBtn.addEventListener('click', function (e)       
{  
    console.log("Clicked on Stop Recording"); 
    stopRecording();  
})
window.onblur = function (event)       
{        
    cntMovedOut ++;
    console.log("lost focus");
    pauseRecording();
};

function startRecording()
{
    navigator.mediaDevices.getUserMedia(settings).then((stream) => {
        videoElem.srcObject = stream
        recorder = new MediaRecorder(stream)
        // console.log(recorder);
        if (recorder.state === "paused") {
            recorder.resume();
            console.log("recording resume");
        } 
        // else if (recorder.state === "recording") {
        //     recorder.pause();
        //     console.log("recording paused");
        // }
        else 
        {
            recorder.start();
            console.log("recording started");
        } 
        // empty array, blobContainer, is created to store the recorded video chunks.
        //const blobContainer = [];
        recorder.onstart = function (e) {
            recorder.state = "recording";
            //blobContainer.push(e.data);
            console.log("onstart");
            //sendDataToServer(blobContainer);
        }
  
        recorder.ondataavailable = function (e) {
            //recorder.state = "recording";
            blobContainer.push(e.data);
            console.log("data available");
            sendDataToServer(blobContainer);
        }

        recorder.onpause = function (e) {
            recorder.state = "paused";
            recorder.requestData();
            console.log("onpause");
            //sendDataToServer(blobContainer);
        }

        recorder.onresume = function (e) {
            recorder.state = "recording";
            recorder.requestData();
            console.log("onresume");
        }

        recorder.onerror = function (e) {
            recorder.state = "inactive";
            return console.log(e.error || new Error(e.name));
        }
        recorder.onstop = function (e) { 
            recorder.state = "inactive";
            //blobContainer.push(e.data);
            //sendDataToServer(blobContainer);         
            // clearInterval(myInterval);
        } 
    })
    //setInterval(sendDataToServer(blobContainer), 1000); 
}

function pauseRecording()
{           
	console.log("pauseRecording");       
	recorder.pause();
}
function stopRecording()
{           
	console.log("stopRecording");       
	recorder.stop();
}
function resumeRecording()
{           
	console.log("resumeRecording");       
	recorder.resume();
}

function sendDataToServer(blobContainer)
{                  
  //console.log(blobContainer);
  var formdata = new FormData();
  formdata.append('blobFile', new Blob(blobContainer));
  formdata.append('name', 'vasudha');
  formdata.append('cntMovedOut', cntMovedOut);
  formdata.append('cntMovedIn', cntMovedIn);
  fetch('uploader.php', {
      method: 'POST',             
      body: formdata                                                                  
  }).then((result)=>{
      console.log("data saved");                                        
  })
}      

let isAudio = true
function muteAudio() {
    isAudio = !isAudio
    stream.getAudioTracks()[0].enabled = isAudio
}

let isVideo = true
function muteVideo() {
    isVideo = !isVideo
    stream.getVideoTracks()[0].enabled = isVideo
}

function getUserName() 
{
    var person = prompt("Please enter your name", "");
    if (person != null) {
      document.getElementById("name").innerHTML =
      "Hello " + person + "! How are you today?";
    }
}
