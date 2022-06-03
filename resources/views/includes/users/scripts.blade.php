 <!-- JAVASCRIPTS -->
 <script src="plugins/jQuery/jquery.min.js"></script>
 <script src="plugins/bootstrap/js/popper.min.js"></script>
 <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
 <script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
 <!-- tether js -->
 <script src="plugins/tether/js/tether.min.js"></script>
 <script src="plugins/raty/jquery.raty-fa.js"></script>
 <script src="plugins/slick-carousel/slick/slick.min.js"></script>
 <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
 <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
 <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
 <!-- google map -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
 </script>
 <script src="plugins/google-map/gmap.js"></script>
 <script src="js/script.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.2/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.8.2/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyBpKgwpCJYdf933tizfnn7GS3Ridub1hAI",
      authDomain: "car-shop-fef4a.firebaseapp.com",
      projectId: "car-shop-fef4a",
      storageBucket: "car-shop-fef4a.appspot.com",
      messagingSenderId: "153021549284",
      appId: "1:153021549284:web:242372cea48523f125baf1",
      measurementId: "G-5KMXYQSWX1"
    };
  
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
  </script>