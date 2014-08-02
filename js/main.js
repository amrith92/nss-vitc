function Menu() {
	this.toggleButton = null;
	this.nav = null;
}

Menu.prototype.toggle = function() {
	this.nav.classList.toggle('show');
}

Menu.prototype.init = function() {
	this.nav = document.getElementsByTagName('nav')[0];
	this.toggleButton = document.getElementById("toggle-img");

	var self = this;
	this.toggleButton.addEventListener('click', function() {
		self.toggle();
	}, false);
}

window.onload = function() {
	var menu = new Menu();
	menu.init();
};
