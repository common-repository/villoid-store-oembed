<?php

class oEmbedVilloid {

  var $shopv_oembed_endpoint;
  var $shopv_oembed_format;
  var $villoid_oembed_endpoint;
  var $villoid_oembed_format;

  function __construct()
  {
    # production
    # deprecated
    $this->shopv_oembed_format = '#https?://[a-zA-Z0-9-]{2,63}\\.shopv\\.co/.*#i';
    $this->shopv_oembed_endpoint = 'https://shopv.co/default/oembed/';
    $this->villoid_oembed_format = '#https?://[a-zA-Z0-9-]{2,63}\\.villoid\\.com/.*#i';
    # end deprecated
    $this->villoid_oembed_endpoint = 'https://villoid.com/default/oembed/';
    $this->villoid_oembed_store_path_format = 'https://villoid.com/*i';
    # staging
    # deprecated
    $this->shopv_staging_oembed_format = '#https?://[a-zA-Z0-9-]{2,63}\\.staging\\.shopv\\.co/.*#i';
    $this->shopv_staging_oembed_endpoint = 'https://staging.shopv.co/default/oembed/';
    $this->villoid_staging_oembed_format = '#https?://[a-zA-Z0-9-]{2,63}\\.staging\\.villoid\\.com/.*#i';
    # end deprecated
    $this->villoid_staging_oembed_endpoint = 'https://staging.villoid.com/default/oembed/';
    $this->villoid_staging_oembed_store_path_format = 'https://staging.villoid.com/*';

    $this->new_oembed();
    $this->iframe_resizer_script();
  }

  function __destruct() {}

  function new_oembed()
  {
    # production
    # deprecated
    wp_oembed_add_provider( $this->shopv_oembed_format, $this->shopv_oembed_endpoint, true );
    wp_oembed_add_provider( $this->villoid_oembed_format, $this->villoid_oembed_endpoint, true );
    # end deprecated
    wp_oembed_add_provider( $this->villoid_oembed_store_path_format, $this->villoid_oembed_endpoint);

    # staging
    # deprecated
    wp_oembed_add_provider( $this->shopv_staging_oembed_format, $this->shopv_staging_oembed_endpoint, true );
    wp_oembed_add_provider( $this->villoid_staging_oembed_format, $this->villoid_staging_oembed_endpoint, true );
    # end deprecated
    wp_oembed_add_provider( $this->villoid_staging_oembed_store_path_format, $this->villoid_staging_oembed_endpoint);
  }

  function iframe_resizer_script()
  {
    wp_enqueue_script( 'iframeResizer',
        'https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.10/iframeResizer.min.js', false );
  }

}

$oembed_villoid = new oEmbedVilloid;
