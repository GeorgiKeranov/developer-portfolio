import 'particles.js'

export default function particles() {
	let $sectionIntro = $('#section-intro-0');
	let $sectionContact = $('#section-contact-0');

	if ($sectionIntro.length) {
		particlesJS.load('section-intro-0', globalVariables.siteUrl + '/js/particles/particles.json');
	}

	if ($sectionContact.length) {
		particlesJS.load('section-contact-0', globalVariables.siteUrl + '/js/particles/particles.json');
	}
}
