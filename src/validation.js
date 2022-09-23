document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM fully loaded and parsed');

    /**
     * Validates the form and calls alert() and returns false 
     * when rules aren't met
     * 
     * Returns true when validation rules are met
     * 
     * Code based on Professor Alexandre Paixão's material at UNESA (College)
     * 
     * OBS: Alerts are in brazilian portuguese
     * 
     * @param {HTMLFormElement} form_element - Form element to be validated
     * @return boolean
     */
    function formValidation(form_element) {
        // Check if required form elements are empty
        for (const element of form_element) {
            const label = element.previousElementSibling
            if (element.nodeName == 'INPUT' && element.value == '') {
                alert(`O campo "${label.textContent}" não pode ficar vazio`) || element == ''
                element.focus()
                return false
            }
            // Enforce regex pattern on cpf field
            if (element.id == 'cpf' && !(/\d{3}\.\d{3}\.\d{3}-\d{2}/.test(element.value))) {
                alert(`O campo "${label.textContent}" deve ter o formato NNN.NNN.NNN-NN`)
                element.focus()
                return false
            }
        }
        // Returns true if validation has succeeded
        return true
    }

    // Call form validation before send
    function handleFormSendClick(ev) {
        const form = ev.target.parentNode
        // Validate form
        if (!formValidation(form)) {
            ev.preventDefault()
            return
        }
        // Submit if validation has succeeded
        form.submit()
    }

    // Handle form submission
    const send_button = document.querySelector('#send_btn')
    send_button.addEventListener('click', ev => handleFormSendClick(ev))
})