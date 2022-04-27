<?php

    session_start();
    //Membuat Koneksi database

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "Insurance";
    $conn = mysqli_connect($hostname,$username,$password,$database);

    if(isset($_POST['addNewInsurance'])){
        $jobSite = $_POST['jobSite'];
        $unitType = $_POST['unitType'];
        $chassis = $_POST['chassis'];
        $engine = $_POST['engine'];
        $years = $_POST['years'];
        $doorNo = $_POST['doorNo'];
        $insOrUnIns = $_POST['insOrUnIns'];
        $pilisNo = $_POST['pilisNo'];
        $currency = $_POST['currency'];
        $sumInsured = $_POST['sumInsured'];
        $rate = $_POST['rate'];
        $periode = $_POST['periode'];
        $amount = $_POST['amount'];
        $comments = $_POST['comments'];

        $addInsuranceUnit = mysqli_query($conn, "INSERT INTO insuranceUnit (idJobSite, unitType, chassis, engine, 
        years, doorNo, insOrUnIns ,pilisNo ,currency ,sumInsured ,rate ,periode ,amount ,comments) 
        VALUES ('$jobSite','$unitType','$chassis','$engine', 
        '$years','$doorNo','$insOrUnIns','$pilisNo', '$currency','$sumInsured','$rate','$periode','$amount','$comments')");

        if($addInsuranceUnit){
            header('location:index.php');
        }else{
            echo "Gagal";
            header('location:index.php');
        }
    }

    if(isset($_POST['updateInsurance'])){
        $jobSite = $_POST['jobSite'];
        $unitType = $_POST['unitType'];
        $chassis = $_POST['chassis'];
        $engine = $_POST['engine'];
        $years = $_POST['years'];
        $doorNo = $_POST['doorNo'];
        $insOrUnIns = $_POST['insOrUnIns'];
        $pilisNo = $_POST['pilisNo'];
        $currency = $_POST['currency'];
        $sumInsured = $_POST['sumInsured'];
        $rate = $_POST['rate'];
        $periode = $_POST['periode'];
        $amount = $_POST['amount'];
        $comments = $_POST['comments'];
        $idInsurance = $_POST['idInsurance'];

        $updateInsuranceUnit = mysqli_query($conn, "UPDATE insuranceUnit SET idJobSite = '$jobSite', unitType='$unitType',
        chassis='$chassis', engine='$engine', years='$years', doorNo='$doorNo', insOrUnIns='$insOrUnIns', pilisNo = '$pilisNo',
        currency = '$currency',sumInsured = '$sumInsured',rate = '$rate',periode = '$periode',amount = '$amount',comments = '$comments'
        WHERE idInsurance = '$idInsurance'");

        if($updateInsuranceUnit){
            header('location:index.php');
        }else{
            echo "Gagal";
            header('location:index.php');
        }
    }

    if(isset($_POST['DeleteInsurance'])){
        $idInsurance = $_POST['idInsurance'];

        $deleteInsuranceUnit = mysqli_query($conn, "DELETE FROM insuranceUnit WHERE idInsurance = '$idInsurance'");

        if($deleteInsuranceUnit){
            header('location:index.php');
        }else{
            echo "Gagal";
            header('location:index.php');
        }
    }




    if(isset($_POST['addNewJobSite'])){
        $jobSiteName = $_POST['jobSiteName'];

        $addNewJobSite = mysqli_query($conn, "INSERT INTO JobSite (jobSiteName) VALUES ('$jobSiteName')");

        if($addNewJobSite){
            header('location:job-site.php');
        }else{
            echo "Gagal";
            header('location:job-site.php');
        }
    }

    if(isset($_POST['updateJobSite'])){
        $jobSiteName = $_POST['jobSiteName'];
        $idJobSite = $_POST['idJobSite'];

        $updateJobSite = mysqli_query($conn, "UPDATE JobSite SET jobSiteName = '$jobSiteName' WHERE idJobSite = '$idJobSite'");

        if($updateJobSite){
            header('location:job-site.php');
        }else{
            echo "Gagal";
            header('location:job-site.php');
        }
    }

    if(isset($_POST['DeleteJobSite'])){
        $idJobSite = $_POST['idJobSite'];

        $deleteJobSite = mysqli_query($conn, "DELETE FROM JobSite WHERE idJobSite = '$idJobSite'");

        if($deleteJobSite){
            header('location:job-site.php');
        }else{
            echo "Gagal";
            header('location:job-site.php');
        }
    }

?>