const btnEye = document.getElementById('btn-eye');
const inputPwd = document.getElementById('password');

btnEye.addEventListener('click', (e) => {
  if (inputPwd.getAttribute('type') == 'password') {
    inputPwd.type = 'text';
  } else {
    inputPwd.type = 'password';
  }
});