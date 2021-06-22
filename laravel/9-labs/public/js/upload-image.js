window.onload = function () {
    let input = document.querySelector('input[type="file"]');
    input.addEventListener("change", previewFile);
    document.getElementById("file-upload").addEventListener("click", () => {
        input.click();
    });
};

function previewFile() {
    var preview = document.getElementById("preview");
    var file = document.querySelector("input[type=file]").files[0];
    var reader = new FileReader();

    reader.addEventListener(
        "load",
        function () {
            preview.src = reader.result;
        },
        false
    );

    if (file) {
        reader.readAsDataURL(file);
    }
}
