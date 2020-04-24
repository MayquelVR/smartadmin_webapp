<?php

// configure Bootstrap components UI
\Bootstrap\Component::register('table', 'Bootstrap\Components\Table');
\Bootstrap\Component::register('button', 'Bootstrap\Components\Button');
\Bootstrap\Component::register('nav', 'Bootstrap\Components\Nav');
\Bootstrap\Component::register('pagination', 'Bootstrap\Components\Pagination');

$_ui = new \Bootstrap\Component;
$_nav = [
	'application_intel' => [
		'title' => 'Application Intel',
		'icon' => 'fal fa-info-circle',
		'items' => [
			'intel_introduction' => [
				'title' => 'Introduction',
				'url' => APP_URL.'/intel_introduction.php'
			],
			'intel_privacy' => [
				'title' => 'Privacy',
				'url' => APP_URL.'/intel_privacy.php'
			]
		]
	],
	'theme_settings' => [
		'title' => 'Theme Settings',
		'icon' => 'fal fa-cog',
		'items' => [
			'settings_how_it_works' => [
				'title' => 'How it works',
				'url' => APP_URL.'/settings_how_it_works.php'
			],
			'settings_layout_options' => [
				'title' => 'Layout Options',
				'url' => APP_URL.'/settings_layout_options.php'
			],
			'settings_skin_options' => [
				'title' => 'Skin Options',
				'url' => APP_URL.'/settings_skin_options.php'
			],
			'settings_saving_db' => [
				'title' => 'Saving to Database',
				'url' => APP_URL.'/settings_saving_db.php'
			]
		]
	],
	'package_info' => [
		'title' => 'Package Info',
		'icon' => 'fal fa-tag',
		'items' => [
			'info_app_licensing' => [
				'title' => 'Product Licensing',
				'url' => APP_URL.'/info_app_licensing.php'
			]
		]
	],
	'php_features' => [
		'title' => 'PHP Features',
		'icon' => 'fal fa-file-powerpoint',
		'items' => [
			'php_utils' => [
				'title' => 'Utilities',
				'url' => APP_URL.'/php_utils.php'
			],
			'php_navigation' => [
				'title' => 'Navigation',
				'url' => APP_URL.'/php_navigation.php'
			]
		]
	],
	[
		'title' => 'Tools & Components',
		'group' => true,
	],
	'ui_components' => [
		'title' => 'UI Components',
		'icon' => 'fal fa-window',
		'items' => [
			'ui_alerts' => [
				'title' => 'Alerts',
				'url' => APP_URL.'/ui_alerts.php'
			],
			'ui_accordion' => [
				'title' => 'Accordions',
				'url' => APP_URL.'/ui_accordion.php'
			],
			'ui_badges' => [
				'title' => 'Badges',
				'url' => APP_URL.'/ui_badges.php'
			],
			'ui_breadcrumbs' => [
				'title' => 'Breadcrumbs',
				'url' => APP_URL.'/ui_breadcrumbs.php'
			],
			'ui_buttons' => [
				'title' => 'Buttons',
				'url' => APP_URL.'/ui_buttons.php'
			],
			'ui_button_group' => [
				'title' => 'Button Group',
				'url' => APP_URL.'/ui_button_group.php'
			],
			'ui_cards' => [
				'title' => 'Cards',
				'url' => APP_URL.'/ui_cards.php'
			],
			'ui_carousel' => [
				'title' => 'Carousel',
				'url' => APP_URL.'/ui_carousel.php'
			],
			'ui_collapse' => [
				'title' => 'Collapse',
				'url' => APP_URL.'/ui_collapse.php'
			],
			'ui_dropdowns' => [
				'title' => 'Dropdowns',
				'url' => APP_URL.'/ui_dropdowns.php'
			],
			'ui_list_filter' => [
				'title' => 'List Filter',
				'url' => APP_URL.'/ui_list_filter.php'
			],
			'ui_modal' => [
				'title' => 'Modal',
				'url' => APP_URL.'/ui_modal.php'
			],
			'ui_navbars' => [
				'title' => 'Navbars',
				'url' => APP_URL.'/ui_navbars.php'
			],
			'ui_panels' => [
				'title' => 'Panels',
				'url' => APP_URL.'/ui_panels.php'
			],
			'ui_pagination' => [
				'title' => 'Pagination',
				'url' => APP_URL.'/ui_pagination.php'
			],
			'ui_popovers' => [
				'title' => 'Popovers',
				'url' => APP_URL.'/ui_popovers.php'
			],
			'ui_progress_bars' => [
				'title' => 'Progress Bars',
				'url' => APP_URL.'/ui_progress_bars.php'
			],
			'ui_scrollspy' => [
				'title' => 'ScrollSpy',
				'url' => APP_URL.'/ui_scrollspy.php'
			],
			'ui_side_panel' => [
				'title' => 'Side Panel',
				'url' => APP_URL.'/ui_side_panel.php'
			],
			'ui_spinners' => [
				'title' => 'Spinners',
				'url' => APP_URL.'/ui_spinners.php'
			],
			'ui_tabs_pills' => [
				'title' => 'Tabs & Pills',
				'url' => APP_URL.'/ui_tabs_pills.php'
			],
			'ui_toasts' => [
				'title' => 'Toasts',
				'url' => APP_URL.'/ui_toasts.php'
			],
			'ui_tooltips' => [
				'title' => 'Tooltips',
				'url' => APP_URL.'/ui_tooltips.php'
			]
		]
	],
	'utilities' => [
		'title' => 'Utilities',
		'icon' => 'fal fa-bolt',
		'items' => [
			'utilities_borders' => [
				'title' => 'Borders',
				'url' => APP_URL.'/utilities_borders.php'
			],
			'utilities_clearfix' => [
				'title' => 'Clearfix',
				'url' => APP_URL.'/utilities_clearfix.php'
			],
			'utilities_color_pallet' => [
				'title' => 'Color Pallet',
				'url' => APP_URL.'/utilities_color_pallet.php'
			],
			'utilities_display_property' => [
				'title' => 'Display Property',
				'url' => APP_URL.'/utilities_display_property.php'
			],
			'utilities_fonts' => [
				'title' => 'Fonts',
				'url' => APP_URL.'/utilities_fonts.php'
			],
			'utilities_flexbox' => [
				'title' => 'Flexbox',
				'url' => APP_URL.'/utilities_flexbox.php'
			],
			'utilities_helpers' => [
				'title' => 'Helpers',
				'url' => APP_URL.'/utilities_helpers.php'
			],
			'utilities_position' => [
				'title' => 'Position',
				'url' => APP_URL.'/utilities_position.php'
			],
			'utilities_responsive_grid' => [
				'title' => 'Responsive Grid',
				'url' => APP_URL.'/utilities_responsive_grid.php'
			],
			'utilities_sizing' => [
				'title' => 'Sizing',
				'url' => APP_URL.'/utilities_sizing.php'
			],
			'utilities_spacing' => [
				'title' => 'Spacing',
				'url' => APP_URL.'/utilities_spacing.php'
			],
			'utilities_typography' => [
				'title' => 'Typography',
				'tags' => 'fonts headings bold lead colors sizes link text states list styles truncate alignment',
				'url' => APP_URL.'/utilities_typography.php'
			],
			'menu_child' => [
				'title' => 'Menu child',
				'items' => [
					'sublevel_item' => [
						'title' => 'Sublevel Item',

					],
					'another_item' => [
						'title' => 'Another Item',

					]
				]
			],
			'disabled_item' => [
				'title' => 'Disabled item',

			]
		]
	],
	'font_icons' => [
		'title' => 'Font Icons',
		'icon' => 'fal fa-map-marker-alt',
		'span' => [
			'class' => 'dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top',
			'text' => '2,500+'
		],
		'items' => [
			'fontawesome' => [
				'title' => 'FontAwesome',
				'items' => [
					'icons_fontawesome_light' => [
						'title' => 'Light',
						'url' => APP_URL.'/icons_fontawesome_light.php'
					],
					'icons_fontawesome_regular' => [
						'title' => 'Regular',
						'url' => APP_URL.'/icons_fontawesome_regular.php'
					],
					'icons_fontawesome_solid' => [
						'title' => 'Solid',
						'url' => APP_URL.'/icons_fontawesome_solid.php'
					],
					'icons_fontawesome_brand' => [
						'title' => 'Brand',
						'url' => APP_URL.'/icons_fontawesome_brand.php'
					]
				]
			],
			'nextgen_icons' => [
				'title' => 'NextGen Icons',
				'items' => [
					'icons_nextgen_general' => [
						'title' => 'General',
						'url' => APP_URL.'/icons_nextgen_general.php'
					],
					'icons_nextgen_base' => [
						'title' => 'Base',
						'url' => APP_URL.'/icons_nextgen_base.php'
					]
				]
			],
			'stack_icons' => [
				'title' => 'Stack Icons',
				'items' => [
					'icons_stack_showcase' => [
						'title' => 'Showcase',
						'url' => APP_URL.'/icons_stack_showcase.php'
					],
					'icons_stack_generate' => [
						'title' => 'Generate Stack',
						'url' => APP_URL.'/icons_stack_generate.php?layers=3'
					]
				]
			]
		]
	],
	'tables' => [
		'title' => 'Tables',
		'icon' => 'fal fa-th-list',
		'items' => [
			'tables_basic' => [
				'title' => 'Basic Tables',
				'url' => APP_URL.'/tables_basic.php'
			],
			'tables_generate_style' => [
				'title' => 'Generate Table Style',
				'url' => APP_URL.'/tables_generate_style.php'
			]
		]
	],
	'form_stuff' => [
		'title' => 'Form Stuff',
		'icon' => 'fal fa-edit',
		'items' => [
			'form_basic_inputs' => [
				'title' => 'Basic Inputs',
				'url' => APP_URL.'/form_basic_inputs.php'
			],
			'form_checkbox_radio' => [
				'title' => 'Checkbox & Radio',
				'url' => APP_URL.'/form_checkbox_radio.php'
			],
			'form_input_groups' => [
				'title' => 'Input Groups',
				'url' => APP_URL.'/form_input_groups.php'
			],
			'form_validation' => [
				'title' => 'Validation',
				'url' => APP_URL.'/form_validation.php'
			]
		]
	],
	[
		'title' => 'Plugins & Addons',
		'group' => true,
	],
	'plugins' => [
		'title' => 'Plugins',
		'icon' => 'fal fa-shield-alt',
		'items' => [
			'plugin_faq' => [
				'title' => 'Plugins FAQ',
				'url' => APP_URL.'/plugin_faq.php'
			],
			'plugin_waves' => [
				'title' => 'Waves',
				'url' => APP_URL.'/plugin_waves.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-400 ml-2',
					'text' => '9 KB'
				]
			],
			'plugin_pacejs' => [
				'title' => 'PaceJS',
				'url' => APP_URL.'/plugin_pacejs.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-500 ml-2',
					'text' => '13 KB'
				]
			],
			'plugin_smartpanels' => [
				'title' => 'SmartPanels',
				'url' => APP_URL.'/plugin_smartpanels.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-600 ml-2',
					'text' => '9 KB'
				]
			],
			'plugin_bootbox' => [
				'title' => 'BootBox',
				'tags' => 'alert sound',
				'url' => APP_URL.'/plugin_bootbox.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-600 ml-2',
					'text' => '15 KB'
				]
			],
			'plugin_slimscroll' => [
				'title' => 'Slimscroll',
				'url' => APP_URL.'/plugin_slimscroll.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '5 KB'
				]
			],
			'plugin_throttle' => [
				'title' => 'Throttle',
				'url' => APP_URL.'/plugin_throttle.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '1 KB'
				]
			],
			'plugin_navigation' => [
				'title' => 'Navigation',
				'url' => APP_URL.'/plugin_navigation.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '2 KB'
				]
			],
			'plugin_i18next' => [
				'title' => 'i18next',
				'url' => APP_URL.'/plugin_i18next.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '10 KB'
				]
			],
			'plugin_appcore' => [
				'title' => 'App.Core',
				'url' => APP_URL.'/plugin_appcore.php',
				'span' => [
					'class' => 'dl-ref label bg-success-700 ml-2',
					'text' => '14 KB'
				]
			]
		]
	],
	[
		'title' => 'Layouts & Apps',
		'group' => true,
	],
	'pages' => [
		'title' => 'Pages',
		'icon' => 'fal fa-plus-circle',
		'items' => [
			'page_chat' => [
				'title' => 'Chat',
				'url' => APP_URL.'/page_chat.php'
			],
			'page_contacts' => [
				'title' => 'Contacts',
				'url' => APP_URL.'/page_contacts.php'
			],
			'forum' => [
				'title' => 'Forum',
				'items' => [
					'page_forum_list' => [
						'title' => 'List',
						'url' => APP_URL.'/page_forum_list.php'
					],
					'page_forum_threads' => [
						'title' => 'Threads',
						'url' => APP_URL.'/page_forum_threads.php'
					],
					'page_forum_discussion' => [
						'title' => 'Discussion',
						'url' => APP_URL.'/page_forum_discussion.php'
					]
				]
			],
			'inbox' => [
				'title' => 'Inbox',
				'items' => [
					'page_inbox_general' => [
						'title' => 'General',
						'url' => APP_URL.'/page_inbox_general.php'
					],
					'page_inbox_read' => [
						'title' => 'Read',
						'url' => APP_URL.'/page_inbox_read.php'
					],
					'page_inbox_write' => [
						'title' => 'Write',
						'url' => APP_URL.'/page_inbox_write.php'
					]
				]
			],
			'page_invoice' => [
				'title' => 'Invoice (printable)',
				'url' => APP_URL.'/page_invoice.php'
			],
			'authentication' => [
				'title' => 'Authentication',
				'items' => [
					'page_forget' => [
						'title' => 'Forget Password',
						'url' => APP_URL.'/page_forget.php'
					],
					'page_locked' => [
						'title' => 'Locked Screen',
						'url' => APP_URL.'/page_locked.php'
					],
					'page_login' => [
						'title' => 'Login',
						'url' => APP_URL.'/page_login.php'
					],
					'page_login-alt' => [
						'title' => 'Login Alt',
						'url' => APP_URL.'/page_login-alt.php'
					],
					'page_register' => [
						'title' => 'Register',
						'url' => APP_URL.'/page_register.php'
					],
					'page_confirmation' => [
						'title' => 'Confirmation',
						'url' => APP_URL.'/page_confirmation.php'
					]
				]
			],
			'error_pages' => [
				'title' => 'Error Pages',
				'items' => [
					'page_error' => [
						'title' => 'General Error',
						'url' => APP_URL.'/page_error.php'
					],
					'page_error_404' => [
						'title' => 'Server Error',
						'url' => APP_URL.'/page_error_404.php'
					],
					'page_error_announced' => [
						'title' => 'Announced Error',
						'url' => APP_URL.'/page_error_announced.php'
					]
				]
			],
			'page_profile' => [
				'title' => 'Profile',
				'url' => APP_URL.'/page_profile.php'
			],
			'page_search' => [
				'title' => 'Search Results',
				'url' => APP_URL.'/page_search.php'
			]
		]
	]
];