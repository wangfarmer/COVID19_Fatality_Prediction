<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Zifu Wang">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Fatality Prediction</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

  <!-- Bootstrap core CSS -->
  <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      margin-left: 5%;
      margin-right: 5%;
      height: 26px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 20px;
      width: 20px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked+.slider {
      background-color: #2196F3;
    }

    input:focus+.slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
      -webkit-transform: translateX(30px);
      -ms-transform: translateX(30px);
      transform: translateX(30px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

    input.error {
      border: 1px solid red;
    }

    label.error {
      background: url('images/unchecked.gif') no-repeat;
      padding-left: 16px;
      margin-left: .3em;
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

  <!--div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Checkout form</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div-->

  <div class="row justify-content-center" style="margin-left:5%; margin-right:5%;margin-top:2%;margin-bottom:1%">
    <div class="col-md-12 order-md-1">
      <div class="row justify-content-center" style="margin-bottom:1%;">
        <h2 class="justify-content-center">Patient Information</h2>
      </div>
      <form class="needs-validation justify-content-center" action="run.php" method="post" id="runForm" enctype="multipart/form-data">
      <div class="border border-secondary rounded" style="margin-bottom:1%;">
        <div class="row justify-content-center">
          <div class="col-md-3 mb-3">
            <h3>General Information</h3>
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
        </div>
        <!--first row-->
        <div class="row justify-content-center">
          
          <div class="col-md-2 mb-3">
            <label for="ID">ID</label>
            <input type="text" class="form-control" id="ID" name="ID" placeholder="" value="" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="ageRange">Age Range</label>
            <input type="text" class="form-control" id="ageRange" name="ageRange" placeholder="" value="" required>
            <!--select class="selectpicker form-control" id="ageRange" name="ageRange" placeholder="" value="" required>>
              <option>0-20</option>
              <option>20-30</option>
              <option>30-40</option>
              <option>40-50</option>
              <option>50-60</option>
              <option>60-70</option>
              <option>70 or higher</option>
            </select-->
          </div>
          <div class="col-md-2 mb-3">
            <label for="gender">Gender</label>
            <select class="selectpicker form-control" id="gender" name="gender" placeholder="" value="" required>>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="col-md-2 mb-3">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="" value="" required>

          </div>
          <div class="col-md-2 mb-3">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="" value="" required>
          </div>
        </div>
        </div>

        <div class="border border-secondary rounded" style="margin-bottom:1%;">
        <div class="row justify-content-center">
          <div class="col-md-3 mb-3">
            <h3>Symptoms</h3>
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
        </div>
        <!--second row-->
        <div class="row justify-content-center">
          <div class="col-md-2 mb-3">
            <div>
              <label>Respiratory Symptoms</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="respiratory0" value="0">
              <label class="form-check-label" for="respiratory0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="respiratory1" value="1">
              <label class="form-check-label" for="respiratory1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>weakness/pain</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="weaknessPain0" value="0">
              <label class="form-check-label" for="weaknessPain0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="weaknessPain1" value="1">
              <label class="form-check-label" for="weaknessPain1">Yes</label>
            </div>
          </div>
          
          <div class="col-md-2 mb-3">
            <div>
              <label>Gastrointestinal Symptoms</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="gastrointestinalSymptoms0" value="0">
              <label class="form-check-label" for="gastrointestinalSymptoms0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="gastrointestinalSymptoms1" value="1">
              <label class="form-check-label" for="gastrointestinalSymptoms1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Nausea</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="nausea0" value="0">
              <label class="form-check-label" for="nausea0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="nausea1" value="1">
              <label class="form-check-label" for="nausea1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Cardiac Symptoms</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="cardiacsymptoms0" value="0">
              <label class="form-check-label" for="cardiacsymptoms0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="cardiacsymptoms1" value="1">
              <label class="form-check-label" for="cardiacsymptoms1">Yes</label>
            </div>
          </div>
        </div>

        <!--third row-->
        <div class="row justify-content-center">  
          <div class="col-md-2 mb-3">
            <div>
              <label>Low Fever</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="lowFever0" value="0">
              <label class="form-check-label" for="lowFever0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="lowFever1" value="1">
              <label class="form-check-label" for="lowFever1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>High Fever</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="highFever0" value="0">
              <label class="form-check-label" for="highFever0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="highFever1" value="1">
              <label class="form-check-label" for="highFever1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Kidney Symptoms</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="kidneySymptoms0" value="0">
              <label class="form-check-label" for="kidneySymptoms0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="kidneySymptoms1" value="1">
              <label class="form-check-label" for="kidneySymptoms1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Asymptomatic</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="asymptomatic0" value="0">
              <label class="form-check-label" for="asymptomatic0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="asymptomatic1" value="1">
              <label class="form-check-label" for="asymptomatic1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Other Symptoms</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="otherSymptoms0" value="0">
              <label class="form-check-label" for="otherSymptoms0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="otherSymptoms1" value="1">
              <label class="form-check-label" for="otherSymptoms1">Yes</label>
            </div>
          </div>
        </div>
        </div>

        <!--forth row-->
        <div class="border border-secondary rounded" style="margin-bottom:1%;">
        <div class="row justify-content-center">
          <div class="col-md-3 mb-3">
            <h3>Chronic Disease</h3>
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-2 mb-3">
            <div>
              <label>No Chronic Disease</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms0" value="0">
              <label class="form-check-label" for="Symptoms0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms1" value="1">
              <label class="form-check-label" for="symptoms1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Diabetes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms0" value="0">
              <label class="form-check-label" for="Symptoms0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms1" value="1">
              <label class="form-check-label" for="symptoms1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Neuro</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="chronicDisease0" value="0">
              <label class="form-check-label" for="chronicDisease0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="chronicDisease1" value="1">
              <label class="form-check-label" for="chronicDisease1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Hypertension</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="respiratory0" value="0">
              <label class="form-check-label" for="respiratory0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="respiratory1" value="1">
              <label class="form-check-label" for="respiratory1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Cancer</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="weaknessPain0" value="0">
              <label class="form-check-label" for="weaknessPain0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="weaknessPain1" value="1">
              <label class="form-check-label" for="weaknessPain1">Yes</label>
            </div>
          </div>
        </div>

      <!--fifth row-->
      <div class="row justify-content-center">
        <div class="col-md-2 mb-3">
            <div>
              <label>Orthopedic</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms0" value="0">
              <label class="form-check-label" for="Symptoms0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms1" value="1">
              <label class="form-check-label" for="symptoms1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Respiratory related</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms0" value="0">
              <label class="form-check-label" for="Symptoms0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms1" value="1">
              <label class="form-check-label" for="symptoms1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Cardiac related</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="chronicDisease0" value="0">
              <label class="form-check-label" for="chronicDisease0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="chronicDisease1" value="1">
              <label class="form-check-label" for="chronicDisease1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Kidney related</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="respiratory0" value="0">
              <label class="form-check-label" for="respiratory0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="respiratory1" value="1">
              <label class="form-check-label" for="respiratory1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Blood related</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="weaknessPain0" value="0">
              <label class="form-check-label" for="weaknessPain0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="weaknessPain1" value="1">
              <label class="form-check-label" for="weaknessPain1">Yes</label>
            </div>
          </div>
        </div>

        <!--sixth row-->
        <div class="row justify-content-center">
          <div class="col-md-2 mb-3">
            <div>
              <label>Prostate related</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms0" value="0">
              <label class="form-check-label" for="Symptoms0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms1" value="1">
              <label class="form-check-label" for="symptoms1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <div>
              <label>Thyroid related</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms0" value="0">
              <label class="form-check-label" for="Symptoms0">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="symptoms1" value="1">
              <label class="form-check-label" for="symptoms1">Yes</label>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
          <div class="col-md-2 mb-3">
            &nbsp;
          </div>
        </div>
        </div>
      </form>
    </div>

  </div>

 

  <!--script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css"/>
  <!--Validation js-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <?php
  /*
function run_cmd() {
  exec('ABM/jdk/bin/java -cp ABM/plugins/org.eclipse.equinox.launcher*.jar -Xms512m -Xmx2048m -Djava.awt.headless=true org.eclipse.core.launcher.Main -application msi.gama.headless.id4 ABM/headless/samples/COVID.xml ABM/headless/samples/hl_javatest1');
}

if(isset($_POST['filepath']))
{
   run_cmd();
} 
*/
  ?>

  <script>
    function buttonRun(e) {
      $("#runForm").validate();
      if ($("#runForm").valid()) {
        document.getElementById("runForm").submit();
      }
    }

    function buttonUpload(e) {
      document.getElementById("uploadForm").submit();
    }

    $(document).ready(function() {

      var filepath = "<?php echo isset($_GET['outputDirectory']) ? $_GET['outputDirectory'] : ''; ?>";
      $("#filepath").val(filepath);
      setInterval(function() {
        var data = $('#runForm').serialize();
        $.ajax({

          type: "POST",
          data: data,
          url: "showImage.php",
          dataType: "html",
          success: function(response) {
            var test = response;
            $('#imageContent').html(response);
          },

          error: function(obj) {

            console.log(obj);
          }

        });
        $.ajax({

          type: "POST",
          data: data,
          url: "showStatistics.php",
          dataType: "html",
          success: function(response) {
            var test = response;
            $('#showStatistics').html(response);
          },

          error: function(obj) {

            console.log(obj);
          }

        });
        //$("#showStatistics").load('showStatistics.php')
      }, 1000);

      $('#maskSwitch').click(function() {
        if ($("#maskSwitch").is(':checked')) {
          $('#maskPolicy').removeAttr('disabled');
          $('#maskPolicy').attr('required', 'required');
        } else {
          $("#maskPolicy").attr('disabled', 'disabled');
          $("#maskPolicy").val("");
        }
      });

      $('#socialDisInSwitch').click(function() {
        if ($("#socialDisInSwitch").is(':checked')) {
          $('#socialDistIn').removeAttr('disabled');
          $('#socialDistIn').attr('required', 'required');
        } else {
          $("#socialDistIn").attr('disabled', 'disabled');
          $("#socialDistIn").val("");
        }
      });

      $('#socialDisOutSwitch').click(function() {
        if ($("#socialDisOutSwitch").is(':checked')) {
          $('#socialDistOut').removeAttr('disabled');
          $('#socialDistOut').attr('required', 'required');
        } else {
          $("#socialDistOut").attr('disabled', 'disabled');
          $("#socialDistOut").val("");
        }
      });

      $('#sympScreenSwitch').click(function() {
        if ($("#sympScreenSwitch").is(':checked')) {
          $('#sympScreen').removeAttr('disabled');
          $('#sympScreen').attr('required', 'required');
        } else {
          $("#sympScreen").attr('disabled', 'disabled');
          $("#sympScreen").val("");
        }
      });

      $('#contactTraceSwitch').click(function() {
        if ($("#contactTraceSwitch").is(':checked')) {
          $('#contactTrace').removeAttr('disabled');
          $('#contactTrace').attr('required', 'required')
        } else {
          $("#contactTrace").attr('disabled', 'disabled');
          $("#contactTrace").val("");
        }
      });

      $('#viralTestingSwitch').click(function() {
        if ($("#viralTestingSwitch").is(':checked')) {
          $('#viralTesting').removeAttr('disabled');
          $('#viralTesting').attr('required', 'required')
        } else {
          $("#viralTesting").attr('disabled', 'disabled');
          $("#viralTesting").val("");
        }
      });

      //Get the cursor location
      function getInputSelection(el) {
        var start = 0,
          end = 0,
          normalizedValue, range,
          textInputRange, len, endRange;

        if (typeof el.selectionStart == "number" && typeof el.selectionEnd == "number") {
          start = el.selectionStart;
          end = el.selectionEnd;
        } else {
          range = document.selection.createRange();

          if (range && range.parentElement() == el) {
            len = el.value.length;
            normalizedValue = el.value.replace(/\r\n/g, "\n");

            // Create a working TextRange that lives only in the input
            textInputRange = el.createTextRange();
            textInputRange.moveToBookmark(range.getBookmark());

            // Check if the start and end of the selection are at the very end
            // of the input, since moveStart/moveEnd doesn't return what we want
            // in those cases
            endRange = el.createTextRange();
            endRange.collapse(false);

            if (textInputRange.compareEndPoints("StartToEnd", endRange) > -1) {
              start = end = len;
            } else {
              start = -textInputRange.moveStart("character", -len);
              start += normalizedValue.slice(0, start).split("\n").length - 1;

              if (textInputRange.compareEndPoints("EndToEnd", endRange) > -1) {
                end = len;
              } else {
                end = -textInputRange.moveEnd("character", -len);
                end += normalizedValue.slice(0, end).split("\n").length - 1;
              }
            }
          }
        }

        return {
          start: start,
          end: end
        };
      }

      //Allow only float values
      var regex = /^[0-1]{1}$|\.$/;
      var regex1 = /^[0-1]{1}\.$|\.[0-9]{1}$/;
      var regex2 = /^[0]{1}\.[0-9]{1}$|1\.0$/;
      var caretpos;
      var valid;

      $('.floatValue').keypress(function() {
        var fieldID = $(this).attr('id');
        var maskPolicy = document.getElementById(fieldID)
        maskPolicy.focus();
        var valuetocheck = getInputSelection(maskPolicy);
        caretpos = valuetocheck.start;
        valuestart = $(this).val().substring(0, caretpos);
        valueend = $(this).val().substring(caretpos);
        valuetocheck = valuestart + String.fromCharCode(event.which) + valueend;

        if (valuetocheck.length == 1) {
          valid = regex.test(valuetocheck);
        }
        if (valuetocheck.length == 2) {
          valid = regex1.test(valuetocheck);
        }
        if (valuetocheck.length == 3) {
          valid = regex2.test(valuetocheck);
        }
        if (!valid) {
          event.preventDefault();
        }
        if (valuetocheck.length >= 4) {
          event.preventDefault();
        }

      });



    });
  </script>
  <!--footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer-->


  <script src="form-validation.js"></script>
</body>

</html>