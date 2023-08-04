<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Account Application</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="forms.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
</head>

<body>
  <div class="container main-container">
    <div class="card">

      <div class="card-body">

        <!-- Company Banner -->
		<div class="text-center">
			<a href="https://www.bankofwhittier.com">
				<img class="mx-auto img-fluid" alt="Bank of Whittier Logo" src="BOWLogoNewMedium.png">	
			</a>
		</div>

            <!-- Title of the form -->
        <div class="container mt-4 mb-5">
          <h4 class="text-center">
            <strong>Personal Account Application</strong>
          </h4>
        </div>


        


        <div class="container main-container">

          <!-- Menu to navigate various parts of forms -->
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a href="#personal" class="nav-item nav-link active" id="personal-tab" data-toggle="tab" role="tab"
                aria-controls="nav-personal" aria-selected="true">
                Personal Information
              </a>
            </li>

            <li class="nav-item">
              <a href="#identification" class="nav-item nav-link main-tab" id="identification-tab" data-toggle="tab"
                role="tab" aria-controls="nav-identification" aria-selected="true">
                Identification Information
              </a>
            </li>

            <li class="nav-item">
              <a href="#employment" class="nav-item nav-link main-tab" id="employment-tab" data-toggle="tab" role="tab"
                aria-controls="nav-employment" aria-selected="true">
                Employment Information
              </a>
            </li>

            <li class="nav-item">
              <a href="#review" class="nav-item nav-link main-tab" id="review-tab" data-toggle="tab" role="tab"
                aria-controls="nav-review" aria-selected="true">
                Review
              </a>
            </li>
          </ul>

          <!-- End menu to navigate various parts of forms -->
          <div class="container form-container">


            <form method="POST" action="Personal_Account_Application_Confirmation.php" enctype="multipart/form-data">

              <div class="tab-content" id="myTabContent">

                <!-- First Tab -->
                <div class="tab-pane fade show active validate-personal" id="personal">

                  <!-- Nested Pills -->
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">


                    <li class="nav-item">
                      <a class="nav-link active" id="pills-app-tab" data-toggle="tab" href="#pills-app" role="tab"
                        aria-controls="pills-app" aria-selected="true">Applicant</a>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link co-app-pill co-app-1-pill co-app" id="pills-co-app-1-tab" data-toggle="tab"
                        href="#pills-co-app-1" role="tab" aria-controls="pills-co-app-1" aria-selected="false">Co-Applicant</a>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link co-app-pill co-app-2-pill co-app" id="pills-co-app-2-tab" data-toggle="tab"
                        href="#pills-co-app-2" role="tab" aria-controls="pills-co-app-2" aria-selected="false">Co-Applicant</a>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link co-app-pill co-app-3-pill co-app" id="pills-co-app-3-tab" data-toggle="tab"
                        href="#pills-co-app-3" role="tab" aria-controls="pills-co-app-3" aria-selected="false">Co-Applicant</a>
                    </li>


                  </ul>

                  <div class="tab-content" id="pers-pills-tabContent">
                    <div class="container tab-header">
                      <h4 class="text-center">
                        Personal Information
                      </h4>
                      <hr>
                    </div>

                    <div class="tab-pane fade show active" id="pills-app" role="tabpanel" aria-labelledby="pills-app-tab">
                      <?php 
                        $personalApplicant = "personalTab/personalApplicant.php";
                        include($personalApplicant);
                      ?>
                    </div>


                    <div class="tab-pane fade" id="pills-co-app-1" role="tabpanel" aria-labelledby="pills-co-app-1-tab">
                      <?php
                        $personalCoApplicant1 = "personalTab/personalCoApplicant1.php";
                        include($personalCoApplicant1);
                      ?>
                    </div>


                    <div class="tab-pane fade" id="pills-co-app-2" role="tabpanel" aria-labelledby="pills-co-app-2-tab">
                      <?php
                        $personalCoApplicant2 = "personalTab/personalCoApplicant2.php";
                        include($personalCoApplicant2);
                      ?>
                    </div>


                    <div class="tab-pane fade" id="pills-co-app-3" role="tabpanel" aria-labelledby="pills-co-app-3-tab">
                      <?php
                        $personalCoApplicant3 = "personalTab/personalCoApplicant3.php";
                        include($personalCoApplicant3);
                      ?>
                    </div>


                  </div>

                  <!-- End of nested tab -->
                </div>
                <!-- End First Tab -->



                <!-- Second Tab -->
                <div class="tab-pane fade" id="identification">
                  <!-- Nested Pills -->
                  <ul class="nav nav-pills mb-3" id="sec-pills-tab" role="tablist">


                    <li class="nav-item">
                      <a class="nav-link active" id="pills-id-app-tab" data-toggle="tab" href="#pills-id-app" role="tab"
                        aria-controls="pills-id-app" aria-selected="true">Applicant</a>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link co-app-pill co-app-1-pill co-app" id="pills-id-co-app-1-tab" data-toggle="tab" href="#pills-id-co-app-1"
                        role="tab" aria-controls="pills-id-co-app-1" aria-selected="false">Co-Applicant</a>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link co-app-pill co-app-2-pill co-app" id="pills-id-co-app-2-tab" data-toggle="tab" href="#pills-id-co-app-2"
                        role="tab" aria-controls="pills-id-co-app-2" aria-selected="false">Co-Applicant</a>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link co-app-pill co-app-3-pill co-app" id="pills-id-co-app-3-tab" data-toggle="tab" href="#pills-id-co-app-3"
                        role="tab" aria-controls="pills-id-co-app-3" aria-selected="false">Co-Applicant</a>
                    </li>


                  </ul>

                  <div class="tab-content" id="id-pills-tabContent">

                    <div class="container tab-header">
                      <h4 class="text-center">
                        Identification Information
                      </h4>
                      <hr>
                    </div>


                    <div class="tab-pane fade show active" id="pills-id-app" role="tabpanel" aria-labelledby="pills-id-app-tab">
                      <?php 
                        $idApplicant = "identificationTab/identificationInformation.php";
                        include($idApplicant);
                      ?>
                    </div>


                    <div class="tab-pane fade" id="pills-id-co-app-1" role="tabpanel" aria-labelledby="pills-id-co-app-1-tab">
                      <?php
                        $idApplicant1 = "identificationTab/idCoApp1.php";
                        include($idApplicant1);
                      ?>
                    </div>


                    <div class="tab-pane fade" id="pills-id-co-app-2" role="tabpanel" aria-labelledby="pills-id-co-app-2-tab">
                      <?php
                        $idApplicant2 = "identificationTab/idCoApp2.php";
                        include($idApplicant2);
                      ?>
                    </div>


                    <div class="tab-pane fade" id="pills-id-co-app-3" role="tabpanel" aria-labelledby="pills-id-co-app-3-tab">
                      <?php
                        $idApplicant3 = "identificationTab/idCoApp3.php";
                        include($idApplicant3);
                      ?>
                    </div>


                  </div>
                </div>
                <!-- End second tab -->



                <!-- Third Tab -->
                <div class="tab-pane fade" id="employment">
                  <ul class="nav nav-pills mb-3" id="third-pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-emp-app-tab" data-toggle="pill" href="#pills-emp-app" role="tab"
                        aria-controls="pills-emp-app" aria-selected="true">Applicant</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link co-app-pill co-app-1-pill co-app" id="pills-emp-co-app-1-tab" data-toggle="pill"
                        href="#pills-emp-co-app-1" role="tab" aria-controls="pills-emp-co-app-1" aria-selected="false">Co-Applicant</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link co-app-pill co-app-2-pill co-app" id="pills-emp-co-app-2-tab" data-toggle="pill"
                        href="#pills-emp-co-app-2" role="tab" aria-controls="pills-emp-co-app-2" aria-selected="false">Co-Applicant</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link co-app-pill co-app-3-pill co-app" id="pills-emp-co-app-3-tab" data-toggle="pill"
                        href="#pills-emp-co-app-3" role="tab" aria-controls="pills-emp-co-app-3" aria-selected="false">Co-Applicant</a>
                    </li>
                  </ul>

                  <div class="tab-content" id="emp-pills-tabContent">
                    <div class="container tab-header">
                      <h4 class="text-center">
                        Employment Information
                      </h4>
                      <hr>
                    </div>
                    <div class="tab-pane fade show active" id="pills-emp-app" role="tabpanel" aria-labelledby="pills-emp-app-tab">
                      <?php
                          $employmentInformation = "employmentTab/employmentInformation.php";
                          include($employmentInformation);
                        ?>
                    </div>
                    <div class="tab-pane fade" id="pills-emp-co-app-1" role="tabpanel" aria-labelledby="pills-emp-co-app-1-tab">
                      <?php
                          $coApp1 = "employmentTab/empCoApp1.php";
                          include($coApp1);
                        ?>
                    </div>
                    <div class="tab-pane fade" id="pills-emp-co-app-2" role="tabpanel" aria-labelledby="pills-emp-co-app-2-tab">
                      <?php
                          $coApp2 = "employmentTab/empCoApp2.php";
                          include($coApp2);
                        ?>
                    </div>
                    <div class="tab-pane fade" id="pills-emp-co-app-3" role="tabpanel" aria-labelledby="pills-emp-co-app-3-tab">
                      <?php
                          $coApp3 = "employmentTab/empCoApp3.php";
                          include($coApp3);
                        ?>
                    </div>
                  </div>


                </div>
                <!-- End of Third Tab -->


                <!-- Fourth Tab -->
                <div class="tab-pane fade" id="review">
                  <div>
                    <div class="container tab-title">
                      <h4 class="text-center">
                        Review Information
                      </h4>
                      <hr>
                    </div>
                    <div>
                      <?php
                        $review = "reviewTab/review.php";
                        include($review);
                      ?>
                    </div>
                  </div>

                  <div class="text-right">
                    <div style="display: block;margin-left: 60px;" class="g-recaptcha" data-sitekey="6LdNB90UAAAAAFhBHZNMvnW5Yip4IZPp_aIF0NVR" data-callback="validateCaptcha"></div>
                    <img style="display: block;margin-left: 60px;" src="mycaptcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i><br>
                    <label style="display: block;margin-left: 60px;" for="mycaptcha">Please Enter the Captcha Text</label><br>
                    <input style="display: block;margin-left: 60px;" type="text" id="mycaptcha" name="captcha_challenge"><br>
                    
                    
                    
                    <button class="btn btn-success" type="submit" name="submitForm" id="submitForm">Submit</button>
                  </div>
                </div>
                <!-- End of Fourth Tab -->



              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script type="text/javascript">
    var captcha = false;
    function validateCaptcha() {
      captcha = true;
    }
    document.forms[0].addEventListener('submit', function(e) {
        if(!captcha) {
          e.preventDefault();
          alert("Please check captcha box");
        }
    });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="forms.js"></script>


</body>

</html>
