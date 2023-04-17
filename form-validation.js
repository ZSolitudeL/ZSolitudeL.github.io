const form = document.querySelector('form');
const fullNameInput = document.querySelector('input[name="fullname"]');
const icNumberInput = document.querySelector('input[name="icnumber"]');
const emailInput = document.querySelector('input[name="email"]');
const phoneInput = document.querySelector('input[name="phone"]');
const genderSelect = document.querySelector('select[name="gender"]');
const subjectSelect = document.querySelector('select[name="subject"]');
const campusSelect = document.querySelector('select[name="campus"]');
const intakeSelect = document.querySelector('select[name="intake"]');
const submitBtn = document.querySelector('input[name="submit"]');

form.addEventListener('submit', function(event) {
  if (!fullNameInput.value || !icNumberInput.value || !emailInput.value || !phoneInput.value || !genderSelect.value || !subjectSelect.value || !campusSelect.value || !intakeSelect.value) {
    event.preventDefault(); // Prevent form submission
    alert('Please fill in all fields.'); // Display error message
  }
});
