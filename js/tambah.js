tinymce.init({
  selector: "textarea#tiny",
});

// Mendapatkan elemen input harga dan diskon
var priceInput = document.getElementById("priceInput");
var diskonInput = document.getElementById("diskonInput");

// Mendapatkan elemen input untuk harga setelah diskon
var hargaSetelahDiskonInput = document.getElementById(
  "hargaSetelahDiskonInput"
);

// Mendengarkan perubahan pada input harga dan diskon
priceInput.addEventListener("input", updateHargaSetelahDiskon);
diskonInput.addEventListener("input", updateHargaSetelahDiskon);

// Fungsi untuk menghitung harga setelah diskon dan mengatur nilai input yang dinonaktifkan
function updateHargaSetelahDiskon() {
  var hargaNormal = parseFloat(priceInput.value);
  var diskon = parseFloat(diskonInput.value);

  if (!isNaN(hargaNormal) && !isNaN(diskon)) {
    var hargaSetelahDiskon = hargaNormal - hargaNormal * (diskon / 100);
    hargaSetelahDiskonInput.value = "Rp " + hargaSetelahDiskon.toFixed(2); // Format harga dengan dua desimal
  } else {
    hargaSetelahDiskonInput.value = ""; // Kosongkan input jika input tidak valid
  }
}

// new DataTable("#example", {
//   responsive: {
//     details: {
//       display: DataTable.Responsive.display.modal({
//         header: function (row) {
//           var data = row.data();
//           return "Details for " + data[0] + " " + data[1];
//         },
//       }),
//       renderer: DataTable.Responsive.renderer.tableAll({
//         tableClass: "table",
//       }),
//     },
//   },
// });

$(document).ready(function () {
  $("#datatables").DataTable({
    responsive: true, // Enable responsiveness
  });
});
