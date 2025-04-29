function validateName() {
    var name = document.getElementById("name").value.trim();
    var error = document.getElementById("errorMessage");
    var pattern = /^[a-zA-Z][a-zA-Z.\- ]*$/;
  
    error.innerHTML = ""; // clear previous error
  
    if (name === "") {
      error.innerHTML = "Name cannot be empty.";
      return false;
    }
  
    if (!pattern.test(name)) {
      error.innerHTML = "Name must start with a letter and can include letters, dots, or dashes.";
      return false;
    }
  
    var words = name.split(" ").filter(word => word.length > 0);
    if (words.length < 2) {
      error.innerHTML = "Name must contain at least two words.";
      return false;
    }
  
    return true;
  }