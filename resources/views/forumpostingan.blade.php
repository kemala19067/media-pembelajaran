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
                            <a href="" class="list-group-item list-group-item-action">
                        <br></br>
                            <p class="mb-1 text-dark-success">{{ $forum->title }}</p>
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $forum->content }}</h5>
                                <small>2 days ago</small>
                            </div>
                            <div class="btn-group">
                         
                            <button class="btn-btn default" id="btn-komentar-utama">komentar</button>
                            </div>
                            
                            <form action="">
                            
                            
                            <textarea style="margin-top:7px" name="komentar" class="form-control" id="komentar-utama" rows="4"></textarea>
                            <input type="submit" class="btn btn-primary" value="Kirim">
                            
                            </form>
                            
                            
                            
                            @endforeach
                            
                       
               
                            <!-- row -->
         

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

@section('footer')
<script>
$(document).ready(function()){
    $('#btn-komentar-utama').click(function(){
        alert(0);
    })
});
</script>
@endsection