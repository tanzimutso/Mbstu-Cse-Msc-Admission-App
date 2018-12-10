@extends('master')

@section('content')

    <br><br>
    <marquee scrollamount="20">
        <p align="center" style="margin-top: -8px;  font-family: serif; font-weight: bold; color: #AD1457; font-size: 30px;">Application Form for M.Sc. (Engg.)/M.Engg. (CSE) Program</p>
    </marquee>

    <div class="container" style="margin-top: 20px; margin-left: 300px; color:#009688; font-weight: bold;">

        <form enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">1. Name of the Applicant (as per SSC) :</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputPassword4" class="col-form-label">2. Father's Name :</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Password">
                </div>

                <div class="form-group col-md-8">
                    <label for="inputAddress" class="col-form-label">3. Mother's Name :</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputAddress2" class="col-form-label">4. Local Gurdian's name :</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputCity" class="col-form-label">5. Present Address (With Contact number) :</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputZip" class="col-form-label">6. Permanent Address (With Contact number) :</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>

                <div class="form-group col-md-8">
                    <label for="inputZip" class="col-form-label">7. Date of Birth (mm/dd/yyyy):</label>
                    <input type="date" class="form-control" id="inputZip">
                </div>

                <div class="form-group col-md-8">
                    <label for="inputZip" class="col-form-label">8. Nationality :</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>

                <div class="form-group col-md-10">
                    <label for="inputZip" class="col-form-label">9. Academic Qualifications (SSC to B.Sc. and others) :</label>
                    <br>
                    <br>
                    <table class="table table-hover" style="text-align: center">
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
                                <input type="text" class="form-control" id="inputZip">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="inputZip">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="inputZip">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="inputZip">
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
                                <input type="text" class="form-control" id="inputZip">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="inputZip">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="inputZip">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="inputZip">
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
                                <input type="text" class="form-control" id="inputZip">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="inputZip">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="inputZip">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="inputZip">
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">10. Applicant's Emergency Contact :</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                </div>

                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">11. Email :</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                </div>

                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">12. bKash transaction ID :</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                </div>


                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">13. Upload PP size photo:</label>
                    <div class="input-group input-file" name="Fichier1">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-choose" type="button">Choose</button>
                            </span>
                        <input type="text" class="form-control" placeholder='Choose a file...' />
                        <span class="input-group-btn">
                                    <button class="btn btn-warning btn-reset" type="button">Reset</button>
                            </span>
                    </div>
                </div>

                <div class="form-group col-md-8">
                    <label for="inputEmail4" class="col-form-label">14. Upload Signature:</label>
                    <div class="input-group input-file" name="Fichier1">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-choose" type="button">Choose</button>
                            </span>
                        <input type="text" class="form-control" placeholder='Choose a file...' />
                        <span class="input-group-btn">
                                    <button class="btn btn-warning btn-reset" type="button">Reset</button>
                            </span>
                    </div>
                </div>


            </div>

            <br><br>

            <button type="submit" class="btn btn-lg btn-outline-success" style="margin-left: 270px;">Apply Now</button>
        </form>

        <br><br> <br><br> <br><br>


</div>

@endsection

@section('script')
    <script>

        function bs_input_file() {
            $(".input-file").before(
                function() {
                    if ( ! $(this).prev().hasClass('input-ghost') ) {
                        var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                        element.attr("name",$(this).attr("name"));
                        element.change(function(){
                            element.next(element).find('input').val((element.val()).split('\\').pop());
                        });
                        $(this).find("button.btn-choose").click(function(){
                            element.click();
                        });
                        $(this).find("button.btn-reset").click(function(){
                            element.val(null);
                            $(this).parents(".input-file").find('input').val('');
                        });
                        $(this).find('input').css("cursor","pointer");
                        $(this).find('input').mousedown(function() {
                            $(this).parents('.input-file').prev().click();
                            return false;
                        });
                        return element;
                    }
                }
            );
        }
        $(function() {
            bs_input_file();
        });

    </script>
    @endsection