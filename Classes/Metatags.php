<?php

use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Generate the Metatags
 * @package addthis
 */
class Tx_Addthis_Metatags {
    /**
     * @var Tx_Addthis_Config
     */
    private $config;

	/**
	 * @var PageRenderer
	 */
	private $pageRenderer;

    /**
     * @param Tx_Addthis_Config $config
     */
    public function __construct(Tx_Addthis_Config $config) {
        $this->config = $config;
		$this->pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
    }

    /**
	 * @param string $key
	 * @param string $value
	 */
	public function addTag($key,$value){
        if ($this->config->getDoctype() === Tx_Addthis_Config::DOCTYPE_XHTML) {
            $tag = '<meta property="'.$key.'" content="'.$value.'"/>';
        } else {
            $tag = '<meta property="'.$key.'" content="'.$value.'">';
        }
		$this->pageRenderer->addMetaTag( $tag );
	}

	/**
	 * @param string $image
	 * @param string $baseUri
	 * @param string $path
	 */
	public function addThumbnail($image,$baseUri,$path='uploads/tx_addthis/'){
		$path = $baseUri . $path . $image;
		$this->addTag('og:image',$path);
	}

	/**
	 * @param string $title
	 */
	public function addTitle($title) {
		$this->addTag('og:title',$title);
	}

	/**
	 * @param string $description
	 */
	public function addDescription($description) {
		$this->addTag('og:description', $description);
	}
}
