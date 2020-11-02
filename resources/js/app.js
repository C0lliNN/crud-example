function setFileName() {
    const text = document.querySelector('#dropzoneText');
    const input = document.querySelector('#image');
    if (input.files.length) {
        text.innerHTML = input.files[0].name;
    } else {
        text.innerHTML = `<button type="button" id="upload" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none transition duration-150 ease-in-out">Upload a image</button>or drag and drop`;
    }
}

function setupDropzone() {
    const dropzone = document.querySelector('#dropzone');
    const input = document.querySelector('#image');
    dropzone.ondragover = dropzone.ondgragenter = (e) => {
        e.preventDefault();
        dropzone.classList.replace('border-gray-300', 'border-blue-300');
    };
    dropzone.ondragleave = () => {
        dropzone.classList.replace('border-blue-300', 'border-gray-300');
    };
    dropzone.ondrop = (e) => {
        e.preventDefault();
        dropzone.classList.replace('border-blue-300', 'border-gray-300');

        input.files = e.dataTransfer.files;
        setFileName();
    };

    input.onchange = () => {
        setFileName();
    };

    const button = document.querySelector('#upload');
    button.onclick = () => {
        const input = document.querySelector('#image');
        input.click();
    };
}

document.body.onload = () => {
    setupDropzone();
};
