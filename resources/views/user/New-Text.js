
function downloadTable() {
  var tableData = [];
  var rows = document.querySelectorAll("table tr");
  var headerRow = rows[0]; // Get the header row (first row)

  // Start from the last row and go in reverse order (excluding the header row)
  for (var i = rows.length - 1; i >= 1; i--) {
    var rowData = [];
    var cells = rows[i].querySelectorAll("td, th");

    // Process each cell in the row
    for (var j = 0; j < cells.length; j++) {
      // Use encodeURIComponent to handle special characters
    //   rowData.push('"' + cells[j].innerText.replace(/"/g, '""') + '"'); OLD CODE
	  rowData.push('"' + cells[j].textContent.replace(/"/g, '""') + '"');

    }

    // Add the processed row data to the tableData array
    tableData.push(rowData.join(","));
  }

  // Process the header row separately and add it as the first row in the CSV
  var headerData = [];
  var headerCells = headerRow.querySelectorAll("td, th");

  // Process each cell in the header row
  for (var k = 0; k < headerCells.length; k++) {
    // Use encodeURIComponent to handle special characters
    // headerData.push('"' + headerCells[k].innerText.replace(/"/g, '""') + '"'); OLD CODE 
	headerData.push('"' + headerCells[k].textContent.replace(/"/g, '""') + '"');

  }

  // Add the processed header row data as the first element in the tableData array
  tableData.unshift(headerData.join(","));

  // Combine all rows into a CSV string
  var csvData = tableData.join("\n");

  // Create a download link and trigger a click event to download the CSV file
  var a = document.createElement("a");
  a.href =
    "data:text/csv;charset=utf-8,%EF%BB%BF" + encodeURIComponent(csvData);
  a.target = "_blank";
  a.download = "table.csv";
  document.body.appendChild(a);
  a.click();
}

jQuery(document).ready(function ($) {
  $("#uploadButton").click(function () {
    console.log("upload csv");
    $.ajax({
      type: "POST",
      url: ajaxurl,
      data: {
        action: "uploadcsv",
      },
      success: function (response) {
        console.log(response.message);
      },
    });
  });

  $("#save-post").remove();
  //$('#id').prop('disabled', true);
  $("#aria").change(function () {
    var valueofstr = "";
    if ($(this).val() == "شمال") {
      valueofstr = "N";
    }
    if ($(this).val() == "جنوب") {
      valueofstr = "S";
    }
    if ($(this).val() == "شرق") {
      valueofstr = "E";
    }
    if ($(this).val() == "غرب") {
      valueofstr = "W";
    }
    $("#id").val(replaceFirstChar($("#id").val(), valueofstr, 1));
  });
  $("#city").change(function () {
    var valueofstr = "";
    if ($(this).val() == "جده") {
      valueofstr = "J";
    }
    if ($(this).val() == "مكه") {
      valueofstr = "M";
    }
    if ($(this).val() == "الرياض") {
      valueofstr = "R";
    }
    $("#id").val(replaceFirstChar($("#id").val(), valueofstr, 2));
  });
  $("#type").change(function () {
    var valueofstr = "";
    if ($(this).val() == "ارض") {
      valueofstr = "L";
    }
    if ($(this).val() == "فيلا") {
      valueofstr = "V";
    }
    if ($(this).val() == "فيلا روف") {
      valueofstr = "V";
    }
    if ($(this).val() == "شقه دور") {
      valueofstr = "A";
    }
    if ($(this).val() == "شقه") {
      valueofstr = "A";
    }
    if ($(this).val() == "فيلا دورين") {
      valueofstr = "V";
    }
    if ($(this).val() == "شقه روف") {
      valueofstr = "A";
    }
    if ($(this).val() == "فيلا دور") {
      valueofstr = "V";
    }
    if ($(this).val() == "فيلا ركنيه") {
      valueofstr = "V";
    }
    if ($(this).val() == "فيلا دوبلكس") {
      valueofstr = "V";
    }
    if ($(this).val() == "فيلا دورين وملحق") {
      valueofstr = "V";
    }
    if ($(this).val() == "فيلا ثلاثه أدوار") {
      valueofstr = "V";
    }
    if ($(this).val() == "فيلا دورين وسطح") {
      valueofstr = "V";
    }
    if ($(this).val() == "فيلا دور وسطح") {
      valueofstr = "V";
    }
    if ($(this).val() == "فيلا دور وملحق") {
      valueofstr = "V";
    }
    if ($(this).val() == "فيلا ثلاثه ادوار") {
      valueofstr = "V";
    }
    $("#id").val(replaceFirstChar($("#id").val(), valueofstr, 3));
  });

  function replaceFirstChar(inputString, replacementChar, offset) {
    if (inputString.length > 0) {
      return (
        inputString.substring(0, offset - 1) +
        replacementChar +
        inputString.substring(offset)
      );
    } else {
      return inputString;
    }
  }
});
