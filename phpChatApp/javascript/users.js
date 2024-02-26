const searchBar = document.querySelector(".search input"),
      searchIcon = document.querySelector(".search button"),
      usersList = document.querySelector(".users-list");

// Toggle search bar visibility
searchIcon.onclick = () => {
    searchBar.classList.toggle("show");
    searchIcon.classList.toggle("active");
    searchBar.focus();
    if (searchBar.classList.contains("active")) {
        searchBar.value = "";
        searchBar.classList.remove("active");
    }
}

// Handle keyup event for search
searchBar.onkeyup = () => {
    let searchTerm = searchBar.value;
    if (searchTerm != "") {
        searchBar.classList.add("active");
    } else {
        searchBar.classList.remove("active");
    }

    // Send AJAX request to search.php
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

// Initial AJAX request for users.php
let xhr = new XMLHttpRequest();
xhr.open("GET", "php/users.php", true);
xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
            let data = xhr.response;
            if (!searchBar.classList.contains("active")) {
                usersList.innerHTML = data;
            }
        }
    }
};
xhr.send();
$(document).ready(function(){
    $('.delete-btn').click(function(){
        // Get the user ID associated with the clicked delete button
        var userId = $(this).data('userid');
        
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: 'POST',
                    url: 'php/delete_user.php',
                    data: { userId: userId },
                    success: function(response) {
                        // Handle success response if needed
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle error if needed
                        console.error(xhr.responseText);
                    }
                });
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
              });
            } else {
              swal("Your imaginary file is safe!");
            }
          });
        // AJAX request to delete_user.php

    });
})