<?php
  
  $region = array("name" => "Africa", "avgAge" => 19.7, "avgDailyIncomeInUSD" => 5, "avgDailyIncomePopulation" => 0.71);
  $periodType = "days";
  $timeToElapse = 58;
  $reportedCases = 674;
  $population = 66622705;
  $totalHospitalBeds = 1380614;

  function covid19ImpactEstimator($reportedCases, $timeToElapse, $population, $totalHospitalBeds){

    function impact($reportedCases, $timeToElapse){
    $currentlyInfected = $reportedCases * 10;
      $infectionsByRequestedTime = $currentlyInfected * pow(2, ($timeToElapse / 3));
  //    $severeCasesByRequestedTime = $infectionsByRequestedTime * (15/100);
    } function impact($reportedCases, $timeToElapse);

    function severeImpact($reportedCases, $timeToElapse){
      $currentlyInfected = $reportedCases * 50;
         $infectionsByRequestedTime = $currentlyInfected * pow(2, ($timeToElapse / 3));
  //       $severeCasesByRequestedTime = $infectionsByRequestedTime * (15/100);

    }severeImpact($reportedCases, $timeToElapse);
  }covid19ImpactEstimator($reportedCases, $timeToElapse, $population, $totalHospitalBeds);
  
  ?>