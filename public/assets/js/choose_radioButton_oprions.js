// Get all radio buttons
const radioButtons = document.querySelectorAll('input[name="registrationOption"]');
  
// Add event listener to each radio button
radioButtons.forEach((radio) => {
  radio.addEventListener('change', function() {
    // Remove 'selected-label' class from all labels
    document.querySelectorAll('.form-check-label').forEach((label) => {
      label.classList.remove('selected-label');
    });
    // Add 'selected-label' class to the label of the selected radio button
    this.parentNode.querySelector('label').classList.add('selected-label');
  });
});