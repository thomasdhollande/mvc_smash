document.querySelector("#add_game_form").addEventListener("submit", (event) => {
    event.preventDefault();

    const formData = new FormData();
    formData.append("game_name", document.querySelector("#game_name").value);
    formData.append("game_date_release", document.querySelector("#game_date_release").value);
    formData.append("game_text", document.querySelector("#game_text").value);
    formData.append("game_img", document.querySelector("#game_img").files[0]);
    formData.append("game_video", document.querySelector("#game_video").value);

    fetch("/api/game/add", {
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
                    location.href = '/admin/games'
                }, 2000)
                return
            }
        })
        .catch(error => {
            // handle error response
            console.error(error);
        });
});
