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
                            @if(Session::get('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success')}}
                    </div>
                @endif
                            <h4 class="card-title mb-4">Buat Forum</h4>
                            
                            <form action="addforum" method="post">
                            @csrf  
                            
                            
                                <div class="mb-3">
                                
                                    <div class="mb-3">
                                    <label class="form-label" for="selectOne">Forum</label>
                                    <textarea id="title" name="title"
                                    class="form-control  "
                                        placeholder="Nama Forum" rows="4"></textarea>
                                                                    </div>
                                <div class="mb-3">
                                    <label class="form-label" for="content">Content</label>
                                    <textarea id="content" name="content"
                                        class="form-control  "
                                        placeholder="Konte" rows="4"></textarea>
                                                                    </div>
                                <button type="submit" class="btn btn-primary">Buat</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
                    <!-- card -->
                   
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