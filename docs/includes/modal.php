<?php 

  if(isset($_POST['submit'])){

    //assign vars
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $company = mysqli_real_escape_string($db->link, $_POST['company']);
    $description = mysqli_real_escape_string($db->link, $_POST['description']);

    if($name == '' || $email == '' || $company == '' || $description == ''){
      //Set Error
      $error = "Please fill out all required fields";
    } else {

      //Create Query
      $query = "INSERT INTO contacts (name, email, company, projectDescription) VALUES('$name', '$email', '$company', '$description')" ;

      $insert_row = $db->insert($query);
    }

  }

?>



    

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Submit a Project Query</h4>
          </div>

          <div class="modal-body">
            
            <form role="form" method="post" class = "text-left">

                  <div class="form-group">
                    <label>Name</label>
                      <input type="name" name = "name" class="form-control"
                      id="name" placeholder="Enter Name"/>
                  </div>

                  <div class="form-group">
                    <label>Company</label>
                      <input name = "company" class="form-control"
                      id="company" placeholder="Enter Company"/>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                      <input name = "email" type="email" class="form-control"
                      id="exampleInputEmail1" placeholder="Enter email"/>
                  </div>
                  
                  <div class="form-group">
                    <label class="form-label">Project Desription</label>
                    
                    <br>
                    <textarea type="text" class= "form-control" id="description" name="description" placeholder="Enter Project Description"></textarea> 
                  </div>
                  
                  <button type="submit" class="btn btn-success" name="submit">Submit</button>
                  
                </form>
          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
