const flashData = $(".flash-data").data("success");

if (flashData) {
    Swal.fire({
        title: "Status Pesan",
        text: flashData,
        type: "success",
    });
}

// tombol-hapus
$(".hapus").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");

    Swal.fire({
        title: "Apakah anda yakin?",
        text: "Kamu akan menghapus data ini!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Hapus!",
    }).then((result) => {
        if (result.value) {
            document.location.href = href;

        }
    });
});

// tombol-logout
$(".logout").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");

    Swal.fire({
        title: "Apakah anda yakin?",
        text: "Ingin keluar dari sistem ini",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Keluar!",
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    });
});