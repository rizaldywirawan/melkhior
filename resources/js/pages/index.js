import {createErrorMessageElement} from "../helper/form-error.js";

const bmiForm = document.querySelector('#calculate-bmi')

bmiForm.addEventListener('submit', function (e) {
    e.preventDefault()

    axios({
        method: 'post',
        url: '/body-masses',
        data: new FormData(e.target)
    }).then(response => {

        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: 'IMT berhasil dihitung.'
        }).then(result => {
            if (result.isConfirmed) {
                window.location.href = `/body-masses/${response.data.data.id}`
            }
        })
    }).catch(error => {

        const errorMessageElements = document.querySelectorAll('.form-group .invalid')

        for (const errorMessageElement of errorMessageElements) {
            errorMessageElement.remove()
        }

        if (error.hasOwnProperty('response')) {

            if (error.response.status === 422) {
                // create the error message for each input
                for (const errorKey in error.response.data.errors) {

                    createErrorMessageElement(errorKey, error.response.data.errors[errorKey][0])
                }
            } else if (error.response.status === 409) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Nomor HP Sudah Terdaftar!',
                    text: 'Klik lihat untuk melihat dan mengubah data Anda.',
                    confirmButtonText: 'Lihat'
                }).then(result => {
                    if (result.isConfirmed) {
                        window.location.href = `/body-masses/${error.response.data.data.id}`
                    }
                })
            }
        }
    })
})