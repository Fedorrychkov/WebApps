function Selected(a) {
var label = a.value;
    if (label == "other") {
       $('#check_hidden').css('display', 'block');
       console.log(label);
   } else {
       $('#check_hidden').css('display', 'none');
       console.log(label);
       $('#hidden_other').val('');
       document.getElementById('other_input_hidden').value = label;
   }
}