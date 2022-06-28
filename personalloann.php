<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 

include 'includes/head.php';
$con1= mysqli_connect("localhost","root","","bank");
$con2= mysqli_connect("localhost","root","","bank");
$con3= mysqli_connect("localhost","root","","bank");
 ?>

  <?php  

  if(isset($_POST['add_vis'])){
  function generatekey(){
  $keyLenght=8;
  $str="1234567890";
  $randStr=substr(str_shuffle($str),0,$keyLenght);
  return $randStr;
}
$i=generatekey();
  $house_id =$i;
  $first_name = $_POST['f-name'];
  $middle_name = $_POST['m-name'];
  $last_name = $_POST['l-name'];
  $fullname=$first_name;
  $fullname .= " ";
  $fullname .=$middle_name;
  $fullname .=" ";
  $fullname .=$last_name;
  $birthdate = $_POST['date'];
  $birth_place = $_POST['birth_place'];
  $gender = $_POST['gender'];
  $phone_no = $_POST['number'];  
  $email = $_POST['email'];
  $type_of_id = $_POST['t-id'];
  $id_no = $_POST['id-no'];
  $perma_address = $_POST['per_address'];
  $civil_status = $_POST['civil-status'];
  $place_of_work = $_POST['p-work'];
  $job_title = $_POST['j-title'];
  $years_of_employeed = $_POST['y-employ'];
  $monthly_income = $_POST['m-income'];
  $lamount = $_POST['lamount'];
  $purpose_of_loan = $_POST['p-loan'];
  $gender = $_POST['gender'];
  $loan_term = $_POST['l-term'];
  $companyname = $_POST['companyname'];
  $bankname = $_POST['bankname'];
  $accountnum = $_POST['accountnum'];
  $guarantor_name = $_POST['g-name'];
  $relation = $_POST['relation'];
  $guarantor_place_of_work = $_POST['g-p-w'];
  $guarantor_income = $_POST['g-income'];
  $guarantor_id_type = $_POST['g-idtype'];
  $guarantor_id_number = $_POST['g-idnumber'];
  $guarantor_phone_number = $_POST['g-pnumber'];


   //image 
    $name_firstid= $_FILES['firstid']['name'];
    $type_firstid= $_FILES['firstid']['type'];
    $data_firstid= addslashes(file_get_contents($_FILES['firstid']['tmp_name']));

  //image 
  $name_secondid= $_FILES['secondid']['name'];
    $type_secondid= $_FILES['secondid']['type'];
    $data_secondid= addslashes(file_get_contents($_FILES['secondid']['tmp_name']));


   $sql  = "INSERT INTO `personal_loan`(`id`, `first_name`, `middle_name`, `last_name`, `birthdate`, `birth_place`,`gender`, `phone_no`, `email`, `type_of_id`, `id_no`, `perma_address`, `civil_status`, `place_of_work`, `job_title`, `years_of_employeed`, `monthly_income`,`lamount`, `purpose_of_loan`, `loan_term`,`companyname`,`bankname`,`accountnum`, `guarantor_name`, `relation`, `guarantor_place_of_work`, `guarantor_income`, `guarantor_id_type`, `guarantor_id_number`, `guarantor_phone_number`, `fid`, `sid`, `tid`) VALUES ('$house_id','  $first_name','$middle_name','$last_name','$birthdate','$birth_place','$gender','$phone_no','$email','$type_of_id','$id_no','$perma_address','$civil_status','$place_of_work','$job_title','$years_of_employeed','$monthly_income','$lamount','$purpose_of_loan','$loan_term','$companyname','$bankname','$accountnum','$guarantor_name','$relation','$guarantor_place_of_work','$guarantor_income','$guarantor_id_type','$guarantor_id_number','$guarantor_phone_number','$fid','$sid','$tid')";
      
         $query="INSERT INTO `loan_processing_approval`(`id`, `accountnum`,`Full_Name`, `Ref_Number`, `Type_of_loan`, `Amount_loan`, `Status`) VALUES ('','$accountnum','$fullname ','$house_id','Personal Loan','$lamount','Pending')";
if ($con1->query($sql)===TRUE AND $con2->query($query)===TRUE) {
                echo '<script type="text/javascript">
                    swal("", "Succesfully Encoded", "success").then(function() {
                    window.location = "personalloann.php";});
                  </script>';
                }
}

        ?>


        <section class="page-section bg-primary" style="padding: 100px" id="about">
                
                <!--Appplication Form -->
    <div class="applcation_form">

         <form method="POST">

         <table class="table table-bordeless">
         </table>

        <table class="table table-bordeless">
          <thead class="thead-dark">
            <!-- Start OF Application Form-->
          <tr>
            <th colspan="5"> Personal Application Form</th>
          </tr>
         </thead>
          <tbody>
            <tr>
              <td colspan="2"><label>First Name:</label>  <input type="text" name="f-name" id="formControlLg" class="form-control form-control-lg" placeholder="First Name" required /></td>

              <td colspan="2"><label>Middle Name:</label><input type="text"  name="m-name" id="formControlLg" class="form-control form-control-lg" placeholder="Middle Name" required /></td>

              <td colspan="2"><label>Last Name:</label> <input type="text" name="l-name" id="formControlLg" class="form-control form-control-lg" placeholder="Last Name" required/> </td>
            </tr>

            <tr>
            <td> <label>Birth Date:</label>

                <input type="date" name="date" class="form-control form-control-lg" />
                   </td>

              <td><label>Birth Place:</label>
                <input type="text" id="formControlLg" name="birth_place" class="form-control form-control-lg" placeholder="Birth Place" required /></td>

               <td><label>Gender</label>
                <select   name="gender" class="form-control  form-control-lg">
                          <option>Select</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
              </td>
              
            <td colspan="2"><label>Mobile no/s:
            </label><input type="number" name="number" id="formControlLg" class="form-control form-control-lg" placeholder="+63" required /></td>

            <td colspan="2"><label>Emails Address:</label><input type="email" name="email" id="formControlLg" class="form-control form-control-lg" placeholder="email@gmail.com" required /></td>
          </tr>

            <tr>
            <td colspan="2"><label>Type of ID:
            </label><input type="text" name="t-id" id="formControlLg" class="form-control form-control-lg" placeholder="Type of ID" required /></td>
        
            <td colspan="2"><label>ID Number:
            </label><input type="number" name="id-no" id="formControlLg" class="form-control form-control-lg" placeholder="ID Number" required /></td>

            <td colspan="2"><label> Permanent address :</label>
              <input type="text" id="formControlLg" name="per_address" class="form-control form-control-lg" placeholder="Full Address" required />
              </td>
            </tr>
            <tr>
              <td><label>Civil Status:</label>
                  <select name="civil-status" class="form-control  form-control-lg">
                          <option>Select</option>
                          <option value="single">Single</option>
                          <option value="married">Married</option>
                          <option value="divorsed">Divorsed</option>
                          <option value="common_law">Common-Law</option>
                        </select>
              </td>

              <td colspan="2"><label> Place of Work :</label>
              <input type="text" id="formControlLg" name="p-work" class="form-control form-control-lg" placeholder="Place of Work" required />
              </td>

              <td><label>Job Title:</label> <input type="text" name="j-title" id="formControlLg" class="form-control form-control-lg" placeholder="Job Title" required /></td>

              <td colspan="2" ><label>Years of Employed:</label> <input type="text" name="y-employ" id="formControlLg" class="form-control form-control-lg" placeholder="Years of Employed" required /></td>
              </tr>
              <tr>
              <td><label>Monthy Income:</label> <input type="number" name="m-income" id="formControlLg" class="form-control form-control-lg" placeholder="Monthly Income" required /></td>

              <td><label>Loan Amount:</label> <input type="number" name="lamount" id="formControlLg" class="form-control form-control-lg" placeholder="Loan Amount" required /></td>

             <td colspan="2" ><label>Purpose of Loan:</label>
                  <select name="p-loan" class="form-control  form-control-lg">
                          <option>Select</option>
                          <option value="Medical Procedures">Medical Procedures</option>
                          <option value="Vacation or Weddings">Vacation or Weddings</option>
                          <option value="Home Improvesments">Home Improvesments</option>
                        </select>
              </td>

              <td colspan="2" ><label>Loan Term</label>
                <select   name="l-term" class="form-control  form-control-lg">
                          <option>Select</option>
                          <option value="Long Term">Long Term (1-25 Years)</option>
                          <option value="Short Term">Short Term(3-11 Months)</option>
                          <option value="Intermediate Term">Intermediate Term(1-15 Years)</option>
                        </select> 
              </td>
            </tr>

            <tr>
                <td>
                 <label style="color: red ;"> *For Verification please provide your bank details. </label> <br>
                </td>
                </tr>
              <td colspan="2"><label>Company Name:</label>  <input type="text" name="companyname" id="formControlLg" class="form-control form-control-lg" placeholder="Company Name" required /></td>

              <td colspan="2"><label>Bank Name:</label>  <input type="text" name="bankname" id="formControlLg" class="form-control form-control-lg" placeholder="Bank Name" required /></td>

              <td><label>Account Number:</label><input type="number"  name="accountnum" id="formControlLg" class="form-control form-control-lg" placeholder="Account Number" required /></td>
            </tr>

              <td><label>Guarantor Name :</label> <input type="text" name="g-name" id="formControlLg" class="form-control form-control-lg" placeholder="Guarantor Name" required /></td>

              <td colspan="2"><label>Relation to the Guarantor :</label> <input type="text" name="relation" id="formControlLg" class="form-control form-control-lg" placeholder="Relation to the Guarantor" required /></td>

              <td colspan="2"><label>Guarantor Place of Work :</label> <input type="text" name="g-p-w" id="formControlLg" class="form-control form-control-lg" placeholder="Guarantor Place of Work" required /></td>

              </tr>
              <tr>
              <td colspan="2"><label>Guarantor Monthly Income :</label> <input type="number" name="g-income" id="formControlLg" class="form-control form-control-lg" placeholder="Guarantor Monthly Income" required /></td>
              
              <td colspan="2" ><label>Guarantor ID Type :</label> <input type="text" name="g-idtype" id="formControlLg" class="form-control form-control-lg" placeholder="Guarantor ID Type" required /></td>
              </tr>
              <tr>
              <td colspan="2"><label>Guarantor ID Number :</label> <input type="number" name="g-idnumber" id="formControlLg" class="form-control form-control-lg" placeholder="Guarantor ID Number" required /></td>

              <td colspan="2"><label>Guarantor Phone Number :</label> <input type="number" name="g-pnumber" id="formControlLg" class="form-control form-control-lg" placeholder="Guarantor Phone Number" required /></td>
            </tr>

            
                <td>
                 <label style="color: red ;"> *If employeed upload your copy of pay slip for verification. </label> <br>
                </td>
              <td colspan="2"><span>Please upload your Pay Slip</span> <input type="file" name="firstid" id="inputGroupFile01" class="form-control form-control-lg"></td>
              </tr>
              <tr>
                <td>
                 <label style="color: red ;"> *Please upload your ID here. </label> <br>
                </td>
              <td colspan="2"><span>Please upload your ID picture</span> <input type="file" name="secondid" id="inputGroupFile01" class="form-control form-control-lg" required></td>
              </tr>
            </tr>

         </thead>
          </tbody>          
        </table>
           <button type="submit" class="submit" name="add_vis">Apply Now!</button>
          </form>
          <br><br><br><br>



        </section>





        
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">  Wow sa Banko ng BCP - ITbank </div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
