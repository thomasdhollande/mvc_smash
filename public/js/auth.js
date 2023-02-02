const auth_section = document.querySelector('#auth')

if (!auth_section.classList.contains('logged')) {
    console.log("ok")
    const auth_form = document.querySelector('#auth-form')

    auth_form.addEventListener('submit', (e) => {
        e.preventDefault()

        const identifiant = auth_form.querySelector('#identifiant')
        const password = auth_form.querySelector('#password')

        const params = {
            identifiant: identifiant.value.toLowerCase(),
            password: password.value.toLowerCase()
        }

        fetch('/api/auth', {
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            method: 'POST',
            body: JSON.stringify(params)
        })
            .then(response => {
                if (response.ok) {
                    console.log('ok')
                } else {
                    console.log('Erreur : ' + response.statusText)
                }
                return response.json()
            })
            .then(body => {
                console.log(body)
                if (body.error) {
                    const container_error = document.querySelector('.container_error')
                    container_error.querySelector('p').innerHTML = body.error
                    container_error.classList.add('active')
                    setTimeout(() => {
                        container_error.classList.remove('active')
                    }, 3000)
                    return
                }

                if (body.success) {
                    const container_success = document.querySelector('.container_success')
                    container_success.querySelector('p').innerHTML = body.success
                    container_success.classList.add('active')
                    setTimeout(() => {
                        location.href = '/'
                    }, 2000)
                    return
                }
            })
            .catch(error => console.log('erreur de fetch', error))
            .catch(error => console.log('erreur de json', error))
    })
}
