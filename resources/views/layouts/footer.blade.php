
@section('footer')

    <!--footer inicio-->
    <footer class="container-fluid">
        <div class="col-12">
            <ul class="list-unstyled">
                
                <div class="d-flex flex-row justify-content-center">
                    <li class="mr-2">
                        <a href="{{url('/contact')}}">
                            <img src="{{url('img/email.png')}}" class="img_footer_mail" alt="logo_email">
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="https:facebook.com" target="_blank">
                            <img src="{{url('img/facebook.png')}}" class="img_footer" alt="logo_facebook">
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="https://www.instagram.com" target="_blank">
                            <img src="{{url('img/instagram.png')}}" class="img_footer" alt="logo_instagram">
                        </a>
                    </li>
                </div>
            </ul>
        </div>
        <div class="row">
            <div id="copyright" class="small col-12 text-center">Direitos Reservados <a
                href="https://www.flaticon.com/" title="Together">Together</a>&copy; 2019</div>
            </div>
        </div>
    </footer>
    <!--fim footer-->

    <!--scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> 
    <!-- API CEP -->
    <script src="{{url('js/main.js')}}" ></script>
    
@endsection