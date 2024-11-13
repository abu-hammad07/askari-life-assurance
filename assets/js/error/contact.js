document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('submit_contact_form');

    // Validate input fields
    function validateInput(inputElement, errorElement, validationRegex, errorMessage) {
        inputElement.addEventListener('input', function() {
            let inputValue = inputElement.value.trim();
            const isValid = validationRegex.test(inputValue);

            if (!isValid) {
                errorElement.textContent = errorMessage;
                errorElement.style.display = 'block';
                inputElement.classList.add('is-invalid');
            } else {
                errorElement.textContent = '';
                errorElement.style.display = 'none';
                inputElement.classList.remove('is-invalid');
            }
        });
    }

    // Validation regex patterns and error messages
    const validationRules = {
        input_name: {
            regex: /^.{1,}$/, // At least one character
            errorMessage: ''
        },
        input_email: {
            regex: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, // Email pattern
            errorMessage: ''
        },
        input_phone: {
            regex: /^\d{11}$/, // 15 digits only
            errorMessage: ''
        }
        // ,
        // fullName: {
        //     regex: /^.{1,}$/, // At least one character
        //     errorMessage: 'Please enter your full name.'
        // },
    };

    // Loop through each input field and attach validation
    Object.keys(validationRules).forEach(key => {
        const inputElement = document.getElementById(key);
        const errorElement = document.getElementById(`${key}_error`);
        validateInput(inputElement, errorElement, validationRules[key].regex, validationRules[key].errorMessage);
    });

    // Function to validate form submission
    function validateForm(event) {
        event.preventDefault(); // Prevent form submission

        let isValid = true;

        // Check if any input field is empty
        Object.keys(validationRules).forEach(key => {
            const inputElement = document.getElementById(key);
            const errorElement = document.getElementById(`${key}_error`);
            const inputValue = inputElement.value.trim();
            const isValidField = validationRules[key].regex.test(inputValue);

            if (!isValidField) {
                errorElement.textContent = validationRules[key].errorMessage;
                errorElement.style.display = 'block';
                inputElement.classList.add('is-invalid');
                isValid = false;
            }
        });

        // Submit the form if all inputs are valid
        if (isValid) {
            form.submit();
        }
    }

    // Event listener for form submission
    document.getElementById('submit_btn').addEventListener('click', validateForm);
});