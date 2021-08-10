let loginBtn = document.querySelector('#btn3-880');
loginBtn.addEventListener('click', () =>{
    if(loginModal.style.display === 'none' && registerModal.style.display === 'none' &&
    registerModalSecond.style.display === 'none' && restorePasswordModal.style.display === 'none')
    {
        loginModal.style.display = 'block';
    } else {
        loginModal.style.display = 'none';
        registerModal.style.display = 'none';
        registerModalSecond.style.display = 'none';
        restorePasswordModal.style.display = 'none';
    }
});

// Login modal
let closeLogin = document.querySelector('#close-login-modal');
let loginModal = document.querySelector('#login-modal');
let registerBtn = document.querySelector('#register-btn');
let restorePasswordBtn = document.querySelector('#restore-password-btn');
closeLogin.addEventListener('click', () =>{
    loginModal.style.display = 'none';
});
registerBtn.addEventListener('click', () =>{
    loginModal.style.display = 'none';
    registerModal.style.display = 'block';
});
restorePasswordBtn.addEventListener('click', () =>{
    loginModal.style.display = 'none';
    registerModal.style.display = 'none';
    registerModalSecond.style.display = 'none';
    restorePasswordModal.style.display = 'block';
});

// Register modal
let registerModal = document.querySelector('#register-modal');
let closeRegister = document.querySelector('#close-register-modal');
let loginBackBtn = document.querySelector('#login-back-btn');
let toSecondRegisterBtn = document.querySelector('#to-second-register');

closeRegister.addEventListener('click', () =>{
    registerModal.style.display = 'none';
});

loginBackBtn.addEventListener('click', () =>{
    registerModal.style.display = 'none';
    restorePasswordModal.style.display = 'none';
    registerModalSecond.style.display = 'none';
    loginModal.style.display = 'block';
});
toSecondRegisterBtn.addEventListener('click', () =>{
    registerModal.style.display = 'none';
    restorePasswordModal.style.display = 'none';
    loginModal.style.display = 'none';
    registerModalSecond.style.display = 'block';
});

// Second register modal
let registerModalSecond = document.querySelector('#second-register-modal');
let closeRegisterSecond = document.querySelector('#close-second-register-modal');
let loginBackBtn2 = document.querySelector('#login-back-btn2');

closeRegisterSecond.addEventListener('click', () =>{
    registerModalSecond.style.display = 'none';
});

loginBackBtn2.addEventListener('click', () =>{
    registerModal.style.display = 'none';
    restorePasswordModal.style.display = 'none';
    registerModalSecond.style.display = 'none';
    loginModal.style.display = 'block';
});


// Restore modal
let restorePasswordModal = document.querySelector('#restore-password-modal');
let closeRestore = document.querySelector('#close-restore-modal');
closeRestore.addEventListener('click', () =>{
    restorePasswordModal.style.display = 'none';
});

