@extends('master2')

@section('content')

    <div class="container" style="margin-top: 30px;">
        <div class="card">
            <div class="card-header">

                <div class="card-actions">

                </div>
            </div>

            <div class="card-block">
                <div class="form-group col-md-6">


                </div>
                <table class="table table-striped table-bordered datatable table-hover">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Form Number</th>
                        <th>Emergency Contact</th>
                        <th>B-Kash Transaction ID</th>
                        <th>Email Id</th>
                        <th>University</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tanzim Islam Utso</td>
                            <td>2706</td>
                            <td>01515607055</td>
                            <td>4JT5021BD7</td>
                            <td>mail@m.com</td>
                            <td>MBSTU</td>
                            <td>
                                <a class="btn btn-success" href="">
                                    Show
                                </a>
                                <a class="btn btn-danger delete" style="color: #fff;">
                                            Delete</a>
                                        <input class="delete_url" type="hidden" value="">

                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection

@section('script')
    <script>
    $('.delete').click(function () {

    var url = $(this).next('.delete_url').val();

    swal({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then(function () {
    window.location.href = url;
    })

    });
    </script>
    @endsection