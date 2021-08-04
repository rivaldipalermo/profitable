<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Pager extends BaseConfig
{
	/**
	 * --------------------------------------------------------------------------
	 * Templates
	 * --------------------------------------------------------------------------
	 *
	 * Pagination links are rendered out using views to configure their
	 * appearance. This array contains aliases and the view names to
	 * use when rendering the links.
	 *
	 * Within each view, the Pager object will be available as $pager,
	 * and the desired group as $pagerGroup;
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'default_full'   => 'CodeIgniter\Pager\Views\default_full',
		'default_simple' => 'CodeIgniter\Pager\Views\default_simple',
		'default_head'   => 'CodeIgniter\Pager\Views\default_head',
		'riwayattu_pagination' => 'App\Views\Pagers\u_riwayat_trans_pagination',
		'properti_pagination' => 'App\Views\Admin\Properti\Pagers\properti_pagination',
		'properti_pagination' => 'App\Views\Admin\Properti\Pagers\properti_pagination',
		'blog_pagination' => 'App\Views\Admin\Blog\Pagers\blog_pagination',
		'artikel_pagination' => 'App\Views\Pagers\u_riwayat_trans_pagination'
	];

	/**
	 * --------------------------------------------------------------------------
	 * Items Per Page
	 * --------------------------------------------------------------------------
	 *
	 * The default number of results shown in a single page.
	 *
	 * @var integer
	 */
	public $perPage = 20;
}
