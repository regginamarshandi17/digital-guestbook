const colorPicker = document.getElementById('colorPicker');
const colorDisplay = document.getElementById('colorDisplay');

// Inisialisasi tampilan awal
updateColorDisplay(colorPicker.value);

// Tanggapi perubahan warna
colorPicker.addEventListener('input', function () {
    const selectedColor = colorPicker.value;
    updateColorDisplay(selectedColor);
});

// Fungsi untuk memperbarui tampilan warna yang dipilih
function updateColorDisplay(color) {
    colorDisplay.style.backgroundColor = color;
    colorDisplay.innerHTML = `<p>Warna yang Dipilih: ${color}</p>`;
}