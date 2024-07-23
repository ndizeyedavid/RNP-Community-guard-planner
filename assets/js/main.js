var modal_container = document.querySelector(".modal-container");
var modal = document.querySelector(".modal");
function displayModal() {
  modal_container.style.display = "flex";
  modal.classList.add("vis");
}

modal_container.onclick = (e) => {
  if (e.target.className == "modal-container") {
    console.log("yep that is it");
    modal_container.style.display = "none";
  } else {
    console.log("Nah");
  }
};

// preloaders
function preloader() {
  var preloader = document.querySelector(".preloader-cont");
  preloader.style.display = "none";
}

// Notifications
function throwNotif(cont, type) {
  Swal.fire({
    title: `${cont}`,
    type: `${type}`,
  });
}

// searching
function search(input, table) {
  var filter, tr, td, i, txtValue;
  filter = input.value.toUpperCase();
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

// Sorting
function sort(table, column) {
  var rows, switching, i, x, y, shouldSwitch;
  switching = true;
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < rows.length - 1; i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[column];
      y = rows[i + 1].getElementsByTagName("TD")[column];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

// Filter district
function filter(district, table) {
  var filter, tr, td, i, txtValue;
  filter = district.toUpperCase();
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        if (district != "all") {
          tr[i].style.display = "none";
        } else {
          tr[i].style.display = "";
        }
      }
    }
  }
}
