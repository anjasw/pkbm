<footer class="py-3 my-0 bg-light">
<div class="container">
<div class="row">
    <div class="col my-auto">
      <p class="text-muted">&copy; KPT 2022</p>
    </div>

    <div class="col">
      <div class="row">
        <?php foreach($posts->result() as $k): ?>
          <div class="col-md-4">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title"><a href="<?php echo base_url().'home/detail_post/'.$k->id_posts.'/'.str_replace(' ','-',strtolower($k->title)) ?>"><?php echo $k->title ?></a></h5>
                  <p class="card-text"><?php echo word_limiter($k->description,20) ?></p>
                </div>
              </div>
            </div>
          </div>
          </div>
          <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
var currentTab = 0;
showTab(currentTab); 

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
    return false;
  }
  showTab(currentTab);
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; 
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}
var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel)
</script>
</body>
</html>