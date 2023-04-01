<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content" style="max-width: 500px !important;">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Contact Form</b></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <!-- Contact Form -->

            <div class="container">

               <!-- Data show in website -->





               <div class=" p-4 bg-secondary text-white border border-2 border-danger" style="border-radius:5%;">
                  <form enctype="multipart/form-data" method="post">
                     <div class="row g-3">
                        <div class="col-md-4">
                           <label for="inputName" class="form-label">Name</label>
                           <input type="text" class="form-control" name="u_name" id="inputName" Required>
                        </div>
                        <div class="col-md-4">
                           <label for="inputEmail" class="form-label">Email</label>
                           <input type="email" class="form-control" name="u_email" id="inputEmail" Required>
                        </div>
                        <div class="col-md-4">
                           <label for="inputimage" class="form-label">Image</label>
                           <input type="file" class="form-control" name="fileToUpload" id="inputimage">
                           <div>Note: JPG, JPEG, PNG & GIF files are accepted.
                           </div>
                        </div>
                        <div class="col-12">
                           <label for="inputAddress" class="form-label">Address</label>
                           <input type="text" class="form-control" name="u_address" id="inputAddress" placeholder="1234 Main St" Required>
                        </div>
                        <div class="col-md-6">
                           <label for="inputCity" class="form-label">City</label>
                           <input type="text" class="form-control" name="u_city" id="inputCity" Required>
                        </div>
                        <div class="col-md-4">
                           <label for="inputState" class="form-label">State</label>
                           <select id="inputState" class="form-select" name="u_state" Required>
                              <option selected>Choose...</option>
                              <option value="AP">Andhra Pradesh</option>
                              <option value="AR">Arunachal Pradesh</option>
                              <option value="AS">Assam</option>
                              <option value="BR">Bihar</option>
                              <option value="CT">Chhattisgarh</option>
                              <option value="GA">Gujarat</option>
                              <option value="HR">Haryana</option>
                              <option value="HP">Himachal Pradesh</option>
                              <option value="JK">Jammu and Kashmir</option>
                              <option value="GA">Goa</option>
                              <option value="JH">Jharkhand</option>
                              <option value="KA">Karnataka</option>
                              <option value="KL">Kerala</option>
                              <option value="MP">Madhya Pradesh</option>
                              <option value="MH">Maharashtra</option>
                              <option value="MN">Manipur</option>
                              <option value="ML">Meghalaya</option>
                              <option value="MZ">Mizoram</option>
                              <option value="NL">Nagaland</option>
                              <option value="OR">Odisha</option>
                              <option value="PB">Punjab</option>
                              <option value="RJ">Rajasthan</option>
                              <option value="SK">Sikkim</option>
                              <option value="TN">Tamil Nadu</option>
                              <option value="TG">Telangana</option>
                              <option value="TR">Tripura</option>
                              <option value="UT">Uttarakhand</option>
                              <option value="UP">Uttar Pradesh</option>
                              <option value="WB">West Bengal</option>
                              <option value="AN">Andaman and Nicobar Islands</option>
                              <option value="CH">Chandigarh</option>
                              <option value="DN">Dadra and Nagar Haveli</option>
                              <option value="DD">Daman and Diu</option>
                              <option value="DL">Delhi</option>
                              <option value="LD">Lakshadweep</option>
                              <option value="PY">Puducherry</option>
                           </select>
                        </div>
                        <div class="col-md-2">
                           <label for="inputpincode" class="form-label">Pincode</label>
                           <input type="text" class="form-control" name="u_pincode" id="inputpincode" Required>
                        </div>
                        <div class="col-12">
                           <button type="submit" name="send" id="send" class="btn btn-primary send">Send</button>

                        </div>
                     </div>
                  </form>

               </div>

            </div>

         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>