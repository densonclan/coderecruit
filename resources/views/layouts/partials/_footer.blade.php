<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


 
<script>

var bod = document.getElementsByTagName('body')[0];
  var pointerPref = "pointer";
  var candImage = "{{url('img/candidate.jpg')}}";
  var recImage = "{{url('img/recruiter.jpg')}}";

  // Check support
  if (!window.PointerEvent && !navigator.pointerEnabled) {
    pointerPref = "mouse";
  }
  document.addEventListener(pointerPref + "move", mMoveFunc);

  function mMoveFunc(evt) {
    if (evt.target === cand) {
     // alert(candImage);
      bod.style.backgroundImage = "url('" + candImage + "')";
    } else if (evt.target === rec) {
      bod.style.backgroundImage = "url('" + recImage + "')";
    } else {
      bod.style.backgroundImage = "";
    }

  }

  </script>