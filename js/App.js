function filterTasks(filterStatus) {
  //Put all the tble rows in an array.
  const tableRows = document.getElementsByClassName("taskRow");

  //Put all the rows with the class that is equal to the filterStatus in an array.
  const statusRow = document.getElementsByClassName(filterStatus);

  //Loop trough all the tableRows.
  for (let index = 0; index < tableRows.length; index++) {
    //If the filterStatus is equal to all set display to table-row for all rows.

    if (filterStatus === "All") {
      tableRows[index].style.display = "table-row";
    } else {
      tableRows[index].style.display = "none";
    }
  }

  //display all rows with the filter class.
  for (let index = 0; index < statusRow.length; index++) {
    statusRow[index].style.display = "table-row";
  }
}
