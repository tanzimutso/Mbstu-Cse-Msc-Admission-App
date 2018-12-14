<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

</head>
<body>

<div style="background: #E1F5FE; padding: 10px; margin-top: 18px">
    <p align="center"><img src="{{ url('assets/images/MBSTU.jpg') }}" height="100px" width="100px"/></p>
    <p align="center" style="margin-top: -5px; font-family: serif; font-weight: bold; color: #009688; font-size: 35px;">Department of Computer Science and Engineering</p>
    <p align="center" style="margin-top: -15px;  font-family: serif; font-weight: bold; color: #AD1457; font-size: 25px;">Mawlana Bhashani Science and Technology University, Santosh, Tangail-1902 </p>
    <p align="center" style="margin-top: -15px;  font-family: serif; font-weight: bold; color: #ad5219; font-size: 25px;">Form No : </p>

</div>

<div class="container" style="margin-top: 40px; margin-left: 200px; color:#009688; font-weight: bold;">

    <p style="height: 100px; width: 100px; border: solid #009688 2px; margin-left: 700px;"><img src="" alt="image"/></p>
    <form enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4" class="col-form-label">1. Name of the Applicant (as per SSC) :</label>

            </div>
            <div class="form-group col-md-8">
                <label for="inputPassword4" class="col-form-label">2. Father's Name :</label>

            </div>
       <br><br><br>
            <div class="form-group col-md-8">
                <p style="height: 40px; width: 200px; border: solid #009688 2px; "><img src="" alt="applicant signature"/></p>
                <label for="inputEmail4" class="col-form-label">.....................................................</label><br>
                <label for="inputEmail4" class="col-form-label">Signature of the Applicant</label>
            </div>
            <div class="form-group col-md-4">
                <p style="height: 40px; width: 200px; border: solid #009688 2px; "><img src="" alt="chairman signature"/></p>
                <label for="inputEmail4" class="col-form-label">.....................................................</label><br>
                <label for="inputEmail4" class="col-form-label">Signature of the Chairman</label>
            </div>
        </div>
    </form>
</div>
</body>