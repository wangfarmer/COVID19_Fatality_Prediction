<?php
//exec('vim ABM/headless/samples/COVID.xml')
$directory = $_POST['filepath'];
$xmlDirectory = 'D:\GAMA\headless\samples\COVID.xml';
$totalPopulation = $_POST['totalPopulation'];
$infectedPeople = $_POST['infectedPeople'];


//Mask policy
if (isset($_POST['maskSwitch']) && $_POST['maskSwitch'] == TRUE) {
    $maskSwitch = "TRUE";
    $maskPolicy = $_POST['maskPolicy'];
} else {
    $maskSwitch = "FALSE";
    $maskPolicy = "0.8";
}
//Social Distance Indoor
if (isset($_POST['socialDisInSwitch']) && $_POST['socialDisInSwitch'] == TRUE) {
    $socialDistInSwitch = "TRUE";
    $socialDistIn = $_POST['socialDistIn'];
} else {
    $socialDistInSwitch = "FALSE";
    $socialDistIn = "0.8";
}
//Social distance outdoor
if (isset($_POST['socialDisOutSwitch']) && $_POST['socialDisOutSwitch'] == TRUE) {
    $socialDisOutSwitch = "TRUE";
    $socialDistOut = $_POST['socialDistOut'];
} else {
    $socialDisOutSwitch = "FALSE";
    $socialDistOut = "0.8";
}
//Symptoms screening
if (isset($_POST['sympScreenSwitch']) && $_POST['sympScreenSwitch'] == TRUE) {
    $sympScreenSwitch = "TRUE";
    $sympScreen = $_POST['sympScreen'];
} else {
    $sympScreenSwitch = "FALSE";
    $sympScreen = "0.8";
}
//Contact tracing
if (isset($_POST['contactTraceSwitch']) && $_POST['contactTraceSwitch'] == TRUE) {
    $contactTraceSwitch = "TRUE";
    $contactTrace = $_POST['contactTrace'];
} else {
    $contactTraceSwitch = "FALSE";
    $contactTrace = "80";
}
//Viral testing
//Contact tracing
if (isset($_POST['viralTestingSwitch']) && $_POST['viralTestingSwitch'] == TRUE) {
    $viralTestingSwitch = "TRUE";
    $viralTesting = $_POST['viralTesting'];
} else {
    $viralTestingSwitch = "FALSE";
    $viralTesting = "0.8";
}


