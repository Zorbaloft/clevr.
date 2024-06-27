import './bootstrap';
import 'bootstrap';
import '@popperjs/core';

import swal from 'sweetalert2';
window.Swal = swal;


// Function to validate numeric input
function validateNumericInput(event) {
    // Allow only digits
    event.target.value = event.target.value.replace(/\D/g, '');
}
// If you need to expose this function globally, you can attach it to the window object
window.validateNumericInput = validateNumericInput;

function validateCardExpiryInput(event) {
    let input = event.target.value.replace(/\D/g, ''); // Remove non-digits
    // Automatically insert "/" after MM (but only if input length is at least 2)
    if (input.length > 2) {
        input = `${input.slice(0, 2)}/${input.slice(2, 4)}`;
    } else if (input.length === 2 && event.inputType !== 'deleteContentBackward') {
        input = `${input}/`;
    }
    // Limit length to MM/YY format (5 characters including "/")
    event.target.value = input.slice(0, 5);
}
window.validateCardExpiryInput = validateCardExpiryInput;