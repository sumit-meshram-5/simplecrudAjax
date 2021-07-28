<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Simple CRUD</title>

    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- main card -->
    <div class="container">
        <br>
        <div class="card text-center m-auto">
            <div class="card-header">
                Simple AJAX CRUD App
            </div>
            <div class="card-body">
                <h5 class="card-title">User Records<button data-bs-toggle="modal" data-bs-target="#createModal" class="btn btn-primary float-end createmodalbtn">
                        Create Records</button></h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="maintable">
                        <!-- ajax data here -->
                    </tbody>
                </table>
            </div>
            <div class="card-footer ">
                All rights Reserved
            </div>
        </div>
    </div>

    <!-- create modal -->
    <div class="modal fade" id="createModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Create Records</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label> <span class="name_create_error "></span>
                        <input type="text" class="form-control" id="name_create">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label><span class="email_create_error  "></span>
                        <input type="text" class="form-control" id="email_create">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary createbtn">Create Record</button>
                </div>
            </div>
        </div>
    </div>


    <!-- edit modal -->
    <div class="modal fade" id="editModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">edit Records</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 editid">
                    <h5 class="">Record id: <span></span></h5>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label namelable">Name</label> <span class="name_edit_error "></span>
                        <input type="text" class="form-control" id="name_edit">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label><span class="email_edit_error  "></span>
                        <input type="text" class="form-control" id="email_edit">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary updatebtn">update Record</button>
                </div>
            </div>
        </div>
    </div>

    <!-- view modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">View Records</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <h5 class="card-title">Record ID:</h5> -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody class="viewtable">
                            <!-- ajax data here -->
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary editbtnview">Edit Record</button>
                    <button type="button" class="btn btn-primary deletebtnview">Delete Record</button>
                </div>
            </div>
        </div>
    </div>

    <!-- delete modal -->
    <div class="modal fade" id="deleteModal" tabindex="-2" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">delete Records</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <h5 class="card-title">Record ID:</h5> -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody class="deletetable">
                            <!-- ajax data here -->
                        </tbody>
                    </table>

                </div>

                <div class="modal-footer">
                    <h5>Are you sure to delete</h5>
                    <button type="button" class="btn btn-danger deleteconfirmbtn mx-3">YES</button>
                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">NO</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            loadData();
        });

        $(document).on('click', '.createbtn', function() {
            //alert('eef');
            //$('#addModal').modal('show');

            $.ajax({
                type: "post",
                url: "files/create.php",
                data: {
                    'input': {
                        'name': $('#name_create').val(),
                        'email': $('#email_create').val(),
                    },
                },
                dataType: "JSON",
                success: function(response) {
                    $('.name_create_error').html('');
                    if (response.error.name != null) {
                        $('.name_create_error').append('<p class="text-danger">' + response.error.name + '</p>');
                    } else {
                        $('.name_create_error').html('');
                    }
                    $('.email_create_error').html('');
                    if (response.error.email != null) {
                        $('.email_create_error').append('<p class="text-danger">' + response.error.email + '</p>');
                    } else {
                        $('.email_create_error').html('');
                    }
                    show_message(response)
                    if (response.error == null || response.success != null || response.fail != null) {
                        $('#createModal').modal('hide');
                        $('#name_create').val('');
                        $('#email_create').val('');
                    }
                    loadData();
                }
            });
        });

        //event on view button
        $(document).on('click', '.viewbtn', function() {
            $('#viewModal').modal('show');
            //get id
            let id = $(this).attr('attrid');
            $('.viewtable').html('');
            $.ajax({
                type: "post",
                url: "files/view.php",
                data: {
                    'id': id,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.error != null) {
                        $('.viewtable').append('<h5 class="text-danger">' + response.error + '</h5>');
                    } else {
                        $('.viewtable').append('\
                                <tr>\
                                    <th scope="row">' + response.row.id + '</th>\
                                    <td>' + response.row.name + '</td>\
                                    <td>' + response.row.email + '</td>\
                                </tr>');
                    }
                }
            });
        });

        //delete btn modal show
        $(document).on('click', '.deletebtn', function() {
            $('#deleteModal').modal('show');
            //get id
            let id = $(this).attr('attrid');
            $('.deletetable').html('');
            $.ajax({
                type: "post",
                url: "files/view.php",
                data: {
                    'id': id,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.error != null) {
                        $('.deletetable').append('<h5 class="text-danger">' + response.error + '</h5>');
                    } else {
                        $('.deletetable').append('\
                                <tr>\
                                    <th scope="row">' + response.row.id + '</th>\
                                    <td>' + response.row.name + '</td>\
                                    <td>' + response.row.email + '</td>\
                                </tr>');
                    }
                }
            });
        });

        //delete view btn modal show
        $(document).on('click', '.deletebtnview', function() {
            $('#viewModal').modal('hide');
            $('#deleteModal').modal('show');
            //get id
            let id = $(this).parent().parent().find('.viewtable tr th').text();
            $('.deletetable').html('');
            $.ajax({
                type: "post",
                url: "files/view.php",
                data: {
                    'id': id,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.error != null) {
                        $('.deletetable').append('<h5 class="text-danger">' + response.error + '</h5>');
                    } else {
                        $('.deletetable').append('\
                                <tr>\
                                    <th scope="row">' + response.row.id + '</th>\
                                    <td>' + response.row.name + '</td>\
                                    <td>' + response.row.email + '</td>\
                                </tr>');
                    }
                }
            });
        });

        //delete confirm
        $(document).on('click', '.deleteconfirmbtn', function() {
            //get id
            let id = $(this).parent().parent().find('.deletetable tr th').text();
            alert(id);
            $.ajax({
                type: "post",
                url: "files/delete.php",
                data: {
                    'id': id,
                },
                dataType: "JSON",
                success: function(response) {
                    show_message(response);
                    $('#deleteModal').modal('hide');
                    $('.deletetable').html('');
                    loadData();
                }
            });
        });

        //edit btn modal show
        $(document).on('click', '.editbtn', function() {
            $('#viewModal').modal('hide');
            $('#editModal').modal('show');
            //get id
            let id = $(this).attr('attrid');
            $.ajax({
                type: "post",
                url: "files/view.php",
                data: {
                    'id': id,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.error != null) {
                        $('.editid').append('<h5 class="text-danger">' + response.error + '</h5>');
                    } else {
                        $('.editid span').text( response.row.id );
                        $('#name_edit').val(response.row.name);
                        $('#email_edit').val(response.row.email);
                    }
                },
            });
        });

        //edit view btn modal show
        $(document).on('click', '.editbtnview', function() {
            $('#viewModal').modal('hide');
            $('#editModal').modal('show');
            //get id
            let id = $(this).parent().parent().find('.viewtable tr th').text();
            $.ajax({
                type: "post",
                url: "files/view.php",
                data: {
                    'id': id,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.error != null) {
                        $('.editid').append('<h5 class="text-danger">' + response.error + '</h5>');
                    } else {
                        $('.editid span').text( response.row.id );
                        $('#name_edit').val(response.row.name);
                        $('#email_edit').val(response.row.email);
                    }
                },
            });
        });

        //update code
        $(document).on('click', '.updatebtn', function() {
            //alert('eef');
            //$('#addModal').modal('show');
            // get id
            let id=$('.editid span').text();
            $.ajax({
                type: "post",
                url: "files/update.php",
                data: {
                    'input': {
                        'id': id,
                        'name': $('#name_edit').val(),
                        'email': $('#email_edit').val(),
                    },
                },
                dataType: "JSON",
                success: function(response) {
                    $('.name_edit_error').html('');
                    if (response.error.name != null) {
                        $('.name_edit_error').append('<p class="text-danger">' + response.error.name + '</p>');
                    } else {
                        $('.name_edit_error').html('');
                    }
                    $('.email_edit_error').html('');
                    if (response.error.email != null) {
                        $('.email_edit_error').append('<p class="text-danger">' + response.error.email + '</p>');
                    } else {
                        $('.email_edit_error').html('');
                    }
                    show_message(response)
                    $('#name_edit').val('');
                    $('#email_edit').val('');
                    if (response.error == null || response.success != null || response.fail != null) {
                        $('#editModal').modal('hide');
                    }
                    loadData();
                }
            });
        });

        function loadData() {
            //alert();
            $.ajax({
                method: "post",
                url: "files/read.php",
                dataType: 'JSON',
                success: function(response) {
                    $('.maintable').html('');
                    if (response.allrecords != null) {
                        $.each(response.allrecords, function(recordnumber, field) {
                            $('.maintable').append('\
                                <tr>\
                                    <th scope="row">' + field.id + '</th>\
                                    <td>' + field.name + '</td>\
                                    <td>' + field.email + '</td>\
                                    <td>\
                                        <button class="btn btn-primary viewbtn" attrid="' + field.id + '">View</button>\
                                        <button  data-bs-toggle="modal" data-bs-target="#editModal" \
                                            class="btn btn-primary editbtn" attrid="' + field.id + '">Edit</button>\
                                        <button class="btn btn-danger deletebtn"attrid="' + field.id + '">Delete</button>\
                                    </td>\
                                </tr>');
                        });
                    } else {
                        if (response.error == null) {
                            $('.maintable').append('<h5 class="text-danger">please enter records</h5>');
                        } else {
                            $('.maintable').append('<h5 class="text-danger">' + response.error + '</h5>');
                        }
                    }
                }
            });
        }

        function show_message(response) {
            if (response.fail != null) {
                alert(response.fail);
            }
            if (response.success != null) {
                alert(response.success);
            }
        }
    </script>



</body>

</html>