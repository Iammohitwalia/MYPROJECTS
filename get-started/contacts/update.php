<?php
require_once'../connection.php';
session_start();
    require_once __DIR__ . '/../bootstrap/app.php';
    require_once file_header();
  /*  if ($_SESSION['username']) {
        $file_contact = file_get_contents(file_contact());
        $file_contact_decode = json_decode($file_contact, true);
        $filter = array_filter($file_contact_decode, function ($datas) {
            if ($datas['id'] == $_GET['id']) {
                foreach ($datas as $dats) {
                    return $dats;
                }
            }
        });*/
        $id=$_GET['id'];
        $sql="SELECT * FROM `contacts` WHERE id='$id'";
        $data = $conn->prepare($sql);
        $data->execute();
        $results = $data->fetchAll(PDO::FETCH_ASSOC);
          foreach ($results as $result) {
?>
            <div class="container bootstrap snippet">
                <div class="row">
                    <div class="col-sm-3">
                        <!--left col-->
                        <div class="text-center">
                        <td><img src="../storage/app/public/<?php echo 'contact' . $result['img'] ?> " height="50px" width="50px"></td>
                            <h6>Upload a different photo...</h6>
                            <form class="form" method="post" enctype="multipart/form-data">
                                <input type="file" name="avtar" class="text-center center-block file-upload">
                        </div>
                        </hr><br>
                    </div>
                    <!--/col-3-->
                    <div class="col-sm-9">
                        <div class="tab-content">
                            <div class="form-group">
                               <div class="col-xs-6">
                                    <label>
                                        <h4>Name</h4>
                                    </label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $result["name"] ?>" id="first_name" placeholder="first name" required>
                                </div>
                            </div>
                            <div class="form-group">
                           <div class="col-xs-6">
                               <label>
                                   <h4>Alternative Number</h4>
                               </label>
                               <input type="number" class="form-control" name="AlternativeNumber" value="<?php echo $result["AlternativeNumber"] ?>" id="Anumber" placeholder="alaternative number" required>
                           </div>
                       </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label>
                                        <h4>Mobile</h4>
                                    </label>
                                    <input type="number" class="form-control" name="mobile" value="<?php echo $result['mobile'] ?>" id="mobile" placeholder="enter mobile number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label>
                                        <h4>Birthday</h4>
                                    </label>
                                    <input type="date" class="form-control" name="birthday" value="<?php echo $result['birthday'] ?>" id="last_name" placeholder="Birthday" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label>
                                        <h4>Email</h4>
                                    </label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $result['email'] ?>" id="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                  <div class="col-xs-6">
                                        <label>
                                            <h4>Nickname</h4>
                                        </label>
                                        <input type="text" class="form-control" name="nickname" value="<?php echo $result['nickname'] ?>" placeholder="Nickname" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label>
                                                <h4>Company</h4>
                                            </label>
                                            <input type="text" class="form-control" name="company" value="<?php echo $result['company'] ?>" placeholder="Company name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label>
                                                <h4>job title</h4>
                                            </label>
                                            <input type="text" class="form-control" name="jobtitle" value="<?php echo $result['jobtitle'] ?>" placeholder="last name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label>
                                                <h4>Home email</h4>
                                            </label>
                                            <input type="email" class="form-control" name="homeemail" value="<?php echo $result['homeemail'] ?>" placeholder="Home email" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <label>
                                            <h4>website</h4>
                                        </label>
                                        <input type="text" class="form-control" name="website" value="<?php echo $result['website'] ?>" id="last_name" placeholder="website" required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <label>
                                        <h4>Location</h4>
                                    </label>
                                    <input type="text" class="form-control" name="location" value="<?php echo $result['location'] ?>" placeholder="location" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label>
                                        <h4>Notes</h4>
                                    </label>
                                    <input type="text" class="form-control" name="notes" value="<?php echo $result['notes'] ?>" id="last_name" placeholder="Notes" required>
                                </div>
                            </div>
                            <input type="hidden" name="action" value="update">
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
                        <!--/tab-pane-->
                    </div>
                    <!--/tab-content-->
                </div>
                <!--/col-9-->
            </div>
            <!--/row-->
    <?php
        }

    
    require_once file_footer();
    ?>