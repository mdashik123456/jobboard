const pass_not_match = document.querySelector("#password_not_matched");
const password_confirmation = document.querySelector("#password_confirmation");
const pass = document.querySelector("#password");
const text_danger = document.querySelector('.text-danger');

pass.addEventListener('keyup', ()=>{
    console.log(pass.length);
    if(pass.value.length < 8) {
        text_danger.innerText = "Minimum Password Length is 8";
    } else{
        text_danger.innerText = "";
    }
});

password_confirmation.addEventListener('keyup', () => {
    if (password_confirmation.value === ''){
        pass_not_match.innerHTML = 'Password cannot be empty';
        pass_not_match.style.color = 'red';
    } else if(pass.value !== password_confirmation.value) {
        pass_not_match.innerHTML = 'Password do not match';
        pass_not_match.style.color = 'red';
    } else {
        pass_not_match.innerHTML = 'Password matched';
        pass_not_match.style.color = 'green';
    }
});