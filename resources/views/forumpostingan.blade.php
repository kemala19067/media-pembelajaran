@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/assets/images/favicon/favicon.ico">

<!-- Libs CSS -->

<link rel="stylesheet" href="node_modules/node_modulesprismjs/themes/prism.css">
<link rel="stylesheet" href="node_modules/node_modulesprismjs/plugins/line-numbers/prism-line-numbers.css">
<link rel="stylesheet" href="node_modules/node_modulesprismjs/plugins/toolbar/prism-toolbar.css">
<link rel="stylesheet" href="node_modules/node_modulesbootstrap-icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="node_modules/node_modulesdropzone/dist/dropzone.css">
<link href="node_modules0/node_modules@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">


</div>        <!-- content -->
        <div class="py-6">
            <!-- row -->
            <div class="row">
                <div class="col-xl-4 col-md-12 col-12 mb-6">
                    <div class="list-group">
                    @foreach ($forumpostingan as $forum)
                            <a href="/user/postinganku/1" class="list-group-item list-group-item-action">
                            <p class="mb-1 text-dark-success">{{ $forum->title }}</p>
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $forum->content }}</h5>
                                <small>2 days ago</small>
                            </div>
                            
                            @endforeach
                            <p class="mb-1 text-secondary">0 komentar</p>
                        </a>
                            <a href="/user/postinganku/2" class="list-group-item list-group-item-action">
                            
                            <p class="mb-1 text-secondary">0 komentar</p>
                        </a>
                                                <a href="/user/postinganku/3" class="list-group-item list-group-item-action">
                            <p class="mb-1 text-dark-success">user3</p>
                           
                        </a>
                                
                        </a>
                                            </div>

                </div>
                <div class="col-xl-8 col-md-12 col-12 mb-6">
                    <!-- card -->
                    <div class="card">

                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5
                      align-items-center">
                                <!-- avatar -->
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="http://127.0.0.1:8000/assets/images/avatar/default.png" alt=""
                                            class="avatar avatar-md rounded-circle">
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">user1</h5>
                                        <p class="mb-0">2 days ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <!-- text -->
                                <p class="mb-4">Topik1 ...</p>
                            </div>
                            <!-- icons -->
                            <div class="mb-4">
                                <span class="me-1 me-md-4">
                                    <i data-feather="message-square" class="icon-xxs
                          text-muted me-2">
                                    </i>
                                    <span>0 komentar</span>
                                </span>
                            </div>
                            
                            <!-- row -->
                            <form action="http://127.0.0.1:8000/user/komentar" method="post">
                                <input type="hidden" name="_token" value="K1YFSGgIOlq0BxBesHZSA4w1FhoaHtothTBz0kvo">                                <div class="row">

                                    <!-- input -->
                                    <div class="col-xl-12 col-lg-10 col-md-9 col-12 ">

                                        <div class="row g-3 align-items-center">

                                            <div class="col-md-10 col-xxl-9  mt-0 mt-md-3">
                                                <input type="text" hidden name="id" id="id" value="2">
                                                <input type="text" id="komen" name="komen"
                                                    class="form-control "
                                                    aria-describedby="name">
                                                                                            </div>
                                        <form action="addkomen" method="post" >
                                         @csrf                                               
                                            <div class="col-md-2 mt-2 col-xxl-2">

                                                <button type="submit" class="btn btn-primary">Comment</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Scripts -->
        <!-- Libs JS -->
<script src="http://127.0.0.1:8000/node_modules/jquery/dist/jquery.min.js"></script>
<script src="http://127.0.0.1:8000/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://127.0.0.1:8000/node_modules/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="http://127.0.0.1:8000/node_modules/feather-icons/dist/feather.min.js"></script>
<script src="http://127.0.0.1:8000/node_modules/prismjs/components/prism-core.min.js"></script>
<script src="http://127.0.0.1:8000/node_modules/prismjs/components/prism-markup.min.js"></script>
<script src="http://127.0.0.1:8000/node_modules/prismjs/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script src="http://127.0.0.1:8000/node_modules/apexcharts/dist/apexcharts.min.js"></script>
<script src="http://127.0.0.1:8000/node_modules/dropzone/dist/min/dropzone.min.js"></script>










<!-- clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>



<!-- Theme JS -->
<!-- build:js /assets/js/theme.min.js -->
<script src="assets/assets/js/main.js"></script>
<script src="assets/assets/js/feather.js"></script>
<script src="assets/assets/js/copyButton.js"></script>
<script src="assets/assets/js/sidebarMenu.js"></script>


<!-- endbuild -->    </body>

</html>

@endsection