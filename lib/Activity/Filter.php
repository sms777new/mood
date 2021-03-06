<?php


namespace OCA\Mood\Activity;

use OCP\Activity\IFilter;
use OCP\IL10N;
use OCP\IURLGenerator;

class Filter implements IFilter {

	/** @var IL10N */
	protected $l10n;

	/** @var IURLGenerator */
	protected $url;

	public function __construct(IL10N $l10n, IURLGenerator $url) {
		$this->l10n = $l10n;
		$this->url = $url;
	}

	/**
	 * @return string Lowercase a-z only identifier
	 * @since 11.0.0
	 */
	public function getIdentifier() {
		return 'mood';
	}

	/**
	 * @return string A translated string
	 * @since 11.0.0
	 */
	public function getName() {
		return 'moods';
	}

	/**
	 * @return int
	 * @since 11.0.0
	 */
	public function getPriority() {
		return 10;
	}

	/**
	 * @return string Full URL to an icon, empty string when none is given
	 * @since 11.0.0
	 */
	public function getIcon() {
		return $this->url->getAbsoluteURL($this->url->imagePath('mood', 'mood_black.svg'));
	}

	/**
	 * @param string[] $types
	 *
	 * @return string[] An array of allowed apps from which activities should be displayed
	 * @since 11.0.0
	 */
	public function filterTypes(array $types) {
		return $types;
	}

	/**
	 * @return string[] An array of allowed apps from which activities should be displayed
	 * @since 11.0.0
	 */
	public function allowedApps() {
		return ['mood'];
	}
}

