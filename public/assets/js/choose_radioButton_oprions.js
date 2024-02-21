const name_ = document.getElementById('name');
const name_lable = document.getElementById('name_lable');
const logo_lable = document.getElementById('logo_lable');

const option1Label = document.getElementById('option1-label');
const option2Label = document.getElementById('option2-label');

const option1Radio = document.getElementById('option1');
const option2Radio = document.getElementById('option2');

option1Radio.checked = true;
option1Label.classList.add('selected');
option2Label.classList.remove('selected');

option1Label.addEventListener('click', () => {
  option1Radio.checked = true;
  option1Label.classList.add('selected');
  option2Label.classList.remove('selected');

  name_lable.innerText = "Company Name";
  name_.placeholder = "Company Name";
  logo_lable.innerText = "Upload Company Logo";
});

option2Label.addEventListener('click', () => {
  option2Radio.checked = true;
  option2Label.classList.add('selected');
  option1Label.classList.remove('selected');

  name_lable.innerText = "Your Name";
  name_.placeholder = "Your Name";
  logo_lable.innerText = "Upload Your Picture";
});