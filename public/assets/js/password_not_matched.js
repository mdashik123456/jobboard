const pass_not_match = document.querySelector("#password_not_matched");
const retype_pass = document.querySelector("#retype_pass");
const pass = document.querySelector("#pass");



retype_pass.addEventListener('keyup', () => {
    if (retype_pass.value === ''){
        pass_not_match.innerHTML = 'Password cannot be empty';
        pass_not_match.style.color = 'red';
    } else if(pass.value !== retype_pass.value) {
        pass_not_match.innerHTML = 'Passwords do not match';
        pass_not_match.style.color = 'red';
    } else {
        pass_not_match.innerHTML = 'Passwords matched';
        pass_not_match.style.color = 'green';
    }
});