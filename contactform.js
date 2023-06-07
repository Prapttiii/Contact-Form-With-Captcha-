function cap() {
    var alpha = [
      'A','B','C','D','E','F','G','H','I','J','K','L','M','N', 'O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','!','@','#','$','%','^', '&','*','+',
    ];
    var a = alpha[Math.floor(Math.random() * 31)];
    var b = alpha[Math.floor(Math.random() * 41)];
    var c = alpha[Math.floor(Math.random() * 51)];
    var d = alpha[Math.floor(Math.random() * 61)];
    var e = alpha[Math.floor(Math.random() * 71)];
    var f = alpha[Math.floor(Math.random() * 81)];
  
    var final = a + b + c + d + e + f;
    document.getElementById('capt').value = final;
  }
  function validcap() {
    var stg1 = document.getElementById('capt').value;
    var stg2 = document.getElementById('textinput').value;
    if (stg1 == stg2) {
      alert('Form Succesfully Submitted');
      return true;
    } else {
      alert('Please enter a valid captcha');
      return false;
    }
  }