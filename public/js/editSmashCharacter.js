document.querySelector("#edit_character_form").addEventListener("submit", (event) => {
    event.preventDefault();

    
    const formData = new FormData();
    formData.append("character_name", document.querySelector("#character_name").value);
    formData.append("character_number", document.querySelector("#character_number").value);
    formData.append("character_origin_game", document.querySelector("#character_origin_game").value);
    formData.append("character_first_apparition", document.querySelector("#character_first_apparition").value);
    formData.append("character_main_image", document.querySelector("#character_main_image").files[0]);
    formData.append("character_id", document.querySelector("#character_id").value);
    
    fetch(`/api/character/edit/${document.querySelector("#character_id").value}`, {
        method: "POST",
        body: formData
    })
    .then(response => {
        return response.json()
    })
    .then(body => {
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
                    location.href = '/admin/characters'
                }, 2000)
                return
            }
        })
        .catch(error => {
            // handle error response
            console.error(error);
        });
});