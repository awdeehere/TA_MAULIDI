<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kain Pelangi | Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/logo/logo.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- page css -->
    <link href="{{ url('/') }}/assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="{{ url('/') }}/assets/css/app.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/css/simadu.css" rel="stylesheet">

    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/summernote/summernote-bs4.min.css">
    <style>
        .truncate {
            width: 200px;
            /* Sesuaikan lebar sesuai kebutuhan */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <x-template.header />
            <!-- Header END -->

            <!-- Side Nav START -->
            <x-template.sidebar />
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content" style="background-image: url('{{ url('/') }}/assets/images/others/bg2.jpg')">
                    <div class="container-fluid pt-4">
                        <div class="row">
                            <div class="col-md-12">
                                <x-template.utils.notif />
                            </div>
                        </div>
                        {{ $slot }}
                    </div><!-- /.container-fluid -->
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <x-template.footer />
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            <div class="modal modal-left fade search" id="search-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Search</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Files</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-cyan avatar-icon">
                                        <i class="anticon anticon-file-excel"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Quater Report.exl</a>
                                        <p class="m-b-0 text-muted font-size-13">by Finance</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-blue avatar-icon">
                                        <i class="anticon anticon-file-word"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Documentaion.docx</a>
                                        <p class="m-b-0 text-muted font-size-13">by Developers</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-purple avatar-icon">
                                        <i class="anticon anticon-file-text"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Recipe.txt</a>
                                        <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-red avatar-icon">
                                        <i class="anticon anticon-file-pdf"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Project Requirement.pdf</a>
                                        <p class="m-b-0 text-muted font-size-13">by Project Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Members</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="{{ url('/') }}/assets/images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Erin
                                            Gonzales</a>
                                        <p class="m-b-0 text-muted font-size-13">UI/UX Designer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="{{ url('/') }}/assets/images/avatars/thumb-2.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Darryl Day</a>
                                        <p class="m-b-0 text-muted font-size-13">Software Engineer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="{{ url('/') }}/assets/images/avatars/thumb-3.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Marshall Nichols</a>
                                        <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">News</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="{{ url('/') }}/assets/images/others/img-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">5
                                            Best Handwriting Fonts</a>
                                        <p class="m-b-0 text-muted font-size-13">
                                            <i class="anticon anticon-clock-circle"></i>
                                            <span class="m-l-5">25 Nov 2018</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search End-->
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="{{ url('/') }}/assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="{{ url('/') }}/assets/vendors/select2/select2.min.js"></script>
    <script src="{{ url('/') }}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ url('/') }}/assets/js/pages/dashboard-default.js"></script>
    <script src="{{ url('/') }}/assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{ url('/') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <!-- Core css -->
    <link href="{{ url('/') }}/assets/css/app.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/css/simadu.css" rel="stylesheet">

    <!-- Summernote -->
    <script src="{{ url('/') }}/assets/plugins/summernote/summernote-bs4.min.js"></script>

    <!-- Core JS -->
    <script src="{{ url('/') }}/assets/js/app.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote({
                fontNames: ['Arial', 'Times New Roman', 'Arial Black'],
                styleTags: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
                blockquoteBreakingLevel: 2,
                blockquoteBreakingLevel: 2,
                styleWithSpan: false,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'video', 'table', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                ]
            });

            // Inisialisasi CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
    <script>
        $('#data-table').DataTable();
    </script>
    <script>
        $('.select2').select2();
    </script>
    <script>
        $('#trigger-loading-1').on('click', function(e) {
            $(this).addClass("is-loading");
            setTimeout(function() {
                $("#trigger-loading-1").removeClass("is-loading");
            }, 4000);
            e.preventDefault();
        });
    </script>
    <script>
        $(function() {
            $(document).ready(function() {
                $('.datepicker-input').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    autoclose: true,
                    todayHighlight: true,
                    format: 'dd-mm-yyyy',
                    language: 'id',
                    locale: 'id',
                });
            });
        })
    </script>
    @stack('script')
</body>

</html>