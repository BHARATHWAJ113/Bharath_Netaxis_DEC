<div class="container p-4">
   <div class="card">
      <div class="card-header">
         Quote
      </div>
      <div class="card-body">
         <blockquote class="blockquote mb-0">
            <p>YOU DON'T STOP RIDING <br>WHEN YOU GET OLD,<br> YOU GET OLD <br> WHEN YOU STOP RIDING.</p>
            <footer class="blockquote-footer">Wanderlust <cite title="Source Title">himalayan_rider12</cite></footer>
         </blockquote>
      </div>
   </div>

   <div class="row">


      <div class="card m-3 col-sm-6 col-lg-3" style="width: 30rem;">
         <img src="./assets/img/img_bg/party.jpg" class="card-img-top" alt="...">
         <div class="card-body">
            <h5 class="card-title"><b>Riders Party</b></h5>
            <p class="card-text text-muted"><q>Use this opportunity to show your talent. Send me your audio and video, you will get chance to sing in riders club.</q></p>
         </div>
         <form method="post" enctype="multipart/form-data">
            <ul class="list-group list-group-flush">
               <li class="list-group-item">
                  <label for="inputName" class="form-label"><b>Name</b></label>
                  <input type="text" class="form-control" name="rp_name" id="inputName" Required>
               </li>
               <li class="list-group-item">
                  <label for="inputEmail" class="form-label"><b>Email</b></label>
                  <input type="email" class="form-control" name="rp_email" id="inputEmail" Required>
               </li>
               <li class="list-group-item">
                  <label for="inputvideo" class="form-label"><b>Video</b></label>
                  <input type="file" class="form-control" name="fileToUploadVideo" id="inputvideo" Required>
                  <div>Note: wap & mp4 files are accepted.
                  </div>
               </li>
               <li class="list-group-item">
                  <label for="inputaudio" class="form-label"><b>Audio</b></label>
                  <input type="file" class="form-control" name="fileToUploadAudio" id="inputaudio" Required>
                  <div>Note: mp3, files are accepted.
                  </div>
               </li>
            </ul>

            <div class="card-body">
               <button type="submit" name="uploadav" id="uploadav" class="btn btn-secondary">
                  Submit
               </button>
            </div>
         </form>
      </div>
      <!-----------------------Result of singer--------------------------------- -->

      <div class="card m-3 col-sm-6 col-lg-3" style="width: 41rem;">
         <img src="./assets/img/img_bg/result.jpg" class="card-img-top" alt="...">
         <div class="card-body">
            <h5 class="card-title"><b>Riders Party</b></h5>
            <p class="card-text text-muted"><q>Result will publish here!!!!!!!!!!!!!!</q></p>
               <div id="info">

               </div>
            <ul class="list-group list-group-flush ">
               <li id="pass" class="list-group-item hide">
                  <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                     <div class="card-header">Rider Clubs</div>
                     <div class="card-body">
                        <h5 class="card-title">Congratulation you where <b><i>selected</i></b></h5>
                        <p class="card-text">Concept details and other details will reach you soon!!!!!.</p>
                     </div>
                  </div>
               </li>
               <li id="wait" class="list-group-item hide">
                  <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                     <div class="card-header">Rider Clubs</div>
                     <div class="card-body">
                        <h5 class="card-title">You are in <b><i>Waiting list</i></b></h5>
                        <p class="card-text">Within two days we will reach you. </p>
                     </div>
                  </div>
               </li>
               <li id="fail" class="list-group-item hide">
                  <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                     <div class="card-header">Rider Clubs</div>
                     <div class="card-body">
                        <h5 class="card-title">you where <b><i>rejected</i></b></h5>
                        <p class="card-text">Better luck next time.<q>Focus on the actions needed to be taken and fail fast so that you learn what not to do.</q></p>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>