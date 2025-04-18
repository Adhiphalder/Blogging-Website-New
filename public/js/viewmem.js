// --------------\\
// SIDE BAR \\
// ------------------\\

const sidebarLink = document.querySelectorAll('.sidebar__list a')
 
 function linkColor(){
     sidebarLink.forEach(l => l.classList.remove('active-link'))
     this.classList.add('active-link')
 }
 
 sidebarLink.forEach(l => l.addEventListener('click', linkColor))



 
// ---------------------------------------\\
// USER ICON DROPDOWN \\
// -------------------------------------------\\

document.addEventListener('DOMContentLoaded', function() {
    const dropdownButton = document.querySelector('.dropdown3-click-button');
    const dropdownContent = document.querySelector('.section-dropdown3');

    dropdownButton.addEventListener('click', function(event) {
        event.stopPropagation();  
        dropdownContent.classList.toggle('show');
    });

    document.addEventListener('click', function(event) {
        if (!dropdownContent.contains(event.target) && !dropdownButton.contains(event.target)) {
            dropdownContent.classList.remove('show');
        }
    });
});

// -----------------------\\
// COPY PROFILE \\
// ---------------------------\\




/*-----------------*\
  #MAIN
\*-----------------*/



/*-----------------*\
     BACKGROUND
\*-----------------*/


const infoImage = document.getElementById("infoImage");
const infoCover = document.querySelector(".info-cover");

function updateBackground() {
    const newSrc = infoImage.src;
    infoCover.style.setProperty("--bg-url", `url('${newSrc}')`);
}

updateBackground();

const observer = new MutationObserver(updateBackground);
observer.observe(infoImage, { attributes: true, attributeFilter: ["src"] });


/*-----------------------*\
   BUTTON TOGGLE & POPUP
\*-----------------------*/

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".com-follower-profile-button").forEach(button => {
        button.addEventListener("click", function(event) {
            if (this.innerText === "Follow") {
                const form = this.closest("form");
                if (confirm("Do you want to follow this person?")) {
                    form.submit();
                    showToast("You have successfully followed this person!");
                }
            }
        });
    });

    document.querySelectorAll(".unfollow-form button").forEach(button => {
        button.addEventListener("click", function(event) {
            const userId = this.closest("form").id.split('-')[2]; 
            unfollowUser (userId);
        });
    });
});

function unfollowUser (userId) {
    if (!confirm("Are you sure you want to unfollow this person?")) {
        return;
    }

    const form = document.getElementById(`unfollow-form-${userId}`);
    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': formData.get('_token')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const newForm = document.createElement("form");
            newForm.action = `/follow/${userId}`;
            newForm.method = "POST";
            newForm.innerHTML = `
                <input type="hidden" name="_token" value="${formData.get('_token')}">
                <button type="submit" class="com-follower-profile-button">Follow</button>
            `;

            form.replaceWith(newForm);
            showToast("You have successfully unfollowed this person!");
        } else {
            alert("Something went wrong. Please try again.");
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function showToast(message) {
    let toast = document.createElement("div");
    toast.className = "toast";
    toast.textContent = message;
    document.body.appendChild(toast);

    setTimeout(() => {
        toast.classList.add("show");
    }, 100);

    setTimeout(() => {
        toast.classList.remove("show");
        setTimeout(() => {
            toast.remove();
        }, 500);
    }, 3000);
}



// ---------------------------------------\\
// FOLLOW & UNFOLLOW BUTTON \\
// ------------------------------------------\\

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".join").forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault();
            const form = this.closest("form");
            if (confirm("Do you want to follow this person?")) {
                form.submit();
                showToast("You have successfully followed this person!");
            }
        });
    });
});

function unfollowUser (userId) {
    if (!confirm("Are you sure you want to unfollow this person?")) {
        return;
    }

    const form = document.getElementById(`unfollow-form-${userId}`);
    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': formData.get('_token')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const newForm = document.createElement("form");
            newForm.action = `/follow/${userId}`;
            newForm.method = "POST";
            newForm.innerHTML = `
                <input type="hidden" name="_token" value="${formData.get('_token')}">
                <button type="submit" class="join"><span>Follow</span></button>
            `;

            form.replaceWith(newForm);
            showToast("You have successfully unfollowed this person!");
        } else {
            alert("Something went wrong. Please try again.");
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function showToast(message) {
    let toast = document.createElement("div");
    toast.className = "toast";
    toast.textContent = message;
    document.body.appendChild(toast);

    setTimeout(() => {
        toast.classList.add("show");
    }, 100);

    setTimeout(() => {
        toast.classList.remove("show");
        setTimeout(() => {
            toast.remove();
        }, 500);
    }, 3000);
}


