var tvtot = 0;
var celltot = 0;
var aspertot = 0;
var tot = 0;
var email = "";
var password = "";

function addTv(){
  tvtot += 1;
  tot += 57.00;
  document.getElementById("tvtotal").innerHTML = "TVs in cart: " + tvtot;
  document.getElementById("tvdata").value =  tvtot;
  document.getElementById("total").innerHTML ="Total before shipping: $" + tot +".00";
}

function addCell(){
  celltot += 1;
  tot += 200.00;
  document.getElementById("celltotal").innerHTML = "Phones in cart: " + celltot;
  document.getElementById("celldata").value =  celltot;
  document.getElementById("total").innerHTML ="Total before shipping: $" + tot+".00";
}

function addAsper(){
  aspertot += 1;
  tot += 14.00;
  document.getElementById("aspertotal").innerHTML = "Asparagus in cart: " + aspertot;
  document.getElementById("asperdata").value =  aspertot;
  document.getElementById("total").innerHTML ="Total before shipping: $" + tot+".00";
}

function  checkPassword(){
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var ship = document.querySelectorAll('input[name="shipping"]');
  let selectedValue = "";
    for (const option of ship) {
      if (option.checked) {
        selectedValue = option.value;
        break;
      }
    }
  var emailcheck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (password === ""){
    document.getElementById("pworderror").innerHTML = "password is blank";
    return false;
  }
  else if (!(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)))
  {
    document.getElementById("pworderror").innerHTML = "email is incorrect";
    return false;
  }
  else if (selectedValue === "") {
    document.getElementById("shippingerror").innerHTML = "please select a shipping option";
    return false;
  }
  else{
    if (selectedValue === "Overnight"){
      document.getElementById("totalprice").value = tot + 50;
      return true;
    }
    if (selectedValue === "three day"){
      document.getElementById("totalprice").value = tot + 5;
    }
    else{
      document.getElementById("totalprice").value = tot;
    }
    return true;
  }

}
