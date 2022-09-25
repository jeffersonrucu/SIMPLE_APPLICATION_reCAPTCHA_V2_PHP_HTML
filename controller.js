function captchaVerified() {
    document.querySelector('.js-submit').removeAttribute('disabled');
}

document.querySelector('form').addEventListener('submit', (event) => {
    if (!grecaptcha.getResponse()) {
        document.querySelector('.form-error').classList.add('active');
        event.preventDefault();
    }
})