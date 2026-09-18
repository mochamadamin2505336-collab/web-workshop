let selectedEvent = null;

function showDetail(event) {
    selectedEvent = event;

    document.getElementById("popupIcon").innerText = event.icon;
    document.getElementById("popupCategory").innerText = event.kategori;
    document.getElementById("popupTitle").innerText = event.nama;
    document.getElementById("popupDescription").innerText = event.deskripsi;
    document.getElementById("popupDate").innerText = event.tanggal;
    document.getElementById("popupTime").innerText = event.waktu;
    document.getElementById("popupLocation").innerText = event.tempat;

    document.getElementById("detailPopup").classList.add("show");
}

function closeDetail() {
    document.getElementById("detailPopup").classList.remove("show");
}

function openRegister() {
    closeDetail();
    document.getElementById("registerPopup").classList.add("show");
}

function closeRegister() {
    document.getElementById("registerPopup").classList.remove("show");
}

function successRegister() {
    closeRegister();
    document.getElementById("successPopup").classList.add("show");
}