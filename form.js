function submitForm()
{
    var fname=document.getElementById ("firstname");
    var fnamelabel=document.getElementById("fnamelabel");
    var lname=document.getElementById ("lastname");
    var lnamelabel=document.getElementById("lnamelabel");
    var street=document.getElementById ("street");
    var streetlabel=document.getElementById("streetlabel");
    var city=document.getElementById("city")
    var citylabel=document.getElementById("citylabel")
    var state=document.getElementById("state");
    var zip=document.getElementById("zip");
    var items=document.getElementsByClassName("items");
    var noitemsselected=true;
    var cc=document.getElementsByName("credit");
    var nopaymentselected=true;
    var orderform=document.form["orderForm"];

    for(i=0; i < items.length; i++){
        if(items[i].checked){
            noitemsselected=false;
        }
    }
    for(i=0; i <cc.length; i++){
        if(cc[i].checked){
            nopaymentselected=false;
        }
    }

    if(fname.value){
        fnamelabel.style.color="black";
    }
    if(lname.value){
        lnamelabel.style.color="black";
    }
    if(city.value){
        citylabel.style.color="black";
    }
    if(street.value){
        streetlabel.style.color="black";
    }
    if(!fname.value){
        fnamelabel.style.color = "red";
    }else if(!lname.value){
        lnamelabel.style.color="red";
    }else if(!street.value){
        streetlabel.style.color="red";
    }else if(!city.value){
        citylabel.style.color="red";
    }else if (state.value.length!=2){
        alert ("State must contains 2 letters")
    }else if (zip.value.length!=5){
        alert ("Zip must contains 5 letters")
    }else if(noitemsselected){
        alert("Please select an item")
    }else if(nopaymentselected){
        alert("Please select a payment method")
    }else {
        if(confirm("Confirm Order?")){
            orderform.submit();
        }
    }
}
