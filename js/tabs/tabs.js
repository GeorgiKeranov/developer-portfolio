export default function tabs() {
	let $sectionTabs = $('.section-tabs-with-text');

	if (!$sectionTabs.length) {
		return;
	}

	const activeTabClass = 'section__tab--active';
	const activeTabContentClass = 'section__tab-content--active';

	let $tabLinks = $sectionTabs.find('.section__tab a')

	$tabLinks.on('click', function(e) {
		e.preventDefault();

		let $this = $(this);
		let $parent = $this.parent();

		// If the clicked tab is already active do not do nothing
		if ($this.hasClass(activeTabClass)) {
			return;
		}

		// Select section tabs because they can be multiple sections on one page
		let $currentSectionTabs = $(this).closest('.section-tabs-with-text');

		// Remove active classes from the previous tab and tab content
		let $tabActive = $currentSectionTabs.find('.' + activeTabClass);
		let $tabContentActive = $currentSectionTabs.find('.' + activeTabContentClass);

		$tabActive.removeClass(activeTabClass);
		$tabContentActive.removeClass(activeTabContentClass);

		// Add active classes for the new tab and tab content
		let currentTabIndex = $parent.data('index');
		let $tabContent = $currentSectionTabs.find('.section__tab-content[data-index=' + currentTabIndex + ']');

		$parent.addClass(activeTabClass);
		$tabContent.addClass(activeTabContentClass);

		// Move the active tab line to the new tab
		let $activeTabLine = $currentSectionTabs.find('.section__active-tab-line');
		$activeTabLine.css('transform', 'translateY(' + (currentTabIndex * 42) + 'px)');
	});
}