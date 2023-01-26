var res = {
	xs: 0,
	sm: 576,
	md: 768,
	lg: 1024,
	xl: 1600
};

let getBreakpoint = () => {
	let w = window.innerWidth;
	let cur = 'xs';
	for (const [key, value] of Object.entries(res)) {
		if (w < value) break;
		cur = key;
	}
	document.body.setAttribute('breakpoint', cur);
};
getBreakpoint();

window.addEventListener("resize", function() {
	getBreakpoint();
});