window.onload = function() {
	var listBtnXoa = document.getElementsByClassName("xoa");

	for (var i = 0; i < listBtnXoa.length; i++) {
		listBtnXoa[i].onclick = function() {
			var wantToDelete = confirm("Bạn có chắc xóa không?");

			if(wantToDelete) {
				var trMuonXoa = this.parentElement.parentElement;
				trMuonXoa.remove();
			}
		};
		// listBtnXoa[i].addEventListener("click", function() {
		// 	var wantToDelete = confirm("Bạn có chắc xóa không?");

		// 	if(wantToDelete) {
		// 		var trMuonXoa = this.parentElement.parentElement;
		// 		trMuonXoa.remove();
		// 	}
		// });
	}
};

function changeInput(element) {
	element.style.backgroundColor = "yellow";
	element.style.color = "red";
}

function validateInput(x) {
	var inputVali = document.getElementById("validate_input");
	if(x.value == "") {
		inputVali.style.display = 'block';
	} else {
		inputVali.style.display = 'none';
	}
}

function displaySearch() {
	var The_a = document.getElementById('timKiemNangCao');
	var chuyenMuc = document.getElementById("chuyenMuc");
	if(The_a.innerHTML == "Tìm kiếm nâng cao") {
		changeText(The_a, "Bỏ tìm kiếm nâng cao");
		chuyenMuc.style.display = 'block';
	} else {
		changeText(The_a, "Tìm kiếm nâng cao");
		chuyenMuc.style.display = 'none';
	}
}


function changeText(The_a, string) {
	The_a.innerHTML = string;
}

function validateForm() {
	var truongNhapLieu = document.getElementById("truongNhapLieu");
	console.log(truongNhapLieu);
	if(truongNhapLieu.value == "") {
		alert("Không thể gửi form (error: Trường từ khóa chưa được nhập)");
		return false;
	} else {
		return true;
	}
}