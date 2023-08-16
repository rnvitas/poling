<script>
    const card = document.querySelectorAll(".radio-card");
    const options = document.querySelectorAll("input[type='radio']");
    for (let i = 0; i < options.length; i++) {
        options[i].addEventListener("click", () => {
            for (let j = 0; j < options.length; j++) {
                if (card[j].classList.contains("selected")) {

                    card[j].classList.remove("selected");

                }
            }

            card[i].classList.add("selected");
            document.getElementById("nextBtn").classList.remove("disabled");
            document.getElementById("submit").classList.remove("disabled");


            for (let k = 0; k < card.length; k++) {
                card[k].classList.add("selectall");
            }




        });
    }

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "none";
        }
        if (n == (x.length - 2)) {
            document.getElementById("nextBtn").style.display = "none";
            // document.getElementById("nextBtn").classList.add("disabled");
            document.getElementById("submit").classList.remove("hidden");
            document.getElementById("submit").classList.add("disabled");


        } else if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Finish";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("poll_form").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input[type='radio']");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

    function save() {

        var url;
        var formData;
        url = "<?php echo site_url('poling/save') ?>";
        var formData = new FormData($("#poll_form")[0]);
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            beforeSend: function() {
                swal.fire({
                    icon: 'info',
                    timer: 3000,
                    showConfirmButton: false,
                    title: 'Loading...'

                });
            },
            success: function(data) {
                /* if(!data.status)alert("ho"); */
                if (!data.status) swal.fire('Gagal menyimpan data', 'error');
                else {
                    // document.getElementById('rumahadat').reset();
                    $('#add_modal').modal('hide');
                    (JSON.stringify(data));
                    swal.fire({
                        customClass: 'slow-animation',
                        icon: 'success',
                        showConfirmButton: false,
                        title: 'Berhasil Menambahkan Konten',
                        timer: 1500
                    });
                    window.location.reload();

                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                swal.fire('Operation Failed!', errorThrown, 'error');
            },
            complete: function() {
                console.log('Editing job done');
            }
        });
    }
</script>