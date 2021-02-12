<form action="calc_request.php" style="" method="get" onsubmit="request.bind(this)(event);">
    <label>number1: </label>
    <input type="number" name="number-1" value="">
    <label>operation: </label>
    <select name="operator" id="">
        <option value="+" selected>+</option>
        <option value="-">-</option>
        <option value="*">*</option>
    </select>
    <label>number2: </label>
    <input type="number" name="number-2" value="">
    <button type="submit">submit</button>
</form>
<br>
<div id="output"></div>


<script>

function request(e) {
  e.preventDefault();

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("output").innerHTML = this.responseText;
    }
  };
  let n1 = this.querySelector('[name="number-1"]').value;
  let n2 = this.querySelector('[name="number-2"]').value;
  let operator = encodeURIComponent(this.querySelector('[name="operator"]').value);


  xhttp.open("POST", this.getAttribute('action'), true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("number-1="+n1+"&number-2="+n2+"&operator="+operator);
}
</script>