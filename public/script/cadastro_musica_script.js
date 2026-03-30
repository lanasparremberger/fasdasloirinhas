
    const input = document.getElementById('imgInput');
    const preview = document.getElementById('previewImg');

    input.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
        }
    });