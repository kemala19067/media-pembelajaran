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
<link href="node_modules/node_modules@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">






<!-- Theme CSS -->

</div>        <!-- content -->
        <div class="py-6">
            <!-- row -->
            <div class="row">

                <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <h4 class="card-title mb-4">Buat Postingan</h4>
                            
                            <form action="http://127.0.0.1:8000/user/addpost" method="post">
                                <input type="hidden" name="_token" value="SDhlRmwiMqUIDpeInaKo0U3h5l6YrGZmxz53K1Vl">                                <div class="mb-3">
                                    <label class="form-label" for="selectOne">Forum</label>
                                    <select id="forum" name="forum"
                                        class="form-control ">
                                        <option value="">Pilih Forum</option>
                                                                                <option value="1">php</option>
                                                                                <option value="2">python</option>
                                                                                <option value="3">laravel</option>
                                                                                <option value="4">javascript</option>
                                                                            </select>
                                                                    </div>
                                <div class="mb-3">
                                    <label class="form-label" for="content">Content</label>
                                    <textarea id="content" name="content"
                                        class="form-control  "
                                        placeholder="Content" rows="4"></textarea>
                                                                    </div>
                                <button type="submit" class="btn btn-primary">Buat</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <h4 class="card-title mb-4">Postingan</h4>
                                                        <a href="/user/postinganku/1" class="list-group-item list-group-item-action">
                                <p class="mb-1 text-dark-success">user123</p>
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">kenapa saya tidak bisa install python?</h5>
                                    <small>2 days ago</small>
                                </div>
                                <p class="mb-1 text-secondary">0 komentar</p>
                            </a>
                                                        <a href="/user/postinganku/2" class="list-group-item list-group-item-action">
                                <p class="mb-1 text-dark-success">tester111</p>
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">python  jalan</h5>
                                    <small>2 days ago</small>
                                </div>
                                <p class="mb-1 text-secondary">0 komentar</p>
                            </a>
                                                        <a href="/user/postinganku/3" class="list-group-item list-group-item-action">
                                <p class="mb-1 text-dark-success">uwais22</p>
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">error laravel 5</h5>
                                    <small>2 days ago</small>
                                </div>
                                <p class="mb-1 text-secondary">0 komentar</p>
                            </a>
                                                        <a href="/user/postinganku/4" class="list-group-item list-group-item-action">
                                <p class="mb-1 text-dark-success">contohuser</p>
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">tidak bisa menjalankan laravel 8</h5>
                                    <small>2 days ago</small>
                                </div>
                                <p class="mb-1 text-secondary">0 komentar</p>
                            </a>
                            
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