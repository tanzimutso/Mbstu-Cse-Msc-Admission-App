@extends('master')

@section('content')

    <br><br>
    <marquee scrollamount="20">
        <p align="center" style="margin-top: -8px;  font-family: serif; font-weight: bold; color: #AD1457; font-size: 30px;">Application Form for M.Sc. (Engg.)/M.Engg. (CSE) Program</p>
    </marquee>

    <div class="container" style="margin-top: 20px; margin-left: 200px; color:#009688; font-weight: bold;">
        <div class="col-md-12">
            @if(Session::has('message'))
                <div class="alert alert-{{ session('status') }}">
                    {{ session('message') }}
                </div>
            @endif
        <form action="{{ route('applicant_details_store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="name" class="col-form-label">1. Name of the Applicant (as per SSC) :</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                </div>
                <div class="form-group col-md-8">
                    <label for="father's_name" class="col-form-label">2. Father's Name :</label>
                    <input type="text" class="form-control" name="father_name" placeholder="Father's Name" required>
                </div>

                <div class="form-group col-md-8">
                    <label for="inputAddress" class="col-form-label">3. Mother's Name :</label>
                    <input type="text" class="form-control" name="mother_name" placeholder="Mother's Name" required>
                </div>
                <div class="form-group col-md-8">
                    <label for="inputAddress2" class="col-form-label">4. Local Guardian's name :</label>
                    <input type="text" class="form-control" name="local_guardian_name" placeholder="Local Guardian's name">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputCity" class="col-form-label">5. Present Address (With Contact number) :</label>
                    <input type="text" class="form-control" name="present_address" required>
                </div>
                <div class="form-group col-md-8">
                    <label for="inputZip" class="col-form-label">6. Permanent Address (With Contact number) :</label>
                    <input type="text" class="form-control" name="permanent_address" required>
                </div>

                <div class="form-group col-md-8">
                    <label for="inputZip" class="col-form-label">7. Date of Birth (mm/dd/yyyy):</label>
                    <input type="date" class="form-control" name="date_of_birth" required>
                </div>

                <div class="form-group col-md-8">
                    <label for="inputZip" class="col-form-label">8. Nationality :</label>
                    <input type="text" class="form-control" name="nationality" required>
                </div>

                <div class="form-group col-md-10">
                    <label for="inputZip" class="col-form-label">9. Academic Qualifications (SSC to B.Sc. and others) :</label>
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
                                <input type="text" class="form-control" name="ssc_passing_year" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="ssc_board" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="ssc_cgpa" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="ssc_class">
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
                                <input type="text" class="form-control" name="hsc_passing_year" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="hsc_board" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="hsc_cgpa" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="hsc_class">
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
                                <input type="text" class="form-control" name="bsc_passing_year" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="bsc_university" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="bsc_cgpa" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="bsc_class">
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">10. Applicant's Emergency Contact :</label>
                    <input type="text" class="form-control" name="emergency_contact" placeholder="Applicant's Emergency Contact" required>
                </div>

                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">11. Email :</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">12. bKash transaction ID :</label>
                    <input type="text" class="form-control" name="bkash_transaction_no" placeholder="bKash transaction ID" required>
                </div>


                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">13. Upload PP size photo:</label>
                    <div class="file-upload">
                        <div class="file-select">
                            <div class="file-select-button" id="fileName">Choose File</div>
                            <div class="file-select-name" id="noFile">No file chosen...</div>
                            <input type="file" name="picture" id="chooseFile">
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">14. Upload Signature:</label>
                    <div class="file-upload2">
                        <div class="file-select2">
                            <div class="file-select-button2" id="fileName2">Choose File</div>
                            <div class="file-select-name2" id="noFile2">No file chosen...</div>
                            <input type="file" name="signature" id="chooseFile2">
                        </div>
                    </div>
                </div>


            </div>

            <br><br>

            <input type="submit" class="btn btn-lg btn-outline-success" value="Apply Now" style="margin-left: 270px;"/>
        </form>

        <br><br> <br><br> <br><br>


        </div>
    </div>

@endsection

@section('script')

    <script>
            $('#chooseFile').bind('change', function () {
                var filename = $("#chooseFile").val();
                if (/^\s*$/.test(filename)) {
                    $(".file-upload").removeClass('active');
                    $("#noFile").text("No file chosen...");
                }
                else {
                    $(".file-upload").addClass('active');
                    $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
                }
            });

            $('#chooseFile2').bind('change', function () {
                var filename = $("#chooseFile2").val();
                if (/^\s*$/.test(filename)) {
                    $(".file-upload2").removeClass('active');
                    $("#noFile2").text("No file chosen...");
                }
                else {
                    $(".file-upload2").addClass('active');
                    $("#noFile2").text(filename.replace("C:\\fakepath\\", ""));
                }
            });

    </script>
@endsection