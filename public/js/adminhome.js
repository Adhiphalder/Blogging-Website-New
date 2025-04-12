const sideMenu = document.querySelector('aside');
const menuBtn = document.querySelector('#menu_bar');
const closeBtn = document.querySelector('#close_btn');
const themeToggler = document.querySelector('.theme-toggler');

document.body.classList.add('dark-theme-variables');
themeToggler.querySelector('span:nth-child(1)').classList.remove('active');
themeToggler.querySelector('span:nth-child(2)').classList.add('active');

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = "block";
});
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = "none";
});

themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');
    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
});


document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
    if (!button.classList.contains('delete')) {
        button.classList.add('delete');
        setTimeout(() => button.classList.remove('delete'), 3200);
    }
    e.preventDefault();
}));


function openPopup(imgElement) {
    var popup = document.getElementById("imagePopup");
    var popupImg = document.getElementById("popupImg");
    popupImg.src = imgElement.src;
    popup.style.display = "block";
}

document.querySelector(".popup .close").onclick = function () {
    document.getElementById("imagePopup").style.display = "none";
};

window.onclick = function (event) {
    var popup = document.getElementById("imagePopup");
    if (event.target == popup) {
        popup.style.display = "none";
    }
};

function confirmDelete(button, type = 'post') {
    const form = button.closest('form'); 
    let itemName;
    let confirmation;

    if (type === 'user') {
        itemName = button.closest('tr').querySelector('td:nth-child(2)').innerText; 
        confirmation = confirm(`Do you want to delete the user "${itemName}"?`); 
        if (confirmation) {
            form.submit(); 
        }
    } else if (type === 'post') {
        itemName = button.closest('tr').querySelector('td:nth-child(1)').innerText; 
        confirmation = confirm(`Do you want to delete this post?`);
        if (confirmation) {
            form.submit(); 
        }
    } else if (type === 'community') {
        confirmation = confirm("Do you want to delete this community?");
        if (confirmation) {
            form.submit();
            alert("Community deleted successfully");
        }
    } else if (type === 'member') {
        itemName = button.closest('tr')?.querySelector('td:nth-child(2)')?.innerText || 'this member';
        confirmation = confirm(`Do you want to remove the member "${itemName}"?`);
        if (confirmation) {
            form.submit();
            alert("Member removed successfully");
        }
    }
}


function showToast(message) {
    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.innerText = message;

    document.body.appendChild(toast);

    setTimeout(() => {
        toast.classList.add('show');
    }, 100);

    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => {
            document.body.removeChild(toast);
        }, 500);
    }, 3000);
}

function confirmSuspendUser(checkbox, userId) {
    const isSuspended = checkbox.checked;
    const confirmationMessage = isSuspended ? "Do you want to suspend this user?" : "Do you want to activate this user?";

    if (confirm(confirmationMessage)) {
        const suspendStatus = isSuspended ? 1 : 0;

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(`/admin/suspend-user/${userId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ suspend_account: suspendStatus })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const toastMessage = suspendStatus === 1 ? "User suspended successfully" : "User activated successfull";
                    showToast(toastMessage);
                } else {
                    alert(data.error);
                    checkbox.checked = !isSuspended;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while updating the user status.');
                checkbox.checked = !isSuspended;
            });
    } else {
        checkbox.checked = !isSuspended;
    }
}

function confirmSuspendCommunity(element, communityId) {
    const isSuspended = element.checked;
    const confirmation = confirm(`Do you want to ${isSuspended ? 'suspend' : 'activate'} this community?`);

    if (confirmation) {
        fetch(`/suspend-community/${communityId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ suspend: isSuspended })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showToast(isSuspended ? "Community suspended successfully" : "Community activated successfully");
            } else {
                showToast('Error: ' + data.message);
                element.checked = !isSuspended; 
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showToast('An error occurred while trying to suspend the community.');
            element.checked = !isSuspended; 
        });
    } else {
        element.checked = !isSuspended; 
    }
}