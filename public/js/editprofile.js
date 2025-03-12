/*-----------------*\
  #USER PROFILE
\*-----------------*/

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

/*-----------------*\
  IMAGE UPLODATION
\*-----------------*/

// document.getElementById('main-img-profile-img').addEventListener('change', function() {
//     const fileInput = this;
//     const imagePreview = document.getElementById('image-preview-profile');
//     const label = document.getElementById('upload-label');

//     imagePreview.innerHTML = '';

//     if (fileInput.files && fileInput.files.length > 0) {
//         const file = fileInput.files[0];

//         if (file.type.startsWith('image/')) {
//             const reader = new FileReader();

//             reader.onload = function(e) {
//                 const img = document.createElement('img');
//                 img.src = e.target.result;

//                 imagePreview.classList.add('active');
//                 imagePreview.appendChild(img);
//             };

//             reader.readAsDataURL(file);

//             label.innerHTML = `File selected: ${file.name}`;
//         } else {
//             label.innerHTML = 'Please select an image';
//             imagePreview.classList.remove('active');
//             alert('Please upload a valid image file (jpg, png, gif, etc.).');
//         }
//     } else {
//         label.innerHTML = 'Click me to upload image';
//         imagePreview.classList.remove('active');
//     }
// });


// document.getElementById('image-preview-profile').addEventListener('click', function() {
//     document.getElementById('main-img-profile-img').click();
// });


// document.getElementById('main-img-cover-img').addEventListener('change', function() {
//     const fileInput = this;
//     const imagePreview = document.getElementById('image-preview-cover');
//     const label = document.getElementById('upload-label');

//     imagePreview.innerHTML = '';

//     if (fileInput.files && fileInput.files.length > 0) {
//         const file = fileInput.files[0];

//         if (file.type.startsWith('image/')) {
//             const reader = new FileReader();

//             reader.onload = function(e) {
//                 const img = document.createElement('img');
//                 img.src = e.target.result;

//                 imagePreview.classList.add('active');
//                 imagePreview.appendChild(img);
//             };

//             reader.readAsDataURL(file);

//             label.innerHTML = `File selected: ${file.name}`;
//         } else {
//             label.innerHTML = 'Please select an image';
//             imagePreview.classList.remove('active');
//             alert('Please upload a valid image file (jpg, png, gif, etc.).');
//         }
//     } else {
//         label.innerHTML = 'Click me to upload image';
//         imagePreview.classList.remove('active');
//     }
// });


// document.getElementById('image-preview-cover').addEventListener('click', function() {
//     document.getElementById('main-img-cover-img').click();
// });

/*-----------------*\
    PROFILE IMAGE 
\*-----------------*/

document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.getElementById('main-img-profile-img');
    const imagePreview = document.getElementById('image-preview-profile');
    const label = document.getElementById('upload-label');
    const existingImg = imagePreview.querySelector('img');

    // Check if the user already has a profile picture
    if (existingImg && existingImg.src.trim() !== '') {
        imagePreview.classList.add('active');
    }

    fileInput.addEventListener('change', function () {
        imagePreview.innerHTML = ''; // Clear previous preview

        if (fileInput.files && fileInput.files.length > 0) {
            const file = fileInput.files[0];

            if (file.type.startsWith('image/')) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;

                    imagePreview.classList.add('active');
                    imagePreview.appendChild(img);
                };

                reader.readAsDataURL(file);
                label.innerHTML = `File selected: ${file.name}`;
            } else {
                label.innerHTML = 'Please select an image';
                imagePreview.classList.remove('active');
                alert('Please upload a valid image file (jpg, png, gif, etc.).');
            }
        } else {
            label.innerHTML = 'Click me to upload image';
            imagePreview.classList.remove('active');
        }
    });

    // Click event to open file input when clicking on the preview area
    imagePreview.addEventListener('click', function () {
        fileInput.click();
    });
});

/*-----------------*\
    COVER IMAGE
\*-----------------*/

document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.getElementById('main-img-cover-img');
    const imagePreview = document.getElementById('image-preview-cover');
    const label = document.getElementById('upload-label');
    const existingImg = imagePreview.querySelector('img');

    // Show existing cover photo if available
    if (existingImg && existingImg.src.trim() !== '') {
        imagePreview.classList.add('active');
    }

    fileInput.addEventListener('change', function () {
        imagePreview.innerHTML = ''; // Clear previous preview

        if (fileInput.files && fileInput.files.length > 0) {
            const file = fileInput.files[0];

            if (file.type.startsWith('image/')) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;

                    imagePreview.classList.add('active');
                    imagePreview.appendChild(img);
                };

                reader.readAsDataURL(file);
                label.innerHTML = `File selected: ${file.name}`;
            } else {
                label.innerHTML = 'Please select an image';
                imagePreview.classList.remove('active');
                alert('Please upload a valid image file (jpg, png, gif, etc.).');
            }
        } else {
            label.innerHTML = 'Click me to upload image';
            imagePreview.classList.remove('active');
        }
    });

    // Click event to open file input when clicking on the preview area
    imagePreview.addEventListener('click', function () {
        fileInput.click();
    });
});
