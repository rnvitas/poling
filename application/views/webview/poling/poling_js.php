<script>
    const options = document.querySelectorAll(".radio-card");
    for (let i = 0; i < options.length; i++) {
        options[i].addEventListener("click", () => {
            for (let j = 0; j < options.length; j++) {
                if (options[j].classList.contains("selected")) {

                    options[j].classList.remove("selected");

                }
            }

            options[i].classList.add("selected");
            document.getElementById("btn-capres").classList.remove("disabled");

            for (let k = 0; k < options.length; k++) {
                options[k].classList.add("selectall");
            }




        });
    }

    const btnNext = document.getElementById("btn-capres");
    const btnSubmit = document.getElementById("btn-cawpres");

    const formcapres = document.getElementsByClassName("capres");
    const formcawapres = document.getElementsByClassName("cawapres");
    btnNext.addEventListener("click", () => {

        formcapres.classList.remove("hidden");
        formcawapres.classList.add("hidden");
        btnSubmit.classList.remove("hidden");
        btnNext.classList.add("hidden");
    });
</script>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>