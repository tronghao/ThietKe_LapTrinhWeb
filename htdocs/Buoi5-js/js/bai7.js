window.onload = function() {
	var listBtnXoa = document.getElementsByClassName("xoa");

	for (var i = 0; i < listBtnXoa.length; i++) {
		listBtnXoa[i].addEventListener("click", function() {
			var wantToDelete = confirm("Bạn có chắc xóa không?");

			if(wantToDelete) {
				var trMuonXoa = this.parentElement.parentElement;
				trMuonXoa.remove();
			}
		});
	}
};