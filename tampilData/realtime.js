var tegangan = document.getElementById("tegangan");
var arus = document.getElementById("arus");
var power = document.getElementById("power");
var energy = document.getElementById("energy");
var frekuensi = document.getElementById("frekuensi");
var powerFactor = document.getElementById("powerFactor");
var st = document.getElementById("status");
var lokasi = document.getElementById("lokasi");
var kota = document.getElementById("kota");

$(document).ready(function () {
    setInterval(function () {
        $(tegangan).load("tagangan.php");
    }, 1000);

    setInterval(function () {
        $(arus).load("arus.php");
    }, 1000);

    setInterval(function () {
        $(st).load("status.php");
    }, 1000);

    setInterval(function () {
        $(power).load("power.php");
    }, 1000);

    setInterval(function () {
        $(energy).load("energy.php");
    }, 1000);

    setInterval(function () {
        $(frekuensi).load("frekuensi.php");
    }, 1000);

    setInterval(function () {
        $(powerFactor).load("powerFactor.php");
    }, 1000);

    setInterval(function () {
        $(lokasi).load("lokasi.php");
    }, 1000);

    setInterval(function () {
        $(kota).load("kota.php");
    }, 1000);
});
