var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

  }
};

xmlhttp.open("GET", "server.php", true);
xmlhttp.send();

const seachInput = document.getElementById("#seach");
const rows = document.querySelectorAll("table, tr, th");
console.log(rows);

seachInput.addEventListener('keyup',function(event) {
    // console.log(event);

});

rows.forEach(function(row) {
    const cells = row.querySelectorAll('tr');
    let found = false;
    cells.forEach(function(cell) {
      const text = cell.innerText.toLowerCase();
      if (text.indexOf(searchTerm) > -1) {
        found = true;
      }
    });
    if (found) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  });
  
const data = ['$sql'];

const searchTerm = ['tr, td'];

const filteredData = data.filter(function(item) {
    return item.name.toLowerCase().includes(searchTerm.toLowerCase());
  });
  
  console.log(filteredData);

