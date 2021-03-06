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
    <style>
        @media print {
            #printPageButton {
                display: none;
            }
            #printPageButton2 {
                display: none;
            }
        }
    </style>
</head>
<body>

<div style="background: #E1F5FE; padding: 10px; margin-top: 18px">
    <p align="center"><img src="{{ url('assets/images/MBSTU.jpg') }}" height="100px" width="100px"/></p>
    <p align="center" style="margin-top: -5px; font-family: serif; font-weight: bold; color: #009688; font-size: 35px;">Department of Computer Science and Engineering</p>
    <p align="center" style="margin-top: -15px;  font-family: serif; font-weight: bold; color: #AD1457; font-size: 25px;">Mawlana Bhashani Science and Technology University, Santosh, Tangail-1902 </p>
    <p align="center" style="margin-top: -15px;  font-family: serif; font-weight: bold; color: #ad5219; font-size: 25px;">Form No : </p>

</div>

<div class="container" style="margin-top: 40px; margin-left: 200px; color:#009688; font-weight: bold;">
    <div class="col-md-12">
        @if(Session::has('message'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif
            @foreach($students as $student)
    <p style="margin-left: 700px;"><img src="{{ url('uploads/picture/' . $student->picture) }}" alt="image" height="160px" width="150px"/></p>
    <form >

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4" class="col-form-label">1. Name of the Applicant (as per SSC) : <span style="color: #882951; font-size: 20px; margin-left: 5px;"> {{ $student->name }}</span></label>

            </div>
            <div class="form-group col-md-8">
                <label for="inputPassword4" class="col-form-label">2. Father's Name :<span style="color: #882951; font-size: 20px; margin-left: 5px;">  {{ $student->father_name }} </span></label>

            </div>

            <div class="form-group col-md-8">
                <label for="inputAddress" class="col-form-label">3. Mother's Name : <span style="color: #882951; font-size: 20px; margin-left: 5px;"> {{ $student->mother_name }}</span></label>

            </div>
            <div class="form-group col-md-8">
                <label for="inputAddress2" class="col-form-label">4. Local Gurdian's name : <span style="color: #882951; font-size: 20px; margin-left: 5px;"> {{ $student->local_guardian_name }}</span></label>

            </div>
            <div class="form-group col-md-8">
                <label for="inputCity" class="col-form-label">5. Present Address (With Contact number) : <span style="color: #882951; font-size: 20px; margin-left: 5px;"> {{ $student->present_address }}</span> </label>

            </div>
            <div class="form-group col-md-8">
                <label for="inputZip" class="col-form-label">6. Permanent Address (With Contact number) : <span style="color: #882951; font-size: 20px; margin-left: 5px;"> {{ $student->permanent_address }}</span></label>

            </div>

            <div class="form-group col-md-8">
                <label for="inputZip" class="col-form-label">7. Date of Birth (mm/dd/yyyy):<span style="color: #882951; font-size: 20px; margin-left: 5px;">  {{ $student->date_of_birth }}</span></label>

            </div>

            <div class="form-group col-md-8">
                <label for="inputZip" class="col-form-label">8. Nationality :<span style="color: #882951; font-size: 20px; margin-left: 5px;">  {{ $student->nationality }}</span></label>

            </div>

            <div class="form-group col-md-10">
                <label for="inputZip" class="col-form-label">9. Academic Qualifications (SSC to B.Sc. and others) : </label>
                <br>
                <br>
                <table class="table table-hover" style="text-align: center;">
                    <thead class="thead-dark ">

                    <tr>
                        <th scope="col">Name of the examination
                        </th>
                        <th scope="col">Passing Year</th>
                        <th scope="col">Board/University</th>
                        <th scope="col">Marks/CGPA</th>
                        <th scope="col">Division/Class</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <select class="form-control" style="width: 200px;">
                                <option>SSC</option>
                                <option>A-Level</option>
                                <option>Dakhil</option>
                                <option>Others</option>
                            </select>
                        </th>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <select class="form-control" style="width: 200px;">
                                <option>HSC</option>
                                <option>O-Level</option>
                                <option>Alim</option>
                                <option>Others</option>
                            </select>
                        </th>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <select class="form-control" style="width: 200px;">
                                <option>B.Sc.(Eng.)</option>
                                <option>B.Sc.(Hons.)</option>
                                <option>Others</option>
                            </select>
                        </th>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>

            <div class="form-group col-md-8">
                <label for="inputEmail4" class="col-form-label">10. Applicant's Emergency Contact : {{ $student->emergency_contact }}</label>

            </div>

            <div class="form-group col-md-8">
                <label for="inputEmail4" class="col-form-label">11. Email : {{ $student->email }}</label>

            </div>

            <div class="form-group col-md-8">
                <label for="inputEmail4" class="col-form-label">12. bKash transaction ID : {{ $student->bkash_transaction_no }}</label>

            </div><br><br><br><br>

            <div class="form-group col-md-6">
                <label for="inputEmail4" class="col-form-label">Date : {{ date("d/m/Y") }}</label>
            </div>

            <div class="form-group col-md-6">
                <p style="height: 40px; width: 200px; border: solid #009688 2px; "><img src="{{ url('uploads/signature/' .$student->signature) }}" alt="signature" height="40px" width="200px"/></p>
                <label for="inputEmail4" class="col-form-label">.....................................................</label><br>
                <label for="inputEmail4" class="col-form-label">Signature of the Applicant</label>
            </div>

        </div>
        @endforeach

        <br><br>

     <div style="margin-left: -150px; margin-bottom: 20px;">
        <button type="submit" id="printPageButton" onclick="window.print();" class="btn btn-lg btn-outline-info" style="margin-left: 270px;">Print Form</button>
        <button type="submit" id="printPageButton2" onclick="window.open('{{ route('admit') }}','Popup', 'height=800, width=1700, status=no, toolbar=no, menubar=no, location=no, top = 1, left=1').print();" class="btn btn-lg btn-outline-warning" style="margin-left: 270px;">Print Admit</button>
     </div>
    </form>



</div>

</body>