var test_1 = true;
var test_2 = true;

function checkDropdown_1() {
  if(test_1) {
    showDropdown_1();
  } else {
    hideDropdown_1();
  }
}

function showDropdown_1() {
    test_1 = false;
    hideDropdown_2();
    document.getElementById("drop_arrow_1").style.transform = "rotate(90deg)";
    var elem = document.getElementById("menu_1");
    elem.style.maxHeight = "200px";
}


function hideDropdown_1() {
    test_1 = true;
    document.getElementById("drop_arrow_1").style.transform = "rotate(0deg)";
    var elem = document.getElementById("menu_1");
    elem.style.maxHeight = "0px";
}

function checkDropdown_2() {
  if(test_2) {
    showDropdown_2();
  } else {
    hideDropdown_2();
  }
}

function showDropdown_2() {
    test_2 = false;
    hideDropdown_1();
    document.getElementById("drop_arrow_2").style.transform = "rotate(90deg)";
    var elem = document.getElementById("menu_2");
    elem.style.maxHeight = "400px";
}


function hideDropdown_2() {
    test_2 = true;
    document.getElementById("drop_arrow_2").style.transform = "rotate(0deg)";
    var elem = document.getElementById("menu_2");
    elem.style.maxHeight = "0px";
}

var doc_test_1 = true;

function checkDoc_1() {
  if(doc_test_1) {
    document.getElementById("documents_1").style.backgroundColor = "#EDEDED";
    showDoc_1();
  } else {
    document.getElementById("documents_1").style.backgroundColor = "#F7F7F7";
    hideDoc_1();
  }
}

function showDoc_1() {
  doc_test_1 = false;
  document.getElementById("documents_content_1").style.maxHeight = "300px";
  document.getElementById("arrow_1").style.transform = "rotate(90deg)";
}

function hideDoc_1() {
  doc_test_1 = true;
  document.getElementById("documents_content_1").style.maxHeight = "0px";
  document.getElementById("arrow_1").style.transform = "rotate(0deg)";
}

var doc_test_2 = true;

function checkDoc_2() {
  if(doc_test_2) {
    document.getElementById("documents_2").style.backgroundColor = "#EDEDED";
    showDoc_2();
  } else {
    document.getElementById("documents_2").style.backgroundColor = "#F7F7F7";
    hideDoc_2();
  }
}

function showDoc_2() {
  doc_test_2 = false;
  document.getElementById("documents_content_2").style.maxHeight = "300px";
  document.getElementById("arrow_2").style.transform = "rotate(90deg)";
}

function hideDoc_2() {
  doc_test_2 = true;
  document.getElementById("documents_content_2").style.maxHeight = "0px";
  document.getElementById("arrow_2").style.transform = "rotate(0deg)";
}

var doc_test_3 = true;

function checkDoc_3() {
  if(doc_test_3) {
    document.getElementById("documents_3").style.backgroundColor = "#EDEDED";
    showDoc_3();
  } else {
    document.getElementById("documents_3").style.backgroundColor = "#F7F7F7";
    hideDoc_3();
  }
}

function showDoc_3() {
  doc_test_3 = false;
  document.getElementById("documents_content_3").style.maxHeight = "300px";
  document.getElementById("arrow_3").style.transform = "rotate(90deg)";
}

function hideDoc_3() {
  doc_test_3 = true;
  document.getElementById("documents_content_3").style.maxHeight = "0px";
  document.getElementById("arrow_3").style.transform = "rotate(0deg)";
}
