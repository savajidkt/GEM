<?php
/**
 * Settings Section class
 */

namespace underDEV\Utils\Settings;

class Section {

	/**
	 * Settings handle
	 * @var string
	 */
	private $handle;

	/**
	 * Section name
	 * @var string
	 */
	private $name;

	/**
	 * Section slug
	 * @var string
	 */
	private $slug;

	/**
	 * Neex export this?
	 * @var string
	 */
	private $export;

	/**
	 * Section groups
	 * @var array
	 */
	private $groups = array();

	/**
	 * Section constructor
	 * @param string $handle Settings handle
	 * @param string $name   Section name
	 * @param string $slug   Section slug
	 */
	public function __construct( $handle, $name, $slug, $export = true ) {

		if ( empty( $handle ) ) {
			throw new \Exception( 'Setting handle in Section instance cannot be empty' );
		}

		$this->handle = $handle;

		if ( empty( $name ) ) {
			throw new \Exception( 'Section name cannot be empty' );
		}

		$this->name( $name );

		if ( empty( $slug ) ) {
			throw new \Exception( 'Section slug cannot be empty' );
		}

		$this->slug( sanitize_key( $slug ) );

		$this->export( $export );
	}

	/**
	 * Get or set name
	 * @param  string $name Name. Do not pass anything to get current value
	 * @return string name
	 */
	public function name( $name = null ) {

		if ( $name !== null ) {
			$this->name = $name;
		}

		return apply_filters( $this->handle . '/settings/section/name', $this->name, $this );

	}

	/**
	 * Get or set slug
	 * @param  string $slug Slug. Do not pass anything to get current value
	 * @return string slug
	 */
	public function slug( $slug = null ) {

		if ( $slug !== null ) {
			$this->slug = $slug;
		}

		return apply_filters( $this->handle . '/settings/section/slug', $this->slug, $this );

	}

	/**
	 * @param  string $export Export this section?. Do not pass anything to get current value
	 * @return string export
	 */
	public function export( $export = null ) {

		if ( $export !== null ) {
			$this->export = $export;
		}

		return apply_filters( $this->handle . '/settings/section/export', $this->export, $this );

	}

	/**
	 * Add Group to the section
	 * @param string $name Group name
	 * @param string $slug Group slug
	 * @param bool $can_be_translated BY Max
     *
	 * @return Group
	 */
	public function add_group( $name, $slug, $can_be_translated = false, $only_base_language = false ) {

		if ( empty( $name ) || empty( $slug ) ) {
			throw new \Exception( 'Group name and slug cannot be empty' );
		}

		if ( isset( $this->groups[ $slug ] ) ) {
			throw new \Exception( 'Group slug `' . $slug . '` already exists' );
		}

		$this->groups[ $slug ] = new Group( $this->handle, $name, $slug, $this->slug(), $can_be_translated, $only_base_language );

		do_action( $this->handle . '/settings/group/added', $this->groups[ $slug ], $this );

		return $this->groups[ $slug ];

	}

	/**
	 * Get all registered Groups
	 * @return array
	 */
	public function get_groups() {

		return apply_filters( $this->handle . '/settings/section/groups', $this->groups, $this );

	}

	/**
	 * Get group by group slug
	 * @param  string $slug group slug
	 * @return mixed        group object or false if no group defined
	 */
	public function get_group( $slug = '' ) {

		if ( isset( $this->groups[ $slug ] ) ) {
			return apply_filters( $this->handle . '/settings/group', $this->group[ $slug ], $this );
		}

		return false;

	}

}
