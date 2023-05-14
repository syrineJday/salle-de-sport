<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.3.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @auth
        @include('admin.includes.header')
        @include('admin.includes.aside')
    @endauth
    @yield('content')
     <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function(){
                 
            $(".delete-confirm").on('click', function(e){
                console.log('delete item ');
                e.preventDefault();
                var url = $(this).data('url');
                console.log($('meta[name=csrf-token]').attr('content'));
                swal({
                    title: "êtes vous sûr?",
                    text: "Voulez vous supprimer ce "+$(this).data('model'),
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var data = {
                            "_token" : $('meta[name="csrf-token"]').attr('content'),
                        };
                        $.ajax({
                            type: "DELETE",
                            url: url,
                            data: data,
                            success: function(response){
                                swal(response.deleted, {
                                    icon: "success",
                                }).then((result) => {
                                    location.reload();
                                });
                            }
                        })
                    } else {
                        swal("Votre action est annulé");
                    }
                });
            });
            $(".approuver-confirm").on('click', function(e){
                console.log('delete item ');
                e.preventDefault();
                var url = $(this).data('url');
                console.log($('meta[name=csrf-token]').attr('content'));
                swal({
                    title: "êtes vous sûr?",
                    text: "Voulez vous "+$(this).data('action')+" ce "+$(this).data('model'),
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var data = {
                            "_token" : $('meta[name="csrf-token"]').attr('content'),
                        };
                        $.ajax({
                            type: "PUT",
                            url: url,
                            data: data,
                            success: function(response){
                                console.log(response);
                                swal(response.deleted, {
                                    icon: "success",
                                }).then((result) => {
                                    location.reload();
                                });
                            }
                        })
                    } else {
                        swal("Votre action est annulé");
                    }
                });
            });
            $(".edit-confirm").on('click', function(e){
                e.preventDefault();
                console.log($(this).data('model'));
                var id = $(this).closest('tr').find('.product_id').val();
                var href = $(this).attr('href');
                swal({
                    title: "êtes vous sûr?",
                    text: "Voulez vous editer ce "+$(this).data('model'),
                    icon: "primary",
                    buttons: true,
                    dangerMode: false,
                })
                .then((willEdit) => {
                    if (willEdit) {
                        window.location.href = href;
                    } else {
                        swal("Votre action est annulé");
                    }
                });
            });
            $(".cancel-confirm").on('click', function(e){
                e.preventDefault();
                console.log($(this).data('model'));
                var url = $(this).data('href');
                var data = {
                    "_token" : $('meta[name="csrf-token"]').attr('content'),
                };
                swal({
                    title: "êtes vous sûr?",
                    text: "Voulez vous annuler ce "+$(this).data('model'),
                    icon: "primary",
                    buttons: true,
                    dangerMode: false,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        
                        $.ajax({
                            type: "PUT",
                            data: data,
                            url: url,
                            success: function(response){
                                console.log(response);
                                swal(response.canceled, {
                                    icon: "success",
                                }).then((result) => {
                                    location.reload();
                                });
                            }
                        })
                    } else {
                        swal("Votre action est annulé");
                    }
                });
            });
        });
    </script>
</body>

</html>