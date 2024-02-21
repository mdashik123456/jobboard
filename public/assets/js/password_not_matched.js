const pass_not_match = document.querySelector("#password_not_matched");
const retype_pass = document.querySelector("#retype_pass");
const pass = document.querySelector("#pass");
const text_danger = document.querySelector('.text-danger');

pass.addEventListener('keyup', ()=>{
    console.log(pass.length);
    if(pass.value.length < 8) {
        text_danger.innerText = "Minimum Password Length is 8";
    } else{
        text_danger.innerText = "";
    }
});

retype_pass.addEventListener('keyup', () => {
    if (retype_pass.value === ''){
        pass_not_match.innerHTML = 'Password cannot be empty';
        pass_not_match.style.color = 'red';
    } else if(pass.value !== retype_pass.value) {
        pass_not_match.innerHTML = 'Password do not match';
        pass_not_match.style.color = 'red';
    } else {
        pass_not_match.innerHTML = 'Password matched';
        pass_not_match.style.color = 'green';
    }
});