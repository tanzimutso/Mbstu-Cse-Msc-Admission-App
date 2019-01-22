@extends('master2')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-{{ session('status') }}">
            {{ session('message') }}
        </div>
    @endif
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
                    <?php $count = 1;
                     $form_no = 2701;
                    ?>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $form_no++ }}</td>
                            <td>{{ $student->emergency_contact }}</td>
                            <td>{{ $student->bkash_transaction_no }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->bsc_university }}</td>
                            <td>
                                <a class="btn btn-danger delete" style="color: #fff;">
                                            Delete</a>
                                <input class="delete_url" type="hidden" value="{{ route('applicant_delete', ['id' => $student->id]) }}">

                            </td>

                        </tr>
                    @endforeach
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