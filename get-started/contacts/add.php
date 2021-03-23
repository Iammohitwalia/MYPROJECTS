       <?php
        require_once __DIR__ . "/../bootstrap/app.php";
        require_once file_header();
        
        ?>
       <!-- creat a form to add contact -->
       <div class="container bootstrap snippet">
           <div class="row">
               <div class="col-sm-3">
                   <div class="text-center">
                       <form class="form" method="post" enctype="multipart/form-data">
                           <label> Upload an image...</label>
                           <input type="file" name="avtar" class="text-center center-block file-upload">
                   </div>
               </div>
              <div class="col-sm-9">
                   <div class="tab-content">
                       <input type="hidden" value="contact" name="action">
                       <div class="form-group">
                           <div class="col-xs-6">
                               <label>
                                   <h4>Name</h4>
                               </label>
                               <input type="text" class="form-control" name="name" id="first_name" placeholder="first name" required>
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="col-xs-6">
                               <label>
                                   <h4>Alternative Number</h4>
                               </label>
                               <input type="number" class="form-control" name="AlternativeNumber" id="Anumber" placeholder="alaternative number" required>
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="col-xs-6">
                               <label>
                                   <h4>Mobile</h4>
                               </label>
                               <input type="number" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" required>
                           </div>
                       </div>
                       <div class="form-group">

                           <div class="col-xs-6">
                               <label>
                                   <h4>Birthday</h4>
                               </label>
                               <input type="date" class="form-control" name="birthday" id="last_name" placeholder="Birthday" required>
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="col-xs-6">
                               <label>
                                   <h4>Email</h4>
                               </label>
                               <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="form-group">
                             <div class="col-xs-6">
                                   <label>
                                       <h4>Nickname</h4>
                                   </label>
                                   <input type="text" class="form-control" name="nickname" placeholder="Nickname" required>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="form-group">

                                   <div class="col-xs-6">
                                       <label>
                                           <h4>Company</h4>
                                       </label>
                                       <input type="text" class="form-control" name="company" placeholder="Company name" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <div class="col-xs-6">
                                       <label>
                                           <h4>job title</h4>
                                       </label>
                                       <input type="text" class="form-control" name="jobtitle" placeholder="last name" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <div class="col-xs-6">
                                       <label>
                                           <h4>Home email</h4>
                                       </label>
                                       <input type="email" class="form-control" name="homeemail" placeholder="Home email" required>
                                   </div>
                               </div>
                               <div class="col-xs-6">
                                   <label>
                                       <h4>website</h4>
                                   </label>
                                   <input type="text" class="form-control" name="website" id="last_name" placeholder="website" required>
                               </div>
                           </div>
                           <div class="col-xs-6">
                               <label>
                                   <h4>Location</h4>
                               </label>
                               <input type="text" class="form-control" name="location" placeholder="location" required>
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="col-xs-6">
                               <label>
                                   <h4>Notes</h4>
                               </label>
                               <input type="text" class="form-control" name="notes" id="last_name" placeholder="Notes" required>
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="form-group">
                               <div class="col-xs-12">
                                   <br>
                                   <input type="submit" name="submit">
                               </div>
                           </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>