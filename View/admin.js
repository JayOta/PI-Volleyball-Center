// function closeSidebar(){
//     document.getElementById('sidebar').style.display = 'none';
// }

document.getElementById('openSidebarBtn').addEventListener('click', function(e){
        document.getElementById('sidebar').style.display = 'block';
        document.getElementById('main-content').style.marginLeft = '3rem'; 

        document.getElementById('openSidebarBtn').style.display = 'none';
    e.preventDefault();

    document.getElementById('main-content').style.marginLeft = '0px'; 
    e.preventDefault();
    // document.getElementsByClassName('mini-aligns').style.marginLeft = "3rem";
})

document.getElementById('closeSidebarBtn').addEventListener('click', function(e){


     document.getElementById('sidebar').style.display = 'none';
    document.getElementById('openSidebarBtn').style.display = 'block';
    e.preventDefault();

})

// function openSidebar(){
//     document.getElementById('sidebar').style.display = 'block';
//     document.getElementById('openSidebarBtn').style.display = 'none';
// }