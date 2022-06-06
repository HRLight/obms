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
  $id =$i;
  $fname = $_POST['f-name'];
  $mname = $_POST['m-name'];
  $lname = $_POST['l-name'];

  $fullname=$fname;
  $fullname .=$mname;
  $fullname .=$lname;
  $car_type = $_POST['c-type'];
  $unit = $_POST['c-unit'];
  $vehicle_price = $_POST['v-price'];
  $loan_term = $_POST['l-term'];
  $loan_amount = $_POST['l-amount'];
  $downpayment = $_POST['d-payment'];
  $sex = $_POST['gender'];
  $civil_status = $_POST['c-status'];
  $home_address = $_POST['h_address'];
  $perma_address = $_POST['per-address'];
  $date_of_birth = $_POST['date'];
  $place_of_birth = $_POST['b-place'];
  $mobile_no = $_POST['number'];
  $email_address = $_POST['email'];
  $tin_sss_gsis_no = $_POST['tin-sss-gsis-no'];
  $source_of_income = $_POST['source-income'];
  $monthly_income = $_POST['m-income'];
  $employeer_name = $_POST['e-name'];
  $position = $_POST['position'];
  $companyname = $_POST['companyname'];
  $bankname = $_POST['bankname'];
  $accountnum = $_POST['accountnum'];
  $firstid = $_POST['firstid'];
  $secondid = $_POST['secondid'];
  $thirdid = $_POST['thirdid'];


      $sql  = "INSERT INTO `car_loans`(`id`, `car_type`,`loan_term`, `unit`, `vehicle_price`, `loan_amount`, `downpayment`, `fname`, `mname`, `lname`, `sex`, `civil_status`, `home_address`, `perma_address`, `date_of_birth`, `place_of_birth`, `mobile_no`, `email_address`, `tin_sss_gsis_no`, `source_of_income`, `monthly_income`, `employeer_name`, `position`,`companyname`,`bankname`,`accountnum`,`fid`,`sid`,`tid`) VALUES ('$id','$car_type','$loan_term','$unit','$vehicle_price','$loan_amount','$downpayment','$fname','$mname','$lname','$sex','$civil_status','$home_address','$perma_address','$date_of_birth','$place_of_birth','$mobile_no','$email_address','$tin_sss_gsis_no','$source_of_income','$monthly_income','$employeer_name','$position','$companyname','$bankname','$accountnum','$firstid','$secondid','$thirdid')";
      
        
       $query="INSERT INTO `loan_processing_approval`(`id`,`accountnum`, `Full_Name`, `Ref_Number`, `Type_of_loan`, `Amount_loan`, `Status`) VALUES ('','$accountnum','$fullname ','$id','Car Loan','$loan_amount','Pending')";

            if ($con1->query($sql)===TRUE AND $con2->query($query)===TRUE) {
                echo '<script type="text/javascript">
                    swal("", "Succesfully Encoded", "success").then(function() {
                    window.location = "carloann.php";});
                  </script>';

            }
        }

          ?>
        <!-- About-->

        <section class="page-section bg-primary" style="padding:100px;" id="about">
           <!--Appplication Form -->
    <div class="applcation_form">

         <form method="POST">

         <table class="table table-bordeless">
         </table>

        <table class="table table-bordeless">
          <thead class="thead-dark">
            <!-- Start OF Application Form-->
          <tr>
            <th colspan="5"> Car Application Form</th>
          </tr>
         </thead>
          <tbody>
            <tr>
              <td colspan="2"><label>First Name:</label>  <input type="text" name="f-name" id="formControlLg" class="form-control form-control-lg" placeholder="First Name" required /></td>
              <td><label>Middle Name:</label><input type="text"  name="m-name" id="formControlLg" class="form-control form-control-lg" placeholder="Middle Name" required /></td>
              <td colspan="1"><label>Last Name:</label> <input type="text" name="l-name" id="formControlLg" class="form-control form-control-lg" placeholder="Last Name" required/> </td>
              
              

                            <td><label>Gender:</label>
                <select   name="gender" class="form-control  form-control-lg">
                          <option>Select</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
              </td>
            </tr>

            <tr>
              <td><label>Car Type:</label>
              <select   name="c-type" class="form-control  form-control-lg">
                          <option>Select</option>
                          <option value="Truck">Truck</option>
                          <option value="Motor Bike">Motor Bike</option>
                          <option value="4 Wheels">4 Wheels</option>
                          <option value="Tricycle">Tricycle</option>
                        </select>
              </td>
              <td colspan="1"><label>Car Unit:</label>  <input type="text" name="c-unit" id="formControlLg" class="form-control form-control-lg" placeholder="Car Unit" required /></td>

              <td colspan="1"><label>Vehicle Price:</label><input type="number"  name="v-price" id="formControlLg" class="form-control form-control-lg" placeholder="Vehicle Price" required /></td>
            </tr>

            <tr>
            <td><label>Loan Term</label>
                <select   name="l-term" class="form-control  form-control-lg">
                          <option>Select</option>
                          <option value="Long Term">Long Term (1-25 Years)</option>
                          <option value="Short Term">Short Term(3-11 Months)</option>
                          <option value="Intermediate Term">Intermediate Term(1-15 Years)</option>
                        </select> 
              </td>
              <td><label>Loan Amount:</label><input type="number"  name="l-amount" id="formControlLg" class="form-control form-control-lg" placeholder="Loan Amount" required /></td>

              <td><label>Down Payment:</label><input type="number"  name="d-payment" id="formControlLg" class="form-control form-control-lg" placeholder="Down Payment" required /></td>
            </tr>


              </tr> 
              <tr>
              <td><label>Civil Status:</label>
                  <select name="c-status" class="form-control  form-control-lg">
                          <option>Select</option>
                          <option value="single">Single</option>
                          <option value="married">Married</option>
                          <option value="divorsed">Divorsed</option>
                          <option value="common_law">Common-Law</option>
                        </select>
              </td>

              <td colspan="2"><label> Home Address :</label>
              <input type="text" id="formControlLg" name="h_address" class="form-control form-control-lg" placeholder="Home Address" required />
              </td>
              <td colspan="2"><label> Permanent address :</label>
              <input type="text" id="formControlLg" name="per-address" class="form-control form-control-lg" placeholder="Full Address" required />
              </td>
            </tr>
            <tr>

              <td> <label>Birth Date:</label>

                <input type="date" name="date" class="form-control form-control-lg" />
                   </td>

              <td><label>Birth Place:</label>
                <input type="text" id="formControlLg" name="b-place" class="form-control form-control-lg" placeholder="Birth Place" required /></td>
            </tr>

            <tr>
            <td colspan="2"><label>Mobile no/s:
            </label><input type="number" name="number" id="formControlLg" class="form-control form-control-lg" placeholder="+63" required /></td>

            <td colspan="2"><label>Emails Address:</label><input type="email" name="email" id="formControlLg" class="form-control form-control-lg" placeholder="email@gmail.com" required /></td>

            <td colspan="2"><label>Tin/Sss/Gsis no#:
            </label><input type="number" name="tin-sss-gsis-no" id="formControlLg" class="form-control form-control-lg" placeholder="Tin/Sss/Gsis no#" required /></td>
            </tr>

              <td><label>Source of Income:</label>
                  <select name="source-income" class="form-control  form-control-lg">
                          <option>Select</option>
                          <option value="Business">Business</option>
                          <option value="Employment">Employment</option>
                        </select>
              </td>

              <td><label>Monthly Income</label> <input type="text" name="m-income" id="formControlLg" class="form-control form-control-lg" placeholder="Monthly Income" required /></td>

              <td><label>Employer Name</label> <input type="text" name="e-name" id="formControlLg" class="form-control form-control-lg" placeholder="Employer Name" required /></td>

              <td><label>Position</label> <input type="text" name="position" id="formControlLg" class="form-control form-control-lg" placeholder="Position in Work" required /></td>
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
            
                <td>
                 <label style="color: red ;"> *If employeed upload your copy of pay slip for verification. </label> <br>
                </td>
              <td colspan="2"><span>Please upload your Pay Slip</span> <input type="file" name="firstid" id="formControlLg" class="form-control form-control-lg" /></td>
              </tr>
              <tr>
                <td>
                 <label style="color: red ;"> *Please upload your ID here. </label> <br>
                </td>
              <td colspan="2"><span>Please upload your ID picture</span> <input type="file" name="secondid" id="formControlLg" class="form-control form-control-lg" required /></td>
              </tr>
              <tr>
                <td>
                 <label style="color: red ;"> *Please upload your ID here. </label> <br>
                </td>
              <td colspan="2"><span>Please upload your ID picture</span> <input type="file" name="thirdid" id="formControlLg" class="form-control form-control-lg" required /></td>
            </tr>

         </thead>
          </tbody>          
        </table>
           <button type="submit" class="form-control" style="width: 20%;" name="add_vis">  Apply Now!  </button>
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
