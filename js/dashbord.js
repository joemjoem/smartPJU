const dflt = document.getElementById("default");
const kota = document.getElementById("kota");
const statu = document.getElementById("status");
const filter_kota = document.getElementById("filter_kota");
const filter_status = document.getElementById("filter_status");

dflt.addEventListener('click', F_dflt);
kota.addEventListener('click', F_kota);
statu.addEventListener('click', F_status);

function F_dflt() {
  filter_kota.style.display = "none";
  filter_status.style.display = "none";
}

function F_kota() {
  filter_kota.style.display = "inline-block";
  filter_status.style.display = "none";
}

function F_status() {
  filter_status.style.display = "inline-block";
  filter_kota.style.display = "none";
}