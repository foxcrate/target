var demoForm  = document.querySelector('.demoForm');
demoForm.addEventListener("submit", function(e) {
  e.preventDefault();
  var demoInput = document.querySelector('input[name="rate"]:checked');
  if (!demoInput) {
    console.log('пуста капуста...');
  } else {
    console.log(demoInput.value); 
  }
}, true);

