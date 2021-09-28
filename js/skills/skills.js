export default function skills() {
	let $sectionSkills = $('.section-skills');

	if (!$sectionSkills.length) {
		return;
	}

	let $sectionCircle = $sectionSkills.find('.section__circle')
	let $circleFill = $sectionCircle.find('.section__circle-fill');
	let $circlePercentage = $sectionCircle.find('.section__text h2');
	let $circleName = $sectionCircle.find('.section__text h3');

	const activeClass = 'section__skill--active';

	let $sectionSkill = $sectionSkills.find('.section__skill a');

	$sectionSkill.on('click', function(e) {
		e.preventDefault();

		let $this = $(this);
		let $parentDiv = $this.parent();

		if ($parentDiv.hasClass(activeClass)) {
			return;
		}

		let percentage = $this.data('percentage');
		let name = $this.data('name');

		$circleFill.css('height', percentage);
		$circlePercentage.text(percentage);
		$circleName.text(name);

		let $activeSkill = $sectionSkills.find('.' + activeClass);
		if ($activeSkill.length) {
			$activeSkill.removeClass(activeClass);
		}

		$parentDiv.addClass(activeClass);
	});
}
