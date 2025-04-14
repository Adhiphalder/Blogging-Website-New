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


// ---------------------------------------\\
           // IMAGE UPLOADATION \\
// -------------------------------------------\\


document.querySelector('#main-h3-input-first').addEventListener('input', function() {
    const communityName = this.value;
    document.querySelector('.main-form2-img-show-sec-first').innerText = communityName;
});

document.querySelector('#main-form1-text').addEventListener('input', function() {
    const communityName = this.value;
    document.querySelector('.main-form2-img-show-sec-second').innerText = communityName;
});
 
document.getElementById('com-cover-pic').setAttribute('accept', 'image/*');
document.getElementById('com-profile-pic').setAttribute('accept', 'image/*');

document.getElementById('com-cover-pic').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file && file.type.startsWith('image/')) {
        const imgUrl = URL.createObjectURL(file);
        document.querySelector('.main-form2-img-show-first img').src = imgUrl;
    }
});

document.getElementById('com-profile-pic').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file && file.type.startsWith('image/')) {
        const imgUrl = URL.createObjectURL(file);
        document.querySelector('.main-form2-img-show-sec img').src = imgUrl;
    }
});



function confirmDeleteCommunity() {
    return confirm("Do you want to delete this community?");
}

