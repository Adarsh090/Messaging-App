
function userList() {
    document.getElementById('user-list').style.display="block";
    document.getElementById('friend-list').style.display="none";
    document.getElementById('request-list').style.display="none";

    document.getElementById('user-list1').style.backgroundColor = "#416ac3";
    document.getElementById('user-list1').style.color = "#fff";
    document.getElementById('friend-list1').style.backgroundColor = "#dde5f7";
    document.getElementById('friend-list1').style.color = "black";
    document.getElementById('request-list1').style.backgroundColor = "#dde5f7";
    document.getElementById('request-list1').style.color = "black";
}

function friendList() {
    document.getElementById('user-list').style.display="none";
    document.getElementById('friend-list').style.display="block";
    document.getElementById('request-list').style.display="none";

    document.getElementById('user-list1').style.backgroundColor = "#dde5f7";
    document.getElementById('user-list1').style.color = "black";
    document.getElementById('friend-list1').style.backgroundColor = "#416ac3";
    document.getElementById('friend-list1').style.color = "#fff";
    document.getElementById('request-list1').style.backgroundColor = "#dde5f7";
    document.getElementById('request-list1').style.color = "black";
}

function requestList() {
    document.getElementById('user-list').style.display="none";
    document.getElementById('friend-list').style.display="none";
    document.getElementById('request-list').style.display="block";

    document.getElementById('user-list1').style.backgroundColor = "#dde5f7";
    document.getElementById('user-list1').style.color = "black";
    document.getElementById('friend-list1').style.backgroundColor = "#dde5f7";
    document.getElementById('friend-list1').style.color = "black";
    document.getElementById('request-list1').style.backgroundColor = "#416ac3";
    document.getElementById('request-list1').style.color = "#fff";
}

function updateProfile() {
    document.getElementById("input").style.pointerEvents = "auto"; 
}

// if($('#showError').innerText.length===0) {
//     $('#showError').style.display="none";
// }
