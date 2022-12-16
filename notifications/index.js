var btn = document.getElementById('btn')

function leftClick() {
	btn.style.left = '0'
	setTimeout(function() { alert("Notificatie aan"); }, 500);
}

function rightClick() {
	btn.style.left = '110px'
	setTimeout(function() { alert("Notificatie uit"); }, 500);
}



