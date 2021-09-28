import 'particles.js'

export default function particles() {
	let $sectionIntro = $('#section-intro-0');

	if (!$sectionIntro.length) {
		return;
	}

	particlesJS.load('section-intro-0', globalVariables.siteUrl + '/js/particles/particles.json');
}
