// function closeSidebar(){
//     document.getElementById('sidebar').style.display = 'none';
// }

document.getElementById('openSidebarBtn').addEventListener('click', function(e){
        document.getElementById('sidebar').style.display = 'block';
        document.getElementById('openSidebarBtn').style.display = 'none';
        e.preventDefault();
    })
    // if (document.getElementById('sidebar').style.display == 'block' ){
    //         document.getElementById('main-content').style.backdropFilter = 'blur(10px)'; 
    //     }
    

document.getElementById('closeSidebarBtn').addEventListener('click', function(e){


     document.getElementById('sidebar').style.display = 'none';
    document.getElementById('openSidebarBtn').style.display = 'block';
    e.preventDefault();

})

// function openSidebar(){
//     document.getElementById('sidebar').style.display = 'block';
//     document.getElementById('openSidebarBtn').style.display = 'none';
// }