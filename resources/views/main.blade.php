<!doctype html>
<html lang="en" dir="ltr">

<head>

    @yield('head')

</head>

<body class="app ltr landing-page horizontal"
@if(Session::has('xabar'))
onload="xabarr()"><a href="javascript:void(0)" class="d-none" id="xabar1" onclick="sucs(event,'{{Session::get('xabar')}}')">Xabar</a>
@else
>
@endif

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>

    <!-- /GLOBAL-LOADER -->
@yield('menu')
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!--app-content open-->
            <div class="main-content mt-0">
                <div class="side-app">
                    @yield('content')
                </div>
            </div>
            <!--app-content closed-->
        </div>

       @yield('footer')
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    @yield('js')

</body>

<script type="text/javascript">
    $('#viloyat').on('change', function() {
            get_region_by_viloyat();
        });
            function get_region_by_viloyat(){
                var viloyat_id = $('#viloyat').val();

                $.post('{{route('getRegions')}}',{_token:'{{ csrf_token() }}', viloyat_id:viloyat_id}, function(data){

                    $('#region').html(null);
                    $('#region').append($('<option value="">Tumanni tanlang</option>', {

                    }));
                    for (var i = 0; i < data.length; i++) {
                        $('#region').append($('<option>', {
                            value: data[i].id,
                            text: data[i].region_name
                        }));

                    }
            });
        }
 </script>

 <script type="text/javascript">
    $('#region').on('change', function() {
            get_region_by_school();
        });
            function get_region_by_school(){
                var region_id = $('#region').val();
                $.post('{{route('getSchools')}}',{_token:'{{ csrf_token() }}', region_id:region_id}, function(data){
                    $('#school').html(null);
                    $('#school').append($('<option value="">Maktabni tanlang</option>', {
                    }));
                    for (var i = 0; i < data.length; i++) {
                        $('#school').append($('<option>', {
                            value: data[i].id,
                            text: data[i].school_name
                        }));

                    }
                });
            }
            </script>
 <script>
    function xabarr(){
        $("#xabar1").trigger('click');
    }

     function sucs(event,msg) {
         event.preventDefault();
         event.stopPropagation();
         return $.growl.notice({
             message: msg
            });
        }
    </script>

</html>
