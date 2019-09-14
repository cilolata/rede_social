 
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
@endsection