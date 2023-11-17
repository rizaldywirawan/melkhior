
// create an error message element near the input element by checking on the parent element
function createErrorMessageElement(errorKey, errorMessage) {

    // find the error element
    const errorElement = document.querySelector(`*[name=${errorKey}]`)

    // the element is matched
    if (errorElement) {
        const errorElementGroup = errorElement.closest('.form-group')
        const errorMessageElement = document.createElement('div')
        errorMessageElement.classList.add('invalid')

        errorMessageElement.innerHTML = `
            <span class="text-red-500">${errorMessage}</span>
        `

        errorElementGroup.append(errorMessageElement)
    }
}

export {createErrorMessageElement}