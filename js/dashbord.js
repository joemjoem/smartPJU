const filters = document.querySelectorAll("div.filter select");
const filter_kota = document.getElementsByClassName("filter-kota");
const filter_status = document.getElementsByClassName("filter-status");


filters.forEach(button => {
  button.addEventListener('click', () => {
    console.log(filters.innerText);
  })
})