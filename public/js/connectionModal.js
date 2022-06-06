// Get the modal
let loginModal = document.getElementById('id01');
let signupModal = document.getElementById('id02');

window.onclick = function(event) {
  if (event.target == loginModal) {
    loginModal.style.display = "none";
  }
}

window.onclick = function(event) {
    if (event.target == signupModal) {
        signupModal.style.display = "none";
    }
}