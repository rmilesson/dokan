<?php
/**
 * When you are adding new version please follow this sequence for changes: New Feature, New, Improvement, Fix...
 */
$changelog = [
    [
        'version'  => 'Version 3.3.6',
        'released' => '2022-01-10',
        'changes'  => [
            'Fix'         => [
                [
                    'title'       => 'CSS class added for styling order details page.',
                    'description' => '',
                ],
                [
                    'title'       => 'Item meta is not being deleted from the order details page of the WordPress dashboard.',
                    'description' => '',
                ],
                [
                    'title'       => 'Showing Vendor Name instead of vendor id on the order details page of WooCommerce.',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed conflict with Siteground Optimizer plugin.',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.3.5',
        'released' => '2021-12-15',
        'changes'  => [
            'Fix'         => [
                [
                    'title'       => 'Fatal error while creating new vendor.',
                    'description' => '',
                ],
                [
                    'title'       => 'Conflict Dokan admin notices scripts with customizer page and WPML string translation page.',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.3.4',
        'released' => '2021-12-15',
        'changes'  => [
            'Fix'         => [
                [
                    'title'       => 'Asset loading issue for admin notices',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.3.3',
        'released' => '2021-12-15',
        'changes'  => [
            'New' => [
                [
                    'title'       => 'Added what’s New page for Dokan',
                    'description' => '',
                ],
                [
                    'title'       => 'Grouped all Dokan admin notices into a single notice with slider',
                    'description' => '',
                ],
            ],
            'Improvement' => [
                [
                    'title'       => 'reCaptcha integration added to store contact form',
                    'description' => '',
                ],
                [
                    'title'       => 'Redesigned Dokan admin header section. Also added some useful links under admin bar.',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'select2 dropdown margin issue fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Fix loading issue while loading Dokan pages when permalink sets to plain text, Also added a notice to instruct users to change permalink setting.',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.3.2',
        'released' => '2021-11-30',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Caching Enhancement and Fixes',
                    'description' => '',
                ],
                [
                    'title'       => 'Added tooltips for setting options',
                    'description' => '',
                ],
                [
                    'title'       => 'Google Map and Mapbox setting fields will be always visible',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Product was creating via API even selling option was disabled for a vendor',
                    'description' => '',
                ],
                [
                    'title'       => 'Withdraw details field value conflict with old withdraw data',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.3.1',
        'released' => '2021-11-12',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Updated vendor store per page placeholder text',
                    'description' => '',
                ],
                [
                    'title'       => 'Removed user switch setting from Dokan selling setting, now user switching will work if plugin exists',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Added Vue DateRangePicker library',
                    'description' => '',
                ],
                [
                    'title'       => 'Added missing param on woocommerce_admin_order_item_headers',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed WC mail template overwrite was not working',
                    'description' => '',
                ],
                [
                    'title'       => 'add call to filter dokan_product_cat_dropdown_args to listing-filter.php (thanks to David Marin)',
                    'description' => '',
                ],
                [
                    'title'       => 'updated dokan_product_seller_info() function to not to add vendor data if vendor id doesn\'t exists (thanks to David Marin)',
                    'description' => '',
                ],
                [
                    'title'       => 'Hide Show email address in store settings from store settings page if admin disable this settings from customizer.',
                    'description' => '',
                ],
                [
                    'title'       => 'Added upgrader to change refund and withdraw database table column',
                    'description' => '',
                ],
            ],
            'Add'         => [
                [
                    'title'       => 'Black Friday promotion 2021',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.3.0',
        'released' => '2021-10-31',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Added integration of sweetalert2 for alert, prompt, confirm, toast notification',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Fixed typo in vendor earning tooltip',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor was not getting a notification when order status change from cancelled to processing, on-hold, or completed. This has been fixed now',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.15',
        'released' => '2021-10-13',
        'changes'  => [
            'New Feature' => [
                [
                    'title'       => 'Permanently delete Dokan related data (custom tables, options, pages, user roles and capabilities etc) after plugin delete based on admin Setting',
                    'description' => '',
                ],
            ],
            'New'         => [
                [
                    'title'       => 'Added filter hook dokan_store_banner_default_width and dokan_store_banner_default_height so that theme/plugin author can change store banner with and height based on their needs',
                    'description' => '',
                ],
                [
                    'title'       => 'Added Dokan stores page link under Admin bar menu, from now on “Visit Store” redirects to Dokan store list page and “Visit Shop” directs to WooCommerce Product list page.',
                    'description' => '',
                ],
                [
                    'title'       => 'Added integration of sweetalert2 to replace default javascript alert, prompt, confirm, and toast notifications',
                    'description' => '',
                ],
            ],
            'Improvement' => [
                [
                    'title'       => 'Added a new tooltip in vendor dashboard product listing page after earning column to clarify vendors about possible earning from their products',
                    'description' => '',
                ],
                [
                    'title'       => 'Added localization support for text "Calculating"',
                    'description' => '',
                ],
                [
                    'title'       => 'Now Dokan page view count will be stored in the browser’s Local Storage instead of browser Cookies. Some caching plugins weren\'t able to cache single product pages due to this. This fix will let caching plugins to cache single product pages from now on',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Single product page used to display the seller\'s real name instead of store name on the vendor info tab. Issue has been resolved now.',
                    'description' => '',
                ],
                [
                    'title'       => 'When a vendor adds a new product If the form has any validation error then old selected tags went missing. This issue has been resolved now.',
                    'description' => '',
                ],
                [
                    'title'       => 'Store Address input fields were missing in vendor dashboard’s store setting form when the Dokan Pro plugin was not installed. Now this issue has been fixed.',
                    'description' => '',
                ],
                [
                    'title'       => 'Removed vendor verification verified status check from vendor dashboard’s store settings page if dokan pro is not installed or vendor verification module is not active',
                    'description' => '',
                ],
                [
                    'title'       => 'Single Store product category wasn\'t working if WPML plugin was installed. Now this issue has been fixed.',
                    'description' => '',
                ],
                [
                    'title'       => 'Added validation for withdraw limit',
                    'description' => '',
                ],
                [
                    'title'       => 'Corrected spelling to \'picture\' from \'picutre\'',
                    'description' => '',
                ],
                [
                    'title'       => 'In the latest version of Divi, theme assets weren’t loading if a single store page doesn’t contain any product. This issue has been fixed now.',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor Contact form didn\'t contain “Reply To” email address when a customer would contact a vendor via the vendor contact form widget. Issue has been resolved now.',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.14',
        'released' => '2021-10-04',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Multiple issue fixed in WPML integration with Dokan',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.13',
        'released' => '2020-09-30',
        'changes'  => [
            'New Feature' => [
                [
                    'title'       => 'Set limitation for how many product tags that vendor can input, admin can set tag limit via filter hook: dokan_product_tags_select_max_length',
                    'description' => '',
                ],
            ],
            'Improvement' => [
                [
                    'title'       => 'Added dynamic filter named: dokan_manage_shop_order_custom_columns_%s hook under shop_order_custom_columns method',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Fixed warning on product listing page due to filter data type mismatch',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed localization issue on attribute label',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed Single store product search not working for logged out users',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.12',
        'released' => '2020-09-13',
        'changes'  => [
            'New' => [
                [
                    'title'       => 'Withdraw details keep save as log',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor settings update REST api support',
                    'description' => '',
                ],
                [
                    'title'       => 'New Filter hook added for Order status list allowed for withdrawal \'dokan_settings_withdraw_order_status_options\'',
                    'description' => '',
                ],
            ],
            'Fix' => [
                [
                    'title'       => 'Check if pagination_base post is empty',
                    'description' => '',
                ],
                [
                    'title'       => 'Single store page map hide based on setting',
                    'description' => '',
                ],
                [
                    'title'       => 'added upgrader to reassign dokan_store_name meta because it was missing for some vendor',
                    'description' => '',
                ],
                [
                    'title'       => 'Dashboard header add new button issue fixed',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.11',
        'released' => '2020-08-31',
        'changes'  => [
            'New' => [
                [
                    'title'       => 'Added new shortcode attribute named random to display store list randomly [dokan-stores orderby="random"]',
                    'description' => '',
                ],
                [
                    'title'       => 'Added \'Texty – SMS Notification for WordPress, WooCommerce, Dokan and more\' plugin as recommended plugins under Dokan admin setup wizard page',
                    'description' => '',
                ],
                [
                    'title'       => 'Added vendor filter on admin Withdraw page',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new REST route to get corresponding vendor\'s product categories under StoreController API (GET: wp-json/dokan/v1/stores/3/categories)',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new REST route to get corresponding vendor\'s popular product categories under StoreController API (GET: wp-json/dokan/v1/stores/3/categories?best_selling=1)',
                    'description' => '',
                ],
                [
                    'title'       => 'Added REST API route to create withdrawal request (POST: /wp-json/dokan/v1/withdraw/ )',
                    'description' => '',
                ],
                [
                    'title'       => 'What\'s new button added under dokan admin page top bar section',
                    'description' => '',
                ],
            ],
            'Fix' => [
                [
                    'title'       => 'Fixed fatal error when vendor registration shortcode used from API',
                    'description' => '',
                ],
                [
                    'title'       => 'Added Map API selection section on Dokan admin setup wizard page',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed unable to remove downloadable file when there is only one file exists',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed fatal error with deleted product of an order',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.10',
        'released' => '2021-08-10',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Hide customer billing email and ip address from vendor order export data based on admin setting',
                    'description' => '',
                ],
                [
                    'title'       => 'Default Category order by set to name and order by as ascending',
                    'description' => '',
                ],

            ],
            'Fix'         => [
                [
                    'title'       => 'After submitting the Create Product from the selected category is not selected',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.9',
        'released' => '2021-08-02',
        'changes'  => [
            'New' => [
                [
                    'title'       => 'Added customize settings for store product filter option to show/hide',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new hook dokan_earning_by_order_item_price',
                    'description' => '',
                ],

            ],
            'Fix' => [
                [
                    'title'       => 'Product tag search not working in variable product after adding new attribute',
                    'description' => '',
                ],
                [
                    'title'       => 'Display shipping widget though virtual checkbox selected',
                    'description' => '',
                ],
                [
                    'title'       => 'Children IDs not showing on REST API',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed a js error while refunding from vendor dashboard: size() is not a function',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.8',
        'released' => '2021-07-12',
        'changes'  => [
            'New'         => [
                [
                    'title'       => 'Added dokan summer sale promotion',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new action hook named dokan_store_customizer_after_vendor_info under Dokan Store Customizer',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new action hook named dokan_before_create_vendor',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new action hook named dokan_seller_registration_after_shopurl_field',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new action hook named dokan_settings_after_store_phone',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new action hook dokan_settings_before_store_email',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new action hook dokan_product_gallery_image_count',
                    'description' => '',
                ],
            ],
            'Improvement' => [
                [
                    'title'       => 'Added Composer 2 support',
                    'description' => '',
                ],
                [
                    'title'       => 'Added $data parameter to existing dokan_vendor_create_data action hook',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Fixed rewrite rules issues after Dokan plugin is installed and after change store slug',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.7',
        'released' => '2021-07-01',
        'changes'  => [
            'New' => [
                [
                    'title'       => 'Added Order by filtering for single store product listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Added custom ip address lookup link',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a success message after creating a product from add new product modal window',
                    'description' => '',
                ],
                [
                    'title'       => 'Added - - for category listing in add new product page and add new product modal window',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new shortcode attribute named with_products_only in [dokan-stores] shortcode so that vendor without product can be filtered out from store listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Add support to send objects to trash, thanks to @Mário Valney',
                    'description' => '',
                ],
            ],
            'Fix' => [
                [
                    'title'       => 'Fixed duplicate tag create issue, if new tag is searched with mixed character case',
                    'description' => '',
                ],
                [
                    'title'       => 'Wrong hooks used on Elementor widgets',
                    'description' => '',
                ],
                [
                    'title'       => 'Typo in Staff - Manage Menu Permissions fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed an error in Dokan setting for new installation of Dokan Lite',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed vendor order page pagination issue for date and customer filter',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed “In stock" and "Out of stock" translation issue',
                    'description' => '',
                ],
                [
                    'title'       => 'Email template override directory location correction for dokan vendor completed order',
                    'description' => '',
                ],
                [
                    'title'       => 'Delete cache data after updating dokan vendor balance table',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed a bug that would allow vendors to change order status even if they don\'t have permission to do so, thanks to @CODLOP',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.6',
        'released' => '2021-05-08',
        'changes'  => [
            'New' => [
                [
                    'title'       => 'Added new action hooks on order details sidebar',
                    'description' => '',
                ],
                [
                    'title'       => 'Dokan admin setting warning type field added on Dokan admin setting',
                    'description' => '',
                ],
                [
                    'title'       => 'Dokan admin setting repeatable field added 2 new options must-use and desc',
                    'description' => '',
                ],
                [
                    'title'       => 'Introduce the filter hook dokan_dashboard_nav_settings_key for store settings slug',
                    'description' => '',
                ],
                [
                    'title'       => 'Eid 2021 promotion added',
                    'description' => '',
                ],
                [
                    'title'       => 'New hook: Vendor dashboard custom CSV orders export',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor Order export CSV file earnings column added',
                    'description' => '',
                ],
            ],
            'Fix' => [
                [
                    'title'       => 'Decimal as comma separated sale price does not save',
                    'description' => '',
                ],
                [
                    'title'       => 'Product variation pagination for post type pending',
                    'description' => '',
                ],
                [
                    'title'       => 'Product published date displaying current date in local language',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.5',
        'released' => '2021-04-30',
        'changes'  => [
            'New' => [
                [
                    'title'       => 'Sub orders set dynamic post status on WooCommerce my account order details page',
                    'description' => '',
                ],
                [
                    'title'       => 'Store listing shortcode enhancements, Store Category wise: [dokan-stores category="clothing"] Order wise: [dokan-stores order="ASC"] Orderby wise: [dokan-stores orderby="registered"] Store_id wise: [dokan-stores store_id="1, 2, 3"',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor product listing page added 2 new filters options stock wise and product type wise',
                    'description' => '',
                ],
                [
                    'title'       => 'Order status for withdraw option added on dokan admin setting page',
                    'description' => '',
                ],
                [
                    'title'       => 'Store open close option disabled by default when a vendor register',
                    'description' => '',
                ],
            ],
            'Fix' => [
                [
                    'title'       => 'Fix single store page template layout',
                    'description' => '',
                ],
                [
                    'title'       => '[WPML] Fix malformed dashboard subpage URL when page_link is filtered to add a query parameter',
                    'description' => '',
                ],
                [
                    'title'       => 'Product count exclude booking product',
                    'description' => '',
                ],
                [
                    'title'       => 'Order export not filtered customer filtered data',
                    'description' => '',
                ],
                [
                    'title'       => '[WPML] Fix malformed store URL when the home URL contains a query parameter',
                    'description' => '',
                ],
                [
                    'title'       => 'Capitalise vendor url in add new vendor',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor setup wizard page broken issue fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Inconsistency template CSS class dokan-w3 issue fixed on vendor setting page',
                    'description' => '',
                ],
                [
                    'title'       => 'Unable to add multiple lines to the short Description field issue fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'AZERTY keyboard restrict registration issue fixed for vendor register form',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.4',
        'released' => '2021-04-01',
        'changes'  => [
            'New Feature' => [
                [
                    'title'       => 'Vendors able to edit product slug from their product edit page',
                    'description' => '',
                ],

            ],
            'New'         => [
                [
                    'title'       => 'Enter key allow for vendor search on store listing page',
                    'description' => '',
                ],

            ],
            'Improvement' => [
                [
                    'title'       => 'Set default values withdraw methods, limit, order status, commissions on the setup wizard',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Time format with a forward slash (\) wasn\'t parsing correctly on store open/close time dropdown',
                    'description' => '',
                ],
                [
                    'title'       => 'Products: Preview of text is not appearing instantly while adding Product Tags',
                    'description' => '',
                ],
                [
                    'title'       => 'Withdraw: IBAN number is not showing on the Dokan Admin',
                    'description' => '',
                ],
                [
                    'title'       => 'Warning showing on all widget when use on Elementor',
                    'description' => '',
                ],
                [
                    'title'       => 'Divi theme store single page showing warning issue fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Store listing filter most recent is not working issue fixed',
                    'description' => '',
                ],
            ],
            'Refector'    => [
                [
                    'title'       => 'Product create update redundant check',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.3',
        'released' => '2021-03-13',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Wordpress 5.7 and WooCommerce 5.1 compatibility',
                    'description' => '',
                ],
            ],
            'Add'         => [
                [
                    'title'       => 'Limited time promotion for weDevs birthday',
                    'description' => '',
                ],

            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.2',
        'released' => '2021-03-05',
        'changes'  => [
            'New'         => [
                [
                    'title'       => 'Added order completed email notification for vendors',
                    'description' => '',
                ],
                [
                    'title'       => 'Added Vendor individual withdraw threshold option',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new hook (dokan_admin_setup_wizard_save_step_setup_selling) after admin setup wizard save setup selling step',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new action hook (dokan_create_sub_order_before_calculate_totals) when creating a suborder',
                    'description' => '',
                ],
            ],
            'Improvement' => [
                [
                    'title'       => 'Added sales price validation check for subscription product',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new filter hook (dokan_order_status_count) in order status to support custom order status',
                    'description' => '',
                ],
                [
                    'title'       => 'WP kses added new allowed arguments for image tag',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Product update and delete permission error via REST API',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed some PHP 8 warnings',
                    'description' => '',
                ],
                [
                    'title'       => 'Store settings error on save in vendor dashboard area',
                    'description' => '',
                ],
                [
                    'title'       => 'Order delivery tracking number wasn\'t saving as order notes',
                    'description' => '',
                ],
                [
                    'title'       => 'Export order by status on vendor dashboard issue fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Product discount price is set empty if regular price is lower than discount price',
                    'description' => '',
                ],
                [
                    'title'       => 'Fatal error on product tab\'s post per page in more products section',
                    'description' => '',
                ],
                [
                    'title'       => 'Store/products orderby query parameter',
                    'description' => '',
                ],
                [
                    'title'       => 'Dokan store open time timezone mismatch',
                    'description' => '',
                ],
                [
                    'title'       => 'Prices fields showing for external product',
                    'description' => '',
                ],
                [
                    'title'       => 'Unable to save stock value for variation product',
                    'description' => '',
                ],
                [
                    'title'       => 'Deprecated Gplus cleanup',
                    'description' => '',
                ],
                [
                    'title'       => 'Unable to save stock value for variation product',
                    'description' => '',
                ],
                [
                    'title'       => 'Different edit url for publish products in vendor dashboard',
                    'description' => '',
                ],
                [
                    'title'       => 'SKU wasn\'t saving from vendor dashboard',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.1',
        'released' => '2021-02-12',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Performance improvements on vendor dashboard end',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Optimized code for better security',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed conflict with user frontend menu position with Dokan',
                    'description' => '',
                ],

            ],
        ],
    ],
    [
        'version'  => 'Version 3.2.0',
        'released' => '2021-01-29',
        'changes'  => [
            'New'         => [
                [
                    'title'       => 'Added blank product page new UI on vendor dashboard',
                    'description' => '',
                ],
                [
                    'title'       => 'Added Store open and closed status on dokan store listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a setting where admin can set how many products to display on vendor single store page',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new validation message after upload a banner/profile picture, show a browser alert if user tries to leave the current page without saving the changes.',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new update setting button on top of the vendor setting form',
                    'description' => '',
                ],
                [
                    'title'       => 'Added downloadable and virtual product type support for subscription products',
                    'description' => '',
                ],
            ],
            'Improvement' => [
                [
                    'title'       => 'Dokan withdrawal request promotion',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'While registering as a vendor, radio button should work only when user click mouse cursor on the top of the radio button.',
                    'description' => '',
                ],
                [
                    'title'       => 'Product add pop-up validation error message style',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor pending tab keeps loading issue fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Improved the mapbox address search input field and make it same as google map search box',
                    'description' => '',
                ],
                [
                    'title'       => 'Keep old vendor as product author while duplicating product from the admin area',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed rounded vendor balance can not be withdrawn',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed resetting geolocation address is not selecting default location address',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed featured attribute of the store list shortcode doesn\'t work',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed vendors count not working on autoload in admin vendor listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed downloadable product "Grant Access" JS error',
                    'description' => '',
                ],
                [
                    'title'       => 'Added filter for $allowed_roles in vendor registration which was missing',
                    'description' => '',
                ],
                [
                    'title'       => 'If the vendor has a rounded value in their balance then vendors are unable to request a withdrawal of the full amount',
                    'description' => '',
                ],
                [
                    'title'       => 'When order data is retrieved via API, the "total" order value is gets rounded',
                    'description' => '',
                ],
                [
                    'title'       => 'Elementor conflict with Dokan best and top selling product shortcodes issue fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'More product tab showing other vendors product issue fixed',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.1.2',
        'released' => '2021-01-12',
        'changes'  => [
            'Fix'    => [
                [
                    'title'       => 'Store listing page displaying disabled vendors',
                    'description' => '',
                ],

            ],
            'Notice' => [
                [
                    'title'       => 'Added Paypal adaptive modules removal notice',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.1.1',
        'released' => '2021-01-11',
        'changes'  => [
            'New Feature' => [
                [
                    'title'       => 'Added searching feature for Dokan admin settings',
                    'description' => '',
                ],
            ],
            'New'         => [
                [
                    'title'       => 'Added "Visit Vendor Dashboard" link to admin bar',
                    'description' => '',
                ],
                [
                    'title'       => 'Added current_datetime() compatible dokan functions for WordPress version < 5.3',
                    'description' => '',
                ],
            ],
            'Improvement' => [
                [
                    'title'       => 'Updated refund table item_totals and item_tax_totals fields via Dokan upgrader',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Optimized Dokan admin settings page to load setting page faster',
                    'description' => '',
                ],
                [
                    'title'       => 'Added vendor search feature for disabled vendors',
                    'description' => '',
                ],
                [
                    'title'       => 'Product discount showing wrong when a product that has a limited time discount and sets a schedule on the calendar on the frontend dashboard',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed creating addon by vendor staff was not working for product',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed coupons created by the vendor can not be modified',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed admin dashboard wasn\'t loading due to use of sprintf for some translatable strings',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed display issue for State and Country multi-select of Dokan vendor create modal',
                    'description' => '',
                ],
                [
                    'title'       => 'Translation issue fixed on store listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Store product category not showing properly',
                    'description' => '',
                ],
                [
                    'title'       => 'Fixed missing text-domain on product listing delete confirmation alert',
                    'description' => '',
                ],
                [
                    'title'       => 'Responsive dashboard product and order table',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.1.0',
        'released' => '2020-12-20',
        'changes'  => [
            'New' => [
                [
                    'title'       => 'Store page customizer and better theme support',
                    'description' => '',
                ],
            ],
            'Fix' => [
                [
                    'title'       => 'Stock level wrong calculation in order notes',
                    'description' => '',
                ],
                [
                    'title'       => 'Improve search with store name in Dokan admin vendor listing and store listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Store listing page avatar image not showing properly on store listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Store and store term and conditions template make high priority',
                    'description' => '',
                ],
                [
                    'title'       => 'Store settings page url issue when vendor dashboard use as child page',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor dashboard menu not selected when vendor dashboard use as a child page',
                    'description' => '',
                ],
                [
                    'title'       => 'Ordering issue on category dropdown on product listing filter area',
                    'description' => '',
                ],
                [
                    'title'       => 'Vue wp list table package updated, translation support for list tables',
                    'description' => '',
                ],
                [
                    'title'       => 'Dokan vendor dashboard big counter warning issue fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor dashboard product table column issue fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Update custom deactivation reason placeholder text',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor biography formatting issue when update any vendor from Dokan admin area',
                    'description' => '',
                ],
                [
                    'title'       => 'Added attribute slug with product REST API',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor listing and withdraw page not loading correctly in admin area when use others languages',
                    'description' => '',
                ],
                [
                    'title'       => 'Upgrade to pro module page overlapping issue with admin notice, css & changed svg',
                    'description' => '',
                ],
                [
                    'title'       => 'Withdraw methods toggle options not working on Dokan setup wizard',
                    'description' => '',
                ],
                [
                    'title'       => 'Withdraw methods are not saving for some users, fixed via Dokan upgrader',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.16',
        'released' => '2020-12-01',
        'changes'  => [
            'New'         => [
                [
                    'title'       => 'Dokan upgrade to pro modules page added',
                    'description' => '',
                ],

            ],
            'Improvement' => [
                [
                    'title'       => 'weMail plugin added on recommended plugins list when run Dokan setup wizard',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Search by store name not working on store listing page when store created from admin area',
                    'description' => '',
                ],
                [
                    'title'       => 'Store reviews REST API issue fix and improve',
                    'description' => '',
                ],
                [
                    'title'       => 'Order fetching REST API issue fix and improve',
                    'description' => '',
                ],
                [
                    'title'       => 'Deactivation reasons icons and placeholder updated',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.15',
        'released' => '2020-11-21',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'updated codebase to fix timezone mismatch',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.14',
        'released' => '2020-11-20',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Limited time promotion admin notice',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Vendor edit admin commission on decimal separator as comma',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.13',
        'released' => '2020-11-12',
        'changes'  => [
            'New' => [
                [
                    'title'       => 'Added new filter `dokan_is_product_author`',
                    'description' => '',
                ],
                [
                    'title'       => 'Apply new filter `dokan_product_listing_post_statuses` on product listing status',
                    'description' => '',
                ],
            ],
            'Fix' => [
                [
                    'title'       => 'Store name search was not working when the vendor account was created by admin',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor was not changing when trying to change on product quick edit section from admin area',
                    'description' => '',
                ],
                [
                    'title'       => 'Some translation issue fixed on admin setting page',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.12',
        'released' => '2020-11-05',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Refactor upgrade to pro banner.',
                    'description' => '',
                ],
                [
                    'title'       => 'Temporary disable WooCommerce payment and shipping setup step from vendor setup wizard section. It was throwing a lot of deprecated warnings, we will fix it in the next version.',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.11',
        'released' => '2020-10-22',
        'changes'  => [
            'New Feature' => [
                [
                    'title'       => 'Fixes a JS loading issue when `SCRIPT_DEBUG` is enabled',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.10',
        'released' => '2020-10-20',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Vendor balance remains same after refund',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor name is not showing correctly on WooCommerce product list quick edit',
                    'description' => '',
                ],
                [
                    'title'       => 'CSS conflicting with the YITH Badge Management Plugin',
                    'description' => '',
                ],
                [
                    'title'       => 'Added postbox header div in postbox component',
                    'description' => '',
                ],
                [
                    'title'       => 'Guest checkout name in vendor order details',
                    'description' => '',
                ],
                [
                    'title'       => 'Phone field pasting option enabled settings page',
                    'description' => '',
                ],
                [
                    'title'       => 'Admin dashboard feed REST Request error',
                    'description' => '',
                ],
                [
                    'title'       => 'Prevent admin email for sub-order',
                    'description' => '',
                ],
                [
                    'title'       => 'Multiple category commission issue fallback to vendor commission',
                    'description' => '',
                ],
                [
                    'title'       => 'Admin vendor total count',
                    'description' => '',
                ],
                [
                    'title'       => 'Default order sorting issue',
                    'description' => '',
                ],
                [
                    'title'       => 'WC deprecate notice for using order parent_id directly',
                    'description' => '',
                ],
                [
                    'title'       => 'Label changed for external product type',
                    'description' => '',
                ],
                [
                    'title'       => 'Product tag add if do not exist',
                    'description' => '',
                ],
                [
                    'title'       => 'Store category widget not translate problem with WPML',
                    'description' => '',
                ],
                [
                    'title'       => 'On RESTFul order creation, only single store is added into the response even if there are multiple stores',
                    'description' => '',
                ],
                [
                    'title'       => 'Product variation author id update for product quick save',
                    'description' => '',
                ],
                [
                    'title'       => 'Translation issue on Select2',
                    'description' => '',
                ],
                [
                    'title'       => 'Price schedule selection date added',
                    'description' => '',
                ],
                [
                    'title'       => 'Remove duplicate capabilities form seller role',
                    'description' => '',
                ],
                [
                    'title'       => 'Dashboard header add new button not showing with theme conflict',
                    'description' => '',
                ],
                [
                    'title'       => 'Order details page showing warning issue',
                    'description' => '',
                ],
                [
                    'title'       => 'After withdraw approval, sometimes it\'s not inserting in balance table',
                    'description' => '',
                ],
                [
                    'title'       => 'Redirect to 404 if vendor do not exist for TOC template',
                    'description' => '',
                ],
                [
                    'title'       => 'Withdrawal current balance is incorrect cause of cache issue',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.9',
        'released' => '2020-08-25',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Some security issues fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Loading issue when long tags list on add/edit product page (Vendor Dashboard)',
                    'description' => '',
                ],
                [
                    'title'       => 'Add missing permission callback in REST routes to make WordPress 5.5 compatible',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor can send multiple withdraw request from vendor dashboard',
                    'description' => '',
                ],
                [
                    'title'       => 'API endpoint added',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.8',
        'released' => '2020-08-12',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'WordPress v5.5 compatibility issue fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Namespacing issues on class declaration',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.7',
        'released' => '2020-07-23',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Showing fatal error for user switching',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.6',
        'released' => '2020-07-23',
        'changes'  => [
            'New Feature' => [
                [
                    'title'       => 'Vendor user switching (User Switching plugin support)',
                    'description' => '',
                ],
                [
                    'title'       => 'Decimal and Thousand Separator with Comma',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Add system to refresh options for select fields in admin settings',
                    'description' => '',
                ],
                [
                    'title'       => 'Admin settings input field type for common types of fields',
                    'description' => '',
                ],
                [
                    'title'       => 'Shop name not showing on product listing quick edit section',
                    'description' => '',
                ],
                [
                    'title'       => 'Order notes in vendor dashboard insert wrong author data',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.5',
        'released' => '2020-06-11',
        'changes'  => [
            'New' => [
                [
                    'title'       => 'Exclude cash on delivery payments from vendor withdrawal balance (COD)',
                    'description' => '',
                ],
            ],
            'Fix' => [
                [
                    'title'       => 'Remove vendor folder from the excluded list',
                    'description' => '',
                ],
                [
                    'title'       => 'Earning column missing on vendor dashboard order list',
                    'description' => '',
                ],
                [
                    'title'       => 'Default location not working in vendor dashboard',
                    'description' => '',
                ],
                [
                    'title'       => 'Remove link from customer name in vendor order details',
                    'description' => '',
                ],
                [
                    'title'       => 'Custom header, footer template does not work in Dokan store page (Divi Theme)',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.4',
        'released' => '2020-05-15',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Pass vendor id in dokan_get_seller_active_withdraw_methods hook',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Rename google plus to google as google plus is deprecated',
                    'description' => '',
                ],
                [
                    'title'       => 'Unable to set store trams and condition settings through REST API',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor order email does not have the TAX details',
                    'description' => '',
                ],
                [
                    'title'       => 'Withdraw request email is not send to admin',
                    'description' => '',
                ],
                [
                    'title'       => 'Typo in backend add and edit vendor page',
                    'description' => '',
                ],
                [
                    'title'       => 'On updating commission type in backend vendor dashboard, translated commission type is getting saved into database',
                    'description' => '',
                ],
                [
                    'title'       => 'Store listing filter does not work when its saved as frontpage',
                    'description' => '',
                ],
                [
                    'title'       => 'When a product is purchased with a price of more than 8 digit the calculation is wrong',
                    'description' => '',
                ],
                [
                    'title'       => 'Caching issue on vendor\'s order listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Filter out empty seller ids when a product is deleted `dokan_get_sellers_by` function',
                    'description' => '',
                ],
                [
                    'title'       => 'Deduct PayPal gateway fee from vendor\'s earning',
                    'description' => '',
                ],
                [
                    'title'       => 'Hide vendor info if admin wants to',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.3',
        'released' => '2020-04-03',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Clear caches on product update',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor is not receiving email for new order',
                    'description' => '',
                ],
                [
                    'title'       => 'Remove weForms promotion from admin setup wizard',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.2',
        'released' => '2020-03-23',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Added group description to exporters and updated privacy policy guide to drop use of deprecated classes',
                    'description' => '',
                ],
                [
                    'title'       => 'dokan_get_shipping_processing_times function',
                    'description' => '',
                ],
                [
                    'title'       => 'Add filter on withdraw export csv args',
                    'description' => '',
                ],
                [
                    'title'       => 'Get correct product thumbnail size in vendor product list page',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Unable to remove attributes in vendor product edit page',
                    'description' => '',
                ],
                [
                    'title'       => 'Feature image is not saving on quick edit',
                    'description' => '',
                ],
                [
                    'title'       => 'Vendor image issue',
                    'description' => '',
                ],
                [
                    'title'       => 'Set vendor email on new vendor creation',
                    'description' => '',
                ],
                [
                    'title'       => 'Return content from shortcode instead of being outputting',
                    'description' => '',
                ],
                [
                    'title'       => 'Map still showing on vendor dashboard settings page even if there is no API key',
                    'description' => '',
                ],
                [
                    'title'       => 'Product type not saving when quick edit',
                    'description' => '',
                ],
                [
                    'title'       => 'Render withdraw methods dynamically in setup wizard',
                    'description' => '',
                ],
                [
                    'title'       => 'Show vendor email to admin and actual vendor',
                    'description' => '',
                ],
                [
                    'title'       => 'Product type error in dokan_save_product function',
                    'description' => '',
                ],
                [
                    'title'       => 'Admin is unable to see the setup wizard on new dokan installation when WooCommerce is not installed',
                    'description' => '',
                ],
                [
                    'title'       => 'Add missing add_meta_query method in dokan REST API',
                    'description' => '',
                ],
                [
                    'title'       => 'Only render map if api key is availabe in store settings page',
                    'description' => '',
                ],
                [
                    'title'       => 'Add dokan_get_all_cap_labels function',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.1',
        'released' => '2020-02-07',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Fixed yoast seo causing conflict issue in single store page',
                    'description' => '',
                ],
                [
                    'title'       => 'Permission issue fixed for shop manager',
                    'description' => '',
                ],
                [
                    'title'       => 'Handle sales price error if its greater than regular price or empty',
                    'description' => '',
                ],
                [
                    'title'       => 'Change placeholder text for filter by customer to registered customer',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 3.0.0',
        'released' => '2020-02-03',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Store listing filter styles so that it works with almost any theme',
                    'description' => '',
                ],
                [
                    'title'       => 'Show notice in dokan admin setup wizard if minimum PHP version is not met for WooCommerce',
                    'description' => '',
                ],
                [
                    'title'       => 'If dokan pro doesn\'t exist but commission type is found in database, ignore that saved commission type',
                    'description' => '',
                ],
                [
                    'title'       => 'Code quality and performance',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Add mapbox option in dokan admin setup wizard',
                    'description' => '',
                ],
                [
                    'title'       => 'Pass order object into woocommerce_order_item_{type}_html hook',
                    'description' => '',
                ],
                [
                    'title'       => 'Allow vendor to update store terms and condition with REST API',
                    'description' => '',
                ],
                [
                    'title'       => 'If show_email is turned off don\'t show the email in REST API response',
                    'description' => '',
                ],
                [
                    'title'       => 'Remove space while generating user_name via dokan_generate_username function',
                    'description' => '',
                ],
                [
                    'title'       => 'If a product is deleted and no vendor is found for that product display (no name) in backend order listing page',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.31',
        'released' => '2020-01-14',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Add option to set dokan store listing page for rendering all stores',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.30',
        'released' => '2020-01-10',
        'changes'  => [
            'New Feature' => [
                [
                    'title'       => 'Grid and List view for store listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Store sorting options in store listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Add Mapbox as Google map alternative',
                    'description' => '',
                ],
                [
                    'title'       => 'Add Enfold theme support',
                    'description' => '',
                ],
            ],
            'Improvement' => [
                [
                    'title'       => 'dokan_get_vendor_by_product function so that it reruns vendor for product variation',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.29',
        'released' => '2019-12-26',
        'changes'  => [
            'Fix'   => [
                [
                    'title'       => 'Don\'t show the admin setup wizard who ran the setup wizard before',
                    'description' => '',
                ],
                [
                    'title'       => 'Remove non-ascii characters from some file names',
                    'description' => '',
                ],
                [
                    'title'       => 'Dokan dashboard hamburger menu is not working fixed',
                    'description' => '',
                ],
                [
                    'title'       => 'Downloadable product grunt and revoke access issue is fixed',
                    'description' => '',
                ],
            ],
            'Tweak' => [
                [
                    'title'       => 'Added privacy policy info in setup wizard for admin',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.28',
        'released' => '2019-12-19',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Add privacy policy in readme.',
                    'description' => '',
                ],
            ],
            'Fix'         => [
                [
                    'title'       => 'Sanitize and Escape data before saving and rendering',
                    'description' => '',
                ],

            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.27',
        'released' => '2019-12-11',
        'changes'  => [
            'New Feature' => [
                [
                    'title'       => 'Run Dokan Admin Setup Wizard without being WooCommerce installed',
                    'description' => '',
                ],
            ],
            'Improvement' => [
                [
                    'title'       => 'Remove empty div from vendor payment settings page',
                    'description' => '',
                ],
                [
                    'title'       => 'Deleting a attribute from predefined attributes and add the attribute again mess up attributes',
                    'description' => '',
                ],
                [
                    'title'       => 'Add hooks in order details and admin setup wizard',
                    'description' => '',
                ],
                [
                    'title'       => 'Pass post_type as a second parameter to the months_dropdown_results hook',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.26',
        'released' => '2019-11-19',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Add option to hide out of stock products in best selling widget.',
                    'description' => '',
                ],
                [
                    'title'       => 'Make dokan add vendor UI consistent to WordPress UI.',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.25',
        'released' => '2019-11-12',
        'changes'  => [
            'Improvement' => [
                [
                    'title'       => 'Dokan_Commission::prepare_for_calculation() method.',
                    'description' => '',
                ],
            ],
            'Dev'         => [
                [
                    'title'       => 'Add dokan backend settings input required field validation.',
                    'description' => '',
                ],

            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.24',
        'released' => '2019-11-08',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Assets URL localization was creating a problem in frontend vendor shipping area, this has been fixed.',
                    'description' => '',
                ],
                [
                    'title'       => 'Added a new filter `dokan_get_edit_product_url` to override the product edit URL.',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.23 ',
        'released' => '2019-11-07',
        'changes'  => [
            'New Feature'  => [
                [
                    'title'       => 'Add REST API support for store contact form widget',
                    'description' => '',
                ],
                [
                    'title'       => 'Add Vendor listing page in dokan backend',
                    'description' => '',
                ],
                [
                    'title'       => 'Add vendor active inactive REST API',
                    'description' => '',
                ],
            ],
            'Fix'          => [
                [
                    'title'       => 'Increase refund table data length to allow more refund items',
                    'description' => '',
                ],
                [
                    'title'       => 'Withdraw threshold field disappears when commission type is selected in dokan settings',
                    'description' => '',
                ],
                [
                    'title'       => 'Order listing page shows the same orders when object cache is enabled',
                    'description' => '',
                ],
                [
                    'title'       => 'Best selling widgets warning in store sidebar',
                    'description' => '',
                ],
                [
                    'title'       => 'Save store name in vendor\'s user_meta so that store search form widget works correctly',
                    'description' => '',
                ],
                [
                    'title'       => 'If percent commission rate is not set while using combine commission calculation is not correct',
                    'description' => '',
                ],
            ],
            'Dev'          => [
                [
                    'title'       => 'Add filter to modify current page id in dokan_is_seller_dashboard function',
                    'description' => '',
                ],
            ],
            'Localization' => [
                [
                    'title'       => 'Store open and close notice placeholder strings remains untranslated',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.22',
        'released' => '2019-10-03',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Remove duplicate input filed in dokan admin settings form',
                    'description' => '',
                ],
                [
                    'title'       => 'Make commission value to 0 if no product found',
                    'description' => '',
                ],
                [
                    'title'       => 'Attribute value\'s are swapped after changing the order of the attributes',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.21',
        'released' => '2019-09-24',
        'changes'  => [
            'Fix'   => [
                [
                    'title'       => 'If state is not found for a country in store settings, remove the state field on reload',
                    'description' => '',
                ],
                [
                    'title'       => 'Only show vendor\'s own uploaded media to a vendor.',
                    'description' => '',
                ],
                [
                    'title'       => 'Add required attribute for various input field in dokan_post_input_box function.',
                    'description' => '',
                ],
                [
                    'title'       => 'Calculate commission for item by quantity when the commission is set to flat.',
                    'description' => '',
                ],
            ],
            'Tweak' => [
                [
                    'title'       => 'Introduce Dokan_Commission class to calculate admin and vendor\'s commission.',
                    'description' => '',
                ],
                [
                    'title'       => 'Remove unnecessary placeholder in admin commission field.',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.20',
        'released' => '2019-08-23',
        'changes'  => [
            'Fix'   => [
                [
                    'title'       => 'Geolocation map settings value is not saving',
                    'description' => '',
                ],
                [
                    'title'       => 'Fix warning in vendor dashboard widget when seller setup wizard is not run',
                    'description' => '',
                ],
                [
                    'title'       => 'Store banner height in vendor settings page it not honouring the saved settings',
                    'description' => '',
                ],
                [
                    'title'       => 'Conflict with avada theme fution builder',
                    'description' => '',
                ],
            ],
            'Tweak' => [
                [
                    'title'       => 'Use WordPress backend date format while printing date in approved and cancelled withdraw request',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.19',
        'released' => '2019-07-29',
        'changes'  => [
            'Fix'   => [
                [
                    'title'       => 'Split orders created from admin dashboard',
                    'description' => '',
                ],
                [
                    'title'       => 'Add on backorder in product stock management',
                    'description' => '',
                ],
                [
                    'title'       => 'Dokan dashboard menu returning 404 with the latest version of visual composer plugin',
                    'description' => '',
                ],
            ],
            'Tweak' => [
                [
                    'title'       => 'Dokan admin settings rearrange',
                    'description' => '',
                ],
                [
                    'title'       => 'Add compatibility with ultimate member plugin',
                    'description' => '',
                ],
                [
                    'title'       => 'Add few hooks in product listing template',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.18',
        'released' => '2019-07-10',
        'changes'  => [
            'Fix'   => [
                [
                    'title'       => 'Add google map type option field component',
                    'description' => '',
                ],
                [
                    'title'       => 'Add dokan_array_after helper function',
                    'description' => '',
                ],
                [
                    'title'       => 'Admin settings default value for multicheck field',
                    'description' => '',
                ],
            ],
            'Tweak' => [
                [
                    'title'       => 'Remove unnecessary code and add hook after creating parent order',
                    'description' => '',
                ],
                [
                    'title'       => 'Refactor dokan_get_vendor_by_product function and explicit error checking while using it',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.17',
        'released' => '2019-06-13',
        'changes'  => [
            'Fix'   => [
                [
                    'title'       => 'Remove unwanted code to fix conflict with yith plugin',
                    'description' => '',
                ],
            ],
            'Tweak' => [
                [
                    'title'       => 'Dokan theme support and responsive menu',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.16',
        'released' => '2019-06-11',
        'changes'  => [
            'Fix'   => [
                [
                    'title'       => 'Hide hidden and out of stock products in vendor store page',
                    'description' => '',
                ],
                [
                    'title'       => 'A non-numeric value encountered warning in vendor product listing page, if product price is not given',
                    'description' => '',
                ],
                [
                    'title'       => 'Add failed order in vendor order listing page',
                    'description' => '',
                ],
                [
                    'title'       => 'Creating product from admin backend returns 2 instance of the product author',
                    'description' => '',
                ],
            ],
            'Tweak' => [
                [
                    'title'       => 'Ensure dokan_get_seller_id_by_order filter is always taking effect',
                    'description' => '',
                ],
                [
                    'title'       => 'Make dokan vendor dashboard responsive',
                    'description' => '',
                ],
                [
                    'title'       => 'Show admin notice stating WooCommerce is required if not found on dokan installation',
                    'description' => '',
                ],
                [
                    'title'       => 'Add hook after creating and updating object via dokan REST API',
                    'description' => '',
                ],
                [
                    'title'       => 'Add dokan_ensure_vendor_coupon filter while ensuring vendor coupon restriction',
                    'description' => '',
                ],
                [
                    'title'       => 'Add updater class to fix banner issue where store settings and listing template was overridden',
                    'description' => '',
                ],
                [
                    'title'       => 'Add filter hook while fetching vendor products',
                    'description' => '',
                ],
                [
                    'title'       => 'Add define method to define plugin constants',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.15',
        'released' => '2019-05-08',
        'changes'  => [
            'Fix'   => [
                [
                    'title'       => 'Vendor banner is not showing in the backend edit user profile page',
                    'description' => '',
                ],
                [
                    'title'       => 'Add filter to allow or skip nonce checking while registering new user',
                    'description' => '',
                ],
            ],
            'Tweak' => [
                [
                    'title'       => 'Update appsero SDK',
                    'description' => '',
                ],
            ],
        ],
    ],
    [
        'version'  => 'Version 2.9.14',
        'released' => '2019-04-26',
        'changes'  => [
            'Fix' => [
                [
                    'title'       => 'Schedule product price not showing correctly',
                    'description' => '',
                ],
                [
                    'title'       => 'Backward compatibility for banner and store time',
                    'description' => '',
                ],
            ],
        ],
    ],
];
