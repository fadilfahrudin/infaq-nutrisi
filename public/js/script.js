/* Tanpa Rupiah */
var tanpa_rupiah = document.getElementById("tanpa-rupiah");
tanpa_rupiah.addEventListener("keyup", function(e) {
    tanpa_rupiah.value = formatRupiah(this.value);
});

/* Fungsi */
function formatRupiah(angka) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return rupiah;
}

// copy no Rekening Bank
function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);

    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}

// copy nominal donasi
function copyAmount() {
    var str = document.getElementById('jmlTxt').value;
    const el = document.createElement('textarea');
    el.value = str;
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
}