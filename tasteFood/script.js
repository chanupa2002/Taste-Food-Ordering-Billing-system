//printing the bill
const printBtn = document.getElementById('print');

printBtn.addEventListener('click', function(){
    print();
})


//display current date
const currentDate = new Date().toDateString();

document.getElementById("dateCus").innerHTML = "Date : " +  currentDate;


//hide and show the cart
var display = 0;

function cartS(){
    
    var div = document.getElementById('cartDiv');
    
    
    if(display == 1){

        div.style.display = 'block';
        display = 0;
    }
    else{
        div.style.display = 'none';
        display = 1;
    }
}


//generate the order number

let x = Math.floor((Math.random() * 100) + 1);

document.getElementById("orderNoCus").innerHTML = "Order No : " + x;

