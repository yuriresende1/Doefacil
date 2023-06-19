function toggleForm(formId) {
    const form = document.getElementById('login-form')
    const form2 = document.getElementById('signup-form')

    if (formId === 'signup-form') {
        form.classList.add('hidden')
        form2.classList.add('show')
    } else {
        form.classList.remove('hidden')
        form.classList.add('show')
        form2.classList.remove('show')
        form2.classList.add('hidden')
    }
}
  
document.addEventListener('DOMContentLoaded', function() {
    const signupButton = document.getElementById('signup-button')
    const loginButton = document.getElementById('login-button')
  
    signupButton.addEventListener('click', function() {
      toggleForm('signup-form')
    })

    loginButton.addEventListener('click', function() {
        toggleForm('login-form')
    })
})