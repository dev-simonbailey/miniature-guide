function showHide(item) {
    let itemToShowHide = document.getElementById(item+'_table');
    let buttonToAlter = document.getElementById(item+'_button');
    console.log(itemToShowHide);
    console.log(itemToShowHide.style.display);


    if (itemToShowHide.style.display == "none") {
        itemToShowHide.style.display = "inline-table";
        buttonToAlter.innerText = 'Hide Details';
    } else {
        itemToShowHide.style.display = "none";
        buttonToAlter.innerText = 'Show Details';
    }
}
