<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Javascript Live Streaming</title>
</head>
<body>
  <div class="container m-3">
    <h2 class="text-center text-info">Video livestream Project</h2><hr>
    <div class="row">
      <div class="col-md-3 text-center">
        <video autoplay="" id="stream-elem" controls height="100" width="150">
          <source src="" type="">
        </video>
        <div class="">
          <button class="btn btn-success btn-sm" id="start-stream">Start</button>
          <button class="btn btn-warning btn-sm" id="stop-media">Stop</button>
          <!-- <button onclick="muteVideo()">Mute Video</button>
          <button onclick="muteAudio()">Mute Audio</button> -->
        </div>
      </div>
      <div class="col-md-4">
        <h5>Interview Details</h5>
        <table>
          <tr><td>Candidate</td><td>:</td><td>Vasudha</td></tr>
          <tr><td>Date</td><td>:</td><td>10-06-2023</td></tr>
          <tr><td>Time</td><td>:</td><td>10:00 AM</td></tr>
          <tr><td>Skills</td><td>:</td><td>PHP, Javascript, MySQL</td></tr>
        </table>
      </div>
      <div class="col-md-5">
        <h5 id="name"></h5>
        <div id="report"></div>
      </div>  
    </div><hr/>
    <div class="row">
      <div class="col-md-12">
        <div class="bix-div-container" id="">

          <div class="question">
              <p>1. There was a sharp class division at Harappa and Mohen-jodaro. This is clear from the</p>
          </div>
          <div class="options">
            <div class="d-flex flex-row align-items-top bix-opt-row form-check"> 
              <div>
                  <input type="radio" class="form-check-input opt-check-input" name="chk_opt_43" value="val_A_43">
                  <span id="lnkOptionLink_A_43" class="mdi mdi-alpha-a-circle-outline"></span>
              </div>
              <div class="flex-wrap">Indus seals excavated</div>
            </div>
            <div class="d-flex flex-row align-items-top bix-opt-row form-check"> 
              <div>
                  <input type="radio" class="form-check-input opt-check-input" name="chk_opt_43" value="val_A_43">
                  <span id="lnkOptionLink_A_43" class="mdi mdi-alpha-a-circle-outline"></span>
              </div>
              <div class="flex-wrap">Indus seals excavated</div>
            </div>
            <div class="d-flex flex-row align-items-top bix-opt-row form-check"> 
              <div>
                  <input type="radio" class="form-check-input opt-check-input" name="chk_opt_43" value="val_A_43">
                  <span id="lnkOptionLink_A_43" class="mdi mdi-alpha-a-circle-outline"></span>
              </div>
              <div class="flex-wrap">Indus seals excavated</div>
            </div>
            <div class="d-flex flex-row align-items-top bix-opt-row form-check"> 
              <div>
                  <input type="radio" class="form-check-input opt-check-input" name="chk_opt_43" value="val_A_43">
                  <span id="lnkOptionLink_A_43" class="mdi mdi-alpha-a-circle-outline"></span>
              </div>
              <div class="flex-wrap">Indus seals excavated</div>
            </div>
          </div><hr/><!-- Options -->
          <div class="question">
              <p>2. There was a sharp class division at Harappa and Mohen-jodaro. This is clear from the</p>
          </div>
          <div class="options">
            <div class="d-flex flex-row align-items-top bix-opt-row form-check"> 
              <div>
                  <input type="radio" class="form-check-input opt-check-input" name="chk_opt_43" value="val_A_43">
                  <span id="lnkOptionLink_A_43" class="mdi mdi-alpha-a-circle-outline"></span>
              </div>
              <div class="flex-wrap">Indus seals excavated</div>
            </div>
            <div class="d-flex flex-row align-items-top bix-opt-row form-check"> 
              <div>
                  <input type="radio" class="form-check-input opt-check-input" name="chk_opt_43" value="val_A_43">
                  <span id="lnkOptionLink_A_43" class="mdi mdi-alpha-a-circle-outline"></span>
              </div>
              <div class="flex-wrap">Indus seals excavated</div>
            </div>
            <div class="d-flex flex-row align-items-top bix-opt-row form-check"> 
              <div>
                  <input type="radio" class="form-check-input opt-check-input" name="chk_opt_43" value="val_A_43">
                  <span id="lnkOptionLink_A_43" class="mdi mdi-alpha-a-circle-outline"></span>
              </div>
              <div class="flex-wrap">Indus seals excavated</div>
            </div>
            <div class="d-flex flex-row align-items-top bix-opt-row form-check"> 
              <div>
                  <input type="radio" class="form-check-input opt-check-input" name="chk_opt_43" value="val_A_43">
                  <span id="lnkOptionLink_A_43" class="mdi mdi-alpha-a-circle-outline"></span>
              </div>
              <div class="flex-wrap">Indus seals excavated</div>
            </div>
          </div><hr/><!-- Options -->
        </div><!-- Question container -->
      </div>
    </div>
  </div>
  <script src="mediaRecorder.js"></script>
</body>
</html>