<?php

declare(strict_types=1);

use Isolated\Symfony\Component\Finder\Finder;

$excludedFiles = array();

return array(
	'prefix'                  => 'BitPayVendor',
	'finders'                 => array(
		Finder::create()->files()->in( 'BitPayLib' ),
		Finder::create()->files()->in( 'vendor' )
			->ignoreVCS( true )
			->notName( '/LICENSE|.*\\.md|.*\\.dist|Makefile|composer\\.json|composer\\.lock/' )
			->exclude(
				array(
					'humbug',
				)
			),
		Finder::create()->append(
			array(
				'composer.json',
			)
		),
	),
	'exclude-files'           => array(
		...$excludedFiles,
	),
	'patchers'                => array(
		static function ( string $filePath, string $prefix, string $contents ): string {
			return $contents;
		},
	),
	'exclude-namespaces'      => array(
		'Humbug\PhpScoper',
		'PHP_CodeSniffer',
		'PHPCSUtils',
	),
	'exclude-classes'         => array(
		'WC',
		'WC_Payment_Gateway',
		'WP_User',
		'WC_Order',
		'WP_REST_Request',
		'WC_Admin_Settings',
		'Automattic\WooCommerce\Blocks\Package',
		'Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry',
		'Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType',
		'wpdb',
	),
	'exclude-functions'       => array(),
	'exclude-constants'       => array(),
	'expose-global-constants' => true,
	'expose-global-classes'   => true,
	'expose-global-functions' => true,
	'expose-namespaces'       => array(),
	'expose-classes'          => array(),
	'expose-functions'        => array(),
	'expose-constants'        => array(),
);