#Create a XML document
$domDocument = new DOMDocument('1.0', "UTF-8");
$domDocument->preserveWhiteSpace = false;
$domDocument->formatOutput = true;
#Create root element - Experiment_plan
$domElement = $domDocument->createElement('Experiment_plan');
#Child of root element - Simulation and its attributes
$domSimulation = $domDocument->createElement('Simulation');
$domSimulation->setAttribute('id', '2');
$domSimulation->setAttribute('sourcePath', './COVID/models/model4_10_11.gaml');
$domSimulation->setAttribute('finalStep', '100');
$domSimulation->setAttribute('experiment', 'covidEXP');
$domSimulation->setAttribute('seed', '3');
#Child of Simulation - Parameters
$domParameters = $domDocument->createElement('Parameters');
#Child of Parameters - Parameter - Total population
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'nb_people');
$domParameter->setAttribute('type', 'INT');
$domParameter->setAttribute('value', $totalPopulation);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - StayingInDorm
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'numStayingInDorm');
$domParameter->setAttribute('type', 'INT');
$domParameter->setAttribute('value', '3350');
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Infected people
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'nb_infected_init');
$domParameter->setAttribute('type', 'INT');
$domParameter->setAttribute('value', $infectedPeople);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Infected Rate No Mask
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'inf_rate_no_mask');
$domParameter->setAttribute('type', 'FLOAT');
$domParameter->setAttribute('value', '0.004366584');
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Mask policy
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'perc_wearing_masks');
$domParameter->setAttribute('type', 'FLOAT');
$domParameter->setAttribute('value', $maskPolicy);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Social Distance Outdoor
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'enf_socdist');
$domParameter->setAttribute('type', 'FLOAT');
$domParameter->setAttribute('value', $socialDistOut);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Social Distance Indoor
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'follow_bcp');
$domParameter->setAttribute('type', 'FLOAT');
$domParameter->setAttribute('value', $socialDistIn);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Symptoms screening
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'enf_monitor');
$domParameter->setAttribute('type', 'FLOAT');
$domParameter->setAttribute('value', $sympScreen);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Viral testing
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'enf_testing');
$domParameter->setAttribute('type', 'FLOAT');
$domParameter->setAttribute('value', $viralTesting);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Mask on policy
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'masks_on_policy');
$domParameter->setAttribute('type', 'BOOLEAN');
$domParameter->setAttribute('value', $maskSwitch);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Build cap policy
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'build_cap_policy');
$domParameter->setAttribute('type', 'BOOLEAN');
$domParameter->setAttribute('value', $socialDistInSwitch);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Social dist policy
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'soc_dist_policy');
$domParameter->setAttribute('type', 'BOOLEAN');
$domParameter->setAttribute('value', $socialDisOutSwitch);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Monitoring symptoms policy
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'monitoring_symtps_policy');
$domParameter->setAttribute('type', 'BOOLEAN');
$domParameter->setAttribute('value', $sympScreenSwitch);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Testing policy
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'testing_policy');
$domParameter->setAttribute('type', 'BOOLEAN');
$domParameter->setAttribute('value', $viralTestingSwitch);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Contact tracing policy
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'contact_tracing_policy');
$domParameter->setAttribute('type', 'BOOLEAN');
$domParameter->setAttribute('value', $contactTraceSwitch);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Percentage inperson classes
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'perc_inperson_classes');
$domParameter->setAttribute('type', 'FLOAT');
$domParameter->setAttribute('value', '0.8');
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Upper testing limit
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'upper_testing_limit');
$domParameter->setAttribute('type', 'INT');
$domParameter->setAttribute('value', $contactTrace);
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Monitor checkup time
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'monitor_checkup_time');
$domParameter->setAttribute('type', 'INT');
$domParameter->setAttribute('value', '156');
$domParameters->appendChild($domParameter);
#Child of Parameters - Parameter - Testing checkup time
$domParameter = $domDocument->createElement('Parameter');
$domParameter->setAttribute('name', 'testing_checkup_time');
$domParameter->setAttribute('type', 'INT');
$domParameter->setAttribute('value', '156');
$domParameters->appendChild($domParameter);
#Append Parameters to Simulation
$domSimulation->appendChild($domParameters);
#Child of Simulation - Outputs
$domOutputs = $domDocument->createElement('Outputs');
#Child of Outputs - Output
$domOutput = $domDocument->createElement('Output');
$domOutput->setAttribute('id', '1');
$domOutput->setAttribute('name', 'chart_display');
$domOutput->setAttribute('framerate', 1);
$domOutputs->appendChild($domOutput);
#Child of Outputs - Output
$domOutput = $domDocument->createElement('Output');
$domOutput->setAttribute('id', '2');
$domOutput->setAttribute('name', 'num infected');
$domOutput->setAttribute('framerate', 1);
$domOutputs->appendChild($domOutput);
#Child of Outputs - Output
$domOutput = $domDocument->createElement('Output');
$domOutput->setAttribute('id', '3');
$domOutput->setAttribute('name', 'infected show symptoms');
$domOutput->setAttribute('framerate', 1);
$domOutputs->appendChild($domOutput);
#Child of Outputs - Output
$domOutput = $domDocument->createElement('Output');
$domOutput->setAttribute('id', '4');
$domOutput->setAttribute('name', 'infected no symptoms');
$domOutput->setAttribute('framerate', 1);
$domOutputs->appendChild($domOutput);
#Child of Outputs - Output
$domOutput = $domDocument->createElement('Output');
$domOutput->setAttribute('id', '5');
$domOutput->setAttribute('name', 'active people');
$domOutput->setAttribute('framerate', 1);
$domOutputs->appendChild($domOutput);
#Child of Outputs - Output
$domOutput = $domDocument->createElement('Output');
$domOutput->setAttribute('id', '6');
$domOutput->setAttribute('name', 'dead');
$domOutput->setAttribute('framerate', 1);
$domOutputs->appendChild($domOutput);
#Append outputs to Simulation
$domSimulation->appendChild($domOutputs);
#Append simulation to experiment plan
$domElement->appendChild($domSimulation);
#append experiment plan to xml root
$domDocument->appendChild($domElement);


$domDocument->save($xmlDirectory);


exec('call D:\GAMA\jdk\bin\java -cp D:\GAMA\plugins\org.eclipse.equinox.launcher_1.5.300.v20190213-1655.jar -Xms512m -Xmx2048m -Djava.awt.headless=true org.eclipse.core.launcher.Main -application msi.gama.headless.id4 -data ".work21837" ' . $xmlDirectory . " " . $directory);
//$_SESSION['dirName'] = $directory;
header('Location: index.php?outputDirectory=' . $directory);
