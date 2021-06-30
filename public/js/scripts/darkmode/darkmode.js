

console.log(localStorage.getItem('darkMode'));
         if (localStorage.getItem('darkMode') === "on") {
         document.body.classList.add("dark-layout");
		 
         document.addEventListener("DOMContentLoaded", function() {
         document.querySelector('#dark-mode').checked = true;
         });
         }

		 (function () {
			var switchTheme = $('#dark-mode'),
				body = $('body');
				nav = $('nav');
		
			switchTheme.on('change', function () {
				if (!body.hasClass('dark-layout')) {
					body.addClass('dark-layout');
					nav.addClass('navbar-dark');
					localStorage.setItem('darkMode', "on");
				} else {
					body.removeClass('dark-layout');
					body.removeClass('navbar-dark');
					localStorage.setItem('darkMode', "off");
				}
			});
		})();


