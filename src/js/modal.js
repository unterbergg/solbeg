import axios from 'axios';
import { initVideos } from './video';

export const modal = {

	current: null,
	isAjax: false,

	init: function()
		{
			// Modal ESC close
			document.addEventListener('keyup', (e) => {
				if (e.which === 27) {
					if (document.querySelector('.blocker'))
						this.close();
				}
			});

			// Modal open
			document.addEventListener('click', (e) => {
				let el = e.target;
				if (el && isLink(el, '[rel="modal:open"]')) {
					e.preventDefault();
					let content = '';
					const link = el.tagName.toLowerCase() === 'a' ? el : el.closest('a');
					const href = link.getAttribute('href');
					if (href.charAt(0) === "#") {
						content = document.querySelector(href);
						if (content)
							this.show(content);
					} else {
						this.ajax(href);
					}
				}
			});

			// Modal close
			document.addEventListener('click', (e) => {
				let el = e.target;
				if (el && isLink(el, '[rel="modal:close"]')) {
					e.preventDefault();
					this.close();
				}
			});
		},

	ajax: function(url)
		{
			axios.get(url).then(({ data }) => {
				this.isAjax = true;
				const template = document.createElement('template');
				template.innerHTML = data.trim();
				this.show(template.content.firstChild);
			});
		},

	show: function(content)
		{
			if (!content)
				return false;

			if (this.current) {
				this.close(true);
				setTimeout(() => {
					this.show(content);
				}, 10);
				return false;
			}

			let blocker = document.createElement("div");

			blocker.classList.add('blocker');

			blocker.appendChild(content);

			this.current = blocker;

			document.body.appendChild(blocker);

			// Maybe init CF7
			if (wpcf7 != void(0) && typeof wpcf7.init == 'function') {
				const forms = this.current.querySelectorAll('form');
				if (forms.length > 0)
					forms.forEach(form => {
						wpcf7.init(form);
					});
			}

			// Maybe init videos
			initVideos();

			// Trigger check fields event
			document.dispatchEvent(new Event('checkFields'));

			setTimeout(() => document.body.classList.add('show-modal'), 50);
		},

	close: function(force = false)
		{
			if (this.current) {
				document.body.classList.remove('show-modal');
				setTimeout(() => {
					let parent = this.current.parentNode;
					if (!this.isAjax) {
						parent.insertBefore(this.current.firstChild, this.current);
						this.ajax = false;
					}
					this.current.remove();
					this.current = null;
					document.dispatchEvent(new Event('modal:closed'));
				}, force ? 1 : 600);
			}
		},
}

window.modal = modal;
modal.init();
export default modal;