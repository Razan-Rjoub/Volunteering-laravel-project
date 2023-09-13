<div class="site-footer">
    <div class="container">

        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="widget">
                    <h3>Navigation</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('Give Donation')}}">Donation</a></li>
                        <li><a href="{{route('Give Items')}}">Item</a></li>
                        <li><a href="{{route('Give Services')}}">Service</a></li>
                        <li><a href="{{route('aboutus')}}">About us</a></li>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="widget">
                    <h3>Popular Causes</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="#">Food for the Hungry</a></li>
                        <li><a href="#">Education for Children</a></li>
                        <li><a href="#">Support for Livelihood</a></li>
                        <li><a href="#">Medical Mission</a></li>
                        <li><a href="#">Education</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="widget">
                    <h3>Services</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="#">Causes</a></li>
                        <li><a href="#">Volunteer</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->


            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="widget">
                    <h3>Contact</h3>
                    <address>Irbid-Jordan</address>
                    <ul class="list-unstyled links mb-4">
                        <li><a href="tel://11234567890">0790953013</a></li>
                        <li><a href="mailto:alrijjalramez@gmail.com">donation@gmail.com</a></li>
                    </ul>

                    <h3>Connect</h3>
                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-dribbble"></span></a></li>
                    </ul>

                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

        </div> <!-- /.row -->


        <div class="row mt-5">
            <div class="col-12 text-center">
                <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; to Donation <a href="https://untree.co">donation.co</a> <!-- License information: https://untree.co/license/ -->
                </p>
            </div>
        </div>
    </div>







<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<script src="{{asset('style/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('style/js/tiny-slider.js')}}"></script>
<script src="{{asset('style/js/flatpickr.min.js')}}"></script>
<script src="{{asset('style/js/glightbox.min.js')}}"></script>
<script src="{{asset('style/js/aos.js')}}"></script>
<script src="{{asset('style/js/navbar.js')}}"></script>
<script src="{{asset('style/js/counter.js')}}"></script>
<script src="{{asset('style/js/custom.js')}}"></script>

<script src="{{asset('../assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('../assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('../assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
<script src="{{asset('../assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('../assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>

<script src="{{asset('../assets/js/main.js')}}"></script>

<script src="{{asset('../assets/js/pages-account-settings-account.js')}}"></script>
<script>
    function toggleDescription(event, itemId) {
        event.preventDefault(); // Prevent the default behavior (scroll to top)

        var moreText = document.getElementById('more' + itemId);
        var linkText = document.getElementById('link' + itemId);

        if (moreText.style.display === 'none') {
            moreText.style.display = 'inline';
            linkText.innerHTML = 'View Less';
        } else {
            moreText.style.display = 'none';
            linkText.innerHTML = 'View More';
        }
    }
</script>

</body>
</html>
